<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI 日期选择器（Datepicker） - 默认功能</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
    <script>
        $(function() {
            $( "#datepicker" ).datepicker({
                altField: "#datepicker",
                altFormat: "yy-mm-dd"
            });
        });

    </script>


    </script>
</head>
<body>


<div class="form-group">
    {!! Form::open(array('route'=>'clue.store')) !!}
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
        {!! Form::label('area','涉及领域:') !!}
        {!! Form::select('area',array(@foreach($area() as $area)     {{$area->area}}   @endforeach)) !!}
    </div>

    <div>
        成文日期：<input type="date" name='date' id="datepicker"><label for="date"></label>
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


</body>
</html>



