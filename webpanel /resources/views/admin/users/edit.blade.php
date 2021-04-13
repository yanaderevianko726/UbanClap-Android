@extends('admin.layout.base')

@section('title', 'Add '.__('admin.user'))
@section('styles')
    <link rel="stylesheet" href="{{asset('asset/css/intlTelInput.css')}}">
@endsection
@section('content')

    <!-- edit page -->
    <div class="content-area py-1">
        <div class="container-fluid">
            <div class="box box-block bg-white">

                <form  action="{{route('admin.user.update', $user->id )}}" method="POST"
                      enctype="multipart/form-data" role="form">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">

                    <div class="field">
                        <label for="first_name" class="label">@lang('admin.users.first_name')</label>
                        <div class="control">
                            <input  class="input" type="text" value="{{ $user->first_name }}" name="first_name"
                                   required id="first_name" placeholder="@lang('admin.users.first_name')">
                        </div>
                    </div>

                    <div class="field">
                        <label for="last_name" class="label">@lang('admin.users.last_name')</label>
                        <div class="control">
                            <input  class="input" type="text" value="{{ $user->last_name }}" name="last_name"
                                   required id="last_name" placeholder="@lang('admin.users.last_name')">
                        </div>
                    </div>

                    <div class="field">

                        <label for="picture" class="label">@lang('admin.users.picture')</label>
                        <div class="control">
                            @if(isset($user->picture))
                                <img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="{{img($user->picture)}}">
                            @endif
                            <input type="file" accept="image/*" name="picture" class="dropify form-control-file"
                                   id="picture" aria-describedby="fileHelp">
                        </div>
                    </div>

                    <div class="field">
                        <label for="country_code"
                               class="label">@lang('admin.users.country_code')</label>
                        <div class="control">
                            <input class="input" type="text" name="country_code" style="padding-bottom:5px;" class="country-name"
                                   id="country_code" value="{{ $user->country_code }}">
                        </div>
                    </div>

                    <div class="field">
                        <label for="mobile" class="label">@lang('admin.users.mobile')</label>
                        <div class="control">
                            <input  class="input" type="number" value="{{ $user->mobile }}" name="mobile" required
                                   id="mobile" placeholder="@lang('admin.users.mobile')">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password:</label>
                        <div class="control">
                            <input type="password" class="input" name="password">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Confirm Password:</label>
                        <div class="control">
                            <input type="password" class="input" name="password_confirm">
                        </div>
                    </div>

                    <div class="field">
                        <label for="zipcode" class="label"></label>
                        <div class="control">
                            <button type="submit" class="button is-link">@lang('admin.users.update_user')</button>
                            <a href="{{route('admin.user.index')}}" class="button is-default">@lang('admin.cancel')</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('asset/js/intlTelInput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/intlTelInput-jquery.min.js') }}"></script>
    <script type="text/javascript">
        
        //For mobile number with date
        var input = document.querySelector("#country_code");
        window.intlTelInput(input, ({
            // separateDialCode:true,
        }));
        $(".country-name").click(function () {
            var myVar = $(this).closest('.country').find(".dial-code").text();
            $('#country_code').val(myVar);
        });
    </script>
@endsection
