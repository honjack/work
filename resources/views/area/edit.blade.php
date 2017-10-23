
<div class="form-group">
    {!! Form::open(array('route'=>array('area.update',$area->id),'method'=>'put')) !!}

    <div class="form-control">
        {!! Form::label('area','area:') !!}
        {!! Form::text('area',$area->area,['class'=>'form-control','autofocus'=>'autofocus']) !!}
    </div>
    {{csrf_field()}}
    <div class="form-control">
        {!! Form::submit('修改',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {{Form::close()}}
</div>
