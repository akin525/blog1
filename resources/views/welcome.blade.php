@extends('layouts.header')
@section('tittle', 'Home')
@section('content')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    @include('layouts.features')
    @include('layouts.trending')
{{--    @include('layouts.topstory')--}}
<!-- Start Post List Wrapper  -->
<div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-8">
                <div class="axil-banner">
                    <div class="thumbnail">
                        <a href="#">
                            <img class="w-100" src="{{asset('assets/images/add-banner/banner-01.png')}}" alt="Banner Images">
                        </a>
                    </div>
                </div>
            @foreach($allpost as $all)
                <!-- Start Post List  -->
                <div class="content-block post-list-view is-active mt--30">
                    <div class="post-thumbnail">
                        <a href="{{route('details',$all->id)}}">
                            <img src="{{url($all->image)}}" alt="Post Images">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="post-cat">
                            <div class="post-cat-list">
                                <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="DESIGN">{{$all['category']}}</span>
                                            </span>
                                </a>
                            </div>
                        </div>
                        <h4 class="title"><a href="{{route('details',$all->id)}}">{{$all['topic']}}</a></h4>
                        <div class="post-meta-wrapper">
                            <div class="post-meta">
                                <div class="content">
                                    <h6 class="post-author-name">
                                        <a class="hover-flip-item-wrapper" href="{{route('details',$all->id)}}">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Nusrat Ara">Admin</span>
                                                    </span>
                                        </a>
                                    </h6>
                                    <ul class="post-meta-list">
                                        <li>{{$all['created_at']}}</li>
                                        <li>3 min read</li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="social-share-transparent justify-content-end">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Post List  -->
                @endforeach
                <br/>
                <br/>
                {{$allpost->links()}}
            </div>
            <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
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

                           @foreach($single as $pop)
                            <!-- Start Single Post  -->
                            <div class="content-block post-medium mb--20">
                                <div class="post-thumbnail">
                                    <a href="{{route('details',$pop->id)}}">
                                        <img src="{{url($pop->image)}}" alt="Post Images">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h6 class="title"><a href="{{route('details',$pop->id)}}">{{$pop['topic']}} </a></h6>
                                    <div class="post-meta">
                                        <ul class="post-meta-list">
                                            <li>{{$pop['created_at']}}</li>
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

                </div>
                <!-- End Sidebar Area  -->



            </div>
        </div>
    </div>
</div>
<!-- End Post List Wrapper  -->

<!-- Start Instagram Area  -->
<div class="axil-instagram-area axil-section-gapBottom bg-color-grey">
    <div class="container">
        <!-- End Social Area  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="title">Instagram</h2>
                </div>
            </div>
        </div>
        <div class="row mt--30">
            <div class="col-lg-12">
                <ul class="instagram-post-list">
                    <li class="single-post">
                        <a href="#">
                            <img src="assets/images/small-images/instagram-md-06.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="single-post">
                        <a href="#">
                            <img src="assets/images/small-images/instagram-md-07.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="single-post">
                        <a href="#">
                            <img src="assets/images/small-images/instagram-md-08.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="single-post">
                        <a href="#">
                            <img src="assets/images/small-images/instagram-md-09.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="single-post">
                        <a href="#">
                            <img src="assets/images/small-images/instagram-md-10.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="single-post">
                        <a href="#">
                            <img src="assets/images/small-images/instagram-md-11.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Area  -->

@include('layouts.footer')
@endsection
