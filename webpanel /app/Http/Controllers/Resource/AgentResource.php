<?php

namespace App\Http\Controllers\Resource;

use App\Agent;
use App\City;
use App\State;
use App\AgentCities;
use Log;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use Exception;
use Setting;
use App\WalletRequests;

class AgentResource extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('demo', ['only' => [ 'store', 'update', 'destroy']]);
        $this->middleware('permission:agent-list', ['only' => ['index']]);
        $this->middleware('permission:agent-create', ['only' => ['create','store']]);
        $this->middleware('permission:agent-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:agent-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::with('city')->orderBy('created_at' , 'desc')->get();

        return view('admin.agent.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::with('cities')->get();
        return view('admin.agent.create', compact('states'));
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
            'company' => 'required|max:255',
            'email' => 'required|unique:agents,email|email|max:255',
            'mobile' => 'digits_between:6,13',
            'logo' => 'mimes:jpeg,jpg,bmp,png|max:5242880',
            'password' => 'required|min:6|confirmed'
        ]);

        try{

            $agent = $request->all();
            $agent['password'] = bcrypt($request->password);
            if($request->hasFile('logo')) {
                $agent['logo'] = $request->logo->store('agent');
            }

            $agent = Agent::create($agent);
            
            //CADASTRA CIDADE NA TABELA AGENT_CITIES
            $city = City::where('id', $agent->city_id)->first();
            $estate = State::where('id', $city->state_id)->first();
            $AgentCitiesArr = ["agent_id" => $agent->id, "city_id" => $agent->city_id, "city_name" => $city->title , "estate_name" => $estate->letter];
            $AgentCities = AgentCities::where('city_id', $agent->city_id)->get()->count();
            if($AgentCities == 0){
                AgentCities::Create($AgentCitiesArr);
            }
            
            return back()->with('flash_success', trans('admin.agent_msgs.agent_saved'));

        }

        catch (Exception $e) {
            return back()->with('flash_error', trans('admin.agent_msgs.agent_not_found'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {

            $states = State::with('cities')->get();
            $agent = Agent::findOrFail($id);
            $stateId = State::whereHas('cities', function ($query) use ($agent) {
                $query->where('id', $agent->city_id);
            })->get()->first();

            return view('admin.agent.edit',compact('agent','states','stateId'));
        } catch (ModelNotFoundException $e) {
            return $e;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'city_id' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'company' => 'required|max:255',
            'mobile' => 'digits_between:6,13',
            'logo' => 'mimes:jpeg,jpg,bmp,png|max:5242880',
        ]);

        try {

            $agent = Agent::findOrFail($id);

            if($request->hasFile('logo')) {
                \Storage::delete($agent->logo);
                $agent->logo = $request->logo->store('agent');
            }

            $agent->city_id = $request->city_id;
            $agent->name = $request->name;
            $agent->company = $request->company;
            $agent->email = $request->email;
            $agent->mobile = $request->mobile;
            $agent->commission = $request->commission;
            if($request->password && !$request->password_confirm){
                return back()->with('flash_error', 'Por favor, informe a senha de confirmação!');
            }elseif($request->password && $request->password_confirm){
                if($request->password == $request->password_confirm){
                    $agent->password = bcrypt($request->password);
                }else{
                    return back()->with('flash_error', 'As senhas não conferem!');
                }
            }
            $agent->save();
            
            //CADASTRA CIDADE NA TABELA AGENT_CITIES
            $city = City::where('id', $agent->city_id)->first();
            $estate = State::where('id', $city->state_id)->first();
            $AgentCitiesArr = ["agent_id" => $agent->id, "city_id" => $agent->city_id, "city_name" => $city->title , "estate_name" => $estate->letter];
            $AgentCities = AgentCities::where('city_id', $agent->city_id)->get()->count();
            if($AgentCities == 0){
                AgentCities::Create($AgentCitiesArr);
            }

            return back()->with('flash_success', trans('admin.agent_msgs.agent_update'));
        }

        catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('admin.agent_msgs.agent_not_found'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $Agent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            $agent_request=WalletRequests::where('request_from','agent')->where('from_id',$id)->count();

            if($agent_request>0){
                return back()->with('flash_error', trans('admin.agent_msgs.agent_settlement'));
            }

            Agent::find($id)->delete();
            return back()->with('message', trans('admin.agent_msgs.agent_delete'));
        }
        catch (Exception $e) {
            return back()->with('flash_error', trans('admin.agent_msgs.agent_not_found'));
        }
    }

}
