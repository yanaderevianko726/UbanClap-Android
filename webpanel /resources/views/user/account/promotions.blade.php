@extends('user.layout.base')

@section('title', 'Promotion')

@section('content')

<div class="column is-9">
    <div class="dash-content">
        <div class="columns no-margin">
            <div class="column">
                <h4 class="page-title">@lang('user.promotion')</h4>
            </div>
        </div>
        @include('common.notify')
        <div class="columns no-margin payment">
            <div class="column">
                <h5 class="btm-border"><strong>Cupons de desconto/presente</strong> <a href="#" class="sub-right pull-right" data-toggle="modal" data-target="#add-promotion-modal">@lang('user.add_promocode')</a></h5>

                @forelse($promocodes as $promo)
                <div class="pay-option">
                    <h6>
                        <img src="{{asset('asset/img/low-cost.png')}}"> {{$promo->promocode->promo_code}}
                        <a href="#" class="default">{{$promo->status}}</a>
                    </h6>
                </div>
                @empty
                <div class="pay-option">
                    <h6 class="text-center">Nenhuma promoção aplicada.</h6>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

<div id="add-promotion-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">@lang('user.add_promocode')</h4>
            </div>
            <form id="payment-form" action="{{ route('promocodes.store') }}" method="POST" >
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="columns no-margin" id="card-payment">
                        <div class="field column col-sm-12">
                            <label>Promocode</label>
                            <input autocomplete="off" name="promocode" required type="text" class="input" placeholder="@lang('user.add_promocode')">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="button is-default">@lang('user.add_promocode')</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection