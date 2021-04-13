@extends('admin.layout.base')

@section('title', __('admin.provides.type_allocation'))

@section('content')
<!-- Alterado por Allan -->
    <div class="content-area py-1">
        <div class="container-fluid">
            @can('provider-services')
                <div class="box box-block bg-white">
                    <div class="columns">
                        <div class="column">
                    <h4 class="mb-1">@lang('admin.provides.type_allocation')</h4>
                    <h5>@lang('admin.provider'): <b>{{ $Provider->first_name }} {{ $Provider->last_name }}</b> </h5>
                    {{--  <p>Franquia: <b>{{  $ProviderFleet ? $ProviderFleet->name : 'N/A'  }}</b> </p>  --}}
                        </div>
                        <div class="column">
                    @can('provider-status')
                    @if($Provider->status == 'approved')
                    <a style="margin-left: 1em;" class="button  is-danger is-link pull-right" href="{{ route('admin.provider.disapprove', $Provider->id ) }}"><i class="fa fa-power-off"></i> Disable @lang('admin.provider')</a>
                    @else
                    <a style="margin-left: 1em;" class="button is-success pull-right" href="{{ route('admin.provider.approve', $Provider->id ) }}"><i class="fa fa-check"></i> Approve @lang('admin.provider')</a>
                    @endcan
                    @endif
                    <a href="{{$backurl}}" style="margin-left: 1em;"
                       class="button is-link pull-right"><i class="fa fa-arrow-left"></i> @lang('admin.back')</a>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            @if($ProviderService->count() > 0)
                                <hr><h6>Assigned Services: </h6>
                                <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                                    <thead>
                                    <tr>
                                        <th>@lang('admin.provides.service_name')</th>
                                        {{-- <th>@lang('admin.provides.service_number')</th>
                                        <th>@lang('admin.provides.service_model')</th> --}}
                                        <th>@lang('admin.action')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ProviderService as $service)
                                        <tr>
                                            <td>{{ $service->service_type->name }}</td>
                                            {{-- <td>{{ $service->service_number }}</td>
                                            <td>{{ $service->service_model }}</td> --}}
                                            <td>
                                                @if( Setting::get('demo_mode', 0) == 0)
                                                    <form action="{{ route('admin.provider.document.service', [$Provider->id, $service->id]) }}"
                                                          method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        @can('provider-service-delete')
                                                            <button class="button  is-danger is-link btn-large btn-block">@lang('admin.delete')</a>@endcan
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>@lang('admin.provides.service_name')</th>
                                        {{-- <th>@lang('admin.provides.service_number')</th>
                                        <th>@lang('admin.provides.service_model')</th> --}}
                                        <th>@lang('admin.action')</th>
                                    </tr>
                                    </tfoot>
                                </table>
                                </div>
                            @endif
                            <hr>
                        </div>
                    </div>
                    <div class="columns">
                        @if($ProviderService->count() >= 1)
                        <div class="column">
                            <h3 style="margin-bottom: 5px; font-size: 15px;">Update Service</h3>
                        <form action="{{ route('admin.provider.document.store', $Provider->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" required name="method" value="update">
                            <div class="column">
                                <select class="form-control input" name="service_type" required>
                                    @forelse($ServiceTypes as $Type)
                                    <option value="{{ $Type->id }}">{{ $Type->fleet->name }} - {{ $Type->name }}</option>
                                    @empty
                                    <option>- @lang('admin.service_select') -</option>
                                    @endforelse
                                </select>
                            </div>
                            {{-- <div class="column">
                                <input type="text" required name="service_number" class="input" placeholder="Número/Placa (jss-0000)">
                            </div>
                            <div class="column">
                                <input type="text" required name="service_model" class="input" placeholder="Modelo (Siena Sedan - Branco)">
                            </div> --}}
                            <input type="hidden" required name="service_number" class="input" placeholder="" value="{{ $Type->name }}">
                            <input type="hidden" required name="service_model" class="input" placeholder="" value="{{ $Type->name }}">
                            @if( Setting::get('demo_mode', 0) == 0)
                            <div class="column">
                                @can('provider-service-update')
                                <button class="button is-link btn-block" type="submit">Update</button>
                                @endcan
                            </div>
                            @endif
                        </form>
                    </div>
                        @endif
                        <div class="column">
                            <h3 style="margin-bottom: 5px; font-size: 15px;">Add Service </h3>
                        <form action="{{ route('admin.provider.document.store', $Provider->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" required name="method" value="create">
                            <div class="column">
                                <select class="form-control input" name="service_type" required>
                                    @forelse($ServiceTypes as $Type)
                                    <option value="{{ $Type->id }}"> {{ $Type->name }}</option>
                                    @empty
                                    <option>@lang('admin.service_select')</option>
                                    @endforelse
                                </select>
                            </div>
                            
                                <input type="hidden" required name="service_number" class="input" placeholder="" value="{{ $Type->name }}">
                            
                            
                                <input type="hidden" required name="service_model" class="input" placeholder="" value="{{ $Type->name }}">
                            
                            @if( Setting::get('demo_mode', 0) == 0)
                            <div class="column">
                                @can('provider-service-update')
                                <button class="button is-success btn-block" type="submit">Add</button>
                                @endcan
                            </div>
                            @endif
                        </form>
                        </div>
                    </div>
                </div>
            @endcan
            @can('provider-documents')
                <div class="box box-block bg-white">
                    <h5 class="mb-1">
                        @lang('admin.provides.provider_documents')<br>
                        @can('provider-status')
                            @if($Provider->status != 'approved')
                                @if($Provider->documents()->count())
                                    @if($Provider->documents->last()->status == "ACTIVE")
                                        <a class="button is-success btn-block"
                                           href="{{ route('admin.provider.approve', $Provider->id ) }}">Aprove</a>
                                    @endif
                                @endif
                            @endcan
                        @endif
                    </h5>
                    @if( Setting::get('demo_mode', 0) == 0)
                        @if(count($Provider->documents)>0)
                            <a href="{{route('admin.download', $Provider->id)}}" style="margin-left: 1em;"
                               class="button is-link pull-right"><i
                                        class="fa fa-download"></i> @lang('admin.provides.download')</a>
                        @endif
                    @endif
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
                                <td>@if($Document->status == "ACTIVE"){{ "APPROVED" }}@else {{ "PENDING APPROVAL" }} @endif</td>
                                <td>
                                    <div class="input-group-btn">
                                        @if( Setting::get('demo_mode', 0) == 0)
                                            @can('provider-document-edit')
                                                <a href="{{ route('admin.provider.document.edit', [$Provider->id, $Document->id]) }}"><span
                                                            class="button is-success btn-large">@lang('admin.view')</span></a>
                                            @endcan
                                            @can('provider-document-delete')
                                                <button class="button  is-danger is-link btn-large doc-delete"
                                                        id="{{$Document->id}}">@lang('admin.delete')</button>
                                                <form action="{{ route('admin.provider.document.destroy', [$Provider->id, $Document->id]) }}"
                                                      method="POST" id="form_delete_{{$Document->id}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                </form>
                                            @endcan
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
            @endcan
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(".doc-delete").on('click', function () {
            var doc_id = $(this).attr('id');
            $("#form_delete_" + doc_id).submit();
        });
    </script>
@endsection
