@extends('admin.layout.base')

@section('title', __('admin.dispute-manager.dispute_manager'))

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
                @can('dispute-manager-create')
            <a href="{{ route('admin.dispute-manager.create') }}" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> @lang('admin.dispute-manager.add_new_dispute_manager')</a>
            @endcan
            </header>
<div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                <thead>
                    <tr>
                        <th>@lang('admin.id')</th>
                        <th>@lang('admin.account-manager.full_name')</th>
                        <th>@lang('admin.email')</th>
                        <th>@lang('admin.mobile')</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($accounts as $index => $account)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $account->name }}</td>
                        @if(Setting::get('demo_mode', 0) == 1)
                        <td>{{ substr($account->email, 0, 3).'****'.substr($account->email, strpos($account->email, "@")) }}</td>
                        @else
                        <td>{{ $account->email }}</td>
                        @endif
                        @if(Setting::get('demo_mode', 0) == 1)
                        <td>+919876543210</td>
                        @else
                        <td>{{ $account->mobile }}</td>
                        @endif
                        <td>
                            <form action="{{ route('admin.dispute-manager.destroy', $account->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <a href="{{ route('admin.dispute-manager.edit', $account->id) }}" class="button is-info"><i class="fa fa-pencil"></i> @lang('admin.edit')</a>
                                <button class="button  is-danger is-link" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> @lang('admin.delete')</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>@lang('admin.id')</th>
                        <th>@lang('admin.account-manager.full_name')</th>
                        <th>@lang('admin.email')</th>
                        <th>@lang('admin.mobile')</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </tfoot>
</table>
</div>
@endsection