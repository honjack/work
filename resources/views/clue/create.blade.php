
<div class="form-group">
    {!! Form::open(array('route'=>'clue.store')) !!}
    <div class="form-control">
        {!! Form::label('clue','线索:') !!}
        {!! Form::text('clue',null,['class'=>'form-control','autofocus'=>'autofocus']) !!}
    </div>
    <div>
        {!! Form::label('inOrEx','进/出口:') !!}
        {!! Form::text('inOrEx','进口') !!}
    </div>
    <div>
        {!! Form::label('area','涉及领域:') !!}
        {!! Form::text('area') !!}
    </div>
    <div>
        {!! Form::label('date','成文日期:') !!}
        {!! Form::date('date','\Carbon\Carbon::now())') !!}
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


