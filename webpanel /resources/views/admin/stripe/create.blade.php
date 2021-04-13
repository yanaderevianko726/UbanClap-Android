@extends('admin.layout.base')

@section('title', "Stripe Plan")

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="{{route('admin.stripe.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="field">
                    <label for="name" class="label">Name</label>
                    <div class="column">
                        <input  class="input" type="text" value="{{ old('name') }}" name="name" required id="name" placeholder="name">
                    </div>
                </div>

                <div class="field">
                    <label for="amount" class="label">@lang('admin.service.Service_Name')</label>
                    <div class="column">
                        <input  class="input" type="number" value="{{ old('amount') }}" name="amount" required id="amount" placeholder="amount">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <div class="columns">
                            <div class="column col-sm-6 col-md-3">
                                <button type="submit" class="button is-link btn-block">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
