@section('css')
	
@endsection

@extends('admin.layout.index')

@section('content')
		<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Danh sach dat thue xe
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
	                  <th>Id dat</th>
	                  <th>Name Cars</th>
	                  <th>Image cars</th>
	                  <th>License plate</th>
	                  <th>Name Car Brands</th>
	                  <th>Name Car Types</th>
	                  <th>Price</th>
	                  <th>Customers</th>
	                  <th>Order_date</th>
	                  <th>Return_date</th>
	                  <th>Action</th>
	                </tr>
	                </thead>
	                <tbody>
	                <tr>
	                  <td>1</td>
	                  <td>Toyota Fortuner</td>
	                  <td><img src="{{asset ('img/cat.jpg')}}" style="width: 50px"></td>
	                  <td>A307</td>
	                  <td>Audi</td>
	                  <td>Fortuner</td>
	                  <td>1500000</td>
	                  <td>Hong Nhung</td>
	                  <td>20/09/2017</td>
	                  <td>27/09/2017</td>
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
	<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
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
