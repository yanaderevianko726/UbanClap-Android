
@extends('user.layout.base')

@section('title', 'Notifications ')

@section('content')

<section class="hero is-info welcome is-small">
    
    <div class="hero-body">
        <div class="container">
            <h4 class="title">@lang('user.profile.change_password')</h4>
            <h4 class="subtitle">
                Keep password strong to secure personal info
            </h4>
        
    <div class="container box ">
<!-- notifications start-->
<section class="notify">
    <h2>notifications</h2>
    @forelse($notifications as $index => $notify)
    <div class="notify-sec">    
       <div class="columns m-0 whlnot">
           <div class="notify-img no ">
           @if($notify->image) 
            <img src="{{$notify->image}}" class="img-responsive" alt="image">
             @else
             N/A
            @endif
            </div>
            <div class="notify-content">
                <h5>{{ date('F d, Y, h:i A', strtotime($notify->created_at)) }}</h5>
                <p>{{ str_limit($notify->description, $limit = 100, $end = '...') }}</p>
            </div>
       </div>
            
    </div>
        
            
        @empty
        <div class="notify-content">
            <span><p>No Allert for you now</p></span>
        </div>
        
     @endforelse     
    </section>
<!-- notifications end-->
</div>
</div>
    </div>
</section>
@endsection

@section('scripts')
<script type="text/javascript">
</script>

@endsection
