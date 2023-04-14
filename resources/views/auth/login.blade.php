

<!DOCTYPE html>
<html lang="en">

 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>trueconsultant24.com/</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}"> 
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

	<!-- Fearther CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/feather.css')}}">

	<!-- select CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
		
	<!-- Owl carousel CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	
	<!-- Aos CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
</head>

<body>

	
	<div class="main-wrapper">
	
		<!-- Header -->
		<header class="header">
			<div class="container">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.html" class="navbar-brand logo">
							Trueconsultant24
							<!-- <img src="assets/img/logo.svg" class="img-fluid" alt="Logo"> -->
						</a>
						<a href="index.html" class="navbar-brand logo-small">
							<img src="assets/img/logo-small.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
						</div>
						<ul class="main-nav">
							<li class="has-submenu active">
								<a href="javascript:void(0);">Home  </a>
								 
							</li>
							<li class="has-submenu">
								<a href="javascript:void(0);">Services <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="#">GST Registration</a></li>
										<li><a href="#">GST Registration</a></li>
										<li><a href="#">GST Registration</a></li>
									 
										<li><a href="#">GST Registration</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Customers <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="customer-dashboard.html">Dashboard</a></li>
									<li><a href="customer-booking.html">Booking</a></li>
									 
									<li><a href="customer-profile.html">Settings</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Cunsultants <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="provider-dashboard.html">CA Abhishek</a></li>
									<li><a href="provider-dashboard.html">CA Abhishek</a></li>
									<li><a href="provider-dashboard.html">CA Abhishek</a></li>
									<li><a href="provider-dashboard.html">CA Abhishek</a></li>
								</ul>
							</li>
							   
							<li class="login-link">
								<a href="{{url('/register')}}">Register</a>
							</li>
							<li class="login-link">
								<a href="{{url('/login')}}">Login</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item">
							<a class="nav-link header-reg" href="{{url('/register')}}">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="{{url('/login')}}"><i class="fa-regular fa-circle-user me-2"></i>Login</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- /Header -->
		
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-6 mx-auto">
						<div class="login-wrap">
							<div class="login-header">
								<h3>Login</h3>
								
								
							</div>
							
							<!-- Login Form -->
							<form method="POST" action="{{ route('login') }}">
								<div class="log-form">
									<div class="form-group">
										<label class="col-form-label">E-mail</label>
										<input type="text" name="email" class="form-control rounded-left @error('email') is-invalid @enderror" placeholder="example@email.com">
									    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                           @enderror
                                    </div>
									<div class="form-group">
										<label class="col-form-label d-block">Password</label>
										<div class="pass-group">
											<input type="password" name="password" class="form-control pass-input form-control rounded-left @error('password') is-invalid @enderror" placeholder="*************">
											<span class="toggle-password feather-eye"></span>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                           @enderror
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="char-length">
												<p>Must be 6 Characters at Least</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-md-end">
												<a class="forgot-link" href="password-recovery.html">Forgot password?</a>
											</div>
										</div>
									</div>
										<div class="row">
										<div class="col-6">
											<label class="custom_check">
												<input type="checkbox" name="rememberme"  class="rememberme">
												<span class="checkmark"></span>Remember Me
											</label>
										</div>
										<div class="col-6 text-end">
											<label class="custom_check">
												<input type="checkbox" name="loginotp"  class="loginotp">
												<span class="checkmark"></span>Login with OTP
											</label>
										</div>
									</div>
								</div>
								<button class="btn btn-primary w-100 login-btn" type="submit">Login</button>
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">Or, Login with your email</span>
								</div>
								<div class="social-login">
									<a href="#" class="btn btn-google w-100"><img src="assets/img/icons/google.svg" class="me-2" alt="img">Login with Google</a>
									<a href="#" class="btn btn-google w-100"><img src="assets/img/icons/fb.svg" class="me-2" alt="img">Login with Facebook</a>
								</div>
								<p class="no-acc">Don't have an account ?  <a href="{{url('/register')}}">Register</a></p>
							      @csrf
                            </form>
							<!-- /Login Form -->
											
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<!-- Cursor -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /Cursor -->	
		
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{('assets/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Fearther JS -->
	<script src="{{('assets/js/feather.min.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{('assets/js/script.js')}}"></script>
	
</body>
 
</html>