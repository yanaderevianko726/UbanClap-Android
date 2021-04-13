@extends('admin.layout.base')

@section('title',  __('admin.provider') )
@section('styles')
<link rel="stylesheet" href="{{asset('asset/css/intlTelInput.css')}}">
@endsection
@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="{{ URL::previous() }}" class="button is-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

            <h5 style="margin-bottom: 2em;">@lang('admin.provides.add_provider')</h5>

            <form  action="{{route('admin.provider.store')}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                
                <div class="field">
                    <label for="first_name" class="column label">@lang('admin.first_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ old('first_name') }}" name="first_name" required id="first_name" placeholder="@lang('admin.first_name')">
                    </div>
                </div>

                <div class="field">
                    <label for="last_name" class="column label">@lang('admin.last_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ old('last_name') }}" name="last_name" required id="last_name" placeholder="@lang('admin.last_name')">
                    </div>
                </div>


                <div class="field">
                    <label for="email" class="column label">@lang('admin.email')</label>
                    <div class="control">
                        <input  class="input" type="email" required name="email" value="{{old('email')}}" id="email" placeholder="@lang('admin.email')">
                    </div>
                </div>

                <div class="field">
                    <label for="password" class="column label">@lang('admin.password')</label>
                    <div class="control">
                        <input  class="input" type="password" name="password" id="password" placeholder="@lang('admin.password')">
                    </div>
                </div>

                <div class="field">
                    <label for="password_confirmation" class="column label">@lang('admin.provides.password_confirmation')</label>
                    <div class="control">
                        <input  class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder="@lang('admin.provides.password_confirmation')">
                    </div>
                </div>

                <div class="field">
                    <label for="picture" class="column label">@lang('admin.picture')</label>
                    <div class="control">
                        <input type="file" accept="image/*" name="avatar" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="field">
                    <label for="country_code" class="column label">Country Code</label>
                    <div class="control">
                        <input type="text" name="country_code" value="+60" style ="padding-bottom:5px;" class="country-name" id="country_code" >
                    </div>
                </div>
                <div class="field">
                    <label for="mobile" class="column label">@lang('admin.mobile')</label>
                    <div class="control">
                        <input  class="input" type="number" value="{{ old('mobile') }}" name="mobile" required id="mobile" placeholder="@lang('admin.mobile')">
                    </div>
                </div>


                <div class="field">
                    <label for="zipcode" class="column label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">Create</button>
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
    //                $('#cities').append('<option value=' + value.id + '>' + value.title + '</option>');
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