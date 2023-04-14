
<!DOCTYPE html>
<html lang="en">
 
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
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

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
</head>

<body class="mt-0">
	
	<div class="main-wrapper">
		<div class="bg-img">
			<img src="assets/img/bg/work-bg-03.png" alt="img" class="bgimg1">
			<img src="assets/img/bg/work-bg-03.png" alt="img" class="bgimg2">
			<img src="assets/img/bg/feature-bg-03.png" alt="img" class="bgimg3">
		</div>
		
		<div class="content book-content">
			<div class="container">
				<div class="row">
					
					<!-- Booking -->
					<div class="col-md-12">
					
						<div class="login-back">
							<a href="service-details.html"><i class="feather-arrow-left"></i> Back</a>
						</div>
					
						<!-- Booking Step -->
					<!-- 	<ul class="step-register row">
							<li class="activate col-md-4">
								<div class="multi-step-icon">
									<span><img src="assets/img/icons/calendar-icon.svg" alt="img"></span>
								</div>
								<div class="multi-step-info">
									<h6>Appointment</h6>
									<p>Choose time & date for the service</p>
								</div>
							</li>
							<li class="active col-md-4">
								<div class="multi-step-icon">
									<span><img src="assets/img/icons/wallet-icon.svg" alt="img"></span>
								</div>
								<div class="multi-step-info">
									<h6>Appointment time date</h6>
									<p>Select Payment Gateway</p>
								</div>
							</li>
							<li class="col-md-4">
								<div class="multi-step-icon">
									<span><img src="assets/img/icons/book-done.svg" alt="img"></span>
								</div>
								<div class="multi-step-info">
									<h6>Done </h6>
									<p>Completion of Booking</p>
								</div>
							</li>
						</ul> -->
						<!-- /Booking Step -->
						
						<!-- Booking Payment -->
						<div class="row">
							<div class="col-lg-10 mx-auto">
								<div class="row">
									<div class="col-lg-6">
										<h5 class="pay-title">Payment Methods</h5>
										<!-- <div class="payment-card payment-bg">
											<div class="payment-head">
												<div class="payment-title">
													<label class="custom_radio">
														<input type="radio" name="payment"  class="card-payment" checked="">
														<span class="checkmark"></span>
													</label>
													<h6>Wallet</h6>
												</div>
											</div>
										</div> -->
									<!-- 	<div class="payment-card">
											<div class="payment-head">
												<div class="payment-title">
													<label class="custom_radio">
														<input type="radio" name="payment" class="card-payment">
														<span class="checkmark"></span>
													</label>
													<h6>Cash On Delivery</h6>
												</div>
											</div>
										</div> -->
										<div class="payment-card">
											<div class="payment-head">
												<div class="payment-title">
													<label class="custom_radio credit-card-option" >
														<input type="radio" name="payment" class="card-payment">
														<span class="checkmark"></span>
													</label>
													<h6>Credit / Debit Card</h6>
												</div>
											</div>
										</div>
										<div class="payment-list" style="display:none">
                                             <div class="row align-items-center">
												<div class="col-md-12">
													<form id="payment-form" method="post" action="/process-payment">
														@csrf
														<input type="number" name="amount" placeholder="Amount">
														<input type="text" name="cardholder-name" placeholder="Cardholder Name">
														<div id="card-element"></div>
														<button type="submit">Submit Payment</button>
													</form>
											  </div>
											</div>


										<!--<div class="row align-items-center">
												 <div class="col-md-12">

                                                     <form method="POST" action="/charge" id="payment-form">
														
															
															
													  <div class="form-group">
														<span id="card-errors"></span>
														<label class="col-form-label">Name on Card</label>
														  <input class="form-control" type="text" name="name" placeholder="Enter Name on Card">
													    </div>
												</div>
												<div class="col-md-8">
													<div class="form-group">
														<label class="col-form-label">Card Number</label>
														<input class="form-control" name="card_number" id="card_number" placeholder="**** **** **** ****" type="text">
													</div>
												</div>
												<div class="col-md-4 text-end">
													<div class="form-group">
														<label class="col-form-label">Expiration month</label>
														<input type="text" name="exp_month" id="exp_month"placeholder="MM" class="form-control" alt="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-form-label">Expiration year</label>
														<input class="form-control" name="exp_year" placeholder="YYYY" id="exp_year" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-form-label">Security code</label>
														<input class="form-control"  name="cvc" placeholder="CVV" id="cvc" type="text">
													</div>
												</div>
											</div>	-->
                                               

										</div>
									</div>
									<!--<div class="col-lg-6">
										<h5 class="pay-title">Booking Summary</h5>
										<div class="summary-box">
											<div class="booking-info">
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
															</li>
															<li class="serv-review"><i class="fa-solid fa-star"></i> <span>4.9 </span>(255 reviews)</li>
															<li class="service-map"><i class="feather-map-pin"></i> Alabama, USA</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="booking-summary">
												<ul class="booking-date">
													<li>Date <span>{{Session::get('date')}}</span></li>
													<li>Time <span>{{Session::get('time')}}</span></li>
													<li>Service Provider <span>{{Session::get('service_provider')}}</span></li>
												</ul>
												<ul class="booking-date">
													<li>Subtotal <span>${{Session::get('price')}}</span></li>
													<li>Coupoun Discount <span>$5.00</span></li>
													<li>Services Charges <span>$3.00</span></li>
												</ul>
												<div class="booking-total">
													<ul class="booking-total-list">
														<li>
															<span>Total</span>
															<span class="total-cost">${{Session::get('price')}}</span>
                                                                
                                                               
                                                          
														</li>
													</ul>
												</div>
											</div>
										</div>		
										<!--<div class="booking-coupon">
											<div class="form-group w-100">
												<div class="coupon-icon">
													<input type="text" class="form-control" placeholder="Coupon Code">
													<span><img src="assets/img/icons/coupon-icon.svg" alt=""></span>
												</div>
											</div>
											<div class="form-group">
												<button  class="btn btn-primary apply-btn">Apply</button>
											</div>	
										</div>	
										<div class="save-offer">
											<p><i class="fa-solid fa-circle-check"></i> Your total saving on this order $5.00</p>
										</div>
										<div class="booking-pay">

											<input type="hidden" name="stripeToken" id="stripeToken">
											
											@csrf
											<a class="submit btn btn-primary btn-pay w-100">Proceed to Pay ${{Session::get('price')}}</a>
											<input type="submit" class="btn btn-primary btn-pay w-100" value="Proceed to pay ${{Session::get('price')}}" > ${{Session::get('price')}}</a>
											<a href="javascript:void(0);" class="btn btn-secondary btn-skip">Skip</a>
									    </form>
									  </div>						
									</div>						
								</div>						
							</div>						
						</div>	--->					
						<!-- /Booking Payment -->
						
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
	<script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Fearther JS -->
	<script src="{{asset('assets/js/feather.min.js')}}"></script>

	<!-- select CSS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
	
	<script src="https://js.stripe.com/v3/elements.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
	
    <script>
		const stripe = Stripe("{{ env('STRIPE_KEY') }}");
		const elements = stripe.elements();
		const cardElement = elements.create('card');
	
		cardElement.mount('#card-element');
	
		$('#payment-form').on('submit', function (e) {
			e.preventDefault();
	
			// Disable the submit button to prevent multiple submissions
			$('button[type=submit]').prop('disabled', true);
	
			// Create the PaymentIntent
			$.post('/process-payment', $(this).serialize())
				.done(function (response) {
					// Confirm the payment using the PaymentIntent client secret
					stripe.confirmCardPayment(response.client_secret, {
						payment_method: {
							card: cardElement,
							billing_details: {
								name: $('input[name=cardholder-name]').val(),
							}
						}
					}).then(function (result) {
						if (result.error) {
							// Display error message to the user
							alert(result.error.message);
	
							// Re-enable the submit button
							$('button[type=submit]').prop('disabled', false);
						} else {
							// Submit the payment form
							$('#payment-form').submit();
						}
					});
				})
				.fail(function () {
					// Display error message to the user
					alert('An error occurred. Please try again later.');
	
					// Re-enable the submit button
					$('button[type=submit]').prop('disabled', false);
				});
		});
	</script>
	<!-- Custom JS -->
	<script src="{{asset('assets/js/script.js')}}"></script>
	
</body>
 
</html>