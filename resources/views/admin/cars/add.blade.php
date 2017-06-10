@section('css')
<!-- daterange picker -->
<link rel="stylesheet" href="{{ asset ('js/plugins/daterangepicker/daterangepicker.css') }}">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset ('js/plugins/datepicker/datepicker3.css') }}">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset ('js/plugins/iCheck/all.css') }}">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="{{ asset ('js/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="{{ asset ('js/plugins/timepicker/bootstrap-timepicker.min.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset ('js/plugins/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset ('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">


@endsection

@extends('admin.layout.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Add Cars
   </h1>
 </section>
 <!-- Main content -->
 <section class="content">

  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            {!! Form:: label('Name Cars') !!}
            {!! Form:: text('name', null, array('class' => 'form-control'))!!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            {!! Form:: label('Price Cars') !!}
            {!! Form:: text('price', null, array('class' => 'form-control'))!!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Car Brands</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option>California</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">       
        <div class="col-md-12">
          <div class="form-group">
            <label>Car Types</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option>California</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">   
        <div class="col-md-12">
          <label>Description</label>
          <div class="box box-default">
            <div class="box-body pad">
              <form>
                <textarea id="editor2" name="editor2" rows="10" cols="80">
                  This is my description.
                </textarea>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            {!! Form:: label('License plate') !!}
            {!! Form:: text('license plate', null, array('class' => 'form-control'))!!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Color Cars</label>
            <div class="input-group my-colorpicker2">
              <input type="text" class="form-control">
              <div class="input-group-addon">
                <i></i>
              </div>
            </div>
            <!-- /.input group -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            {!! Form:: label('Image') !!}
            {!! Form:: file('image', null, array('class' => 'form-control'))!!}
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-md-2"> 
          <div class="form-group">
            {!! Form:: submit('Add post', array('class' => 'btn btn-info'))!!}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box -->
  <!-- /.row -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')

<!-- Select2 -->
<script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('js/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('js/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('js/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('js/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('js/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('js/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ asset('js/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/plugins/fastclick/fastclick.js') }}"></script>
<!-- Page script -->

<script src="{{ asset('js/plugins/fastclick/fastclick.js')}}"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset ('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
<script>
  $(function () {
  //Initialize Select2 Elements
  $(".select2").select2();
  //Date picker
  $('#datepicker').datepicker({
    autoclose: true
  });

  //Timepicker
  $(".timepicker").timepicker({
    showInputs: false
  });
  
    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();
  });
</script>
@endsection
