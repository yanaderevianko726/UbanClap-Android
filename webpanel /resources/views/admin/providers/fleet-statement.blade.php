@extends('admin.layout.base')

@section('title', 'Agent Revenue ' )

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h3>Agent Revenue</h3>

            <div class="columns">

                <div class="row row-md mb-2" style="padding: 15px;">
                    <div class="column">
                        <div class="box bg-white">
                            <div class="box-block clearfix">
                                <h5 class="float-xs-left">@lang('admin.include.fleet_ride_histroy')</h5>
                                <div class="float-xs-right">
                                </div>
                            </div>

                            @if(count($Fleets) != 0)
                            <table class="table is-striped is-bordered dataTable" id="table-4">
                                <thead>
                                    <tr>
                                        <td>@lang('admin.users.name')</td>
                                        <td>@lang('admin.mobile')</td>
                                        <td>Completed Trips</td>
                                        <td>Recipe</td>
                                        <td>@lang('admin.users.Joined_at')</td>
                                        <td>@lang('admin.users.Details')</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $diff = ['-success', '-info', '-warning', '-danger']; ?>
                                    @foreach($Fleets as $index => $fleet)
                                    <tr>
                                        <td>
                                            {{$fleet->name}}
                                        </td>
                                        <td>
                                            {{$fleet->mobile}}
                                        </td>

                                        <td>
                                            @if($fleet->rides_count)
                                            {{$fleet->rides_count}}
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if($fleet->payment)
                                            {{currency($fleet->payment[0]->overall)}}
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if($fleet->created_at)
                                            <span class="text-muted">{{$fleet->created_at->diffForHumans()}}</span>
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.statement_fleet', $fleet->id)}}">View history</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                <tfoot>
                                    <tr>
                                        <td>@lang('admin.users.name')</td>
                                        <td>@lang('admin.mobile')</td>
                                        <td>Completed Trips</td>
                                        <td>Recipe</td>
                                        <td>@lang('admin.users.Joined_at')</td>
                                        <td>@lang('admin.users.Details')</td>
                                    </tr>
                                </tfoot>
                            </table>
                            @include('common.pagination')
                            @else
                            <h6 class="no-result">Resultados não encontrados</h6>
                            @endif 

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection
