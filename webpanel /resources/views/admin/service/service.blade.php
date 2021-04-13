
    <td></td>
    <td>{{$child_category->parent_id}}->{{$child_category->id}}</td>
    <td>{{ $child_category->name }}</td>
    <td>@lang('servicetypes.'.$child_category->calculator)</td>
    <td>
        @if($child_category->image)
            <img src="{{$child_category->image}}" style="height: 50px" >
        @else
            N/A
        @endif
    </td>
    <td>
        <form action="{{ route('admin.service.destroy', $child_category->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            @can('service-types-create')
        <a href="{{ route('admin.service.create').'?parent_id='.$child_category->id }}" style="margin-left: 1em;"
        class="button is-link"><i class="fa fa-plus"></i> Add New S. Sub </a>
        @endcan
            @if( Setting::get('demo_mode', 0) == 0)
                @can('service-types-edit')
                    <a href="{{ route('admin.service.edit', $child_category->id) }}" class="button is-info btn-block">
                        <i class="fa fa-pencil"></i> {{__('admin.edit')}}
                    </a>
                @endcan
                @can('service-types-delete')
                    <button class="button  is-danger is-link btn-block" onclick="return confirm('Are you sure?')">
                        <i class="fa fa-trash"></i> {{__('admin.delete')}}
                    </button>
                @endcan
            @endif
        </form>
    </td>

@if ($child_category->childrenRecursive)
    <tr>
        @foreach ($child_category->childrenRecursive as $childCategory)
            @include('admin.service.service', ['child_category' => $childCategory])
        @endforeach
    </tr>
@endif