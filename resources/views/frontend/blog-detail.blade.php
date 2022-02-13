@extends('frontend/layout')
@section('title', 'Blog')
@section('content')

		<!--Start single blog area -->
		<div class="blog_post_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="breadcrumb-single blog_top_area">
							<ul id="breadcrumbs">
								<li><a href=""><i class="fa fa-home"></i>Home</a></li>
								<li><span>Ι</span></li>
								<li>Blog</li>
								<li><span>Ι</span></li>
								<li>Images</li>
							</ul>
						</div>
						<div class="blog_list_area">
							<div class="single_blog_area">
								<img src="img/slider-image/1.jpg" alt="" />
							</div>
							<div class="single_blog_area">
								<img src="img/slider-image/2.jpg" alt="" />
							</div>
							<div class="single_blog_area">
								<img src="img/slider-image/3.jpg" alt="" />
							</div>
						</div>
						<div class="blog_details_area">
							<i class="fa fa-picture-o"></i>
							<div class="blog_details_list">
								<ul class="blog_author">
									<li><i class="fa fa-folder-open-o"></i> <a href="">blog</a></li>
									<li><i class="fa fa-user"></i> {{$blog->blog_category_name}}</li>
									<li><i class="fa fa-eye"></i> Hits: 256</li>
									<li>
										<div class="star_blog">
											Rating:
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</li>
								</ul>
							</div>
							<div class="blog_info_details">
                                <h2>{{$blog->title}}</h2>
                                <div class="image" style="margin: auto"><img width="200px" src="{{ asset('storage/blog_thumbnail/'.$blog->thumbnail) }}" alt=""></div>

                                <div class="date"><i>Posted at: {{$blog->created_at}}</i> </div>
                                <div class="content">
                                    {!! $blog->content !!}
                                </div>
							</div>
						</div>
						<div class="blog_social_icon">
							<img src="img/social/shareicon.png" alt="" />
						</div>
						<div class="blog_add_comment_area">
                            <div class="product_description">
                                @foreach($blog->comment as $comment)
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

                                <form action="{{route('comment_blog')}}" method="post">
                                    @csrf
                                    <div class="fieldsets">
                                        <h3>You're reviewing: <span>Lorem ipsum dolor</span></h3>
                                        <h4>How do you rate this blog?*</h4>
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
                                                <input type="hidden" name="blog_id" value="{{$blog->blog_id}}">
                                            </ul>
                                        </div>
                                        {{--@if(!empty(Auth::user()->id))--}}
                                            <div class="review_button">
                                                <button type="submit" title="Submit Review" class="button">Submit
                                                    Review
                                                </button>
                                            </div>
                                       {{-- @else--}}
                                            <div class="review_button">
                                                <p>Login to submit review!</p>
                                            </div>
                                       {{-- @endif--}}
                                    </div>
                                </form>
                            </div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="blog_right_sidebar">
                           <h2 class="sp_module_title"><span>Newsletter</span></h2>
                           <div class="sub_area">
                               <form action="#">
                                   <input type="text" placeholder="E-mail">
                                   <input type="submit" value="Subscribe">
                               </form>
                           </div>
                           <div class="latest_posts">
                               <h3 class="sp_module_title sp_module_title_rv"><span>Latest Posts</span></h3>
                               @foreach($latest as $lat)
                                   <div class="single_l_post">
                                       <a href="#">{{$lat->title}}</a>
                                       <p>{{($lat->created_blog)}}</p>
                                   </div>
                               @endforeach
                           </div>
                          <div class="add_r_sidebar">
                              <p class="banner_block"><a href="#"><img alt="" src="img/banner/3.jpg"></a></p>
                          </div>
                       </div>
					</div>
				</div>
			</div>
		</div>
		<!--End single blog area -->
		<!--Start Footer Banner area -->
		<div class="blog_banner_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single_banner">
							<div class="banner_home_inner">
								<a href="#">
									<img alt="" src="img/banner/2.jpg">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Start Footer Banner area -->

@endsection
