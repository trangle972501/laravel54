<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{asset ('img/cat.jpg')}}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<!-- {{ Form::open( 
		[
		'method' => 'get',
		'class' => 'sidebar-form']) }}
		<div class="input-group">
			{{ Form::text('q', null,
			['class' => 'form-control',
			'placeholder' => 'Search...']) }}
			<span class="input-group-btn">
				<button type="submit" name="search" id="search-btn" class="btn btn-flat">
					<i class="fa fa-search"></i>
				</button>

			</span>
		</div>
		{{ Form::close() }} -->
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Tickets</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ URL::to('/admin/order/list') }}"><i class="fa fa-circle-o"></i>Booked Tickets</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-laptop"></i>
					<span>Cars</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ URL::to('/admin/bookcar/list') }}">
							<i class="fa fa-circle-o"></i> Booked Cars
						</a>
					</li>
				</ul>
				<ul class="treeview-menu">
					<li>
						<a href="{{ URL::to('/admin/bookcar/list') }}">
							<i class="fa fa-circle-o"></i> Retured Cars
						</a>
					</li>
				</ul>
				<ul class="treeview-menu">
					<li>
						<a href="{{ URL::to('/admin/bookcar/list') }}">
							<i class="fa fa-circle-o"></i> Information Cars
						</a>
					</li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-edit"></i> <span>Posts</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ URL::to('/admin/post/list') }}"><i class="fa fa-circle-o"></i> Feature Posts</a></li>
				</ul>
				<ul class="treeview-menu">
					<li><a href="{{ URL::to('/admin/post/list') }}"><i class="fa fa-circle-o"></i> Deleted Posts</a></li>
				</ul>
				<ul class="treeview-menu">
					<li><a href="{{ URL::to('/admin/post/list') }}"><i class="fa fa-circle-o"></i> Information Posts</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-table"></i> <span>Users</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ URL::to('/admin/user/list') }}"><i class="fa fa-circle-o"></i>Register Users</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
