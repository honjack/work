<a href="{{route('clue.create')}}">添加线索</a></br>

<div class="container">

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>序号</th>
                <th>线索内容</th>
                <th>进/出口</th>
                <th>涉及领域</th>
                <th>成文时间</th>
                <th>备注</th>
                <th>更新时间</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clues as $clue)
                <tr>
                    <td>{{$clue->id}}</td>
                    <td>{{$clue->clue}}</td>
                    <td>{{$clue->inOrEx}}</td>
                    <td>{{$clue->area}}</td>
                    <td>{{$clue->date}}</td>
                    <td>{{$clue->remark}}</td>
                    <td>{{$clue->updated_at}}</td>
                    <td><a href="{{route('clue.edit',$clue->id)}}" class="btn btn-default">修改</a></td></br>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

