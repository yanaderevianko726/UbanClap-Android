@extends('admin.layout.base')

@section('title', 'App Banner')

@section('content')

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <a href="{{ route('admin.banner.create') }}" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Banner</a>
                <div class="table-container">
                    <table class="table is-responsive is-fullwidth is-striped" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Status</th>
                                {{-- <th>Category Image</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($banners as $index => $banner)
                                <td>
                                    {{ @$Banner->id }}
                                </td>
                                <td>
                                    @if($banner->url) 
                                        <img src="{{img($banner->url)}}" style="height: 50px" >
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{$Banner->status}}</td>
                                <td>
                                    <form action="{{ route('admin.banner.destroy', $banner->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{ route('admin.banner.edit', $banner->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Status</th>
                                {{-- <th>Category Image</th> --}}
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
@endsection