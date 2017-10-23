
<div class="form-group">
    {!! Form::open(array('route'=>'area.store')) !!}
    <div class="form-control">
        {!! Form::label('area','area:') !!}
        {!! Form::text('area',null,['class'=>'form-control','autofocus'=>'autofocus']) !!}
    </div>
    <div class="form-control">
        {!! Form::submit('创建',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {{Form::close()}}
</div>


