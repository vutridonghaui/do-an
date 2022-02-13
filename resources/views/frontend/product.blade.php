@extends('frontend/layout')
@section('title', 'Detail Product')
@section('content')
    <!-- breadcrumbs area -->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single breadcrumb_top">
                        <ul id="breadcrumbs">
                            <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                            <li><span>I</span></li>
                            <li>@foreach($topicList as $topic)
                                    @if ($product->topic_id == $topic->id)
                                        <a href="#">{{$topic->topic_name}}</a>
                                    @endif
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumbs area -->
    <!-- Start preview Product details area -->
    <div class="blog_single_view_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="my_tabs">
                        <div class="tab-content tab_content_style">
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="blog_tabs">
                                    <a class="fancybox" href="img/product/pr1.png" data-fancybox-group="gallery"
                                       title="Lorem ipsum dolor sit amet"><img
                                            src="{{ asset('storage/thumbnail/'.$product->thumbnail) }}" alt=""/></a>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <div class="blog_tabs">
                                    <a class="fancybox" href="img/product/pr2.png" data-fancybox-group="gallery"
                                       title="Lorem ipsum dolor sit amet"><img src="img/product/pr2.png" alt=""/></a>
                                </div>
                            </div>
                            <div id="tab3" class="tab-pane fade">
                                <div class="blog_tabs">
                                    <a class="fancybox" href="img/product/pr3.png" data-fancybox-group="gallery"
                                       title="Lorem ipsum dolor sit amet"><img src="img/product/pr3.png" alt=""/></a>
                                </div>
                            </div>
                            <div id="tab4" class="tab-pane fade">
                                <div class="blog_tabs">
                                    <a class="fancybox" href="img/product/pr4.png" data-fancybox-group="gallery"
                                       title="Lorem ipsum dolor sit amet"><img src="img/product/pr4.png" alt=""/></a>
                                </div>
                            </div>
                            <div id="tab5" class="tab-pane fade">
                                <div class="blog_tabs">
                                    <a class="fancybox" href="img/product/pr5.png" data-fancybox-group="gallery"
                                       title="Lorem ipsum dolor sit amet"><img src="img/product/pr5.png" alt=""/></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_view_list">
                            <ul class="tab_style tab_bottom">
                                <li class="active">
                                    <div class="blog_single_carousel">
                                        <a data-toggle="tab" href="#tab1"><img src="img/product/pr6.png" alt=""/></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog_single_carousel">
                                        <a data-toggle="tab" href="#tab2"><img src="img/product/pr7.png" alt=""/></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog_single_carousel">
                                        <a data-toggle="tab" href="#tab3"><img src="img/product/pr8.png" alt=""/></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog_single_carousel">
                                        <a data-toggle="tab" href="#tab4"><img src="img/product/pr9.png" alt=""/></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="blog_product_details">
                        <h2 class="blog_heading"><a href="">{{$product->product_name}}</a></h2>
                        <div class="product_rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product_rating">
                            <a href="#">1 Review(s) <span>I</span></a>
                            <a href="#"> Add Your Review</a>
                        </div>
                        <div class="pricing_rate">
                            <p class="stack">Availability:
{{--                                {{dump($product->qty)}}--}}
                                @if($product->qty !=0)
                                    <span class="in-stock"> In stock</span>
                                @else
                                    <span class="in-stock"> Out of stock</span>
                                @endif
                            </p>
                            @if(!empty($product->sale_price))
                                <p class="rating_dollor rating_margin"><span
                                        class="rating_value_one dollor_size">${{ number_format($product->price, 0, '.', ',') }}</span>
                                    <span
                                        class="rating_value_two">${{ number_format($product->sale_price, 0, '.', ',') }}</span>
                                </p>
                            @elseif(empty($product->sale_price))
                                <p class="rating_dollor rating_margin"><span
                                        class="rating_value_two">${{ number_format($product->price, 0, '.', ',') }}</span>
                                </p>

                            @endif
                            <p class="blog_texts">{{$product->title}}</p>
                        </div>
                        <div class="product_blog_button">
                            <div class="cart_blog_details blog_icon_border">
                                <a href="" target="blank"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <div class="cart_blog_details blog_icon_border">
                                <a href="" target="expand"><i class="fa fa-retweet"></i></a>
                            </div>
                            <div class="cart_blog_details blog_icon_border">
                                <a href="" target="heart"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    @if(session('error_qty'))
                        <div class="alert alert-danger" style="margin-top: 20px">
                            {{ session()->get('error_qty') }}
                        </div>
                    @endif
                    <form method="get" action="{{route('add_to_cart', ['id'=>$product->id])}}"  enctype="multipart/form-data">
                        <div class="product_options_area">
                        <div class="product_options_selection">
                            <ul id="options_selection">
                                <li><span class="star_color">*</span><span class="Product_color">Color</span> <span
                                        class="required">*Required Fields</span></li>
                                <li>
                                    <select name="select_color" required>
                                        <option value="" selected="selected">-- Please Select --</option>
                                        @foreach($colorList as $color)
                                            @if(in_array($color->id, $colorChoosed ))
                                                <option value="{{$color->id}}">{{$color->color_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </li>
                                <li><span class="star_color">*</span><span class="Product_color">Size</span></li>
                                <li>
                                    <select name="select_size" required>
                                        <option value="" selected="selected">-- Please Select --</option>
                                        @foreach($sizeList as $size)
                                            @if(in_array($size->id, $sizeChoosed ))
                                                <option value="{{$size->id}}">{{$size->size_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="cart_blog_item">
                            @if(!empty($product->sale_price))
                                <p class="rating_dollor rating_margin"><span
                                        class="rating_value_one dollor_size">${{ number_format($product->price, 0, '.', ',') }}</span>
                                    <span
                                        class="rating_value_two">${{ number_format($product->sale_price, 0, '.', ',') }}</span>
                                </p>
                            @elseif(empty($product->sale_price))
                                <p class="rating_dollor rating_margin"><span
                                        class="rating_value_two">${{ number_format($product->price, 0, '.', ',') }}</span>
                                </p>
                            @endif
                            <div class="add-to-cart">
                                <input type="text" required title="qty" name="quantity" value="1" class="qty" maxlength="2" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57"/>

                                @if($product->qty !=0)
                                    <button type="submit" title="Add to Cart" class="cart_button"><span>Add To Cart</span></button>
                                @else
                                    <button title="Add to Cart" class="cart_button" disabled style="background: grey"><span>Out Of Stock</span></button>
                                @endif
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End preview Product details area -->
    <!-- Start Product details tabs area -->
    <div class="product_collateral_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="my_tabs_description">
                        <ul class="tab_style">
                            <li class="active">
                                <a data-toggle="tab" href="#tab-1">Product Description</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-2">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content tab_content_style">
                            <div id="tab-1" class="tab-pane fade in active">
                                <div class="product_description">
                                    <p>{!! $product->description !!}</p>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade">
                                <div class="product_description">
                                    @foreach($product->comment as $comment)
                                        <div class="comments">
                                            <div class="block_comment">
                                                <ul id="Motorola">
                                                    <li> Comment by <span
                                                            class="Motorola_cl">{{\App\User::select('name')->where('id', $comment->customer_id)->first()->name}}</span>
                                                    </li>
                                                    <li><span>Quality</span>
                                                        @if($comment->star_rate == 1)
                                                            <i class="fa fa-star"></i>
                                                        @elseif($comment->star_rate == 2)
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        @elseif($comment->star_rate == 3)
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        @elseif($comment->star_rate == 4)
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        @elseif($comment->star_rate == 5)
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        @endif
                                                    </li>
                                                    <li>(Posted on {{$comment->created_at}})</li>
                                                </ul>
                                                <div class="content">
                                                    <p> {{$comment->content_comment}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    @endforeach

                                    <form action="{{route('comment_product')}}" method="post">
                                        @csrf
                                        <div class="fieldsets">
                                            <h3>You're reviewing: <span>Lorem ipsum dolor</span></h3>
                                            <h4>How do you rate this product?*</h4>
                                            <div class="start_tab_pricing_area">
                                                <fieldset>
                                                    <table class="star_pricing_tb">
                                                        <tr>
                                                            <th></th>
                                                            <th>1 Star</th>
                                                            <th>2 Stars</th>
                                                            <th>3 Stars</th>
                                                            <th>4 Stars</th>
                                                            <th>5 Stars</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Quality</td>
                                                            <td><input required type="radio" name="ratings" value="1"
                                                                       class="radio"></td>
                                                            <td><input required type="radio" name="ratings" value="2"
                                                                       class="radio"></td>
                                                            <td><input required type="radio" name="ratings" value="3"
                                                                       class="radio"></td>
                                                            <td><input required type="radio" name="ratings" value="4"
                                                                       class="radio"></td>
                                                            <td><input required type="radio" name="ratings" value="5"
                                                                       class="radio"></td>
                                                        </tr>
                                                    </table>
                                                </fieldset>
                                            </div>

                                            <div class="rating_contact">
                                                <ul id="review_contact">
                                                    <li>Nickname<span>*</span></li>
                                                    <li><input type="text" name="nickname"
                                                               class="input-text required-entry"
                                                               value="{{(!empty(Auth::user()->name)) ? Auth::user()->name : ''}} ">
                                                    </li>
                                                    <li>Comment<span>*</span></li>
                                                    <li><textarea required name="comment_content" cols="5" rows="3"
                                                                  class="required-entry"></textarea></li>
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                </ul>
                                            </div>
                                            @if(!empty(Auth::user()->id))
                                            <div class="review_button">
                                                <button type="submit" title="Submit Review" class="button">Submit
                                                    Review
                                                </button>
                                            </div>
                                            @else
                                                <div class="review_button">
                                                    <p>Login to submit review!</p>
                                                </div>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Product details tabs area -->
    <!-- Start upsell products area -->
    <div class="upsell_products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature_text feature_upsell">
                        <h4>Upsell Products</h4>
                    </div>
                    <div class="row">
                        <div class="upsell_product_list ">
                            @foreach($specialProduct as $specialPro)
                                <div class="col-lg-3 ">
                                    <div class="single_upsell align-content-center">
                                        <a><img src="{{ asset('storage/thumbnail/'.$specialPro->thumbnail) }}" alt=""/></a>
                                        <div class="upsell_details">
                                            <h2><a href="{{ asset('product_detail/'.$specialPro->id) }}">{{$specialPro->product_name}}</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            @if(!empty($specialPro->sale_price))
                                                <p class="rating_dollor rating_margin">
                                                    <del class="rating_value_one dollor_size">
                                                        ${{ number_format($specialPro->price, 0, '.', ',') }}</del>
                                                    <span
                                                        class="rating_value_two">${{ number_format($specialPro->sale_price, 0, '.', ',') }}</span>
                                                </p>
                                            @elseif(empty($specialPro->sale_price))
                                                <p class="rating_dollor rating_margin"><span
                                                        class="rating_value_two">${{ number_format($specialPro->price, 0, '.', ',') }}</span>
                                                </p>

                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End upsell products area -->
    <!-- Start Related products area -->
    <div class="related_products_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature_text feature_upsell">
                        <h4>Related Products</h4>
                    </div>
                    <div class="row">
                        <div class="upsell_product_list">
                            @foreach($relatedProduct as $relatedPro)
                                <div class="col-lg-3 ">
                                    <div class="single_upsell align-content-center">
                                        <a href="{{ asset('product_detail/'.$relatedPro->id) }}"><img src="{{ asset('storage/thumbnail/'.$relatedPro->thumbnail) }}"
                                                         alt=""/></a>
                                        <div class="upsell_details">
                                            <h2><a href={{ asset('product_detail/'.$relatedPro->id) }}">{{$relatedPro->product_name}}</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            @if(!empty($relatedPro->sale_price))
                                                <p class="rating_dollor rating_margin">
                                                    <del class="rating_value_one dollor_size">
                                                        ${{ number_format($relatedPro->price, 0, '.', ',') }}</del>
                                                    <span
                                                        class="rating_value_two">${{ number_format($relatedPro->sale_price, 0, '.', ',') }}</span>
                                                </p>
                                            @elseif(empty($relatedPro->sale_price))
                                                <p class="rating_dollor rating_margin"><span
                                                        class="rating_value_two">${{ number_format($relatedPro->price, 0, '.', ',') }}</span>
                                                </p>

                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Related products area -->
@endsection
