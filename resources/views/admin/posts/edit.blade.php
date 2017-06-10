@section('css')
<!-- daterange picker -->
<link rel="stylesheet" href="{{ asset ('admin/plugins/daterangepicker/daterangepicker.css') }}">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset ('admin/plugins/datepicker/datepicker3.css') }}">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset ('admin/plugins/iCheck/all.css') }}">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="{{ asset ('admin/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="{{ asset ('admin/plugins/timepicker/bootstrap-timepicker.min.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset ('admin/plugins/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset ('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">


@endsection

@extends('admin.layout.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Edit Posts
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
            {!! Form:: label('id') !!}
            {!! Form:: text('id', null, array('class' => 'form-control'))!!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            {!! Form:: label('Title') !!}
            {!! Form:: text('title', null, array('class' => 'form-control'))!!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Categories</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select a categories" style="width: 100%;">
              <option>Tin giam gia</option>
              <option>Tin thuong</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">       
        <div class="col-md-12">
          <div class="form-group">
            <label>Tags</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select a tags" style="width: 100%;">
              <option>Tours</option>
              <option>Mountain</option>
              <option>Beach</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label>Content</label>
          <div class="box box-default">
            <div class="box-body pad">
              <form>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                  This is my ccontent.
                </textarea>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">    
        <div class="col-md-12">
          <label>Publish</label>
          <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right">
                </div>
          <!-- /.box -->
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
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('admin/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('admin/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('admin/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('admin/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('admin/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('admin/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('admin/plugins/iCheck/icheck.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
<!-- Page script -->

<script src="{{ asset('admin/plugins/fastclick/fastclick.js')}}"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset ('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
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
});
</script>
@endsection
