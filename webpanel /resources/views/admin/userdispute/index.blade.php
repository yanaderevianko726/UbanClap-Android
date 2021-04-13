@extends('admin.layout.base')

@section('title', __('admin.dispute.title1'))

@section('content')

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                @if(Setting::get('demo_mode', 0) == 1)
                    <div class="column" style="height:50px;color:red;">
                        ** Demo Mode : @lang('admin.demomode')
                    </div>
                @endif
                <h5 class="mb-1">@lang('admin.dispute.title1')</h5>
                @can('lost-item-create')
               <a href="{{ route('admin.userdisputecreate') }}" style="margin-left: 1em;" class="button is-link pull-right"><i class="fa fa-plus"></i> @lang('admin.dispute.add_dispute')</a>
               @endcan

                <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.dispute.dispute_request') </th>
                            <th>@lang('admin.users.name') </th>                           
                            <th>@lang('admin.dispute.dispute_request_id') </th>
                            <th>@lang('admin.dispute.dispute_name') </th>                           
                            <th>@lang('admin.dispute.dispute_comments') </th>                           
                            <th>@lang('admin.dispute.dispute_refund') </th>                           
                            <th>@lang('admin.dispute.dispute_status') </th>                           
                            <th>@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($disputes as $index => $dispute)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $dispute->dispute_type == "provider" ? "@lang('admin.provider')" : "@lang('admin.user')" }}</td>
                            <td>@if($dispute->dispute_type=='user') @if($dispute->user != null) {{ $dispute->user->first_name." ".$dispute->user->last_name }} @endif @else  @if($dispute->provider != null)  {{ $dispute->provider->first_name." ".$dispute->provider->last_name }} @endif @endif</td>
                            <td>{{ $dispute->request->booking_id }}</td>
                            <td>{{ $dispute->dispute_name }}</td>
                            <td>{{ $dispute->comments }}</td>
                            <td>{{ currency($dispute->refund_amount) }}</td>
                            <td>
                                @if($dispute->status=='open')
                                    <span class="tag tag-success">Aberta</span>
                                @else
                                    <span class="tag tag-danger">Finalizada</span>
                                @endif
                            </td>
                            <td>
                                @can('dispute-edit')
                                    @if($dispute->status=='open')
                                        <a href="{{ route('admin.userdisputeedit', $dispute->id) }}" href="#" class="button is-info"><i class="fa fa-pencil"></i> Analizar</a>
                                    @endif   
                                @endcan 
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>@lang('admin.id')</th>
                            <th>@lang('admin.dispute.dispute_request') </th>
                            <th>@lang('admin.users.name') </th>                           
                            <th>@lang('admin.dispute.dispute_request_id') </th>
                            <th>@lang('admin.dispute.dispute_name') </th>                           
                            <th>@lang('admin.dispute.dispute_comments') </th>                           
                            <th>@lang('admin.dispute.dispute_refund') </th>                           
                            <th>@lang('admin.dispute.dispute_status') </th>                           
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