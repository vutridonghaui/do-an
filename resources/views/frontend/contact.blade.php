@extends('frontend/layout')
@section('title', 'Contact')
@section('content')

		<div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="breadcrumb-single blog_top_area">
							<ul id="breadcrumbs">
								<li><a href=""><i class="fa fa-home"></i>Home</a></li>
								<li><span>Ι</span></li>
								<li>Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Start google map area -->
		<div class="google_map_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div id="googleMap" style="width:100%;height:433px;"></div>
					</div>
				</div>
			</div>
		</div>
		<!--End google map area -->
		<!--Start company details area -->
		<div class="company_contact_details">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="get_touch">
							 <h2>GET IN TOUCH WITH US</h2>
							 <p>We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and complexity that it literally staggers the imagination.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="contact_us_info">
                            @include('errors.note')
                            <form method="POST">
                                @csrf
                                <input type="text" required name="name" placeholder="Name *">
                                <input type="text" required name="phone" placeholder="Phone *">
                                <input type="text" required name="email" placeholder="Email *">
                                <input type="text" required name="subject" placeholder="Subject">
                                <textarea required name="message" placeholder="Message *" rows="10" cols="30"></textarea>
                                <div class="controls">
                                    <button type="submit" title="Submit Review" class="btn btn-large btn-primary submit" onclick="return confirm('Send your message for us?')">Submit</button>
                                </div>
                            </form>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="company_right_area">
							<h6>INFORMATION</h6>
							<div class="contact_addon_content">
								<p><span><i class="fa fa-map-marker"></i></span> FlowersWorld JSC 228 Thanhbinh Street, Hanoi, VN</p>
								<p><span><i class="fa fa-envelope"></i></span> flowerworld@gmail.com</p>
								<p><span><i class="fa fa-phone"></i></span> (+84) 37 353 9357</p>
							</div>
                        </div>
						<div class="company_right_hour">
							<h6>BUSINESS HOURS</h6>
						   <p>Monday &ndash; Friday: 9am to 20 pm Saturday: 9am to 17pm Sunday: day off</p>
						   <div class="single_icons_contact">
								<ul id="social_contact_icon">
									<li><a href="#" class="black-tooltip s-1" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Facebook"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#" class="black-tooltip s-2" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="black-tooltip s-3" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Google-plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="black-tooltip s-4" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" class="black-tooltip s-5" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Behance"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- google map API JS  -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript">
			function initialize() {
              var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(21.027763, 105.834160)
              };

              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);
              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map.png',
                map: map
              });

            }
            google.maps.event.addDomListener(window, 'load', initialize);
		</script>

@endsection
