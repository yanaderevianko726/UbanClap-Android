@extends('fleet.layout.base')

@section('title', 'Update Provider ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="{{ route('fleet.provider.index') }}" class="button is-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

            <h5 style="margin-bottom: 2em;">@lang('admin.provides.update_provider')</h5>

            <form  action="{{route('fleet.provider.update', $provider->id )}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="field">
                    <label for="first_name" class="label">@lang('admin.first_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $provider->first_name }}" name="first_name" required id="first_name" placeholder="@lang('admin.last_name')">
                    </div>
                </div>

                <div class="field">
                    <label for="last_name" class="label">@lang('admin.last_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $provider->last_name }}" name="last_name" required id="last_name" placeholder="@lang('admin.last_name')">
                    </div>
                </div>


                <div class="field">
                    
                    <label for="picture" class="label">@lang('admin.picture')</label>
                    <div class="control">
                    @if(isset($provider->picture))
                        <img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="{{$provider->picture}}">
                    @endif
                        <input type="file" accept="image/*" name="avatar" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="field">
                    <label for="mobile" class="label">@lang('admin.mobile')</label>
                    <div class="control">
                        <input  class="input" type="number" value="{{ $provider->mobile }}" name="mobile" required id="mobile" placeholder="@lang('admin.mobile')">
                    </div>
                </div>


                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.provides.update_provider')</button>
                        <a href="{{route('fleet.provider.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
