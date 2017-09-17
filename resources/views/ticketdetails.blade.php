
@extends('template.mastertemplate')
@section('content')

		<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->
    <div class="c-layout-breadcrumbs-1 c-bgimage-full   c-fonts-uppercase c-fonts-bold   c-bg-img-center" style="padding-top:100px!important; padding-bottom:25px; padding-left: 5px!important;
    padding-right: 5px!important; background-image: url(assets/base/img/content/backgrounds/bg-92.jpg)">
		<div class="c-breadcrumbs-wrapper">
			<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim c-opacity-09">Ticket Details</h3>
				<h4 class="c-font-white c-font-thin c-opacity-08">Page Sub Title Goes Here</h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li><a href="/wda_assignment/public/home" class="c-font-white">Home</a></li>
				<li class="c-font-white">/</li>
				<li><a href="#" class="c-font-grey-4">Ticket Details</a></li>					
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
				<h3 class="c-center c-font-uppercase c-font-bold">Ticket Details</h3>
                <div class="c-line-center c-theme-bg"></div>
                <p class="c-center">Below is the summary of your submission:</p>
			</div>
			
			<!-- BEGIN: ORDER SUMMARY -->
			<div class="row c-order-summary c-left">
                <table class="table table-borderless table-condensed">
								
								<tbody>
                                	<tr>
									<th scope="row">Ticket ID:</th>
									<td>{{$ticketSummary->display_id}}</td>
									
								</tr>
								<tr>
									<th scope="row">First Name:</th>
									<td>{{$ticketSummary->user->first_name}}</td>
									
								</tr>
								<tr>
									<th scope="row">Last Name:</th>
									<td>{{$ticketSummary->user->last_name}}</td>
									
								</tr>
								<tr>
									<th scope="row">Email:</th>
									<td>{{$ticketSummary->user->email}}</td>
								
                                </tr>
                                <tr>
									<th scope="row">Software Issue:</th>
									<td>{{$ticketSummary->software_issue}}</td>
								
                                </tr>
                                <tr>
									<th scope="row">Operating Systems:</th>
									<td>{{$ticketSummary->os_info}}</td>
                                </tr>
                                  <tr>
									<th scope="row">Description:</th>
									<td>{{$ticketSummary->description}}</td>
								</tr>
								</tbody>
							</table>

				 	<div class="form-group c-margin-t-40">
						<div class="col-md-4 c-center col-md-offset-4">
					   		<a href="{{url('/home')}}" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Back</a> 
					 	</div>
					</div> 
                </br></br></br>
			</div>
            <!-- END: ORDER SUMMARY -->
            </div>
			</div>
			 </br></br>
			<div class="container">
				<div class="form-group">
					<div class="col-md-6">
						
						<div class="c-content-title-1">
						<h2 class="c-left c-font-uppercase c-font-bold">Leave a comment</h2>
						<div class="c-line-left"></div>
						</div>
						{!! Form::open(['url' => 'comments', 'method' => 'POST', 'class' =>'form-horizontal' ]) !!}
						<!-- <form action="#"> -->
							<div class="form-group">
								{!!	Form::email('email', null, ['class' => 'form-control  c-square', 'id' => 'inputEmail', 'placeholder' => 'Your Email' ]) !!}	     	  
								<!-- <input type="text" placeholder="Your Email" class="form-control c-square">      -->
								<span class="help-block c-font-red">{{$errors->first('email')}}</span>
							</div>
							<div class="form-group">
								{!!	Form::textarea('message', null, ['class' => 'form-control  c-square', 'id' => 'comment', 'placeholder' => 'Add a comment...', 'rows' => 8 ]) !!}	  
								<!-- <textarea rows="8" name="message" placeholder="Add a comment..." class="form-control c-square"></textarea> -->
								<span class="help-block c-font-red">{{$errors->first('message')}}</span>
							</div>
							{!! Form::hidden('ticket_id', $ticketSummary->ticket_id) !!}
							<span class="help-block c-font-red">{{$errors->first('ticket_id')}}</span>
							<!-- <div class="form-group">
								<button type="submit" class="btn c-theme-btn c-btn-uppercase btn-md c-btn-sbold btn-block c-btn-square">Submit</button> 
							</div> -->
							{!! Form::submit('Submit', ['class' =>'btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold']) !!}
							<!-- <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</button>  -->
						<!-- </form> -->
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			 </br></br>

					<!--COMMENTS LIST-->
					<div class="container">
						<div class="col-md-6">
							<div class="c-comments">
								<div class="c-content-title-1">
										<h2 class="c-left c-font-uppercase c-font-bold">Comments</h2>
										<div class="c-line-left"></div>
								</div>
							<div class="c-comment-list">
								@foreach($ticketSummary->comments as $com)
								<div class="media">
									<div class="media-body">
										<h4 class="media-heading"><a href="#" class="c-font-bold">{{$com->email}}</a> on <span class="c-date">{{$com->created_at}}</span></h4>
										{!! nl2br($com->comments_description) !!}
									</div>
								</div>
								@endforeach
						
							</div>
						</div>
					</div>
			<!--END COMMENT LIST-->
			</div>
		</div>
    </div>
</div>