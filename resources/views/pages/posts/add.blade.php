<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-select.css')}}">
	     	<script src="{{ asset('js/plugins/ckeditor.js')}}" type="text/javascript"></script>
     	<script>
     		CKEditor.replace('editor');
     	</script>
</head>
<body>
<div class="container">
  <h2>ADD Posts</h2>
  <form action="">
    <div class="form-group">
    	{!! Form:: label('Title') !!}
    	{!! Form:: text('title', null, array('class' => 'form-control'))!!}
    </div>
    <div class="form-group">
     	{!! Form:: label('content') !!}
    	{!! Form:: text('content', null, array('class' => 'form-control'))!!}
    </div>
    <div class="form-group">
     	{!! Form:: label('description') !!}
    	{!! Form:: text('description', null, array('class' => 'form-control'))!!}
    </div>
    <div class="form-group">
    {!! Form:: label('Categories')!!}<br>
    	<select class="selectpicker" multiple data-max-options="all">
		  <option>Tin giam gia</option>
		  <option>Tin thuong</option>
		</select>
	</div>
	<div class="form-group">
	{!! Form:: label('Tags')!!}<br>
		<select class="selectpicker" multiple>
		  <optgroup data-max-options="all">
		    <option>tours</option>
		    <option>cars</option>
		    <option>tickets</option>
		  </optgroup>
		</select>
    </div>
    <div class="form-group">
     	{!! Form:: label('Image') !!}
    	{!! Form:: file('image', null, array('class' => 'form-control'))!!}
    </div>
    <div class="form-group">
    	{!! Form:: submit('Add post', array('class' => 'btn btn-info'))!!}
    </div>
    </form>

</div>
	<script src="{{asset('js/plugins/jQuery/jquery-2.2.3.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap/bootstrap-select.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script>
	
</html>