@extends('admin.layout.base')

@section('title', __('admin.dispute.add_dispute'))

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="{{route('admin.dispute.store')}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}            	

                <div class="field">
                    <label for="dispute_type" class="label">@lang('admin.dispute.dispute_type')</label>
                    <div class="control">
                        <select name="dispute_type" class="input">
                            <option value="">Select</option>
                            <option value="user">@lang('admin.user')</option>
                            <option value="provider">@lang('admin.provider')</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="dispute_name" class="label">@lang('admin.dispute.dispute_name')</label>
                    <div class="control">
                        <input  class="input" autocomplete="off"  type="text" value="{{ old('dispute_name') }}" name="dispute_name" required id="dispute_name" placeholder="@lang('admin.dispute.dispute_name')">
                    </div>
                </div>

                <div class="field">
                    <label for="dispute_status" class="label">@lang('admin.dispute.dispute_status')</label>
                    <div class="control">
                        <select name="dispute_status" class="input">
                            <option value="">Select</option>
                            <option value="active">@lang('admin.active')</option>
                            <option value="inactive">@lang('admin.inactive')</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.dispute.add_dispute')</button>
                        <a href="{{route('admin.dispute.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
