@extends('admin.layout.base')

@section('title', __('admin.account.update_profile'))

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}

                <div class="field">
                    <label for="name" class="label">@lang('admin.name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ Auth::guard('admin')->user()->name }}" name="name" required id="name" placeholder=" @lang('admin.name')">
                    </div>
                </div>

                <div class="field">
                    <label for="email" class="label">@lang('admin.email')</label>
                    <div class="control">
                        <input  class="input" type="email" required name="email" value="{{ isset(Auth::guard('admin')->user()->email) ? Auth::guard('admin')->user()->email : '' }}" id="email" placeholder="@lang('admin.email')">
                    </div>
                </div>
                {{--  <div class="field">
                    <label class="label">@lang('user.profile.language')</label>
                    <div class="control">
                        <div class="select">
                        @php($language=get_all_language())
                        <select class="select" name="language" id="language">
                            @foreach($language as $lkey=>$lang)
                            <option value="{{$lkey}}" @if(Auth::user()->language==$lkey) selected @endif>{{$lang}}</option>
                            @endforeach
                        </select>
                    </div>  
                    </div>  
                </div>  --}}
                <div class="field">
                <label for="picture" class="label">@lang('admin.picture')</label>
                    <div class="file">
                        @if(isset(Auth::guard('admin')->user()->picture))
                        <img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="{{img(Auth::guard('admin')->user()->picture)}}">
                        @endif
                         <input type="file" accept="image/*" name="picture" class="dropify is-center input-file" aria-describedby="fileHelp">
                    </div> 
                </div>
                        <div class="field">
                            <label for="zipcode" class="label"></label>
                            <div class="control">
                                <button type="submit" class="button is-link">@lang('admin.account.update_profile')</button>
                            </div>
                        </div>
                    </div>

                </div>


            </form>
        </div>
    </div>
</div>

@endsection
@section('styles')
    <script>
      $('.dropify').dropify();  
    </script>
@endsection