@extends('fleet.layout.base')

@section('title', __('admin.provides.type_allocation'))

@section('content')
<!-- Alterado por Allan -->
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h4 class="mb-1">@lang('admin.provides.type_allocation')</h4>
            <h5>@lang('admin.provider'): <b>{{ $Provider->first_name }} {{ $Provider->last_name }}</b> </h5>
            @if($Provider->status == 'approved')
            <a style="margin-left: 1em;margin-top: -30px" class="button  is-danger is-link pull-right" href="{{ route('admin.provider.disapprove', $Provider->id ) }}"><i class="fa fa-power-off"></i> Disable @lang('admin.provider')</a>
            @else
            <a style="margin-left: 1em;margin-top: -30px" class="button is-success pull-right" href="{{ route('admin.provider.approve', $Provider->id ) }}"><i class="fa fa-check"></i> Aprove @lang('admin.provider')</a>
            @endif
            <a href="{{$backurl}}" style="margin-left: 1em;margin-top: -30px"
               class="button is-link pull-right"><i class="fa fa-arrow-left"></i> @lang('admin.back')</a>
            <div class="columns">
                <div class="column">
                    @if($ProviderService->count() > 0)
                    <hr><h6>Serviços Atribuídos:  </h6>
                    <table class="table is-striped is-bordered dataTable">
                        <thead>
                            <tr>
                                <th>@lang('admin.provides.service_name')</th>
                                <th>@lang('admin.provides.service_number')</th>
                                <th>@lang('admin.provides.service_model')</th>
                                <th>@lang('admin.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ProviderService as $service)
                            <tr>
                                <td>{{ $service->service_type->name }}</td>
                                <td>{{ $service->service_number }}</td>
                                <td>{{ $service->service_model }}</td>
                                <td>
                                    @if( Setting::get('demo_mode', 0) == 0)
                                    <form action="{{ route('fleet.provider.document.service', [$Provider->id, $service->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="button  is-danger is-link btn-large btn-block">Delete</a>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>@lang('admin.provides.service_name')</th>
                                <th>@lang('admin.provides.service_number')</th>
                                <th>@lang('admin.provides.service_model')</th>
                                <th>@lang('admin.action')</th>
                            </tr>
                        </tfoot>
                    </table>
                    @endif
                    <hr>
                </div>
                
                <div class="column"><h3 style="margin-bottom: 5px; font-size: 15px;">Atualizar Serviço</h3></div>
                <form action="{{ route('admin.provider.document.store', $Provider->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" required name="method" value="update">
                    <div class="column is-3">
                        <select class="form-control input" name="service_type" required>
                            @forelse($ServiceTypes as $Type)
                            <option value="{{ $Type->id }}">{{ $Type->name }}</option>
                            @empty
                            <option>- @lang('admin.service_select') -</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="column is-3">
                        <input type="text" required name="service_number" class="input" placeholder="Número/Placa (jss-0000)">
                    </div>
                    <div class="column is-3">
                        <input type="text" required name="service_model" class="input" placeholder="Modelo (Siena Sedan - Branco)">
                    </div>
                    @if( Setting::get('demo_mode', 0) == 0)
                    <div class="column is-3">
                        <button class="button is-link btn-block" type="submit">Atualizar</button>
                    </div>
                    @endif
                </form>

                <br>

                <div class="column" style="margin-top: 30px;"><h3 style="margin-bottom: 5px; font-size: 15px;">Add Serviço</h3></div>
                <form action="{{ route('admin.provider.document.store', $Provider->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" required name="method" value="create">
                    <div class="column is-3">
                        <select class="form-control input" name="service_type" required>
                            @forelse($ServiceTypes as $Type)
                            <option value="{{ $Type->id }}">{{ $Type->name }}</option>
                            @empty
                            <option>- @lang('admin.service_select') -</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="column is-3">
                        <input type="text" required name="service_number" class="input" placeholder="Número/Placa (jss-0000)">
                    </div>
                    <div class="column is-3">
                        <input type="text" required name="service_model" class="input" placeholder="Modelo (Siena Sedan - Branco)">
                    </div>
                    @if( Setting::get('demo_mode', 0) == 0)
                    <div class="column is-3">
                        <button class="button is-success btn-block" type="submit">Add</button>
                    </div>
                    @endif
                </form>
                
            </div>
        </div>

        <div class="box box-block bg-white">
            <h5 class="mb-1">
                @lang('admin.provides.provider_documents')
                @if($Provider->status != 'approved')
                    @if($Provider->documents->count() >= 1 && $Provider->documents->last()->status == "ACTIVE")
                        <a class="button is-success btn-block"
                           href="{{ route('fleet.provider.approve', $Provider->id ) }}">Aprove</a>
                    @endif
                @endcan
            </h5>
            <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('admin.provides.document_type')</th>
                        <th>@lang('admin.status')</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Provider->documents as $Index => $Document)
                    <tr>
                        <td>{{ $Index + 1 }}</td>
                        <td>@if($Document->document){{ $Document->document->name }}@endif</td>
                        <td>@if($Document->status == "ACTIVE"){{ "APROVADO" }}@else {{ "AVALIAÇÃO PENDENTE" }} @endif</td>
                        <td>
                            <div class="input-group-btn">
                                @if( Setting::get('demo_mode', 0) == 0)
                                <a href="{{ route('fleet.provider.document.edit', [$Provider->id, $Document->id]) }}"><span class="button is-success btn-large">@lang('admin.view')</span></a>
                                <button class="button  is-danger is-link btn-large doc-delete" id="{{$Document->id}}">@lang('admin.delete')</button>
                                <form action="{{ route('fleet.provider.document.destroy', [$Provider->id, $Document->id]) }}" method="POST" id="form_delete_{{$Document->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>@lang('admin.provides.document_type')</th>
                        <th>@lang('admin.status')</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </tfoot>
</table>
</div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(".doc-delete").on('click', function(){
        var doc_id=$(this).attr('id');
        $("#form_delete_"+doc_id).submit();
    });
</script>
@endsection
