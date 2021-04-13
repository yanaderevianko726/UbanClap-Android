@extends('admin.layout.base')

@section('title', 'Dashboard ')

@section('styles')

@endsection

@section('content')

      <div class="columns  is-variable is-desktop">
        {{-- <div class="column">
          <div class="card has-background-primary has-text-white">
            <div class="card-header">
              <div class="card-header-title has-text-white">
                {{__('admin.dashboard.cancel_count')}}
              </div>
            </div>
            <div class="card-content">
              <p class="is-size-3">{{$user_cancelled}}</p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card has-background-warning has-text-black">
            <div class="card-header">
              <div class="card-header-title has-text-black">
                {{__('admin.dashboard.provider_cancel_count')}}
              </div>
            </div>
            <div class="card-content">
              <p class="is-size-3">{{$provider_cancelled}}</p>
            </div>
          </div>
        </div> --}}
        <div class="column">
          <div class="card has-background-info has-text-white">
            <div class="card-header">
              <div class="card-header-title has-text-white">
                @lang('admin.dashboard.providers')
              </div>
            </div>
            <div class="card-content">
              <p class="is-size-3">{{$provider}}</p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card has-background-danger has-text-white">
            <div class="card-header">
              <div class="card-header-title has-text-white">@lang('admin.dashboard.user')</div>
            </div>
            <div class="card-content">
              <p class="is-size-3">{{$users}}</p>
            </div>
          </div>
      </div>
      <div class="column">
        <div class="card has-background-warning has-text-white">
          <div class="card-header">
            <div class="card-header-title has-text-white">@lang('admin.dashboard.Revenue')</div>
          </div>
          <div class="card-content">
            <p class="is-size-3">{{currency($revenue)}}</p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card has-background-info has-text-white">
          <div class="card-header">
            <div class="card-header-title has-text-white">@lang('admin.dashboard.Rides')</div>
          </div>
          <div class="card-content">
            <p class="is-size-3">@if (!is_null($totalRides))
              {{$totalRides}}
          @endif</p>
          </div>
        </div>
      </div>
    </div>
      <div class="columns is-variable is-full">
        <div class="column is-4-desktop is-6-tablet">
          <article class="message is-info">
            <div class="message-header">
              <p>@lang('admin.dashboard.wallet_summary')</p>
            </div>
              <table class="table is-fullwidth is-striped">
                <tbody>
                @php($total=$wallet['admin'])
                <tr>
                    <th scope="column">@lang('admin.dashboard.wallet_summary_admin_credit')</th>
                    <td class="text-success">{{currency($wallet['admin'])}}</td>
                </tr>
                <tr>
                    <th scope="column">@lang('admin.dashboard.wallet_summary_provider_credit')</th>
                    @if($wallet['provider_credit'])
                        @php($total=$total-$wallet['provider_credit'][0]['total_credit'])
                        <td class="text-success">{{currency($wallet['provider_credit'][0]['total_credit'])}}</td>
                    @else
                        <td class="text-success">{{currency()}}</td>
                    @endif
                </tr>

                <tr>
                    <th scope="column">@lang('admin.dashboard.wallet_summary_provider_debit')</th>
                    @if($wallet['provider_debit'])

                        <td class="text-danger">{{currency($wallet['provider_debit'][0]['total_debit'])}}</td>
                    @else
                        <td class="text-danger">{{currency()}}</td>
                    @endif
                </tr>
                <tr>
                    <th scope="column">@lang('admin.dashboard.wallet_summary_commission')</th>
                    <td class="text-success">{{currency($wallet['admin_commission'])}}</td>
                </tr>
                {{--  <tr>
                    <th scope="column">@lang('admin.dashboard.wallet_summary_peak_commission')</th>
                    <td class="text-success">{{currency($wallet['peak_commission'])}}</td>
                </tr>
                <tr>
                    <th scope="column">@lang('admin.dashboard.wallet_summary_waitining_commission')</th>
                    <td class="text-success">{{currency($wallet['waiting_commission'])}}</td>
                </tr>
                <tr>
                    <th scope="column">@lang('admin.dashboard.wallet_summary_discount')</th>
                    <td class="text-danger">{{currency($wallet['admin_discount'])}}</td>
                </tr>
                <tr>
                    @php($total=$total-($wallet['admin_tax']))
                    <th scope="column">@lang('admin.dashboard.wallet_summary_tax_amount')</th>
                    <td class="text-success">{{currency($wallet['admin_tax'])}}</td>
                </tr>

                <tr>
                    <th scope="column">@lang('admin.dashboard.wallet_summary_tips')</th>
                    <td class="text-danger">{{currency($wallet['tips'])}}</td>
                </tr>

                <tr>
                    <th scope="column">@lang('admin.dashboard.wallet_summary_referrals')</th>
                    <td class="text-danger">{{currency($wallet['admin_referral'])}}</td>
                </tr>

                <tr>
                    <th scope="column">@lang('admin.dashboard.wallet_summary_disputes')</th>
                    <td class="text-danger">{{currency($wallet['admin_dispute'])}}</td>
                </tr>  --}}

                <!--                             <tr>
                <th scope="column text-right">@lang('admin.dashboard.wallet_summary_total')</th>
                <td>{{currency($total)}}</td>
            </tr> -->
                </tbody>
            </table>
            
          </article>
        </div>
        <div class="column is-8-desktop is-6-tablet">
          <article class="message is-success">
            <div class="message-header">
              <p>@lang('admin.dashboard.Recent_Rides')</p>
            </div>
              <table class="table is-fullwidth is-striped is-scrollable">
                <tbody>
                    @forelse($rides as $index => $ride)
                        <tr>
                            <th scope="column">{{$index + 1}}</th>
                            <td>{{$ride->user->first_name}} {{$ride->user->last_name}}</td>
                            <td>
                                <a class="text-primary"
                                    href="{{route('admin.requests.show',$ride->id)}}"><span
                                            class="underline">@lang('admin.dashboard.View_Ride_Details')</span></a>
                            </td>
                            <td>
                                <span class="text-muted">{{$ride->created_at->diffForHumans()}}</span>
                            </td>
                            <td>
                                @if($ride->status == "COMPLETED")
                                    <span class="tag tag-success">COMPLETED</span>
                                @elseif($ride->status == "CANCELLED")
                                    <span class="tag tag-danger">CANCELLED</span>
                                @elseif($ride->status == "ARRIVED")
                                    <span class="tag tag-info">ARRIVED</span>
                                @elseif($ride->status == "SEARCHING")
                                    <span class="tag tag-info">SEARCHING</span>
                                @elseif($ride->status == "ACCEPTED")
                                    <span class="tag tag-info">ACCEPTED</span>
                                @elseif($ride->status == "STARTED")
                                    <span class="tag tag-info">STARTED</span>
                                @elseif($ride->status == "DROPPED")
                                    <span class="tag tag-info">BILLING</span>
                                @elseif($ride->status == "PICKEDUP")
                                    <span class="tag tag-info">ONGOING</span>
                                @elseif($ride->status == "SCHEDULED")
                                    <span class="tag tag-info">SCHEDULED</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                          <th>No Data
                          </th>
                      </tr>
                        @endforelse
                </tbody>
            </table>
            
          </article>
        </div>
      </div>

@endsection

@section('scripts')

    {{-- <script type="text/javascript">

        var _registration = null;
        var rota = "{{ route('admin.dashboard') }}";

        $('#city').on("change", function () {
            if($(this).val() === ""){
                window.location.href = rota;
            }else{
               window.location.href = rota + "?city="+$(this).val(); 
            }
           
        });

        function registerServiceWorker() {
            return navigator.serviceWorker.register("{{ asset('js/service-worker.js') }}")
                .then(function (registration) {
                    _registration = registration;
                    return registration;
                })
                .catch(function (err) {
                    console.error('Unable to register service worker.', err);
                });
        }

        function askPermission() {
            return new Promise(function (resolve, reject) {
                const permissionResult = Notification.requestPermission(function (result) {
                    resolve(result);
                });

                if (permissionResult) {
                    permissionResult.then(resolve, reject);
                }
            })
                .then(function (permissionResult) {
                    if (permissionResult !== 'granted') {
                        throw new Error('We weren\'t granted permission.');
                    } else {
                        subscribeUserToPush();
                    }
                });
        }

        function urlBase64ToUint8Array(base64String) {
            const padding = '='.repeat((4 - base64String.length % 4) % 4);
            const base64 = (base64String + padding)
                .replace(/\-/g, '+')
                .replace(/_/g, '/');

            const rawData = window.atob(base64);
            //const rawData = new Blob([base64], {type: 'text/plain'})
            const outputArray = new Uint8Array(rawData.length);

            for (let i = 0; i < rawData.length; ++i) {
                outputArray[i] = rawData.charCodeAt(i);
            }
            return outputArray;
        }

        function getSWRegistration() {
            return new Promise(function (resolve, reject) {
                if (_registration != null) {
                    resolve(_registration);
                } else {
                    reject(Error("It broke"));
                }
            });
        }

        function subscribeUserToPush() {
            getSWRegistration()
                .then(function (registration) {
                    const subscribeOptions = {
                        userVisibleOnly: true,
                        applicationServerKey: urlBase64ToUint8Array('BCBsViMBVOOYATOaY4AjZOl1XCwiBqXbQtMcp4RXRmyfR927SqcCUt2SYwiF3iy3yxf3n60jVf8XF9vDE2ShVtM')
                    };
                    return registration.pushManager.subscribe(subscribeOptions);

                })
                .then(function (pushSubscription) {
                    sendSubscriptionToBackEnd(pushSubscription);
                    return pushSubscription;
                });
        }

        function sendSubscriptionToBackEnd(subscription) {
            $.ajax({
                url: "/save-subscription/{{Auth::user()->id}}/admin",
                headers: {'Content-Type': 'application/json'},
                type: 'post',
                data: JSON.stringify(subscription),
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                }
            });
        }


        registerServiceWorker();

        askPermission();

    </script> --}}

@endsection
