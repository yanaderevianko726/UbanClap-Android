@extends('admin.layout.base')

@section('title', __('admin.provides.update_provider'))
@section('styles')
<link rel="stylesheet" href="{{asset('asset/css/intlTelInput.css')}}">
@endsection
@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="{{ URL::previous() }}" class="button is-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

            <h5 style="margin-bottom: 2em;"></h5>

            <form  action="{{route('admin.provider.update', $provider->id )}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH">

                <div class="field">
                    <label for="first_name" class="label">@lang('admin.first_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $provider->first_name }}" name="first_name" required id="first_name" placeholder="First Name">
                    </div>
                </div>

                <div class="field">
                    <label for="last_name" class="label">@lang('admin.last_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $provider->last_name }}" name="last_name" required id="last_name" placeholder="Last Name">
                    </div>
                </div>
                

                <div class="field">
                    <label for="email" class="column label">@lang('admin.email')</label>
                    <div class="control">
                        <input  class="input" type="email" required name="email" value="{{ $provider->email }}" id="email" placeholder="@lang('admin.email')">
                    </div>
                </div>

                <div class="field">
                    
                    <label for="picture" class="label">@lang('admin.picture')</label>
                    <div class="control">
                    @if(isset($provider->avatar))
                        <img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="{{img($provider->avatar)}}">
                    @endif
                        <input type="file" accept="image/*" name="avatar" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="field">
                    <label for="country_code" class="label">Country code
                    </label>
                    <div class="control">
                    <input type="text" name="country_code" style ="padding-bottom:5px;" id="country_code" class="country-name"  value="{{ $provider->country_code}}" >
                    </div>
                </div>
                <div class="field">
                    <label for="mobile" class="label">@lang('admin.mobile')</label>
                    <div class="control">
                        <input  class="input" type="number" value="{{ $provider->mobile }}" name="mobile" required id="mobile" placeholder="Mobile">
                    </div>
                </div>
                
                <div class="field">
                    <label class="label">@lang('admin.password')</label>
                    <div class="control">
                        <input type="password" class="control" name="password" placeholder="@lang('admin.password')">
                    </div>
                </div>

                <div class="field">
                    <label class="label">@lang('admin.account-manager.password_confirmation')</label>
                    <div class="control">
                        <input type="password" class="control" name="password_confirm" placeholder="@lang('admin.account-manager.password_confirmation')">
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.provides.update_provider')</button>
                        <a href="{{route('admin.provider.index')}}" class="button is-default">@lang('admin.cancel')</a>
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
    //    var input = document.querySelector("#country_code");

    //    var states = $('#states');
    //    var providerCity = "{{ $provider->city_id }}";

    //    states.change(function () {
    //        var idEstado = $(this).val();
    //        $.get('/admin/cities/' + idEstado, function (cidades) {
    //            $('#cities').empty();
    //            $.each(cidades, function (key, value) {
    //                $('#cities').append('<option value=' + value.id + '>' + value.title + '</option>');
    //            });
    //        });
    //    });

    //    if(states.val() != null){
    //        $.get('/admin/cities/' + states.val(), function (cidades) {
    //            $('#cities').empty();
    //            $.each(cidades, function (key, value) {
    //                if(value.id == providerCity){
    //                    $('#cities').append('<option value=' + value.id + ' selected>' + value.title + '</option>');
    //                }else{
    //                    $('#cities').append('<option value=' + value.id + '>' + value.title + '</option>');
    //                }
    //            });
    //        });
    //    }

    //    window.intlTelInput(input,({
    //        // separateDialCode:true,
    //    }));
    //    $(".country-name").click(function(){
    //        var myVar = $(this).closest('.country').find(".dial-code").text();
    //        $('#country_code').val(myVar);
    //     });
		</script>
@endsection