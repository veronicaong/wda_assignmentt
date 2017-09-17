@extends('template.mastertemplate')
@section('content')

<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->
<div class="c-layout-breadcrumbs-1 c-bgimage-full   c-fonts-uppercase c-fonts-bold   c-bg-img-center" style="padding-top:100px!important; padding-bottom:25px; padding-left: 5px!important;
    padding-right: 5px!important; background-image: url(assets/base/img/content/backgrounds/bg-92.jpg)">
		<div class="c-breadcrumbs-wrapper">
			<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim c-opacity-09">ITS STAFF</h3>
				<h4 class="c-font-white c-font-thin c-opacity-08">Information Technology Services</h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li><a href="/wda_assignmentt/public/home" class="c-font-white">Home</a></li>
				<li class="c-font-white">/</li>
				<li><a href="#" class="c-font-white">Ticket List</a></li>							
			</ul>
			</div>
		</div>
    </div>
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->
<div class="c-content-box c-size-lg c-bg-white">
<div class="container">
		<div class="c-content-title-1">
			<h3 class="c-center c-font-uppercase c-font-bold">TICKET LIST</h3>
			<div class="c-line-center c-theme-bg"></div>
			<h3 class="c-left ">REQUESTED ITEMS</h3>
        </div>


<!-- BEGIN: TICKET LIST TABLE -->
<div class="c-content-panel">
			<div class="c-body">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
                                    <th>#Ticket ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Software Issue</th>
                                    <th>Operating Systems</th>
                                    <th>Request Date</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>

								@foreach($ticketlist as $ticket)
								<tr>
                                    <th scope="row">{{$ticket->ticket_id}}</th>
                                    <td>{{$ticket->user->first_name}}</td>
                                    <td>{{$ticket->user->last_name}}</td>
                                    <td>{{$ticket->user->email}}</td>
									<td>{{$ticket->software_issue}}</td>
                                    <td>{{$ticket->os_info}}</td>   
									<td>{{$ticket->created_at}}</td>
									{!! Form::open(['url' => 'updatestatus', 'method' => 'POST', 'class' =>'form-horizontal' ]) !!}
									<td>
                                        <select name='status' class="form-control  c-square c-theme">
                                            <option value="PENDING" {{ $ticket->ticket_status == 'PENDING' ? 'selected' : ''  }}>Pending</option>
                                            <option value="IN PROGRESS" {{ $ticket->ticket_status == 'IN PROGRESS' ? 'selected' : ''  }}>In Progress</option>
                                            <option value="UNRESOLVED" {{ $ticket->ticket_status == 'UNRESOLVED' ? 'selected' : ''  }}>Unresolved</option>
                                            <option value="RESOLVED" {{ $ticket->ticket_status == 'RESOLVED' ? 'selected' : ''  }}>Resolved</option>
										</select>
										<span class="help-block c-font-red">{{$errors->first('status')}}</span>
									</td>
									{!! Form::hidden('ticket_id', $ticket->ticket_id) !!}
									<td>
										<a href="{{url('/searchticket?search=' . $ticket->display_id)}}" class="btn c-btn-red c-btn-square c-btn-uppercase c-btn-bold">VIEW</a>
										<br/><br/>
										<button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">SAVE</button> 
									</td>
									{!! Form::close() !!}
								</tr>
								@endforeach
								
							
								</tbody>
                            </table>
                            <!--SAVE BUTTON -->
                            <div class="form-group c-margin-t-40">
					        	<div class="col-md-8 c-right col-md-offset-4">
					   	    	
					 	    </div>
						</div>
						</div>
					</div>
				</div>
			</div>
        </div>
     </div>
</div>
<!-- END: TICKET LIST TABLE -->