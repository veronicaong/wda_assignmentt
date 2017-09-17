@extends('template.mastertemplate')
@section('content')

		<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->
    <div class="c-layout-breadcrumbs-1 c-bgimage-full   c-fonts-uppercase c-fonts-bold   c-bg-img-center" style="padding-top:100px!important; padding-bottom:25px; padding-left: 5px!important;
    padding-right: 5px!important; background-image: url(assets/base/img/content/backgrounds/bg-92.jpg)">
		<div class="c-breadcrumbs-wrapper">
			<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim c-opacity-09">Ticket Summary</h3>
				<h4 class="c-font-white c-font-thin c-opacity-08">Page Sub Title Goes Here</h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li><a href="/wda_assignmentt/public/home" class="c-font-white">Home</a></li>
				<li class="c-font-white">/</li>
				<li><a href="#" class="c-font-white">Request a Service</a></li>
				<li class="c-font-white">/</li>
				<li><a href="breadcrumbs-bgimage-6.html" class="c-font-white">Ticket Summary</a></li>						
			</ul>
			</div>
		</div>
    </div>
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->


    <!-- BEGIN: PAGE CONTENT -->
	<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
    	<div class="container">
	    	<div class="c-shop-order-complete-1 c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
		    	<div class="c-content-title-1">
                </br>
				<h3 class="c-center c-font-uppercase c-font-bold">Thank you for submitting your request!</h3>
                <div class="c-line-center c-theme-bg"></div>
                <p class="c-center">Our customer support team will review your submission and get back to you in 3 to 5 business days. </br>
                If you have any questions, please contact our email info@rmit.edu.au
                </br>Please press details button below to see your ticket details</p>
				</div>
			
		  	<div class="form-group c-margin-t-40">
				<div class="col-md-4 c-center col-md-offset-4">
					<a href="{{url('/ticketdetails')}}" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Details</a> 
				</div>
			</div>
                </br></br></br>
			</div>
            <!-- END: ORDER SUMMARY -->
            </div>
        </div>
    </div>
</div>











