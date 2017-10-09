
<div class="form-group">
    {!! Form::open(array('route'=>'bureau.store')) !!}
        <div class="form-control">
            {!! Form::label('bureau','bureau:') !!}
            {!! Form::text('bureau',null,['class'=>'form-control','autofocus'=>'autofocus']) !!}
        </div>
        <div class="form-control">
            {!! Form::submit('创建',['class'=>'btn btn-primary form-control']) !!}
        </div>
{{Form::close()}}
</div>


