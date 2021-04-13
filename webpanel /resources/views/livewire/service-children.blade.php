
<div class="columns is-variable is-multiline is-desktop">
    @forelse($services as $service)
    <div class="column">
        @if (($child == 0 ))
        <a href="{{url('dashboard')}}?service={{$service->id}}" class="sel-ser-link">
        @else
        <a wire:click="getchild({{$service->id}})" class="sel-ser-link">
        @endif
        <div class="card">
          <header class="card-header" style="height:220px; background-image: url({{img($service->image)}});">
            <p class="card-header-title">{{$service->name}}
            </p>
        </header>
        </div></a>
    </div>
    @empty
    <p>No services in your area</p> 
@endforelse
</div>

