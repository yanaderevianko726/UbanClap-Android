@extends('admin.layout.base')

@section('title', __('admin.services'))

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
                        {{-- @can('service-types-create')
                            <a href="{{ route('admin.service.create').'?parent_id='.Request::get('id') }}" style="margin-left: 1em;"
                            class="button is-link pull-right"><i class="fa fa-plus"></i> Add New </a>
                        @endcan --}}
                    </header>
                    <div class="container is-fluid">
                        <div class="columns is-multiline">
                            @foreach($services as $index => $service)
                          <div class="column">
                        <div class="card">
                            {{-- <div class="card-image">
                              <figure class="image is-4by3">
                                <img src="{{$service->image}}" alt="Placeholder image">
                              </figure>
                            </div> --}}
                            <div class="card-content">
                              <div class="media">
                                <div class="media-left">
                                  <figure class="image is-48x48">
                                    <img src="{{$service->image}}" alt="Placeholder image">
                                  </figure>
                                </div>
                                <div class="media-content">
                                  <p class="title is-6">{{ $service->name }}</p>
                                </div>
                              </div>
                          
                              <div class="content">
                                {{ $service->description }} <br>
                        sub services : <b> {{count($service->childrenRecursive)}} </b> 
                                <br>
                                {{-- <time datetime="2016-1-1">{{ $service->updated_at }}</time> --}}
                              </div>
                            </div>
                            <footer class="card-footer">
                                @can('service-types-create')
                        <a href="{{ url('/').'/admin/subservice/'.$service->id }}"
                            class="card-footer-item"><i class="fa fa-sun-o"></i> </a>
                        @endcan
                                @can('service-types-create')
                                    <a href="{{ route('admin.service.create').'?parent_id='.$service->id }}"
                                        class="card-footer-item"><i class="fa fa-plus"></i></a>
                                    @endcan
                                    @if( Setting::get('demo_mode', 0) == 0)
                                    @can('service-types-edit')
                                    <a href="{{ route('admin.service.edit', $service->id) }}"
                                        class="card-footer-item is-info">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    @endcan
                                <form action="{{ route('admin.service.destroy', $service->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    
                                    @can('service-types-delete')
                                    <a class="card-footer-item  is-danger is-link"
                                        onclick="return confirm('Are you sure?')">
                                        <i class="fa fa-trash"></i>
                                </a>
                                    @endcan
                                    @endif
                                </form>
                                {{-- <a href="#" class="card-footer-item">Edit</a>
                                <a href="#" class="card-footer-item">Delete</a> --}}
                              </footer>
                          </div>
                        
        
                    </div>
                    @endforeach
        
                        </div>
                    </div>
        </div>
    </div>
@endsection
