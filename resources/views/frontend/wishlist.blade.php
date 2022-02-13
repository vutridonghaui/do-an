@extends('frontend/layout')
@section('title', 'Wishlist')
@section('content')

		<!--Start clothing product area -->
		<div class="clothing_product_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="catagory_price_color">
							<div class="catagory_area">
								<h2>CATEGORY</h2>
								<ul class="catagory">
									<li><a href="#"><i class="fa fa-angle-right"></i>LEARNING</a> <span>(4)</span></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>LIGHTING</a><span>(6)</span></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>LIVING ROOMS</a><span>(8)</span></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>LAMP</a><span>(10)</span></li>
								</ul>
							</div>
						</div>
						<div class="popular_tag_area">
							<div class="popular_items">
								<h2>POPULAR TAGS</h2>
								<ul id="single_popular">
									<li><a href="#">Nunc</a></li>
									<li><a href="#">aliquet</a></li>
									<li><a href="#">convallis</a></li>
									<li><a href="#">eros</a></li>
									<li><a href="#">facilisis</a></li>
									<li><a href="#">fashion</a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="popular_tag_area popular_tag_response">
									<div class="popular_items">
										<h2>COMPARE PRODUCTS</h2>
										<div class="conpany_product_details">
											<p>You have no items to compare.</p>
											<a href="#"><img src="img/banner/banner_left.jpg" alt="" /></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="popular_tag_area">
									<div class="popular_items">
										<h2>BESTSELLERS</h2>
									</div>
								</div>
								<div class="clothing_carousel_list">
									<div class="single_clothing_product">
										<div class="clothing_item">
											<img src="img/product/pr4.png" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Nam ullamcorper vive</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$20.00</p>
											</div>
										</div>
										<div class="clothing_item">
											<img src="img/product/pr5.png" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Nam ullamcorper vive</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$13.00</p>
											</div>
										</div>
										<div class="clothing_item">
											<img src="img/product/pr6.png" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Nam ullamcorper vive</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$12.00</p>
											</div>
										</div>
									</div>
									<div class="single_clothing_product">
										<div class="clothing_item">
											<img src="img/bestseller/10.jpg" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Nam ullamcorper vive</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$123.00</p>
											</div>
										</div>
										<div class="clothing_item">
											<img src="img/bestseller/11_1.jpg" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Nam ullamcorper vive</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$123.00</p>
											</div>
										</div>
										<div class="clothing_item">
											<img src="img/bestseller/16.jpg" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Nam ullamcorper vive</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$123.00</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<div class="wishlist-page-area cart-page-main-area">
							<div class="sec-heading-area">
								<h2>My Wishlist</h2>
							</div>
							<div class="myaccount-dashboard my-wish-list">
								<div class="responsive-wishlist">
									<table class="table wishlist-table cart-table">
										<thead>
											<tr>
												<th class="width-1"> </th>
												<th class="width-2">Product Details & Comment</th>
												<th class="width-3">Add to Cart</th>
												<th class="width-4"> </th>
											</tr>
										</thead>
										<tbody>
											<tr class="wishlist_1">
												<td>
													<div class="cartpage-image">
														<a href="#"><img src="img/cart/wishlist1.jpg" alt="" /></a>
													</div>
												</td>
												<td>
													<div class="cartpage-pro-dec">
														<h2><a href="#">Consequences</a></h2>
														<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus Males tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate Mollis eget non. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
														<textarea class="yourmessage" placeholder="Please, enter your comments..."></textarea>
													</div>
												</td>
												<td>
													<div class="cart-page-edit">
														<div class="w-price">
															<span class="regular-price">$14.00</span>
														</div>
														<div class="cart-plus-minus">
															<input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
														</div>
														<div class="pro-add-to-cart">
															<p><a title="Add to Cart" href="#">Add to Cart</a></p>
														</div>
														<div class="w-edit">
															<a href="#">Edit</a>
														</div>
													</div>
												</td>
												<td>
													<div class="cartpage-item-remove">
														<a title="Remove" href="#">Remove</a>
													</div>
												</td>
											</tr>
											<tr class="wishlist_2">
												<td>
													<div class="cartpage-image">
														<a href="#"><img src="img/cart/wishlist2.jpg" alt="" /></a>
													</div>
												</td>
												<td>
													<div class="cartpage-pro-dec">
														<h2><a href="#">Donec non est</a></h2>
														<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus Males tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate Mollis eget non. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. </p>
														<textarea class="yourmessage" placeholder="Please, enter your comments..."></textarea>
													</div>
												</td>
												<td>
													<div class="cart-page-edit">
														<div class="w-price">
															<span class="regular-price">$9.99</span>
														</div>
														<div class="cart-plus-minus">
															<input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
														</div>
														<div class="pro-add-to-cart">
															<p><a title="Add to Cart" href="cart.html">Add to Cart</a></p>
														</div>
														<div class="w-edit">
															<a href="#">Edit</a>
														</div>
													</div>
												</td>
												<td>
													<div class="cartpage-item-remove">
														<a title="Remove" href="#">Remove</a>
													</div>
												</td>
											</tr>
											<tr class="wishlist_3">
												<td>
													<div class="cartpage-image">
														<a href="#"><img src="img/cart/wishlist3.jpg" alt="" /></a>
													</div>
												</td>
												<td>
													<div class="cartpage-pro-dec">
														<h2><a href="#">Pellent  habitant </a></h2>
														<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus Males tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate Mollis eget non. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. </p>
														<textarea class="yourmessage" placeholder="Please, enter your comments..."></textarea>
													</div>
												</td>
												<td>
													<div class="cart-page-edit">
														<div class="w-price">
															<span class="regular-price">$14.99</span>
														</div>
														<div class="cart-plus-minus">
															<input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
														</div>
														<div class="pro-add-to-cart">
															<p><a title="Add to Cart" href="cart.html">Add to Cart</a></p>
														</div>
														<div class="w-edit">
															<a href="#">Edit</a>
														</div>
													</div>
												</td>
												<td>
													<div class="cartpage-item-remove">
														<a title="Remove" href="#">Remove</a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="cartpage-button">
									<div class="button-right">
										<a href="" class="add-tag-btn cartpage-btn-1">Share Wishlist</a>
										<a href="" class="add-tag-btn cartpage-btn-2">Add All to Cart</a>
										<a href="" class="add-tag-btn cartpage-btn-3">Update Wishlist</a>
									</div>
								</div>
								<a href="#" class="wishlist-back"><i class="fa fa-angle-double-left"></i> Back</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End clothing product area -->

@endsection
