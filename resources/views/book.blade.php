
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

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


	
</head>

<body class="mt-0">
	
	<div class="main-wrapper">
		<div class="bg-img">
			<img src="assets/img/bg/work-bg-03.png" alt="img" class="bgimg1">
			<img src="assets/img/bg/work-bg-03.png" alt="img" class="bgimg2">
			<img src="assets/img/bg/feature-bg-03.png" alt="img" class="bgimg3">
		</div>
		
		<div class="content">
			<div class="container">
				<div class="row">
					
					<!-- Booking -->
					<div class="col-md-12">
					
						<div class="login-back">
							<a href="service-details.html"><i class="feather-arrow-left"></i> Back</a>
						</div>
					
						<!-- Booking Step -->
						<ul class="step-register row">
							<li class="active col-md-4">
								<div class="multi-step-icon">
									<img src="assets/img/icons/calendar-icon.svg" alt="img">
								</div>
								<div class="multi-step-info">
									<h6>Appointment</h6>
									<p>Choose time & date for the service</p>
								</div>
							</li>
							<li class="col-md-4">
								<div class="multi-step-icon">
									<img src="assets/img/icons/wallet-icon.svg" alt="img">
								</div>
								<div class="multi-step-info">
									<h6>Appointment time date</h6>
									<p>Select Payment Gateway</p>
								</div>
							</li>
							<li class="col-md-4">
								<div class="multi-step-icon">
									<img src="assets/img/icons/book-done.svg" alt="img">
								</div>
								<div class="multi-step-info">
									<h6>Done </h6>
									<p>Completion of Booking</p>
								</div>
							</li>
						</ul>
						
						<!-- /Booking Step -->
						
						<!-- Appointment -->
						<div class="booking-service">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<div class="service-book">
										<div class="service-book-img">
											<img src="assets/img/booking.jpg" alt="img">
										</div>
										<div class="serv-profile">
											<span class="badge">GST</span>
											<h2>GST Registration</h2>
											<ul>
												<li class="serv-pro">
													<img src="assets/img/profiles/avatar-01.jpg" alt="img">
													<div class="serv-pro-info">
														<h6>CA Abhishek Bansal</h6>
														<!-- <p class="serv-review"><i class="fa-solid fa-star"></i> <span>4.9 </span>(255 reviews)</p> -->
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="row align-items-center">
										<div class="col-md-7 col-sm-6">
											<div class="provide-box">
												<span><i class="feather-phone"></i></span>
												<div class="provide-info">
													<h6>Phone</h6>
													<p>+1 888 888 8888</p>
												</div>
											</div>
											<div class="provide-box">
												<span><i class="feather-mail"></i></span>
												<div class="provide-info">
													<h6>Email</h6>
													<p><a href="https://html.truelysell.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="73071b1c1e12001b1601091116011433160b121e031f165d101c1e">[email&#160;protected]</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-5 col-sm-6">
											<div class="provide-box">
												<span><i class="feather-map-pin"></i></span>
												<div class="provide-info">
													<h6>Address</h6>
													<p>Hanover, Maryland</p>
												</div>
											</div>
											<div class="provide-box">
												<span><img src="assets/img/icons/service-icon.svg" alt="img"></span>
												<div class="provide-info">
													<h6>Service Amount</h6>
													<h5>$150.00 </h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="book-form">
							<!-- <div class="row">
								<div class="col-md-4">		
									<div class="form-group">		
										<label class="col-form-label">City</label>
										<select class="select">
											<option>Select City</option>
											<option>Tornoto</option>
											<option>Texas</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">	
									<div class="form-group">		
										<label class="col-form-label">State</label>					
										<select class="select">
											<option>Select State</option>
											<option>Tornoto</option>
											<option>Texas</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">		
									<div class="form-group">		
										<label class="col-form-label">Country</label>					
										<select class="select">
											<option>Select Country</option>
											<option>US</option>
											<option>UK</option>
										</select>
									</div>
								</div>
							</div> -->
						</div>
						<!-- /Appointment -->
						
						
						<!-- Appointment Date & Time -->
						<div class="row">
                            <div class="col-lg-12">
                             
                                @include('notification.messages')

                            </div>
							<div class="col-lg-4">
                                <form method="POST" action="{{route('store')}}">	
								<div class="book-title">	
									<h5>Appointment Date</h5>
								</div>
                               <input type="datetime-local" name="date" class="form-control"/>
                             
							</div>
							<div class="col-lg-8">	
								<div class="row align-items-center">	
									<div class="col-md-12">	
										<div class="book-title">	
											<h5>Select Consultant</h5>
										</div>
									</div>
									<div class="col-md-4">		
									<div class="form-group">		
										<label class="col-form-label">Counsultant</label>					
										<select name="consultant" class="select">
											<option value="Abhishek Bansal">CA Abhishek Bansal</option>
											<option value="Abubakar Garba">Abubakar Garba</option>
											<option value="Sadiq Khan">Sadiq Khan</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">		
									<div class="form-group">		
										<label class="col-form-label">Select Time</label>					
										<select name="time" class="select">
											<option value="9:30-10:30">9:30-10:30</option>
											<option value="11:30-12:00">11:30-12:30</option>
											<option value="1:00-1:30">1:00-1:30</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
								<div class="form-group">		
										<label  class="col-form-label">Booking Type</label>					
										<select name="type" class="select">
											<option value="online">online</option>
											<option value="offline">offline</option>
											 
										</select>
									</div>
								</div>

                                <div class="col-md-4">
                                    <div class="form-group">		
                                      <input type="hidden" name="service_provider" value="Abubakar Garba" >  
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">		
                                      <input type="hidden" name="price" value="150">  
                                    </div>
                                 </div>
								<div class="col-md-12">		
								<div class="book-submit   text-center">
									 @csrf
								
                                    <input type="submit"  class="btn btn-primary" value="Book Appointment"/>
                               </form>
								</div>
							</div>
								<!-- <div class="row">	
									<div class="col-md-12">	
										<div class="book-title">	
											<h5>Appointment Time</h5>
										</div>
									</div>
								</div> -->
						<!-- 		<div class="token-slot mt-2">
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">09.00 AM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">09.30 AM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">10.00 AM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">10.30 AM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">11.00 AM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">11.30 AM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">12.00 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">12.30 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">01.00 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">01.30 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">02.00 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">02.30 PM</span>
                                       </label>
                                   </div>
									<div class="form-check-inline visits me-0">
										<label class="visit-btns">
											<input type="radio" class="form-check-input" name="appintment">
											<span class="visit-rsn">03.00 PM</span>
										</label>
									</div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">03.30 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">04.00 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">04.30 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">05.00 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">05.30 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">06.00 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">06.30 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">07.00 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">07.30 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">08.00 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">08.30 PM</span>
                                       </label>
                                   </div>
                                   <div class="form-check-inline visits me-0">
                                       <label class="visit-btns">
                                           <input type="radio" class="form-check-input" name="appintment">
                                           <span class="visit-rsn">09.00 PM</span>
                                       </label>
                                   </div>
								</div> -->
								<!-- <div class="book-submit text-end">
									<a href="#" class="btn btn-secondary">Cancel</a>
									<a href="booking-payment.html" class="btn btn-primary">Book Appointment</a>
								</div>
								 -->
								
							</div>
						</div>
						<!-- /Appointment Date & Time -->
						
					</div>
					<!-- /Booking -->
					
				</div>
			</div>
		</div>
		
		<!-- Cursor -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /Cursor -->	
		
	</div>
	
	<!-- jQuery -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Fearther JS -->
	<script src="{{asset('assets/js/feather.min.js')}}"></script>

	<!-- select CSS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- Datetimepicker JS -->
    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

    <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    
    <script type="text/javascript">
        $(function(){
   
           $('#datetimepicker').datetimepicker();
   
   
        });
       
   
   
       </script>
   

	<!-- Custom JS -->
	<script src="{{asset('assets/js/script.js')}}"></script>
    
    
	
</body>
 
</html>