@extends('template.mastertemplate')
@section('content')

<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->
<div class="c-layout-breadcrumbs-1 c-bgimage-full   c-fonts-uppercase c-fonts-bold   c-bg-img-center" style="padding-top:100px!important; padding-bottom:25px; padding-left: 5px!important;
    		padding-right: 5px!important; background-image: url(assets/base/img/content/backgrounds/bg-92.jpg)">
		<div class="c-breadcrumbs-wrapper">
			<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim c-opacity-09">REQUEST A SERVICE</h3>
				<h4 class="c-font-white c-font-thin c-opacity-08">Page Sub Title Goes Here</h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li><a href="/wda_assignmentt/public/home" class="c-font-white">Home</a></li>
				<li class="c-font-white">/</li>
				<li><a href="/wda_assignmentt/public/form" class="c-font-white">Request a Service</a></li>
			</ul>
			</div>
		</div>
    </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->
    

    <div class="col-md-12">	

<div class="container">
				<div class="c-content-panel">
					<div class="c-body">
						<div class="c-content-title-1 c-margin-b-20 clearfix">
							<h3 class="c-center c-font-uppercase c-font-bold">Request a Service</h3>
							<div class="c-line-center c-theme-bg"></div>
						</div>
						<!-- <form class="form-horizontal" action="{{url('/formticket')}}" method='POST'> -->
						{!! Form::open(['url' => 'formticket', 'method' => 'POST', 'class' =>'form-horizontal' ]) !!}
						<!--ini buat security hmmm -->
						<!-- {{csrf_field()}} -->
							<div class="form-group">
								   {!! Form::label('firstName', 'First Name', ['class' => 'col-md-4 control-label']) !!}
							   	<div class="col-md-6">
							   		<!-- <input type="text" name="first_name" class="form-control  c-square c-theme" id="inputEmail3" placeholder="First Name"> -->
									{!!	Form::text('first_name', null, ['class' => 'form-control  c-square c-theme', 'id' => 'firstName', 'placeholder' => 'First Name' ]) !!}	  
									<span class="help-block c-font-red">{{$errors->first('first_name')}}</span>
								  </div>
                            </div>
                            
                            <div class="form-group">
									{!! Form::label('lastName', 'Last Name', ['class' => 'col-md-4 control-label']) !!}
							   	<div class="col-md-6">
									{!!	Form::text('last_name', null, ['class' => 'form-control  c-square c-theme', 'id' => 'lastName', 'placeholder' => 'Last Name' ]) !!}	  
									<span class="help-block c-font-red">{{$errors->first('last_name')}}</span>  
								  </div>
                            </div>
                            
                            <div class="form-group">
								<!-- <label for="inputEmail" class="col-md-4 control-label">Email</label> -->
								{!! Form::label('inputEmail', 'Email', ['class' => 'col-md-4 control-label']) !!}
							   	<div class="col-md-6">
									{!!	Form::email('email', null, ['class' => 'form-control  c-square c-theme', 'id' => 'inputEmail', 'placeholder' => 'example@gmail.com' ]) !!}	     
									<!-- <input type="email" name="email" class="form-control  c-square c-theme" id="inputEmail3" placeholder="Email"> -->
							  		<span class="help-block c-font-red">{{$errors->first('email')}}</span>
							 	 </div>
							</div>
                            
							<!-- <div class="form-group">
							   	<label for="inputPassword3" class="col-md-4 control-label">Password</label>
							   	<div class="col-md-6">
							   		<input type="password" class="form-control  c-square c-theme" id="inputPassword3" placeholder="Password">
							   	</div>
							</div> -->
							<div class="form-group">
								{!! Form::label('operatingSystem', 'Operating System', ['class' => 'col-md-4 control-label']) !!}
							   	<!-- <label for="inputPassword3" class="col-md-4 control-label">Operating System</label> -->
							   	<div class="col-md-6">
									{!! Form::select('os_info', ['Windows' => 'Windows', 'Linux' => 'Linux', 'OS X' => 'OS X', 'Ubuntu' => 'Ubuntu', 'Debian' => 'Debian'], null, 
									['placeholder' => 'Select operating systems', 'class' => 'form-control c-square c-theme', 'id' => 'operatingSystem' ]) !!}
							   		<!-- <select name="os_info" class="form-control  c-square c-theme">
									  	<option value="Windows">Windows</option>
								  		<option value="Linux">Linux</option>
									  	<option value="OS X">OS X</option>
									  	<option value="Ubuntu">Ubuntu</option>
									  	<option value="Debian">Debian</option>
									</select> -->
									<span class="help-block c-font-red">{{$errors->first('os_info')}}</span>
							    </div>
                            </div>
                            
                            <div class="form-group">
								{!! Form::label('softwareIssue', 'Software Issue', ['class' => 'col-md-4 control-label']) !!}
							   	<!-- <label for="inputPassword3" class="col-md-4 control-label">Software Issue</label> -->
							   	<div class="col-md-6">
									{!!	Form::text('software_issue', null, ['class' => 'form-control  c-square c-theme', 'id' => 'softwareIssue', 'placeholder' => 'Software Issue' ]) !!}	  
									<!-- <input type="text" name="software_issue" class="form-control  c-square c-theme" id="inputEmail3" placeholder="Software Issue"> -->
							 		<span class="help-block c-font-red">{{$errors->first('software_issue')}}</span>  
							   </div>
                            </div>
                           
							<div class="form-group">
								{!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
							   	<!-- <label for="inputPassword3" class="col-md-4 control-label">Description</label> -->
							   	<div class="col-md-6">
									{!!	Form::textarea('description', null, ['class' => 'form-control  c-square c-theme', 'id' => 'description', 'placeholder' => 'Enter your message..' ]) !!}	  
							   		<!-- <textarea name="description" class="form-control  c-square c-theme" rows="3" placeholder="Enter your message.."></textarea> -->
							  		<span class="help-block c-font-red">{{$errors->first('description')}}</span> 
							   </div>
                            </div>
                             <div class="form-group c-margin-t-40">
							   	<div class="col-sm-offset-8">
									{!! Form::submit('Cancel', ['class' =>'btn btn-default c-btn-square c-btn-uppercase c-btn-bold']) !!}
									{!! Form::submit('Submit', ['class' =>'btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold']) !!}
									<!-- <button type="submit" class="btn btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancel</button> -->
							   		<!-- <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</button>  -->
							   		
							  	</div> 
							</div>

							</div>
						{!! Form::close() !!}
					</div>
                </div>
</div>
@endsection