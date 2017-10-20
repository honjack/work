<a href="{{route('bureau.create')}}">添加部门</a></br>


@foreach ($bureaux as $bureau)
    <td>{{$bureau}}</td>
    <td><a href="{{ route('bureau.edit',$bureau->id) }}" class="btn btn-primary">修改</a></td>
    </br>
@endforeach