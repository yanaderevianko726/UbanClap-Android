@extends('admin.layout.base')

@section('title', __('admin.provider'))

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="columns">
                <form class="column" action="{{ route('admin.provider.index') }}" method="get">
                
                    <div class="field columns" >
                        <div class="column is-10">
                            <input name="name" type="text" class="input" placeholder="name of @lang('admin.provider')" aria-label="name of @lang('admin.provider')" aria-describedby="basic-addon2">
                        </div>
    
                        {{--  <div class="">
                            <label class="radio-inline">
                                <input type="radio" name="status" value="A" class="radio"{{ request()->has('status')&&request()->get('status')=="A"?" checked":"" }}> Regularized
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="P" class="radio"{{ request()->has('status')&&request()->get('status')=="P"?" checked":"" }}> Pending Docs
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="F" class="radio"{{ request()->has('status')&&request()->get('status')=="F"?" checked":"" }}> Missing Docs
                            </label>
                        </div>  --}}
                        
                        <div class="column is-2">
                            <button class="button is-link" type="submit">Search</button>
                        </div>
                    </div>                
                </form>
                
                @can('provider-create')
                <div class="field cloumn is-2">
                    <div class="">
                        <a href="{{ route('admin.provider.create') }}" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i>@lang('admin.provides.add_new_provider')</a>
                    </div>
                </div>
                @endcan
            </div>          
            
            <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-narrow is-striped">
                <thead>
                    <tr>
                        <th>@lang('admin.id')</th>
                        <th>@lang('admin.provides.full_name')</th>
                        <th>@lang('admin.email')</th>
                        <th>@lang('admin.mobile')</th>
                        <th>@lang('admin.users.Wallet_Amount')</th>
                        <th>@lang('admin.provides.total_requests')</th>
                        <th>@lang('admin.provides.accepted_requests')</th>
                        <th>@lang('admin.users.created_at')</th>
                        @can('provider-documents')
                        <th>@lang('admin.provides.service_type')</th>
                        @endcan
                        <th>@lang('admin.provides.online')</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </thead>
                <tbody>
                @php($page = ($pagination->currentPage-1)*$pagination->perPage)
                @foreach($providers as $index => $provider)
                @php($page++)
                    <tr>
                        <td>{{ $page }}</td>
                        <td>{{ $provider->first_name }} {{ $provider->last_name }}</td>
                        @if(Setting::get('demo_mode', 0) == 1)
                        <td>{{ substr($provider->email, 0, 3).'****'.substr($provider->email, strpos($provider->email, "@")) }}</td>
                        @else
                        <td>{{ $provider->email }}</td>
                        @endif
                        @if(Setting::get('demo_mode', 0) == 1)
                        <td>+919876543210</td>
                        @else
                        <td>{{ $provider->mobile }}</td>
                        @endif
                        <td>
                            @if($provider->wallet_balance < 0)
                                <label style="cursor: default;" class="btn small btn-block btn-danger">{{ currency($provider->wallet_balance) }}</label>
                            @elseif($provider->wallet_balance == 0)
                                <label style="cursor: default;" class="btn small btn-block btn-warning">{{ currency($provider->wallet_balance) }}</label>
                            @else
                                <label style="cursor: default;" class="btn small btn-block btn-success">{{ currency($provider->wallet_balance) }}</label>
                            @endif
                        </td>
                        <td>{{ $provider->total_requests() }}</td>
                        <td>{{ $provider->accepted_requests() }}</td>
                        <td>{{ $provider->created_at->format('d/m/Y H:i:s') }}</td>
                        @can('provider-documents')
                        <td>
                            @if($provider->active_documents() == $total_documents && $provider->service != null)
                                 <a class="button is-success btn-block" href="{{route('admin.provider.document.index', $provider->id )}}">Verified</a>
                            @else
                                <a class="button  is-danger is-link btn-block label-right" href="{{route('admin.provider.document.index', $provider->id )}}">Pending <span class="btn-label"> [{{ $provider->pending_documents() }}]</span></a>
                            @endif
                        </td>
                        @endcan
                        <td>
                            @if($provider->service)
                                @if($provider->service[0]->status == 'active')
                                    <label class="button is-block btn-primary">Yes</label>
                                @else
                                    <label class="button is-block btn-warning">No</label>
                                @endif
                            @else
                                <label class="button is-block btn-danger">N/A</label>
                            @endif
                        </td>
                        <td>
                            <div class="input-group-btn">
                                @can('provider-status')
                                @if($provider->status == 'approved')
                                <a class="button  is-danger is-link btn-block" href="{{ route('admin.provider.disapprove', $provider->id ) }}">Disable</a>
                                @else
                                <a class="button is-success btn-block" href="{{ route('admin.provider.approve', $provider->id ) }}">Approve</a>
                                @endcan
                                @endif
                            @if($user->hasAnyPermission(['provider-history', 'provider-statements', 'provider-edit','provider-delete']))
                            <div class="dropdown is-hoverable">
                                <div class="dropdown-trigger">
                                  <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span>@lang('admin.action')</span>
                                    <span class="icon is-small">
                                      <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                  </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                  <div class="dropdown-content">
                                    <div class="dropdown-item">
                                        <ul class="button-dropdown">
                                            @can('provider-history')
                                            <li>
                                                <a href="{{ route('admin.provider.request', $provider->id) }}" ><i class="fa fa-search"></i> @lang('admin.History')</a>
                                            </li>
                                            @endcan
                                                <li>
                                                    <a href="{{ route('admin.provider.password', $provider->id) }}" ><i class="fa fa-user-secret"></i> @lang('admin.provides.password')</a>
                                                </li>
                                            @can('provider-statements')
                                            <li>
                                                <a href="{{ route('admin.provider.statement', $provider->id) }}" ><i class="fa fa-account"></i> @lang('admin.Statements')</a>
                                            </li>
                                            @endcan
                                            @if( Setting::get('demo_mode', 0) == 0)
                                            @can('provider-edit')
                                            <li>
                                                <a href="{{ route('admin.provider.edit', $provider->id) }}" ><i class="fa fa-pencil"></i> @lang('admin.edit')</a>
                                            </li>
                                            @endcan
                                            @endif
                                            @can('provider-delete')
                                            <li>
                                                <form action="{{ route('admin.provider.destroy', $provider->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    @if( Setting::get('demo_mode', 0) == 0)
                                                    <button class="look-a-like" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i>@lang('admin.delete')</button>
                                                    @endif
                                                </form>
                                            </li>
                                            @endcan
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                
                            @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>@lang('admin.id')</th>
                        <th>@lang('admin.provides.full_name')</th>
                        <th>@lang('admin.email')</th>
                        <th>@lang('admin.mobile')</th>
                        <th>@lang('admin.users.Wallet_Amount')</th>
                        <th>@lang('admin.provides.total_requests')</th>
                        <th>@lang('admin.provides.accepted_requests')</th>
                        <th>@lang('admin.users.created_at')</th>
                        @can('provider-documents')
                        <th>@lang('admin.provides.service_type')</th>
                        @endcan
                        <th>@lang('admin.provides.online')</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </tfoot>
            </table>
            @include('common.pagination')
        </div>
    </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    jQuery.fn.DataTable.Api.register( 'buttons.exportData()', function ( options ) {
        if ( this.context.length ) {
            var jsonResult = $.ajax({
                url: "{{url('admin/provider')}}?page=all&{{ request()->has('fleet')?'fleet='.request()->get('fleet'):'' }}",
                data: {},
                success: function (result) {
                    p = new Array();
                    $.each(result.data, function (i, d)
                    {
                        var item = [d.id,d.first_name +' '+ d.last_name, d.email,d.mobile,d.rating, d.wallet_balance];
                        p.push(item);
                    });
                },
                async: false
            });
            var head=new Array();
            head.push("ID", "Nome", "Email", "Mobile", "Rating", "Wallet");
            return {body: p, header: head};
        }
    } );

    $('#table-5').DataTable( {
        responsive: true,
        paging:false,
            info:false,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
    } );
</script>
@endsection
