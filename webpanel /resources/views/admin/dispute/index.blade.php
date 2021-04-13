@extends('admin.layout.base')

@section('title', __('admin.dispute.title'))

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box tables-card">
            <header class="box-header">
                <div class="columns">
                    <div class="column">
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
                    </div>
                    <div class="column">
                        @can('dispute-create')
                        <a href="{{ route('admin.dispute.create') }}" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> @lang('admin.dispute.add_dispute')</a>
                        @endcan
                    </div>
                </div>
                
                
            </header>
            <div class="table-container">
                <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.dispute.dispute_type') </th>
                            <th>@lang('admin.dispute.dispute_name') </th>                             
                            <th>@lang('admin.status')</th>                         
                            <th>@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dispute as $index => $dist)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $dist->dispute_type == "provider" ? __('admin.provider') : __('admin.user') }}</td>
                            <td>{{ ucfirst($dist->dispute_name) }} </td>
                            <td>
                                @if($dist->status=='active')
                                    <span class="tag tag-success">@lang('admin.active')</span>
                                @else
                                    <span class="tag tag-danger">@lang('admin.inactive')</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.dispute.destroy', $dist->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    @if( Setting::get('demo_mode', 0) == 0)
                                    @can('dispute-edit')
                                    <a href="{{ route('admin.dispute.edit', $dist->id) }}" class="button is-info"><i class="fa fa-pencil"></i> @lang('admin.edit')</a>
                                    @endcan
                                    @can('dispute-delete')
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
                            <th>@lang('admin.dispute.dispute_type') </th>
                            <th>@lang('admin.dispute.dispute_name') </th>                              
                            <th>@lang('admin.status')</th>                            
                            <th>@lang('admin.action')</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
            
        </div>
    </div>
@endsection