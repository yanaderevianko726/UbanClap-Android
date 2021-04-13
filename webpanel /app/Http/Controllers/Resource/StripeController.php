<?php

namespace App\Http\Controllers\Resource;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Stripe\Subscription;
use Stripe\Product;


class StripeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //\Stripe\Stripe::setApiKey('sk_test_UooZBWk1siShCS7RPfkOheMe');
        \Stripe\Stripe::setApiKey(config('constants.stripe_secret_key', ''));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $plans = \Stripe\Plan::all();
        //$products = \Stripe\Product::all();
        $subs = \Stripe\Subscription::all();
        if($request->ajax()) {
            return $subs;
        } else {
            return view('admin.stripe.index', compact('plans','subs'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.stripe.create');
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
            'amount' => 'sometimes',
        ]);

        try {
            \Stripe\Plan::create([
                'amount' => $request->amount * 100,
                'currency' => config('constants.stripe_currency'),
                'interval' => 'month',
                'nickname' => $request->name,
                'product' => ['name' => $request->name],
              ]);
            return back()->with('flash_success', "Plan created");
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
            return \Stripe\Plan::retrieve($id);
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
            $service = \Stripe\Plan::retrieve($id);
            return view('admin.stripe.edit',compact('service'));
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
            'amount' => 'sometimes',
        ]);

        try {

            \Stripe\Plan::update(
                $request->id,
                ['metadata' => [
                    'amount' => $request->amount * 100,
                    'nickname' => $request->name,
                    ]]
              );

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
            $plan = \Stripe\Plan::retrieve($id);
              $plan->delete();

            return back()->with('flash_success', trans('admin.service_type_msgs.service_type_delete'));
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('admin.service_type_msgs.service_type_not_found'));
        } catch (Exception $e) {
            return back()->with('flash_error', trans('admin.service_type_msgs.service_type_not_found'));
        }
    }
}
