@extends('layouts.main_page')

@section('content')
	
	
	<section class="section parallax-container breadcrumbs-wrap" data-parallax-img="{{ asset('one/images/bg-breadcrumbs-1.jpg') }} "><div class="material-parallax parallax"><img src="{{ asset('one/images/bg-breadcrumbs-1.jpg') }} " alt="" style="display: block; transform: translate3d(-50%, 130px, 0px);"></div>
		<div class="parallax-content breadcrumbs-custom context-dark">
			<div class="container">
				<h3 class="breadcrumbs-custom-title">Login and Register</h3>
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Features</a></li>
					<li class="active">Login and Register</li>
				</ul>
			</div>
		</div>
	</section>
	
	
	<section class="section section-variant-1 bg-gray-100">
		<div class="container">
			<div class="row row-50 justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-6">
					<div class="card-login-register" id="card-l-r">
						<div class="card-top-panel">
							<div class="card-top-panel-left">
								<h5 class="card-title card-title-login">Login</h5>
								<h5 class="card-title card-title-register">Register</h5>
							</div>
							
							<div class="card-top-panel-right">
								<span class="card-subtitle">
									<span class="card-subtitle-login">Register now</span>
									<span class="card-subtitle-register">Sign in</span>
								</span>
								<button class="card-toggle" data-custom-toggle="#card-l-r">
									<span class="card-toggle-circle"></span>
								</button>
							</div>
						</div>
						
						
						{{-- авторизация --}}
						<div class="card-form card-form-login">
							
							<form class="rd-form "  method="POST" action="{{ route('login') }}">
								@csrf
								
								<div class="form-wrap">
									<label for="form-login-name-1" class="form-label rd-input-label">{{ __('E-Mail Address') }}</label>
									<input id="form-login-name-1" type="email" class="form-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
									@if ($errors->has('email'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
									
									<span class="form-validation"></span>
								</div>
								<div class="form-wrap">
									
									<label for="form-login-password-1" class="form-label rd-input-label ">{{ __('Password') }}</label>
									
									<input id="form-login-password-1" type="password" class="form-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
									
									@if ($errors->has('password'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
									<span class="form-validation"></span>
								</div>
								
								{{-- <label class="checkbox-inline checkbox-inline-lg checkbox-light">
									<input name="input-checkbox-1" value="checkbox-1" class="checkbox-custom" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
									<span class="checkbox-custom-dummy"></span>
									Remember Me
								</label> --}}

								<label class="checkbox-inline checkbox-inline-lg checkbox-light">
                                        <input class="checkbox-custom" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
								
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
								</a>
								
								<button class="button button-lg button-primary button-block" type="submit">Sign in</button>
							</form>
							
							
							<div class="group-sm group-sm-justify group-middle">
								<a class="button button-google button-icon button-icon-left button-round" href="#">
									<span class="icon fa fa-google-plus"></span>
									<span>Google+</span>
								</a>
								<a class="button button-twitter button-icon button-icon-left button-round" href="#">
									<span class="icon fa fa-twitter"></span>
									<span>Twitter</span>
								</a>
								<a class="button button-facebook button-icon button-icon-left button-round" href="#">
									<span class="icon fa fa-facebook"></span>
									<span>Facebook</span>
								</a>
							</div>
						</div>
						
						{{-- регистрация --}}
						<div class="card-form card-form-register">
							
							{{-- <form class="rd-form " > --}}
							<form  class="rd-form " method="POST" action="{{ route('register') }}">
								@csrf
								<div class="form-wrap">
									<label for="form-register-email" class="form-label rd-input-label">{{ __('E-Mail Address') }}</label>
									<input id="form-register-email" type="email" class="form-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
									@if ($errors->has('email'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
								
								
								<div class="form-wrap">
									<label for="form-login-name-2" class="form-label rd-input-label">{{ __('Name') }}</label>
									<input id="form-login-name-2" type="text" class="form-input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
									@if ($errors->has('name'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>
								
								
								<div class="form-wrap">
									<label for="form-login-password-2" class="form-label rd-input-label">{{ __('Password') }}</label>
									<input id="form-login-password-2" type="password" class="form-input {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
									@if ($errors->has('password'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
								
								
								<div class="form-wrap">
									<label for="form-login-password-3" class="form-label rd-input-label">{{ __('Confirm Password') }}</label>
									<input id="form-login-password-3" type="password" class="form-input" name="password_confirmation" required>
									</div>
								<button class="button button-lg button-primary button-block" type="submit">Create new account</button>
							</form>
							
							
							<div class="group-sm group-sm-justify group-middle">
								<a class="button button-google button-icon button-icon-left button-round" href="#">
									<span class="icon fa fa-google-plus"></span>
									<span>Google+</span>
								</a>
								<a class="button button-twitter button-icon button-icon-left button-round" href="#">
									<span class="icon fa fa-twitter"></span>
									<span>Twitter</span>
								</a>
								<a class="button button-facebook button-icon button-icon-left button-round" href="#">
									<span class="icon fa fa-facebook"></span>
									<span>Facebook</span>
								</a>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection