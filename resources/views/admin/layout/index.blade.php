<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=1, user-scalable=no">
	<title>Admin</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('admin/css/skins/_all-skins.css') }}">
	<link rel="stylesheet" href="{{ asset ('admin/css/admin.min.css')}}">
	@yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- ============Footer============== -->
		@include('admin.layout.header')
		<!-- ============\Footer============== -->

		<!-- ============aside menu============== -->
		@include('admin.layout.menu')
		<!-- ============\aside menu============== -->

		<!-- Content Wrapper. Contains page content -->
		@yield('content')
		<!-- /.content-wrapper -->

		<!-- ============Footer============== -->
		@include('admin.layout.footer')
		<!-- ============\footer============== -->

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  	<div class="control-sidebar-bg"></div>
	</div>
	<script src="{{ asset('admin/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
	<script src="{{ asset('admin/plugins/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/js/app.min.js') }}"></script>
	<script src="{{ asset('admin/js/demo.js') }}"></script>
@yield('script')
</body>
</html>