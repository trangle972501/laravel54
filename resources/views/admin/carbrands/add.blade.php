@section('css')

@endsection

@extends('admin.layout.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Add Car Brands
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
            {!! Form:: label('Name Car Brands') !!}
            {!! Form:: text('name', null, array('class' => 'form-control'))!!}
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

@endsection
