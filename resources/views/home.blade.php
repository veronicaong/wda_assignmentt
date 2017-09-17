@extends('template.mastertemplate')
@section('content')

<!-- START REVOLUTION SLIDER 5.0 -->
<section class="c-layout-revo-slider c-layout-revo-slider-1" dir="ltr">
	 <div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile"> 
		<div class="tp-banner rev_slider" data-version="5.0">
			<ul>		
				<!-- SLIDE #1 -->
				<li data-transition="fade">			
					<!-- MAIN IMAGE -->
					<img src="assets/base/img/content/backgrounds/background.jpg"  alt="" >							
					<!-- LAYER NR. 1 -->
					<div class="tp-caption customin customout"  
						data-x="center" 
						data-y="center"
						data-hoffset="" 
						data-voffset="-30"

						data-start="1500" 

						data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;" 
						data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;" 
						data-splitin="none" 
						data-splitout="none" 
						data-elementdelay="0.1" 
						data-endelementdelay="0.1" 
						data-endspeed="600" 
						>
						<h3 class="c-main-title c-font-55 c-font-bold c-font-center c-font-uppercase c-font-dark-4 c-block">
						<br><br><br><br><br><br><br>
						Service & Support
						</h3> 
					</div>
				</li>				
			</ul>				
		</div><!-- END REVOLUTION SLIDER -->
	</div><!-- END OF SLIDER WRAPPER -->
</section><!-- END: LAYOUT/SLIDERS/REVO-SLIDER-1 -->



<!-- BEGIN: CONTENT/FEATURES/FEATURES-1 -->
 <div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="c-content-feature-1 wow animate fadeInUp">
					<div class="c-content-line-icon c-theme c-icon-11"></div>
					<h3 class="c-font-uppercase c-font-bold">Request a Service</h3>
					<p class="c-font-thin">Submit an online request regarding your information technology queries. If you need assistance, please call 9925 8888.</p>
					<div class="c-actions"></br>
						<a href="{{url('/form')}}" class="btn btn-md c-btn-border-2x c-btn-square c-btn-black c-btn-uppercase c-btn-bold c-margin-b-100">Click for more</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4 c-card">
				<div class="c-content-feature-1 wow animate fadeInUp" data-wow-delay="0.4s">
					<div class="c-content-line-icon c-theme c-icon-screen-chart"></div>
					<h3 class="c-font-uppercase c-font-bold">Track your Progress</h3>
					<p class="c-font-thin">You can track your application once you have lodged it. You will need to enter the ticket id printed on your ticket details.</p>
					<div class="c-actions"></br>
						<a href="{{url('/trackticket')}}" class="btn btn-md c-btn-border-2x c-btn-square c-btn-black c-btn-uppercase c-btn-bold c-margin-b-100">Click for more</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="c-content-feature-1 wow animate fadeInUp" data-wow-delay="0.2s">
					<div class="c-content-line-icon c-theme c-icon-1"></div>
					<h3 class="c-font-uppercase c-font-bold">Any Questions?</h3>
					<p class="c-font-thin">If you have any questions regarding the procedure How to Submit a Request. Please refer to the FAQ page for further information.</p>
					<div class="c-actions"></br>
						<a href="{{url('/faq')}}" class="btn btn-md c-btn-border-2x c-btn-square c-btn-black c-btn-uppercase c-btn-bold c-margin-b-100">Click for more</a>
					</div>
				
				</div>
			</div>
			
		</div>
	</div> 
</div> 
<!-- BEGIN: CONTENT/FEATURES/FEATURES-1 -->
  
<!-- END: PAGE CONTENT -->
@endsection







		