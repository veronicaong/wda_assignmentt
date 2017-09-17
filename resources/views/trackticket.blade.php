@extends('template.mastertemplate')
@section('content')

<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->
<div class="c-layout-breadcrumbs-1 c-bgimage-full   c-fonts-uppercase c-fonts-bold   c-bg-img-center" style="padding-top:100px!important; padding-bottom:25px; padding-left: 5px!important;
    padding-right: 5px!important; background-image: url(assets/base/img/content/backgrounds/bg-92.jpg)">
		<div class="c-breadcrumbs-wrapper">
			<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim c-opacity-09">TRACK YOUR PROGRESS</h3>
				<h4 class="c-font-white c-font-thin c-opacity-08">Track your progress here</h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li><a href="/wda_assignmentt/public/home" class="c-font-white">Home</a></li>
				<li class="c-font-white">/</li>
				<li><a href="#" class="c-font-white">Track Your Progress</a></li>
				<li class="c-font-white"></li>							
			</ul>
			</div>
		</div>
    </div>
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->
<div class="c-content-box c-size-lg c-bg-white">
	<div class="container">
			<div class="c-content-title-1">
				<h3 class="c-center c-font-uppercase c-font-bold">TRACK YOUR PROGRESS</h3>
				<div class="c-line-center c-theme-bg"></div>
			</div>
    <!-- BEGIN: TICKET LIST TABLE -->
    <div class="c-content-panel">
			<div class="c-body">
				<div class="row">
					<div class="col-md-12 c-center">
						{!! Form::open(['url' => 'searchticket', 'method' => 'GET', 'class' =>'form-horizontal' ]) !!}
						<div class="input-group c-square">
							{!!	Form::text('search', null, ['class' => 'form-control  c-square c-theme', 'style' => 'height:37px', 'placeholder' => 'Enter your ticket id.....' ]) !!}	  				
							<span class="input-group-btn">
                                <button class="btn default c-btn-square" type="submit"><i style="margin-top:-5px;" class="c-content-line-icon c-icon-sm c-icon-27"></i></button>
							</span>
						</div>
						<span class="help-block c-font-red">{{$errors->first('search')}}</span> 
						{!! Form::close() !!}
					</div>	
				</div>
			</div>
		</div>
    </div>
</div>
<!-- END: TICKET LIST TABLE -->