@extends('frontend/layout')
@section('title', 'Home | Flower World')
@section('content')

    <!--Start blog list area -->
		<div class="blog_post_area">
			<div class="container">
				<div class="row">
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
                                       <a href="{{ asset('detail/'.$lat->blog_id) }}">{{$lat->title}}</a>
                                       <p>{{($lat->created_at)}}</p>
                                   </div>
                               @endforeach

                           </div>
                          <div class="add_r_sidebar">
                              <p class="banner_block"><a href="#"><img alt="" src="img/banner/3.jpg"></a></p>
                          </div>
                       </div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="breadcrumb-single blog_top_area">
							<ul id="breadcrumbs">
								<li><a href=""><i class="fa fa-home"></i>Home</a></li>
								<li><span>Ι</span></li>
								<li>Blog</li>
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

                        @foreach($blogs as $blog)
                            <div class="blog_details_area">

                                <div class="blog_details_list">
                                    <ul class="blog_author">
{{--                                        <li><i class="fa fa-folder-open-o"></i> <a href="">blog</a></li>--}}
                                        <li><i class="fa-journal-whills"></i> {{$blog->blog_category_name}}</li>
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
                                    <h2 style="display: flex"><p style="margin-right: 20px" class="blog_info_heading" href="#"><img width="100px" src="{{ asset('storage/blog_thumbnail/'.$blog->thumbnail) }}" alt=""></p>
                                        <p>{{$blog->title}}</p>
                                    </h2>

                                    <p>{{$blog->blog_short_description}}</p>
                                    <a class="readmore_link" href="{{ asset('detail/'.$blog->blog_id) }}" title="Images">Read more ...</a>
                                    <a class="comments_link" href="#" title="1 comment">1 comment</a>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        <div id="pagination">
                            {{ $blogs->links() }}
                        </div>
{{--                        <div class="pagination_wrapper">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="active"><a>1</a></li>--}}
{{--                                <li><a class="" href="#" title="2">2</a></li>--}}
{{--                                <li><a class="" href="#" title="3">3</a></li>--}}
{{--                                <li><a class="next" href="#" title="»">»</a></li>--}}
{{--                                <li><a class="" href="#" title="End">End</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                        <div class="single_blog_area">
								<img src="img/slider-image/4.jpg" alt="" />
							</div></div>
						{{--<div class="audio_blog_area">
							<div class="post-format-area">
								<div class="player">
									<audio controls="">
                                      <source type="audio/mpeg" src="audio/Nana-Dreams.mp3">
                                    </audio>
								</div>
							</div>
							<div class="blog_details_area">
								<i class="fa fa-music"></i>
								<div class="blog_details_list">
									<ul class="blog_author">
										<li><i class="fa fa-folder-open-o"></i> <a href="">blog</a></li>
										<li><i class="fa fa-user"></i> Super User</li>
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
									 <h2><a class="blog_info_heading" href="#">I love this music somuch</a></h2>
									 <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit.</p>
									 <a class="readmore_link" href="#" title="Images">Read more ...</a>
									 <a class="comments_link" href="#" title="1 comment">1 comment</a>
								</div>
							</div>
						</div>
						<div class="video_blog_area">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/43426940"></iframe>
							</div>
							<div class="blog_details_area">
								<i class="fa fa-video-camera"></i>
								<div class="blog_details_list">
									<ul class="blog_author">
										<li><i class="fa fa-folder-open-o"></i> <a href="">blog</a></li>
										<li><i class="fa fa-user"></i> Super User</li>
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
									 <h2><a class="blog_info_heading" href="#">Jerky shank chicken boudin</a></h2>
									 <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit.</p>
									 <a class="readmore_link" href="#" title="Images">Read more ...</a>
									 <a class="comments_link" href="#" title="1 comment">1 comment</a>
								</div>
							</div>
						</div>--}}

					</div>

				</div>
			</div>
		</div>
		<!--End blog list area -->
		<!--Start blog list area -->
			<!--End blog list area -->

@endsection
