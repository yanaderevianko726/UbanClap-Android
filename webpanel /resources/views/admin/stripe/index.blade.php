@extends('admin.layout.base')

@section('title', 'Stripe')

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
           <div class="columns">
            <div class="column">
                {{--  {{$plans}}  --}}
                <h5>Plans</h5>
                <a href="{{ route('admin.stripe.create')}}" style="margin-left: 1em;" class="button is-link is-right"><i
                    class="fa fa-plus"></i> Create Plan </a>
                <div class="table-container">
                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.first_name')</th>
                            <th>price</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($page = ($pagination->currentPage-1)*$pagination->perPage)
                        @foreach($plans->data as $user)
                        @php($page++)
                        <tr>
                            <td>{{ $page }}</td>
                            <td>{{ $user->nickname }}</td>
                            <td>{{ currency($user->amount/100) }}</td>
                            <td>
                                <form action="{{ route('admin.stripe.destroy', $user->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    @if( Setting::get('demo_mode', 0) == 0)
                                    
                                    <a href="{{ route('admin.stripe.edit', $user->id) }}" class="button is-info"><i class="fa fa-pencil"></i> {{__('admin.edit')}}</a>
                                    
                                    <button class="button  is-danger is-link" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> {{__('admin.delete')}}</button>
                                    
                                    @endif
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.first_name')</th>
                            <th>price</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </tfoot>
                </table>
                @include('common.pagination')
                </div>
            </div>
            <div class="column">
                <h5>Subscribers</h5>
                {{--  {{$subs}}  --}}
                <div class="table-container">
                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.first_name')</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($page = ($pagination->currentPage-1)*$pagination->perPage)
                        @forelse($subs->data as $user)
                        @php($page++)
                        <tr>
                            <td>{{ $page }}</td>
                            <td>{{ $user }}</td>
                            <td>actions</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3"> No Data </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.first_name')</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </tfoot>
                </table>
                @include('common.pagination')
                </div>
            </div>
           </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
