@extends('admin.layout.base')

@section('title', __('admin.notification.title'))

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
            </p>
                @can('notification-create')
                <a href="{{ route('admin.notification.create') }}" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> @lang('admin.notification.add')</a>
                @endcan

            </header>
<div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.notification.notify_type') </th>
                            <th>@lang('admin.notification.notify_image') </th>                           
                            <th>@lang('admin.notification.notify_desc') </th>
                            <th>@lang('admin.notification.notify_status') </th>                           
                            <th>@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($notification as $index => $notify)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if($notify->notify_type == "user") 
                                    @lang('admin.user')s
                                @elseif($notify->notify_type == "provider")
                                    @lang('admin.provider')s
                                @else
                                    All
                                @endif
                            </td>
                            <td>
                                @if($notify->image) 
                                    <img src="{{$notify->image}}" style="height: 50px" >
                                @else
                                    N/A
                                @endif
                            </td>    
                            <td>{{ $notify->description }} </td>

                            <td>
                                @if($notify->status=='active')
                                    <span class="tag tag-success">@lang('admin.active')</span>
                                @else
                                    <span class="tag tag-danger">@lang('admin.inactive')</span>
                                @endif
                            </td>
                           
                            <td>
                                <form action="{{ route('admin.notification.destroy', $notify->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    @if( Setting::get('demo_mode', 0) == 0)
                                    @can('notification-edit')
                                    <a href="{{ route('admin.notification.edit', $notify->id) }}" class="button is-info"><i class="fa fa-pencil"></i> {{__('admin.edit')}}</a>
                                    @endcan
                                    @can('notification-delete')
                                    <button class="button  is-danger is-link" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> {{__('admin.delete')}}</button>
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
                            <th>@lang('admin.notification.notify_type') </th>
                            <th>@lang('admin.notification.notify_image') </th>                           
                            <th>@lang('admin.notification.notify_desc') </th>
                            <th>@lang('admin.notification.notify_status') </th>                           
                            <th>@lang('admin.action')</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
    </div>
        </div>
    </div>
@endsection