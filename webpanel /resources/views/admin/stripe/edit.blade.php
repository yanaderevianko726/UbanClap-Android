@extends('admin.layout.base')

@section('title', "Stripe Plan")

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="{{route('admin.stripe.update', $service->id )}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH">

                <div class="field">
                    <label for="name" class="label">@lang('admin.service.Service_Name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $service->nickname }}" name="name" required id="name" placeholder="name">
                    </div>
                </div>

                <div class="field">
                    <label for="name" class="label">@lang('admin.service.Service_Name')</label>
                    <div class="control">
                        <input  class="input" type="number" value="{{ $service->amount }}" name="amount" required id="amount" placeholder="amount">
                    </div>
                </div>
                <div class="field">
                    <div class="column col-sm-6 col-md-3">
                        <button type="submit" class="button is-link btn-block">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
