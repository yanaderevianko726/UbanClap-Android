@extends('user.layout.base')

@section('title', 'Payment')

@section('content')

<div class="column is-9">
    <div class="dash-content">
        <div class="columns no-margin">
            <div class="column">
                <h4 class="page-title">@lang('user.referral')</h4>
            </div>
        </div>
        @include('common.notify')
        <div class="columns no-margin payment">
            <div class="column">
                <div class="wallet">
                    <div class="refer-box">
                        <h4>
                            Share your referral code:
                            <span class="txt">
                                @if(!empty(Auth::user()->referral_unique_id)){{Auth::user()->referral_unique_id}}@else - @endif
                            </span>
                        </h4>
                        <h4>
                            Reference Count:
                            <span class="txt">
                                @if(!empty($referrals[0]->total_count)){{$referrals[0]->total_count}}@else 0 @endif
                            </span>
                        </h4>
                        <h4>
                            References Value:
                            <span class="txt">
                                @if(!empty($referrals[0]->total_amount)){{$referrals[0]->total_amount}}@else 0 @endif
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">


                <div class="refer-box">
                    <h3> Refer your friends and earn up to 20% </h3>
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mass. </p>
                    <form>
                        <div class="clearfix form-columns">
                            <div class="field col-md-10">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="input" id="inviteEmail" aria-describedby="emailHelp" placeholder="Enter your E-mail">
                            </div>
                        </div>
                        <div class="form-columns clearfix">
                            <div class="field column">
                                <label for="exampleInputEmail1"></label>
                                <a id="invite" href="mailto:testmail?subject=I invite you to join the  {{config('constants.site_title','Thinkin Service')}}
                                &body=Hi,%0A%0A I participate on this App and thought you might like it. Use my referral code
                                ({{\Auth::user()->referral_unique_id}}) and make your registration.%0A%0A Site: 
                                {{url('/')}}/provider/login %0A Reference Code: {{\Auth::user()->referral_unique_id}}" 
                                class="button is-invite">Invite</a> 
                            </div>
                        </div>
                    </form>

                </div>
                <div class="refer-box">
                    <h3>Refer your friends from social networks</h3>
                    <div class="refer-social">
                        <div class="columns">
                            <div class="column">
                                <ul class="refersocial-icon">
                                    <li><a class="" target="_blank" href="https://www.facebook.com/share?url"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a class="" target="_blank" href="https://twitter.com/share?url"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i>
                                        </a></li>

                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">
    $('#invite').on('click', function (e) {
        e.preventDefault();
        var href = $('#invite').attr('href');
        var start = href.indexOf(":");
        var end = href.indexOf("?");
        var email = $('#inviteEmail').val();
        href.substr(start + 1, (end - start) - 1);
        var url = href.replace(href.substr(start + 1, (end - start) - 1), email);
        window.location = url;
    });
</script>
@endsection