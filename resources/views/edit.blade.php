
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

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
	
	<!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}">

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
						<a href="{{url('/')}}" class="navbar-brand logo">
							<img src="{{asset('assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
						</a>
						<a href="{{url('/')}}" class="navbar-brand logo-small">
							<img src="{{asset('assets/img/logo-small.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{url('/')}}" class="menu-logo">
								<img src="{{asset('assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
						</div>
					<!-- 	<ul class="main-nav">
							<li class="has-submenu">
								<a href="javascript:void(0);">Home <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="index.html">Home 1</a></li>
									<li><a href="index-2.html">Home 2</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="javascript:void(0);">Services <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="service-grid.html">Service Grid</a></li>
									<li><a href="service-list.html">Service List</a></li>
									<li><a href="search.html">Search</a></li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Providers</a>
										<ul class="submenu">
											<li><a href="providers.html">Providers List</a></li>
											<li><a href="provider-details.html">Providers Details</a></li>
										</ul>
									</li>
									<li><a href="service-information.html">Create Service</a></li>
								</ul>
							</li>
							<li class="has-submenu active">
								<a href="#">Customers <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="customer-dashboard.html">Dashboard</a></li>
									<li><a href="customer-booking.html">Booking</a></li>
									<li><a href="customer-favourite.html">Favorites</a></li>
									<li><a href="customer-wallet.html">Wallet</a></li>
									<li><a href="customer-reviews.html">Reviews</a></li>
									<li><a href="customer-chat.html">Chat</a></li>
									<li class="active"><a href="customer-profile.html">Settings</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Providers <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="provider-dashboard.html">Dashboard</a></li>
									<li><a href="provider-services.html">My Services</a></li>
									<li><a href="provider-booking.html">Booking</a></li>
									<li><a href="provider-payout.html">Payout</a></li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Settings</a>
										<ul class="submenu">
											<li><a href="provider-appointment-settings.html">Appointment Settings</a></li>
											<li><a href="provider-profile-settings.html">Account Settings</a></li>
											<li><a href="provider-social-profile.html">Social Profiles</a></li>
											<li><a href="provider-security-settings.html">Security</a></li>
											<li><a href="provider-plan.html">Plan & Billings</a></li>
											<li><a href="provider-notifcations.html">Notifications</a></li>
											<li><a href="provider-connected-apps.html">Connected Apps</a></li>
											<li><a href="#" data-bs-toggle="modal" data-bs-target="#del-account">Delete Account</a></li>
										</ul>
									</li>
									<li><a href="provider-availability.html">Availability</a></li>
									<li><a href="provider-holiday.html">Holidays & Leave</a></li>
									<li><a href="provider-coupons.html">Coupons</a></li>
									<li><a href="provider-offers.html">Offers</a></li>
									<li><a href="provider-reviews.html">Reviews</a></li>
									<li><a href="provider-earnings.html">Earnings</a></li>
									<li><a href="provider-chat.html">Chat</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="about-us.html">About</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="how-it-works.html">How It Works</a></li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Error Page</a>
										<ul class="submenu">
											<li><a href="error-404.html">404 Error</a></li>
											<li><a href="error-500.html">500 Error</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Authentication</a>
										<ul class="submenu">
											<li><a href="choose-signup.html">Signup Choose </a></li>
											<li><a href="user-signup.html">Customer Signup</a></li>
											<li><a href="provider-signup.html">Provider Signup</a></li>
											<li><a href="login.html">Login</a></li>
											<li><a href="reset-password.html">Reset Password</a></li>
											<li><a href="password-recovery.html">Password Update</a></li>
											<li><a href="phone-otp.html">Phone OTP</a></li>
											<li><a href="email-otp.html">Email OTP</a></li>
											<li><a href="free-trial.html">Free Trial</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Booking</a>
										<ul class="submenu">
											<li><a href="booking.html">Booking</a></li>
											<li><a href="booking-payment.html">Booking Checkout</a></li>
											<li><a href="booking-done.html">Booking Success</a></li>
										</ul>
									</li>
									<li><a href="categories.html">Categories</a></li>
									<li><a href="pricing.html">Pricing Plan</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="maintenance.html">Maintenance</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
									<li><a href="privacy-policy.html">Privacy Policy</a></li>
									<li><a href="terms-condition.html">Terms & Conditions</a></li>
									<li><a href="session-expired.html">Session Expired</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="blog-grid.html">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="login-link">
								<a href="choose-signup.html">Register</a>
							</li>
							<li class="login-link">
								<a href="login.html">Login</a>
							</li>
						</ul> -->
					</div>
					<ul class="nav header-navbar-rht">					
						
						<!-- Language -->
						<li class="nav-item dropdown lang-nav">
							<div class="flag-dropdown">
								<a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#" role="button">
									<i class="feather-globe me-1"></i> <span>EN</span>
								</a>
								<div class="dropdown-menu">
									<a href="javascript:void(0);" class="dropdown-item">
										English
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										French
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										Spanish
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										German
									</a>
								</div>
							</div>
						</li>
						<!-- /Language -->
						
						<!-- Language -->
						<li class="nav-item flag-nav dropdown">
							<div class="flag-dropdown">
								<a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#" role="button">
									<img src="assets/img/flags/us.png" class="rounded-circle me-1" height="16" alt="">  <span>USD</span>
								</a>
								<div class="dropdown-menu">
									<a href="javascript:void(0);" class="dropdown-item">
										<img src="assets/img/flags/us.png" alt="" height="16"> USD
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<img src="assets/img/flags/fr.png" alt="" height="16"> Euro
									</a>
								</div>
							</div>
						</li>
						<!-- /Language -->

						<!-- Chat -->
						<li class="nav-item logged-item msg-nav">
							<a href="customer-chat.html" class="nav-link">
								<img src="assets/img/icons/message-icon.svg" alt="">
							</a>
						</li>
						<!-- /Chat -->

						<!-- Notifications -->
						<li class="nav-item dropdown logged-item noti-nav">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<img src="assets/img/icons/bell-icon.svg" alt="">
							</a>
							<div class="dropdown-menu notify-blk notifications">
								<div class="topnav-dropdown-header">
									<div>
										<span class="notification-title">Notifications</span>
										<select>
											<option>All</option>
											<option>Read</option>
										</select>
									</div>
									<a href="javascript:void(0)" class="clear-noti">Mark all as read <i class="fa-regular fa-circle-check"></i> </a>
								</div>
								<div class="noti-content">
									<ul class="notification-list">
										<li class="notification-message">
											<div class="media d-flex">
												<a href="notification.html">
													<span class="avatar avatar-sm avatar-online flex-shrink-0">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
													</span>
												</a>
												<div class="media-body flex-grow-1">
													<a href="notification.html"><p class="noti-details">Lex Murph <span class="noti-title"> requested access to</span> Computer & Server AMC Service </p></a>
													<div class="notify-btns">
														<button class="btn btn-primary">Accept</button>
														<button class="btn btn-secondary">Cancel</button>
													</div>
													<p class="noti-time"><span class="notification-time">Today 10:04 PM</span></p>
												</div>
											</div>
										</li>
										<li class="notification-message">
											<a href="notification.html">
												<div class="media d-flex">
													<span class="avatar avatar-sm avatar-online flex-shrink-0">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-01.jpg">
													</span>
													<div class="media-body flex-grow-1">
														<p class="noti-details">Ray Arnold <span class="noti-title">left 6 comments on</span> Commercial Painting Services</p>
														<p class="noti-time"><span class="notification-time">Today 9:45 PM</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="notification-message">
											<a href="notification.html">
												<div class="media d-flex">
													<span class="avatar avatar-sm avatar-online flex-shrink-0">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-03.jpg">
													</span>
													<div class="media-body flex-grow-1">
														<p class="noti-details">Dennis Nedry <span class="noti-title">commented on</span> Electric Panel Repairing Service </p>
														<h6>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  commodo consequat..”</h6>
														<p class="noti-time"><span class="notification-time">Yesterday 8:17 AM</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="notification-message">
											<a href="notification.html">
												<div class="media d-flex">
													<span class="avatar avatar-sm avatar-online flex-shrink-0">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-04.jpg">
													</span>
													<div class="media-body flex-grow-1">
														<p class="noti-details">John Hammond <span class="noti-title">has booked your</span> House Cleaning Services </p>
														<p class="noti-time"><span class="notification-time">Last Wednesday at 11:15 AM</span></p>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="topnav-dropdown-footer">
									<a href="notification.html">View More <img src="assets/img/icons/circle-icon.svg" alt=""></a>
								</div>
							</div>
						</li>
						<!-- /Notifications -->
                
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow account-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<div class="user-infos">
									<span class="user-img">
										@if($user->profile_pic)
										
										<img src="/storage/banner_img/{{$user->profile_pic}}" class="rounded-circle" alt=""/>
									    @endif
									</span>
									<div class="user-info">
										<h6>{{$user->name}}</h6>
										<p>Demo User</p>
									</div>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end emp">
								<a class="dropdown-item" href="customer-profile.html">
									<i class="feather-user me-2"></i> Profile
								</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                                 </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
							</div>
						</li>
						<!-- /User Menu -->
					</ul>
				</nav>
			</div>
		</header>
		<!-- /Header -->
		
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- Customer Menu -->
					<div class="col-md-4 col-lg-3 theiaStickySidebar">
						<div class="settings-widget">
							<div class="settings-header">
								<div class="settings-img">
									<img src="/storage/banner_img/{{$user->profile_pic}}" alt="user">
								</div>
								<h6>{{$user->name}}</h6>
								<p>Member Since {{$user->created_at->diffForHumans()}}</p>
							</div>
							<div class="settings-menu">
								<ul>
									<li>
										<a href="customer-dashboard.html">
											<i class="feather-grid"></i> <span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="customer-booking.html">
											<i class="feather-smartphone"></i> <span>Bookings</span>
										</a>
									</li>
									<li>
										<a href="customer-favourite.html">
											<i class="feather-heart"></i> <span>Favorites</span>
										</a>
									</li>
									<li>
										<a href="customer-wallet.html">
											<i class="feather-credit-card"></i>  <span>Wallet</span>
										</a>
									</li>
									<li>
										<a href="customer-reviews.html">
											<i class="feather-star"></i> <span>Reviews</span>
										</a>
									</li>
									<li>
										<a href="customer-chat.html">
											<i class="feather-message-circle"></i> <span>Chat</span>
										</a>
									</li>
									<li>
										<a href="customer-profile.html"  class="active">
											<i class="feather-settings"></i> <span>Settings</span>
										</a>
										<ul class="setting-submenu">
											<li>
												<a href="customer-profile.html" class="active">Account</a>
											</li>
											<li>
												<a href="security-settings.html">Security</a>
											</li>
											<li>
												<a href="customer-notifications.html">Notifications</a>
											</li>
											<li>
												<a href="connected-apps.html">Connected Apps</a>
											</li>
											<li>
												<a href="#" data-bs-toggle="modal" data-bs-target="#del-account">Delete Account</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="index.html">
											<i class="feather-log-out"></i> <span>Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Customer Menu -->
					
					<div class="col-md-8 col-lg-9">
                        <form method="POST" action="{{route('update', $user->id)}}" enctype="multipart/form-data">
						<div class="widget-title">
							<h4>Account Settings</h4>
						</div>
						<h6 class="user-title">Profile Picture</h6>
						<div class="pro-picture">
							<div class="pro-img">
								
								<img id="user-img" src="/storage/banner_img/{{$user->profile_pic}}" alt="user">
							  
							</div>
							<div class="pro-info">
								<div class="d-flex">
									<div class="img-upload">
										<i class="feather-upload-cloud me-1"></i>Upload
										<input type="file" name="profile_pic" id="profile_pic">
									</div>
									<!--<a href="#" class="btn btn-remove">Remove</a>-->
								</div>
								<p>*image size should be at least 320px big,and less then 500kb. Allowed files .png and .jpg.</p>
							</div>
						</div>
						<h6 class="user-title">General Information</h6>
						<div class="general-info">
							<div class="row">
                                <div class="col-md-8">
                                     @include('notification.messages')

                                </div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-form-label">Name</label>
										<input type="text" name="name" class="form-control" value="{{$user->name}}">
									</div>
								</div>
								<!--<div class="col-md-6">
									<div class="form-group">
										<label class="col-form-label">User Name</label>
										<input type="text" class="form-control" placeholder="Enter your user name">
									</div>
								</div>-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-form-label">Email</label>
										<input type="email" name="email" class="form-control"  value="{{$user->email}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-form-label">Mobile Number</label>
										<input type="text" class="form-control"name="phone" value="{{$user->phone}}">
									</div>
								</div>
							
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-form-label">Date of birth</label>
										<div class="form-icon">
                                           
											<span class="cus-icon"><i class="feather-calendar"></i></span>
                                        <input type="text" class="form-control" name="date_of_birth" @if($user->date_of_birth) value="{{$user->date_of_birth}}" @else placeholder="DD/MM/YYYY" @endif>
                                        </div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-form-label d-block">Your Bio <span class="brief-bio float-end">Brief description for your profile. URLs are hyperlinked.</span></label>
										<textarea class="form-control" rows="5" name="bio" @if($user->bio)>{{$user->bio}} @endif</textarea>
									</div>
								</div>
							</div>
						</div>
						<!--<h6 class="user-title">Address </h6>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-form-label">Address<span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Enter your address">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Country<span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Enter your state">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">State<span class="text-danger">*</span></label>
									<input type="email" class="form-control" placeholder="Enter your state">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">City<span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Enter your city">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Postal Code<span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Enter your postal code">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Currency Code</label>
									<select class="select">
										<option>Choose Currency</option>
										<option>Eur</option>
										<option>Aud</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Language<span class="text-danger">*</span></label>
									<input class="input-tags form-control" type="text" data-role="tagsinput"  name="specialist" value="English,French" id="specialist">
								</div>
							</div>
						</div>-->
						<div class="acc-submit">
							<!--<a href="#" class="btn btn-secondary">Cancel</a>-->
							<input type="submit" class="btn btn-primary" value="Save Changes"/>
						</div>
                        @csrf
                        </form>
					</div>
							
				</div>
				
			</div>
		</div>
		
		<!-- Delete Account -->
		<div class="modal fade custom-modal" id="del-account">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-bottom-0 justify-content-between">
						<h5 class="modal-title">Delete Account</h5>
						<button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
					</div>
					<div class="modal-body pt-0">
						<div class="write-review">
							<form action="https://html.truelysell.com/template3/login.html">
								<p>Are you sureyou want to delete This Account? To delete your account, Type your password.</p>
								<div class="form-group">
									<label class="col-form-label">Password</label>
									<div class="pass-group">
										<input type="password" class="form-control pass-input" placeholder="*************">
										<span class="toggle-password feather-eye"></span>
									</div>
								</div>
								<div class="modal-submit text-end">
									<a href="#" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
									<button type="submit" class="btn btn-danger">Delete Account</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Account -->
		
		<!-- Cursor -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /Cursor -->	
		
	</div>

	
	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Fearther JS -->
	<script src="{{asset('assets/js/feather.min.js')}}"></script>
	
	<!-- select JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- Datetimepicker JS -->
    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

	<!-- Sticky Sidebar JS -->
	<script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
	<script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>
     
    <script>
           
           $(function(){

                $('#profile_pic').change(function(){
                   var input = this;
                    var url = $(this).val();
                    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                   if(input.files  && input.files[0] && (ext=="gif" || ext == "png" || ext=="jpeg" || ext=="jpg")) {
                  
                    var reader = new FileReader();
       
                      reader.onload = function(e){
                       
                        //getElementById('#user').setAttribute('src')
                       $('#user-img').attr('src', e.target.result);
       
       
                   }
       
                   reader.readAsDataURL(input.files[0]);
       
               }else{

                $('#user-img').attr('src', '/assets/no_preview.png');
               }
                 

               });
             
       
           }); 
            
       
       
           /* $('#profile_pic').change(function(){
                  
                   readURL(this);
                  
             });*/
       
           
  
            
           </script>  

  
	
	<!-- Custom JS -->
	<script src="{{asset('assets/js/script.js')}}"></script>

 
</body>
 
</html>