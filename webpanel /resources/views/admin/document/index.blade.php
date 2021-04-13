@extends('admin.layout.base')

@section('title', __('admin.document.document'))

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box tables-card">
            <header class="box-header">
                <p class="box-header-title">
                    @if(Setting::get('demo_mode', 0) == 1)
                    <div class="column" style="height:50px;color:red;">
                                ** Demo Mode : @lang('admin.demomode')
                            </div>
                            @endif
                            @if(Setting::get('demo_mode', 0) == 1)
                            <span class="pull-right">(*personal information hidden in demo)</span>
                            @endif
                        
                </p>
                @can('documents-create')
                <a href="{{ route('admin.document.create') }}" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> @lang('admin.document.add_Document')</a>
                @endcan
            </header>
<div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.document.document_name')</th>
                            <th>@lang('admin.type')</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($documents as $index => $document)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$document->name}}</td>
                            <td>{{$document->type == "VEHICLE" ? __('admin.documents') : __('admin.provider')}}</td>
                            <td>
                                <form action="{{ route('admin.document.destroy', $document->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    @if( Setting::get('demo_mode', 0) == 0)
                                    @can('documents-edit')
                                    <a href="{{ route('admin.document.edit', $document->id) }}" class="button is-info"><i class="fa fa-pencil"></i> @lang('admin.edit')</a>
                                    @endcan
                                    @can('documents-delete')
                                    <button class="button  is-danger is-link" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> @lang('admin.delete')</button>
                                    @endcan
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.document.document_name')</th>
                            <th>@lang('admin.type')</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
    </div>
        </div>
    </div>
@endsection