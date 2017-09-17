<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.7
Version: 2.0.0
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"  >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>RMIT |Service & Support</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
	<link href="{{asset('assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>		
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->

			<!-- BEGIN: BASE PLUGINS  -->
			<link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
				<!-- END: BASE PLUGINS -->
	
			<!-- BEGIN: PAGE STYLES -->
			<link href="assets/plugins/ilightbox/css/ilightbox.css" rel="stylesheet" type="text/css"/>
				<!-- END: PAGE STYLES -->
	
    <!-- BEGIN THEME STYLES -->
	<link href="assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
    <link href="assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="assets/base/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->

	<link rel="shortcut icon" href="favicon.ico"/>
</head><body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen"> 
		
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-default c-layout-header-mobile c-header-transparent" data-minimize-offset="80">
		<div class="c-navbar">
		<div class="container">
			<!-- BEGIN: BRAND -->
			<div class="c-navbar-wrapper clearfix">
				<div class="c-brand c-pull-left">
					<a href="https://www.rmit.edu.au/" class="c-logo">
						<img src="assets/base/img/layout/logos/rmit.png" style="height:60px; margin-top:-20px" alt="JANGO" class="c-desktop-logo">
						<img src="assets/base/img/layout/logos/rmit.png" style="height:60px; margin-top:-20px" alt="JANGO" class="c-desktop-logo-inverse">
						<img src="assets/base/img/layout/logos/rmit.png" style="height:60px; margin-top:-20px" alt="JANGO" class="c-mobile-logo">
					</a>
					<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
					<span class="c-line"></span>
					<span class="c-line"></span>
					<span class="c-line"></span>
					</button>
					<button class="c-topbar-toggler" type="button">
						<i class="fa fa-ellipsis-v"></i>
					</button>
				</div>
				<!-- END: BRAND -->				
<!-- BEGIN: MEGA MENU -->
<!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
<nav class="c-mega-menu c-pull-right c-mega-menu c-mega-menu-mobile c-fonts-uppercase c-fonts-bold">
	<ul class="nav navbar-nav c-theme-nav"> 
		<li class="{{Request::is('home*') ? 'c-active' : ''}}">
			<a href="{{url('/home')}}" class="c-link dropdown-toggle">Home</a>
        </li>
        <li class="{{Request::is('form*') ? 'c-active' : ''}}">
		    <a href="{{url('/form')}}" class="c-link dropdown-toggle">Request a Service<span class="c-arrow c-toggler"></span></a>
		</li>
		<li class="{{Request::is('trackticket*') ? 'c-active' : ''}}">
		    <a href="{{url('/trackticket')}}" class="c-link dropdown-toggle">Track Progress<span class="c-arrow c-toggler"></span></a>
        </li>
		<li class="{{Request::is('faq*') ? 'c-active' : ''}}">
			<a href="{{url('/faq')}}" class="c-link dropdown-toggle">FAQ<span class="c-arrow c-toggler"></span></a>
		</li>
		<!-- <li class="{{Request::is('staffticketlist*') ? 'c-active' : ''}}">
			<a href="{{url('/staffticketlist')}}" class="c-link dropdown-toggle">ITS STAFF<span class="c-arrow c-toggler"></span></a>
		</li> -->
		@if(!Auth::check())
		<li class="{{Request::is('login*') ? 'c-active' : ''}}">
			<a href="{{url('/login')}}" class="c-link">LOGIN</a>
		</li>
		@endif
		@if(Auth::check())
		<li>
			<a href="{{ route('logout') }}" class="c-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            	Logout
            </a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>
		@endif
	</ul>
</nav>
<!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
				<!-- END: HOR NAV -->		
			</div>			
			<!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
		</div>
	</div>
</header>
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->

	<!-- BEGIN: PAGE CONTAINER -->
	<div class="c-layout-page">
		<!-- BEGIN: PAGE CONTENT -->
		<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-1 -->
        @yield('content')
	</div>
	<!-- END: PAGE CONTAINER -->

	<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

	<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
	<div class="c-prefooter">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="c-container c-first">
						<div class="c-content-title-1">
							<h3 class="c-font-uppercase c-font-bold c-font-white">RMIT Service & Support</h3>
							<div class="c-line-left hide"></div>
							<p class="c-text c-font-grey-3">
							Information Technology Services (ITS) provides RMIT University with information 
							and communication technology in support of RMIT’s research, 
							learning teaching and administrative activities.</p>
						</div>
						<ul class="c-links">
							<li><a href="/wda_assignmentt/public/home" class="c-font-grey-1">Home</a></li>
							<li><a href="/wda_assignmentt/public/aboutits" class="c-font-grey-1">About ITS</a></li>
							<li><a href="/wda_assignmentt/public/terms" class="c-font-grey-1">Terms & Conditions</a></li>
							<li><a href="/wda_assignmentt/public/privacy" class="c-font-grey-1">Privacy</a></li>
							<li><a href="/wda_assignmentt/public/disclaimer" class="c-font-grey-1">Disclaimer</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="c-container">
						<div class="c-container c-first">
							<div class="c-content-title-1">
								<h3 class="c-font-uppercase c-font-bold c-font-white">ITS</h3>
							<div class="c-line-left hide"></div>
						</div>
						<ul class="c-links">
								<li class="c-font-grey-3">General Computing</li>
								<li class="c-font-grey-3">Research, Teaching and Admin</li>
								<li class="c-font-grey-3">System Hardware and Software</li>
								<li class="c-font-grey-3">Password and Security</li>
								<li class="c-font-grey-3">Feedback</li>
						</ul>
					</div>
					<div class="c-blog">		
						<a href="#" class="btn btn-md c-btn-border-1x c-theme-btn c-btn-uppercase c-btn-square c-btn-bold c-read-more hide">Read More</a>
					</div>
					</div>
				</div>
			
				<div class="col-md-4">
					<div class="c-container c-last">
						<div class="c-content-title-1">
							<h3 class="c-font-uppercase c-font-bold c-font-white">Contact us</h3>
							<div class="c-line-left hide"></div>
							<p class="c-font-grey-3">Hours: Monday to Friday 8.30am - 5.30pm, Australian Eastern Standard Time.</p>
						</div>
	
						<ul class="c-address">
							<li class="c-font-grey-3"><i class="icon-pointer c-theme-font"></i> RMIT University, Melbourne VIC 3001 Australia</li>
							<li class="c-font-grey-3"><i class="icon-call-end c-theme-font"></i> +61 3 9925 2000</li>
                            <li class="c-font-grey-3"><i class="icon-envelope c-theme-font"></i> info@rmit.edu.au</li>
						</ul>
					</div>
				</div>
			</div>		
		</div>
	</div>
	<div class="c-postfooter">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 c-col">
					<p class="c-copyright c-font-grey">2017 &copy; RMIT University
						<span class="c-font-grey-3">All Rights Reserved.</span>
					</p>
				</div>
							</div>
		</div>
	</div>
</footer><!-- END: LAYOUT/FOOTERS/FOOTER-5 -->

	<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
	<script src="assets/plugins/jquery.min.js" type="text/javascript" ></script>
	<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
	<script src="assets/plugins/jquery.easing.min.js" type="text/javascript" ></script>
	<script src="assets/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
	<script src="assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>

	<!-- END: CORE PLUGINS -->

			<!-- BEGIN: LAYOUT PLUGINS -->
			<script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
			<script src="assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
			<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
			<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
			<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
			<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
			<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
			<script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
			<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
			<script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
			<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
			<script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
			<script src="assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
			<script src="assets/plugins/typed/typed.min.js" type="text/javascript"></script>
			<script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
			<script src="assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
				<!-- END: LAYOUT PLUGINS -->
	
	<!-- BEGIN: THEME SCRIPTS -->
	<script src="assets/base/js/components.js" type="text/javascript"></script>
	<script src="assets/base/js/components-shop.js" type="text/javascript"></script>
	<script src="assets/base/js/app.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {    
		App.init(); // init core    
	});
	</script>
	<!-- END: THEME SCRIPTS -->

			<!-- BEGIN: PAGE SCRIPTS -->
								<script src="assets/demos/default/js/scripts/revo-slider/slider-1.js" type="text/javascript"></script>
											<script src="assets/plugins/isotope/isotope.pkgd.min.js" type="text/javascript"></script>
											<script src="assets/plugins/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>
											<script src="assets/plugins/isotope/packery-mode.pkgd.min.js" type="text/javascript"></script>
											<script src="assets/plugins/ilightbox/js/jquery.requestAnimationFrame.js" type="text/javascript"></script>
											<script src="assets/plugins/ilightbox/js/jquery.mousewheel.js" type="text/javascript"></script>
											<script src="assets/plugins/ilightbox/js/ilightbox.packed.js" type="text/javascript"></script>
											<script src="assets/demos/default/js/scripts/pages/isotope-gallery.js" type="text/javascript"></script>
							<!-- END: PAGE SCRIPTS -->
		<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>