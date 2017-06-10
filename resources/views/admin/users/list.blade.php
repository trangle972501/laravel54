@section('css')
	
@endsection

@extends('admin.layout.index')

@section('content')
		<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Danh sach nguoi dung
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
	                  <th>Name</th>
	                  <th>Sex</th>
	                  <th>Images</th>
	                  <th>Birthday</th>
	                  <th>Email</th>
	                  <th>Phone</th>
	                  <th>Address</th>
	                  <th>Roles</th>
	                  <th>Action</th>
	                </tr>
	                </thead>
	                <tbody>
	                <tr>
	                  <td>1</td>
	                  <td>Hong Nhung</td>
	                  <td>Female</td>
	                  <td><img src="{{asset ('img/cat.jpg')}}" style="width: 50px"></td>
	                  <td>25/01/1997</td>
	                  <td>nhungle123@gmail.com</td>
	                  <td>01627347631</td>
	                  <td>Quang Binh</td>
	                  <td>Users</td>
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
