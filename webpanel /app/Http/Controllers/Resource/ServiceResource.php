<?php

namespace App\Http\Controllers\Resource;

use App\Agent;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Setting;
use Exception;
use App\Helpers\Helper;

use App\ServiceType;
use App\ProviderService;
use App\PeakHour;
use App\ServicePeakHour;

class ServiceResource extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('demo', ['only' => [ 'store', 'update', 'destroy']]);
        $this->middleware('permission:service-types-list', ['only' => ['index']]);
        $this->middleware('permission:service-types-create', ['only' => ['create','store']]);
        $this->middleware('permission:service-types-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:service-types-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = ServiceType::with('childrenRecursive')->where('parent_id','=','0')->get();
        if($request->ajax()) {
            return $services;
        } else {
            return view('admin.service.index', compact('services'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->has('parent_id'))
        $services = ServiceType::where('id','=',$request->parent_id)->get();
        else
        $services['id'] = $request->parent_id;
        $Peakhour =  PeakHour::get();
        $agents = Agent::all();
        return view('admin.service.create', compact('services','Peakhour','agents','parent_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'fixed' => 'sometimes',
            'parent_id' => 'sometimes',
            'price' => 'sometimes|nullable',
            'minute' => 'sometimes|nullable',
            'type_price' => 'sometimes|nullable|numeric',
            'calculator' => 'in:FIXED,HOUR,DAILY,WEIGHT,DISTANCEHOUR,ESTIMATE,PSQFT,DEFAULT',
            'image' => 'mimes:ico,png',
            'marker' => 'mimes:ico,png',
        ]);

        try {
            $service = new ServiceType;

            $service->name = $request->name;
            $service->parent_id = $request->parent_id;
            $service->fixed = $request->fixed;
            $service->price = $request->price;
            $service->description = $request->description;
            $service->calculator = $request->calculator;
            $service->status = 1;


            if($request->hasFile('image')) {
                $service->image = Helper::upload_picture($request->image);
            }
            if($request->hasFile('marker')) {
                $service->marker = Helper::upload_picture($request->marker);
            }

            if(!empty($request->type_price))
                $service->type_price = $request->type_price;
            else
                $service->type_price = 0;

            $service->save();

            if($request->peak_price){

                foreach ($request->peak_price as $key => $value) {

                    if($request->peak_price[$key]>0){
                        $service_map = ServicePeakHour::create(['service_type_id'=>$service->id,'peak_hours_id'=>$key,'min_price'=>$request->peak_price[$key]]);
                    }

                }

            }
            return back()->with('flash_success', trans('admin.service_type_msgs.service_type_saved'));
        } catch (Exception $e) {
            dd("Exception", $e);
            return back()->with('flash_error', trans('admin.service_type_msgs.service_type_not_found'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return ServiceType::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('admin.service_type_msgs.service_type_not_found'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        try {

            $service = ServiceType::findOrFail($id);
            $agents = Agent::all();

            $Peakhour=PeakHour::with(['servicetimes' => function ($query) use ($id) {
                        $query->where('service_type_id', $id);
                        }])->get();

        /*  echo "<pre>";
            print_r($Peakhour->toArray());exit;*/

            return view('admin.service.edit',compact('service','Peakhour','agents'));
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('admin.service_type_msgs.service_type_not_found'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'fixed' => 'sometimes',
            'price' => 'sometimes|nullable',
            'minute' => 'sometimes|nullable',
            'type_price' => 'sometimes|nullable|numeric',
            'image' => 'mimes:ico,png',
            'marker' => 'mimes:ico,png'
        ]);

        try {

            $imgservice=ServiceType::find($id);

            if($request->hasFile('image')) {
                if($imgservice->image) {
                    Helper::delete_picture($imgservice->image);
                }
                $service['image'] = Helper::upload_picture($request->image);
            }
            if($request->hasFile('marker')) {
                if($imgservice->marker) {
                    Helper::delete_picture($imgservice->marker);
                }
                $service['marker'] = Helper::upload_picture($request->marker);
            }
            $service['name'] = $request->name;
            $service['fixed'] = $request->fixed;

            if(!empty($request->price))
                $service['price'] = $request->price;
            else
                $service['price']=0;

            if(!empty($request->type_price))
                $service['type_price'] = $request->type_price;
            else
                $service['type_price']=0;

            $service['calculator'] = $request->calculator;
            if(!empty($request->description))
                $service['description'] = $request->description;

            ServiceType::where('id', $id)->update($service);

            //update peakhours
            if($request->peak_price){

                foreach ($request->peak_price as $key => $value) {

                    if($value['status']==1){
                        //update price
                         if($value['id']){
                            $service_map = ServicePeakHour::where('service_type_id',$id)->where('peak_hours_id',$key)->update(['min_price'=>$value['id'] ]);
                         }
                         else{
                            //delete peakhours
                            ServicePeakHour::where('service_type_id',$id)->where('peak_hours_id',$key)->delete();
                         }
                    }
                    else{
                        if($value['id']){
                            //insert price
                            $service_map = ServicePeakHour::create(['service_type_id'=>$id,'peak_hours_id'=>$key,'min_price'=>$value['id']]);
                        }
                    }
                }

            }

            return back()->with('flash_success', trans('admin.service_type_msgs.service_type_update'));
        }

        catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('admin.service_type_msgs.service_type_not_found'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            $provider_service=ProviderService::where('service_type_id',$id)->count();
            if($provider_service>0){
                return back()->with('flash_error', trans('admin.service_type_msgs.service_type_using'));
            }

            ServiceType::find($id)->delete();
            ServicePeakHour::where('service_type_id',$id)->delete();

            return back()->with('flash_success', trans('admin.service_type_msgs.service_type_delete'));
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('admin.service_type_msgs.service_type_not_found'));
        } catch (Exception $e) {
            return back()->with('flash_error', trans('admin.service_type_msgs.service_type_not_found'));
        }
    }

    public function subService(Request $request, $id){
        $services = ServiceType::where('parent_id',$request->id)->get();
        if($request->ajax()){
            return $services;
        }
        return view('admin.service.sub_index', compact('services'));
    }
}
