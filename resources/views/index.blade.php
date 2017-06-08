<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home\Cars_Rental</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css') }}">
	<link href="{{asset('css/hover-dropdown-menu.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{asset('css/color.css') }}">
	<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css') }}">
	<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">



	<script type="text/javascript" src="{{ URL::asset('js/npm.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/hover-dropdown-menu.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/slide.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('') }}"></script>
<style>
	@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.col-item
{
border: 1px solid #E1E1E1;
border-radius: 5px;
background: #FFF;
}
.col-item .photo img
{
margin: 0 auto;
width: 100%;
}

.col-item .info
{
padding: 10px;
border-radius: 0 0 5px 5px;
margin-top: 1px;
}

.col-item:hover .info {
background-color: #F5F5DC;
}
.col-item .price
{
/*width: 50%;*/
float: left;
margin-top: 5px;
}

.col-item .price h5
{
line-height: 20px;
margin: 0;
}

.price-text-color
{
color: #219FD1;
}

.col-item .info .rating
{
color: #777;
}

.col-item .rating
{
/*width: 50%;*/
float: left;
font-size: 17px;
text-align: right;
line-height: 52px;
margin-bottom: 10px;
height: 52px;
}

.col-item .separator
{
border-top: 1px solid #E1E1E1;
}

.clear-left
{
clear: left;
}

.col-item .separator p
{
line-height: 20px;
margin-bottom: 0;
margin-top: 10px;
text-align: center;
}

.col-item .separator p i
{
margin-right: 5px;
}
.col-item .btn-add
{
width: 50%;
float: left;
}

.col-item .btn-add
{
border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
width: 50%;
float: left;
padding-left: 10px;
}
.controls
{
margin-top: 20px;
}
[data-slide="prev"]
{
margin-right: 10px;
}

</style>

</head>
<body>

@section('menu')
<div id="top-bar" class="top-bar-section top-bar-bg-light">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<!-- Contact -->
				<div class="top-contact link-hover-black">
					<a href="#">
						<i class="fa fa-phone">
							
						</i>+ 123 132 1234</a> 
						<a href="#">
							<i class="fa fa-envelope">
								
							</i>Wannatravel</a>
							<a href="#">
								<i class="fa fa-envelope">
									
								</i>Hai Chau-Da Nang</a>
							</div>
							<!-- Mạng xã h -->
							<div class="top-social-icon icons-hover-black">
								<a href="#">
									<i class="fa fa-facebook"></i>
								</a> 
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a> 
								<a href="#">
									<i class="fa fa-youtube"></i>
								</a> 
								<a href="#">
									<i class="fa fa-dribbble"></i>
								</a> 
								<a href="#">
									<i class="fa fa-linkedin"></i>
								</a> 
								<a href="#">
									<i class="fa fa-github"></i>
								</a> 
								<a href="#">
									<i class="fa fa-rss"></i>
								</a> 
								<a href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End top menu -->
			<!-- Begin menu b -->

			<div class="navbar navbar-default navbar-bg-light" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Mobile</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<br>
						<a class="navbar-brand" href="">  T&T Travel</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
						<ul class="nav navbar-nav">
							<li class=""><a href="">Home</a></li>
							<li><a href="#">Có gì hot</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tour<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Hot</a></li>
									<li><a href="#">Du lịch sinh thái</a></li>
									<li><a href="#">Phượt</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Thuê xe<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Giá xe >>>></a></li>
									<li><a href="#">Loại xe >>>></a></li>
									<li><a href="#">Xem tất cả >>>></a></li>
								</ul>
							</li>
							<li><a href="#">Dịch vụ</a></li> 
							<li><a href="#">Khuyến mãi</a></li> 
							<li><a href="#">Liên hệ</a></li>
							<li><a href="#">Đăng nhập</a></li>
							<li><h5 style="padding-right: 10px">|</h5></li>
							<li><h4><i class="fa fa-shopping-cart" aria-hidden="true"></i></h4></li>     
							<li style="padding-left: 15px"><i class="fa fa-search" aria-hidden="true"></i></li>    
						</ul>
					</div><!--/.nav-collapse -->
				</div>
				<!-- end -->
@endsection
				<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
						<li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
						<li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper For Slides -->
					<div class="carousel-inner" role="listbox">

						<!-- Third Slide -->
						<div class="item active">

							<!-- Slide Background -->
							<img src="images/slide1.jpeg" alt="Bootstrap Touch Slider"  class="slide-image"/>
							<div class="bs-slider-overlay"></div>

							<div class="container">
								<div class="row">
									<!-- Slide Text Layer -->
									<div class="slide-text slide_style_left">
										<h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>
										<p data-animation="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>
										<a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>
										<a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Slide -->

						<!-- Second Slide -->
						<div class="item">

							<!-- Slide Background -->
							<img src="images/slide2.jpeg" alt="Bootstrap Touch Slider"  class="slide-image"/>
							<div class="bs-slider-overlay"></div>
							<!-- Slide Text Layer -->
							<div class="slide-text slide_style_center">
								<h1 data-animation="animated flipInX">Bootstrap touch slider</h1>
								<p data-animation="animated lightSpeedIn">Make Bootstrap Better together.</p>
								<a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">select one</a>
								<a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">select two</a>
							</div>
						</div>
						<!-- End of Slide -->

						<!-- Third Slide -->
						<div class="item">

							<!-- Slide Background -->
							<img src="images/slide3.jpeg" alt="Bootstrap Touch Slider"  class="slide-image"/>
							<div class="bs-slider-overlay"></div>
							<!-- Slide Text Layer -->
							<div class="slide-text slide_style_right">
								<h1 data-animation="animated zoomInLeft">Beautiful Animations</h1>
								<p data-animation="animated fadeInRight">Lots of css3 Animations to make slide beautiful .</p>
								<a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>
								<a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
							</div>
						</div>
						<!-- End of Slide -->


					</div><!-- End of Wrapper For Slides -->

					<!-- Left Control -->
					<a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
						<span class="fa fa-angle-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>

					<!-- Right Control -->
					<a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
						<span class="fa fa-angle-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>

				</div> <!-- End  bootstrap Slider -->
				<!-- start about us -->
				<section id="about">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<center><h2 class="section-title" style="font-weight: bold">About <span style="color: red; ">Us</span></h2></center>
								<hr>
							</div>
						</div>
						<div class="row">	
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<img src="{{ asset('images/banner.jpg') }}" alt="" class="img-responsive">
							</div>
							<div class="col-md-6 about-content">
								<h2 class="about-title">We provide great services and ideass</h2>
								<p class="about-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
								</p>
								<p class="about-text">
									Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
								</p>
								<p class="about-text">
									Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
								</p>
							</div>
						</div>
					</div>
				</section>
				<!-- end about us -->
				<script type="text/javascript">
					$(document).ready(function() {    
						$('#Carousel').carousel({        
							interval: 5000    
						}
						)
					}
					);	 
				</script>
				<section class="news">
					<div class="container">	
						<div class="row">
							<div class="col-md-12">
								<center>
									<h2 class="section-title" style="font-weight: bold">Tin <span style="color: red; ">Tức</span></h2>
								</center>
								<hr>
							</div>
						</div>
					</div>
					<div class="container-fluid"> 
						<div class="row"> 
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="hovereffect">
									<img class="img-responsive" src="http://placehold.it/700x400" alt="">
									<div class="overlay">
										<h2>Image heading</h2>
										<p class="info">Our sleek quality work and  synergized effect of our team’s creative mind have paved the way for offering innovative services to our clients.
											<a href="">Read more >></a>
										</p>

									</div>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<div class="hovereffect">
									<img class="img-responsive" src="http://placehold.it/350x200" alt="">
									<div class="overlay">
										<h2>Image heading</h2>
										<p class="info">Our sleek quality work and  synergized effect of our team’s creative mind have paved the way for offering innovative services to our clients.</p>
									</div>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<div class="hovereffect">
									<img class="img-responsive" src="http://placehold.it/350x200" alt="">
									<div class="overlay">
										<h2>Image heading</h2>
										<p class="info">Our sleek quality work and  synergized effect of our team’s creative mind have paved the way for offering innovative services to our clients.</p>
									</div>
								</div>
							</div>
							<br>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<br>

							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<div class="hovereffect">
									<img class="img-responsive" src="http://placehold.it/350x200" alt="">
									<div class="overlay">
										<h2>Image heading</h2>
										<p class="info">Our sleek quality work and  synergized effect of our team’s creative mind have paved the way for offering innovative services to our clients.</p>
									</div>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<div class="hovereffect">
									<img class="img-responsive" src="http://placehold.it/350x200" alt="">
									<div class="overlay">
										<h2>Image heading</h2>
										<p class="info">Our sleek quality work and  synergized effect of our team’s creative mind have paved the way for offering innovative services to our clients.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="product">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<center>
									<br>
									<h2 class="section-title" style="font-weight: bold">Xe <span style="color: red; ">Du lịch</span></h2>
								</center>
							</div>
						</div>
					</div>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                
            </div>
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product Example</h5>
                                            <h5 class="price-text-color">
                                                $249.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Next Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $149.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product with Variants</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Grouped Product</h5>
                                            <h5 class="price-text-color">
                                                $249.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product with Variants</h5>
                                            <h5 class="price-text-color">
                                                $149.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product with Variants</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
			</div>
		</section>
		<section class="tour">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<center>
							<h2 class="section-title" style="font-weight: bold">Tour <span style="color: red; ">Du Lịch</span></h2>
						</center>
						<hr>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-8">
								<div class="row">
									<div class="col-md-4">
										<div class="container-image">
											<img src="https://lh5.ggpht.com/c23dds2LdhlIOM9vtSVNI7FwN83eN_kB0r-9DWWmxbn0fN8VETPGgbTqpojpeKqWdQ=w300" alt="Avatar" class="image">
											<div class="overlay">
												<div class="text">Hello World <a href="" style="color: red">Xem thêm >>></a></div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="container-image">
											<img src="https://lh5.ggpht.com/c23dds2LdhlIOM9vtSVNI7FwN83eN_kB0r-9DWWmxbn0fN8VETPGgbTqpojpeKqWdQ=w300" alt="Avatar" class="image">
											<div class="overlay">
												<div class="text">Hello World</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="container-image">
											<img src="https://lh5.ggpht.com/c23dds2LdhlIOM9vtSVNI7FwN83eN_kB0r-9DWWmxbn0fN8VETPGgbTqpojpeKqWdQ=w300" alt="Avatar" class="image">
											<div class="overlay">
												<div class="text">Hello World</div>
											</div>
										</div>
									</div>
									<div class="col-md-4" style="padding-top: 20px;">
										<div class="container-image">
											<img src="https://lh5.ggpht.com/c23dds2LdhlIOM9vtSVNI7FwN83eN_kB0r-9DWWmxbn0fN8VETPGgbTqpojpeKqWdQ=w300" alt="Avatar" class="image">
											<div class="overlay">
												<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero delectus sapiente distinctio quos, illum! Vero nam distinctio animi, nulla voluptatum!</div>

											</div>
										</div>
									</div>
									<div class="col-md-4" style="padding-top: 20px;">
										<div class="container-image">
											<img src="https://lh5.ggpht.com/c23dds2LdhlIOM9vtSVNI7FwN83eN_kB0r-9DWWmxbn0fN8VETPGgbTqpojpeKqWdQ=w300" alt="Avatar" class="image">
											<div class="overlay">
												<div class="text">Hello World</div>
											</div>
										</div>
									</div>
									<div class="col-md-4" style="padding-top: 20px;">
										<div class="container-image">
											<img src="https://lh5.ggpht.com/c23dds2LdhlIOM9vtSVNI7FwN83eN_kB0r-9DWWmxbn0fN8VETPGgbTqpojpeKqWdQ=w300" alt="Avatar" class="image">
											<div class="overlay">
												<div class="text">Hello World</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-md-4">
								<h4><center><b>Tour hot trong ngày</b></center></h4>
								<br>
								<div class="list-group">
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>
									<button type="button" class="list-group-item list-group-item-action"><a href="#">Tour Đà Nẵng - Hội An >>></a></button>

								</div>
							</h3>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact-us">
		<div class="container-fluid">	
			<div class="row">
				<div class="col-md-12">
					<center>`
						<h2 class="section-title" style="font-weight: bold">Liên <span style="color: red; ">Hệ</span></h2>
					</center>
					<hr>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-md-offset-0">
						<div class="well well-sm">
							<form class="form-horizontal" action="" method="post">
								<fieldset>
									<legend class="text-center">Contact us</legend>

									<!-- Name input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Name</label>
										<div class="col-md-9">
											<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
										</div>
									</div>

									<!-- Email input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="email">Your E-mail</label>
										<div class="col-md-9">
											<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
										</div>
									</div>

									<!-- Message body -->
									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Your message</label>
										<div class="col-md-9">
											<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
										</div>
									</div>

									<!-- Form actions -->
									<div class="form-group">
										<div class="col-md-12 text-right">
											<button type="submit" class="btn btn-primary btn-lg">Submit</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MH_IdwtiMyJTtH6qyYUH_AdDAOc" width="100%" height="360"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="footer">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 products" style="height: 100px; background-color: #444444">
			<center><h1><p> Copy & Design by : <b>TML</b></h1></p></center>
		</div>
	</section>

	<!-- JAvascrip for slide -->
	<script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>


	<!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
	<script src="bootstrap-touch-slider.js"></script>

	<script type="text/javascript">
		$('#bootstrap-touch-slider').bsTouchSlider();
	</script>
	<!-- jquery 1.11.1 carousel -->
	<script src="js/jquery-1.11.1.min.js"></script>
	</div>



</body>
</html>
