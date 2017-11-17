<div class="form-group">
    {!! Form::model($clue, ['method' => 'PATCH', 'action' => ['ClueController@update', $clue->id]]) !!}


    <div class="form-control">
        {!! Form::label('clue','线索:') !!}
        {!! Form::text('clue',null,['class'=>'form-control','autofocus'=>'autofocus']) !!}
    </div>


    <div>
        {!! Form::label('inOrEx') !!}
        {!! Form::select('inOrEx', array('进口' => '进口', '出口' => '出口'), 'in'); !!}
    </div>

    <div>
        {!! Form::label('area','涉及领域:') !!}
        {!! Form::text('area') !!}
    </div>


    <div>
        {!! Form::label('remark','备注:') !!}
        {!! Form::text('remark') !!}
    </div>
    <div class="form-control">
        {!! Form::submit('创建',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {{Form::close()}}
</div>


@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
