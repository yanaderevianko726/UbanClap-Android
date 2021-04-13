@extends('admin.layout.base')

@section('title', 'Update Banner ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">

            <form class="form-horizontal" action="{{route('admin.banner.update', $banner->id )}}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}
            	<input type="hidden" name="_method" value="PATCH">
				<div class="form-group column">					
					<label for="image" class="col-xs-2 col-form-label">Banner</label>
					<div class="col-xs-10">
					@if(isset($banner->url))
                    	<img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="{{img($banner->url)}}">
                    @endif
						<input type="file" accept="image/*" name="url" class="dropify form-control-file" id="url" aria-describedby="fileHelp">
					</div>
				</div>
				<div class="field">
                    <label for="email" class="label">Video URL</label>
                    <div class="control">
                        <input  class="input" type="text" name="video" value="{{($banner->video)}}" id="video" placeholder="Youtube or other URL">
                    </div>
                </div>
				<div class="form-group column">
					<label for="name">Status</label>
					<div class="select">
						<select id="status" name="status" class="form-control">
							<option value="active" @if($banner->status=='active')   selected @endif >Active</option>
							<option value="inactive" @if($banner->status=='inactive')   selected @endif >Inactive</option>
						</select>
					</div>
                </div>
				<div class="form-group column">
					<label for="zipcode" class="col-xs-2 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="button is-info">Update Banner</button>
						<a href="{{route('admin.banner.index')}}" class="button is-default">Cancel</a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

@endsection