@extends('admin.layout.base')

@section('title', __('admin.include.user_ride_histroy'))

@section('content')

                <div class="row row-md mb-2" style="padding: 15px;">
                    <div class="column">
                        <div class="box bg-white">
                            <div class="box-block clearfix">

                            </div>

                            @if(count($Users) != 0)
                            <div class="table-container">
                                <table class="table is-responsive is-fullwidth is-striped">
                                <thead>
                                    <tr>
                                        <td>@lang('admin.fleets.name')</td>
                                        <td>@lang('admin.mobile')</td>
                                        <td>@lang('admin.fleets.Total_Rides')</td>
                                        <td>@lang('admin.users.Total_Spending')</td>
                                        <td>@lang('admin.fleets.Joined_at')</td>
                                        <td>@lang('admin.fleets.Details')</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $diff = ['-success', '-info', '-warning', '-danger']; ?>
                                    @foreach($Users as $index => $user)
                                    <tr>
                                        <td>
                                            {{$user->first_name}} 
                                            {{$user->last_name}}
                                        </td>
                                        <td>
                                            {{$user->mobile}}
                                        </td>

                                        <td>
                                            @if($user->rides_count)
                                            {{$user->rides_count}}
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->payment)
                                            {{currency($user->payment[0]->overall)}}
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->created_at)
                                            <span class="text-muted">{{$user->created_at->diffForHumans()}}</span>
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.statement_user', $user->id)}}">View history</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                <tfoot>
                                    <tr>
                                        <td>@lang('admin.fleets.name')</td>
                                        <td>@lang('admin.mobile')</td>
                                        <td>@lang('admin.fleets.Total_Rides')</td>
                                        <td>@lang('admin.users.Total_Spending')</td>
                                        <td>@lang('admin.fleets.Joined_at')</td>
                                        <td>@lang('admin.fleets.Details')</td>
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

@endsection
