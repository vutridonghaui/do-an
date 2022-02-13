@extends('frontend/layout')
@section('title', 'My Account')
@section('content')
		<!--Start Register & login area -->
		<div class="my_account_page_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="create_account">
							<h2>Login or Create an Account</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="new_customer">
							<h3>NEW CUSTOMERS</h3>
							<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
						</div>
						<div class="create_button_area">
							<button type="submit" class="create_button">
								Create an Account
							</button>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="new_customer">
							<h3>Registered Customers</h3>
							<p>If you have an account with us, please log in.</p>
							<ul class="register_form">
								<li>Email Address<span>*</span></li>
								<li>
									<div class="email_address">
										<input type="text" class="email_test"/>
									</div>
								</li>
								<li>Password<span>*</span></li>
								<li>
									<div class="email_address">
										<input type="text" class="password"/>
									</div>
								</li>
								<li><h2><span>*</span>Required Fields</h2></li>
							</ul>
						</div>
						<div class="create_button_area">
							<a href="">Forgot Your Password?</a>
							<button type="submit" class="create_button">
								Login
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Register & login area -->
@endsection
