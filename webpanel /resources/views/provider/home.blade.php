@extends('provider.layout.auth')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column">
            <div class="panel panel-default">
                <div class="panel-heading">Painel</div>

                <div class="panel-body">
                    Você está logado como @lang('admin.provider')!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
