@extends('admin.layout.base')

@section('title', __('admin.reason.title'))

@section('content')

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                @if(Setting::get('demo_mode', 0) == 1)
                    <div class="column" style="height:50px;color:red;">
                        ** Demo Mode : @lang('admin.demomode')
                    </div>
                @endif
                <h5 class="mb-1">@lang('admin.reason.title')</h5>
                @can('cancel-reasons-create')
                <a href="{{ route('admin.reason.create') }}" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> @lang('admin.reason.add_reason')</a>
                @endcan

                <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.reason.type') </th>
                            <th>@lang('admin.reason.reason') </th>
                            <th>@lang('admin.reason.status') </th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($reasons as $index => $reason)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$reason->type == "PROVIDER" ? __('admin.provider') : __('admin.user')}}</td>
                            <td>{{$reason->reason}}</td>
                            <td>
                                @if($reason->status==1)
                                    <span class="tag tag-success">@lang('admin.active')</span>
                                @else
                                    <span class="tag tag-danger">@lang('admin.inactive')</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.reason.destroy', $reason->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    @if( Setting::get('demo_mode', 0) == 0)
                                    @can('cancel-reasons-edit')
                                    <a href="{{ route('admin.reason.edit', $reason->id) }}" class="button is-info"><i class="fa fa-pencil"></i> Edit</a>
                                    @endcan
                                    @can('cancel-reasons-delete')
                                    <button class="button  is-danger is-link" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
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
                            <th>@lang('admin.reason.type') </th>
                            <th>@lang('admin.reason.reason') </th>
                            <th>@lang('admin.reason.status') </th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
            
        </div>
    </div>
@endsection