<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,400italic,500italic,700italic,900italic%7CRoboto+Slab:400,300,700%7CPlayfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/posts/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/posts/font-awesome.css')}}">
</head>
    <body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader" style="display: none;"></div>
    
    <!-- Main Header-->
    <header class="main-header">
    
    </header>
    <!--End Main Header -->
    
    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                
                <!--Content Side--> 
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    <!--Blog News Section/ Details-->
                    <section class="blog-news-section blog-detail no-padd-bottom no-padd-top padd-right-40">
                            
                        <!--News Column-->
                        <div class="column blog-news-column">
                            <article class="inner-box">
                                <figure class="image-box">
                                    <a href="blog-single.html"><img src="{{asset('img/cat.jpg')}}" alt=""></a>
                                    <a href="#" class="category">cat</a>
                                </figure>
                                <div class="content-box">
                                    <h3><a href="#">This is title</a></h3>
                                    <ul class="post-info clearfix">
                                        <li>By <a href="#">Rashed Kabir</a></li>
                                        <li>On <a href="#">April 5, 2015</a></li>
                                    </ul>
                                    <div class="text">
                                        <p>This is content</p>
                                        <br>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-5 col-xs-12">
                                                <figure><img class="img-responsive" src="{{asset('img/cat.jpg')}}" alt=""></figure>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-xs-12">
                                                <blockquote><p>This is description</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </article>
                        </div>
                        
                    </section>
                    <div class="comment-form wow fadeInUp">
                            
                    </div><!--End Comment Form -->
                
                    
                </div>
                <!--Content Side-->
                
                <!--Sidebar-->  
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">
                    
                        <!-- Search Form -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Here">
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                            
                        </div>
                        
                        <!-- Popular Categories -->
                        <div class="sidebar-widget popular-categories wow fadeInUp animated">
                            <div class="sidebar-title"><h2>Categories</h2></div>
                            
                            <ul class="list">
                                <li><a href="#">News</a></li>
                            </ul>
                            
                        </div>
                        
                        <!-- Archives -->
                        <div class="sidebar-widget archives-widget wow fadeInUp" ">
                            <div class="sidebar-title"><h2>Archives</h2></div>
                            
                            <ul class="archives-list">
                                <li><a href="#">April 2016</a></li>
                            </ul>                          
                        </div>
                        
                        <!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h2>Tags</h2></div>
                            
                            <a href="#">Tours</a>
                            <a href="#">Planning</a>                           
                        </div>                              
                    </aside>                    
                </div>
                <!--Sidebar-->                     
                
            </div>
        </div>
    </div 
    
    <!--Main Footer-->
    <footer class="main-footer">
    </footer>
    
    
</div>
<!--End pagewrapper-->
</body>
</html>