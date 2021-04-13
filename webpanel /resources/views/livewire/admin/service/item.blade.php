<tbody>
    @foreach($services as $index => $service)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $service->name }}</td>
        <td>@lang('servicetypes.'.$service->calculator)</td>
        <td>
            @if($service->image)
            <img src="{{$service->image}}" style="height: 50px">
            @else
            N/A
            @endif
        </td>
        <td>
            @if($service->marker)
            <img src="{{$service->marker}}" style="height: 50px">
            @else
            N/A
            @endif
        </td>
        <td>

            <form action="{{ route('admin.service.destroy', $service->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                @can('service-types-create')
                <a href="{{ route('admin.service.create').'?parent_id='.$service->id }}"
                    style="margin-left: 1em;" class="button is-link"><i class="fa fa-plus"></i>
                    Add Sub in </a>
                @endcan
                @if( Setting::get('demo_mode', 0) == 0)
                @can('service-types-edit')
                <a href="{{ route('admin.service.edit', $service->id) }}"
                    class="button is-info btn-block">
                    <i class="fa fa-pencil"></i> {{__('admin.edit')}}
                </a>
                @endcan
                @can('service-types-delete')
                <button class="button  is-danger is-link btn-block"
                    onclick="return confirm('Are you sure?')">
                    <i class="fa fa-trash"></i> {{__('admin.delete')}}
                </button>
                @endcan
                @endif
            </form>
        </td>
    </tr>

    @foreach ($service->childrenRecursive as $childCategory)
    @include('admin.service.service', ['child_category' => $childCategory])
    @endforeach



    @endforeach
    {{-- @endforeach --}}
</tbody>