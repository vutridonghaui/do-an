@extends('frontend/layout')
@section('title', 'Home | Flower World')
@section('content')



		<!-- slider-area start -->
		<section class="slider-area">
			<!-- slider start -->
			<div class="slider">
				<div id="mainSlider" class="nivoSlider nevo-slider">
					<img src="img/slider/slider-1.jpg" alt="main slider" title="#htmlcaption1"/>
					<img src="img/slider/slider-2.jpg" alt="main slider" title="#htmlcaption2"/>
				</div>
				<div id="htmlcaption1" class="nivo-html-caption slider-caption">
					<div class="slider-progress"></div>
					<div class="slider-text">
						<div class="middle-text">
							<div class="width-cap">
								<h3 class="slider-tiile-top top-ani-1" style="font-size: 60px;"><span>Flower For your</span></h3>
								<h2 class="slider-tiile-middle middle-ani-1"><span>Special</span></h2>
								<div class="slider-readmore">
									<a href="{{asset('contact')}}">Contact</a>
								</div>
								<div class="slider-shopping">
									<a href="{{asset('shop')}}">Shopping Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="htmlcaption2" class="nivo-html-caption slider-caption">
					<div class="slider-progress"></div>
					<div class="slider-text">
						<div class="middle-text">
							<div class="width-cap">
								<h3 class="slider2-tiile-top top-ani-2"><span>The Bigest Selection Of Fresh Flowers</span></h3>
								<h2 class="slider2-tiile-middle middle-ani-2"><span>Fresh Tulips</span></h2>
								<div class="slider2-readmore">
									<a href="{{asset('contact')}}">Contact</a>
								</div>
								<div class="slider2-shop">
									<a href="{{asset('shop')}}">Shopping Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- slider end -->
		</section>
		<!-- slider-area end -->
		<!--Start Lateast Collection Top area -->
		<div class="body_top_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="single_image">
							<a href="/"><img class="banner_home1" src="img/collection-image/banner-1.jpg" alt="" /></a>
							<div class="banner_text">
								<h2><a href="#">Birthday Bouguets</a></h2>
							</div>
							<div class="shop_collection">
								<a href="{{asset('shop')}}">Shop the Collection <span><img src="img/arrow/bkg_newsletter.png" alt="" /></span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="single_image">
							<a href="/"><img class="banner_home1" src="img/collection-image/banner-2.jpg" alt="" /></a>
							<div class="banner_text">
								<h2><a href="#">Wedding Flower</a></h2>
							</div>
							<div class="shop_collection">
								<a href="{{asset('shop')}}">Shop the Collection <span><img src="img/arrow/bkg_newsletter.png" alt="" /></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Lateast Collection Top area -->
		<!--Start Lateast Collection bottom area -->
		<div class="banner_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single_image">
							<a href="/"><img class="banner_home1" src="img/collection-image/banner-11.jpg" alt="" /></a>
							<div class="banner_text">
								<h3><a href="{{asset('shop')}}">Love & Romance</a></h3>
							</div>
							<div class="shop_collection">
								<a href="{{asset('shop')}}">Shop the Collection <span><img src="img/arrow/bkg_newsletter.png" alt="" /></span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single_image">
							<a href="/"><img class="banner_home1" src="img/collection-image/banner-12.jpg" alt="" /></a>
							<div class="banner_text">
								<h3><a href="{{asset('shop')}}">Valentine Day Flower</a></h3>
							</div>
							<div class="shop_collection">
								<a href="{{asset('shop')}}">Shop the Collection <span><img src="img/arrow/bkg_newsletter.png" alt="" /></span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single_image">
							<a href="/"><img class="banner_home1" src="img/collection-image/banner-13.jpg" alt="" /></a>
							<div class="banner_text">
								<h3><a href="{{asset('shop')}}">Sale up to 20% off</a></h3>
							</div>
							<div class="shop_collection">
								<a href="{{asset('shop')}}">Shop the Collection <span><img src="img/arrow/bkg_newsletter.png" alt="" /></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Lateast Collection bottom area -->
		<!--Start Feature area -->
		<div class="feature_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="feature_text">
							<h4>Featured Product</h4>
						</div>
					</div>
				</div>
				<div class="row">
                    @foreach($products as $product)
					    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product_list">
                                <div class="single_product">
                                    <a href="{{ asset('product_detail/'.$product->product_id) }}" target="main"><img src="{{ asset('storage/thumbnail/'.$product->thumbnail) }}" alt="" /></a>
                                    <div class="product_details">
                                        <h2>{{$product->product_name}}</h2>
                                        @if(!empty($product->sale_price))
                                        <p><span class="regular_price">{{ number_format($product->price, 0, '.', ',') }}$</span> <span class="popular_price">
                                                    {{ number_format($product->sale_price, 0, '.', ',') }}$
                                            </span>
                                        </p>
                                        @elseif(empty($product->sale_price))
                                            <p> <span class="popular_price">
                                                    {{ number_format($product->price, 0, '.', ',') }}$
                                            </span>
                                            </p>
                                        @endif
                                    </div>
                                    <div class="product_detail">
                                        <div class="star_icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product_button">
                                            <div class="cart_details">
                                                @if($product->qty !=0)
                                                    <a href="{{ asset('product_detail/'.$product->product_id) }}" target="blank">Add to cart</a>
                                                @else
                                                    <a target="blank" style="background: grey">Out Of Stock</a>
                                                @endif
                                            </div>
                                            <div class="cart_details">
                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="cart_details">
                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @if(!empty($product->sale_price))
                                        <div class="sale_product">
                                            <h5>Sale</h5>
                                        </div>
                                    @endif
                                </div>
                            </div>
					    </div>
                    @endforeach

				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="more_feature_area">
							<h2><a href="{{asset('shop')}}">Load More...</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Feature area -->
		<!--Start Testimonila area -->
		<div class="carousel_testimonial_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="testimonial_list">
							<div class="testimonial_single">
								<a href="#">"A garden to walk in and immensity to dream in--what more could he ask? A few flowers at his feet and above him the stars."</a>
								<p> Victor Hugo</p>
								<div class="author">
									<img src="img/author/avatar.png" alt="" />
								</div>
							</div>
							<div class="testimonial_single">
								<a href="#">"I felt after I finished Slaughterhouse-Five that I didn’t have to write at all anymore if I didn’t want to. It was the end of some sort of career. I don’t know why, exactly. I suppose that flowers, when they’re through blooming, have some sort of awareness of some purpose having been served. Flowers didn’t ask to be flowers and I didn’t ask to be me. At the end of Slaughterhouse-Five…I had a shutting-off feeling…that I had done what I was supposed to do and everything was OK ."</a>
								<p>Kurt Vonnegut</p>
								<div class="author">
									<img src="img/author/avatar.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Testimonila area -->
		<!--Start Blog area -->
		<div class="blog_post_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="feature_text">
							<h4>Blog Post</h4>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="carousel_blog_list">
						@foreach($latestBlogs as $blog)
                            <div class="col-lg-3">
                                <div class="single_blog">
                                    <a href="{{ asset('detail/'.$blog->blog_id) }}"><img  src="{{ asset('storage/blog_thumbnail/'.$blog->thumbnail) }}" alt="" /></a>
                                    <div class="blog_details">
                                        <a href="{{ asset('detail/'.$blog->blog_id) }}">{{$blog->blog_category_name}}</a>
                                        <p>{{$blog->title}}</p>
                                        <h3>{{$blog->created_at}}</h3>
                                        <a href="{{ asset('detail/'.$blog->blog_id) }}">
                                        <div class="read_more">
                                            <i class="fa fa-angle-right"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
		<!--End blog area -->
		<!--Start Contact info area -->
		<div class="service_info_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="service_list">
							<h2><i class="fa fa-envelope-o"></i> info@yourcompany.com</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="service_list">
							<h3><i class="fa fa-phone"></i> (+84) 37 353 9357</h3>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="Social_list">
							<h2>Connect us: </h2>
							<div class="social_icon my-class uk-scrollspy-init-inview uk-invisible">
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Like 6k" class="red-tooltip" href="#"><i class="fa fa-facebook"></i></a>
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 61k" class="red-tooltip" href="#"><i class="fa fa-twitter"></i></a>
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 16k" class="red-tooltip" href="#"><i class="fa fa-linkedin"></i></a>
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 10k" class="red-tooltip" href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Contact info area -->


@endsection



