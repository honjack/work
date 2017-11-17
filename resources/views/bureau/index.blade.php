<a href="{{route('bureau.create')}}">添加部门</a></br>

<div class="table-bordered">
    <thead class="table-bordered">
        <tr>
            <th>序号</th>
            <th>部门</th>
            <th>添加时间</th>
            <th>修改时间</th><br>
        </tr>
    </thead>
    <tbody>
        @foreach ($bureaux as $bureau)
            <td>{{$bureau}}</td>
            <td><a href="{{ route('bureau.edit',$bureau->id) }}" class="btn btn-primary">修改</a></td>
            </br>
        @endforeach
    </tbody>
</div>

