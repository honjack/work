
<div class="form-group">
    {!! Form::open(array('route'=>array('bureau.update',$bureau->id),'method'=>'patch')) !!}

    <div class="form-control">
        {!! Form::label('bureau','bureau:') !!}
        {!! Form::text('bureau',$bureau->bureau,['class'=>'form-control','autofocus'=>'autofocus']) !!}
    </div>
    {{csrf_field()}}
    <div class="form-control">
        {!! Form::submit('修改',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {{Form::close()}}
</div>
