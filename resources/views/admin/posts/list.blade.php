@section('css')
	
@endsection

@extends('admin.layout.index')

@section('content')
		<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Data Tables
	        <small>advanced tables</small>
	      </h1>
	      <ol class="breadcrumb">
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title"></h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="example2" class="table table-bordered table-hover">
	                <thead>
	                <tr>
	                  <th>Id</th>
	                  <th>Title</th>
	                  <th>Content</th>
	                  <th>Images</th>
	                  <th>Author</th>
	                  <th>Publish</th>
	                  <th>Categories</th>
	                  <th>Tags</th>
	                  <th>Action</th>
	                </tr>
	                </thead>
	                <tbody>
	                <tr>
	                  <td>1</td>
	                  <td>Du lich Hoi An</td>
	                  <td>Hoi An is the famous palce with ....</td>
	                  <td><img src="{{asset ('img/cat.jpg')}}" style="width: 50px"></td>
	                  <td>Hong Nhung</td>
	                  <td>20/09/1997</td>
	                  <td>Tin mien phi</td>
	                  <td>Tour, Hoi An, mountain</td>
	                  <td class="actions">
						<button type="submit" class="btn btn-info">Edit</button>
						<button type="submit" class="btn btn-danger">Delete</button>
						</td>
	                </tbody>
	              </table>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
	        </div>
	        <!-- /.col -->
	      </div>
	      <!-- /.row -->
	    </section>
	    <!-- /.content -->
 	 </div>
@endsection

@section('script')
	<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
	<!-- page script -->
	<script>
	  $(function () {
	    $("#example1").DataTable();
	    $('#example2').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false
	    });
	  });
	</script>
@endsection
