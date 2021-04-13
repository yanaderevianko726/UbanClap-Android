@extends('admin.layout.base')

@section('title', __('admin.promocode.promocodes'))

@section('content')

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <div class="columns">

                
                @if(Setting::get('demo_mode', 0) == 1)
                    <div class="column" style="height:50px;color:red;">
                        ** Demo Mode : @lang('admin.demomode')
                    </div>
                @endif
                

                @can('promocodes-create')
                <a href="{{ route('admin.promocode.create') }}" style="margin-left: 1em;" class="button is-link pull-right column is-2 is-offset"><i class="fa fa-plus"></i> @lang('admin.promocode.add_promocode')</a>
                @endcan
                </div>
                <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.promocode.promocode') </th>
                            <th>@lang('admin.promocode.percentage') </th>
                            <th>@lang('admin.promocode.max_amount') </th>
                            <th>@lang('admin.promocode.expiration')</th>
                            <th>@lang('admin.status')</th>
                            <th>@lang('admin.promocode.used_count')</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($promocodes as $index => $promo)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$promo->promo_code}}</td>
                            <td>{{$promo->percentage}}</td>
                            <td>{{$promo->max_amount}}</td>
                            <td>
                                {{$promo->expiration}}
                            </td>
                            <td>
                                @if(date("Y-m-d H:i") <= $promo->expiration)
                                    <span class="tag tag-success">Válido</span>
                                @else
                                    <span class="tag tag-danger">Expirado</span>
                                @endif
                            </td>
                            <td>
                                {{promo_used_count($promo->id)}}
                            </td>
                            <td>
                                <form action="{{ route('admin.promocode.destroy', $promo->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    @if( Setting::get('demo_mode', 0) == 0)
                                    @can('promocodes-edit')
                                    <a href="{{ route('admin.promocode.edit', $promo->id) }}" class="button is-info"><i class="fa fa-pencil"></i> {{__('admin.edit')}}</a>
                                    @endcan
                                    @can('promocodes-delete')
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
                            <th>@lang('admin.promocode.promocode') </th>
                            <th>@lang('admin.promocode.percentage') </th>
                            <th>@lang('admin.promocode.max_amount') </th>
                            <th>@lang('admin.promocode.expiration')</th>
                            <th>@lang('admin.status')</th>
                            <th>@lang('admin.promocode.used_count')</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
            
        </div>
    </div>
@endsection