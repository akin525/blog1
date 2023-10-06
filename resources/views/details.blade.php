@extends('layouts.header')
@section('tittle', $details->topic)
@section('content')

    <div class="post-single-wrapper axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="axil-post-details">
                        <p class="has-medium-font-size">{{$details->topic}}</p>
                        <figure class="wp-block-image">
                            <img src="{{url($details->image)}}" alt="Post Images">
                            <figcaption>{{$details->topic}}</figcaption>
                        </figure>
                        <div>
                            {!! $details->content !!}


                        </div>

                        <div class="tagcloud">
                            @foreach($category as $cap)
                                <a href="#">{{$cap['name']}}</a>
                            @endforeach
                        </div>


                        <!-- Start Comment Area  -->
                        <div class="axil-comment-area">
                            <h4 class="title">{{$com}} comments</h4>
                            <ul class="comment-list">
                                @foreach($comment as $cc)
                                <!-- Start Single Comment  -->
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="single-comment">
                                            <div class="comment-img">
                                                <img src="{{asset('assets/images/post-images/author/author-b2.png')}}" alt="Author Images">
                                            </div>
                                            <div class="comment-inner">
                                                <h6 class="commenter">
                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="Cameron Williamson">{{$cc['name']}}</span>
                                                                </span>
                                                    </a>
                                                </h6>
                                                <div class="comment-meta">
                                                    <div class="time-spent">{{$cc['created_at']}}</div>
                                                    <div class="reply-edit">
                                                        <div class="reply">
                                                            <a class="comment-reply-link hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Reply">Reply</span>
                                                                        </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-text">
                                                    <p class="b2">{!! $cc['message'] !!} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Single Comment  -->
                                    @endforeach
                            </ul>
                        </div>
                        <!-- End Comment Area  -->


                        <!-- Start Comment Form Area  -->
                        <div class="axil-comment-area">
                            <div class="axil-total-comment-post">
                                <div class="title">
                                    <h4 class="mb--0">{{$com}}+ Comments</h4>
                                </div>
                                <div class="add-comment-button cerchio">
                                    <a class="axil-button button-rounded" href="#" tabindex="0"><span>Add Your Comment</span></a>
                                </div>
                            </div>

                            <!-- Start Comment Respond  -->
                            <div class="comment-respond">
                                <h4 class="title">Post a comment</h4>
                                <form action="{{route('postcomment')}}" method="post">
                                    @csrf
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be
                                                published.</span> Required fields are marked <span
                                            class="required">*</span></p>
                                    <div class="row row--10">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input id="name" name="name" type="text">
                                                <input  name="postid" value="{{$details->id}}" type="hidden">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Your Email</label>
                                                <input id="email" name="email" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Your Website</label>
                                                <input id="website" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Leave a Reply</label>
                                                <textarea name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="comment-form-cookies-consent">
                                                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                <label for="wp-comment-cookies-consent">Save my name, email, and
                                                    website in this browser for the next time I comment.</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-submit cerchio">
                                                <input name="submit" type="submit" id="submit" class="axil-button button-rounded" value="Post Comment">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Comment Respond  -->

                            <!-- Start Comment Area  -->


                            <!-- End Comment Area  -->

                        </div>
                        <!-- End Comment Form Area  -->


                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Start Sidebar Area  -->
                    <div class="sidebar-inner">
                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_categories mb--30">
                            <ul>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="{{asset('assets/images/post-images/category-image-01.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Tech</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="{{asset('assets/images/post-images/category-image-02.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Style</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="{{asset('assets/images/post-images/category-image-03.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Travel</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="cat-item">
                                    <a href="#" class="inner">
                                        <div class="thumbnail">
                                            <img src="{{asset('assets/images/post-images/category-image-04.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Food</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget  -->

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_search mb--30">
                            <h5 class="widget-title">Search</h5>
                            <form action="#">
                                <div class="axil-search form-group">
                                    <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </div>
                        <!-- End Single Widget  -->

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_postlist mb--30">
                            <h5 class="widget-title">Popular on Blogar</h5>
                            <!-- Start Post List  -->
                            <div class="post-medium-block">
                                @foreach($post1 as $poste)
                                <!-- Start Single Post  -->
                                <div class="content-block post-medium mb--20">
                                    <div class="post-thumbnail">
                                        <a href="{{route('details', $poste['id'])}}">
                                            <img src="{{url($poste['image'])}}" alt="Post Images">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title"><a href="{{route('details', $poste['id'])}}">{{$poste['topic']}}</a></h6>
                                        <div class="post-meta">
                                            <ul class="post-meta-list">
                                                <li>{{$poste['created_at']}}</li>
                                                <li>300k Views</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post  -->
                                    @endforeach
                            </div>
                            <!-- End Post List  -->

                        </div>
                        <!-- End Single Widget  -->

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_newsletter mb--30">
                            <!-- Start Post List  -->
                            <div class="newsletter-inner text-center">
                                <h4 class="title mb--15">Never Miss A Post!</h4>
                                <p class="b2 mb--30">Sign up for free and be the first to <br /> get notified about updates.</p>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Your Email ">
                                    </div>
                                    <div class="form-submit">
                                        <button class="cerchio axil-button button-rounded"><span>Subscribe</span></button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Post List  -->
                        </div>
                        <!-- End Single Widget  -->

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_ads mb--30">
                            <!-- Start Post List  -->
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{asset('assets/images/post-single/ads-01.jpg')}}" alt="Ads Images">
                                </a>
                            </div>
                            <!-- End Post List  -->
                        </div>
                        <!-- End Single Widget  -->

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_social mb--30">
                            <h5 class="widget-title">Stay In Touch</h5>
                            <!-- Start Post List  -->
                            <ul class="social-icon md-size justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-slack"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <!-- End Post List  -->
                        </div>
                        <!-- End Single Widget  -->

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget widget widget_instagram mb--30">
                            <h5 class="widget-title">Instagram</h5>
                            <!-- Start Post List  -->
                            <ul class="instagram-post-list-wrapper">
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="{{asset('assets/images/small-images/instagram-01.jpg')}}" alt="Instagram Images">
                                    </a>
                                </li>
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="{{asset('assets/images/small-images/instagram-02.jpg')}}" alt="Instagram Images">
                                    </a>
                                </li>
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="{{asset('assets/images/small-images/instagram-03.jpg')}}" alt="Instagram Images">
                                    </a>
                                </li>
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="{{asset('assets/images/small-images/instagram-04.jpg')}}" alt="Instagram Images">
                                    </a>
                                </li>
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="{{asset('assets/images/small-images/instagram-05.jpg')}}" alt="Instagram Images">
                                    </a>
                                </li>
                                <li class="instagram-post-list">
                                    <a href="#">
                                        <img src="{{asset('assets/images/small-images/instagram-06.jpg')}}" alt="Instagram Images">
                                    </a>
                                </li>
                            </ul>
                            <!-- End Post List  -->
                        </div>
                        <div class="axil-banner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img class="w-100" src="{{asset('assets/images/add-banner/banner-02.png')}}" alt="Banner Images">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- End Sidebar Area  -->
            </div>
        </div>
    </div>
    <!-- Start More Stories Area  -->
    <div class="axil-more-stories-area axil-section-gap bg-color-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="title">More Stories</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($post as $pos)
                <!-- Start Stories Post  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <!-- Start Post List  -->
                    <div class="post-stories content-block mt--30">
                        <div class="post-thumbnail">
                            <a href="{{route('details',$pos['id'])}}">
                                <img src="{{url($pos['image'])}}" alt="Post Images">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-cat">
                                <div class="post-cat-list">
                                    <a href="#">{{$pos['category']}}</a>
                                </div>
                            </div>
                            <h5 class="title"><a href="{{route('details',$pos['id'])}}">{{$pos['topic']}}</a></h5>
                        </div>
                    </div>
                    <!-- End Post List  -->
                </div>
                <!-- Start Stories Post  -->
                    @endforeach
            </div>
        </div>
    </div>
    <!-- End More Stories Area  -->

    @include('layouts.footer')
@endsection
