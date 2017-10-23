<a href="{{route('area.create')}}">添加领域</a></br>


@foreach ($areas as $area)
    <td>{{$area}}</td>
    <td><a href="{{ route('area.edit',$area->id) }}" class="btn btn-primary">修改</a></td>
    </br>
@endforeach