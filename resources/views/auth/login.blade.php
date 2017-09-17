@extends('template.mastertemplate')
@section('content')


<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->
<div class="c-layout-breadcrumbs-1 c-bgimage-full   c-fonts-uppercase c-fonts-bold   c-bg-img-center" style="padding-top:100px!important; padding-bottom:25px; padding-left: 5px!important;
    padding-right: 5px!important; background-image: url(assets/base/img/content/backgrounds/bg-92.jpg)">
		<div class="c-breadcrumbs-wrapper">
			<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim c-opacity-09">LOGIN</h3>
				<h4 class="c-font-white c-font-thin c-opacity-08">Frequently asked questions</h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li><a href="/wda_assignmentt/public/home" class="c-font-white">Home</a></li>
				<li class="c-font-white">/</li>
				<li><a href="/wda_assignmentt/public/faq" class="c-font-white">Login</a></li>
											
			</ul>
			</div>
		</div>
	</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-4 -->
	
	<!-- BEGIN: ACCORDIONS -->
<div class="c-content-box c-size-lg c-bg-grey-1">
	<div class="container">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold">LOGIN</h3>
            <div class="c-line-center c-theme-bg"></div>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        Don't have an account? Register here!
                                    </a>
                                </div>
                            </div>
        </form>
	</div>
</div>
@endsection