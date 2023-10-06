<!-- Start Post Grid Area  -->
<div class="axil-post-grid-area axil-section-gap bg-color-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8 col-sm-8 col-12">
                <div class="section-title">
                    <h2 class="title">Top Stories</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-4 col-12">
                <div class="see-all-topics text-start text-sm-end mt_mobile--20">
                    <a class="axil-link-button" href="#">See All</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="axil-tab-button nav nav-tabs mt--20" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="grid-one" data-bs-toggle="tab" href="#gridone" role="tab" aria-controls="grid-one" aria-selected="true">Accessibility</a>
                    </li>
                </ul>
                <!-- Start Tab Content  -->
                <div class="grid-tab-content tab-content">

                    <!-- Start Single Tab Content  -->
                    <div class="single-post-grid tab-pane fade show active" id="gridone" role="tabpanel">
                        <div class="row  mt--40">
                            <div class="col-xl-5 col-lg-6 col-md-12 col-12">
                                @foreach($allpost as $all)
                                <!-- Start Post Medium  -->
                                <div class="content-block post-medium post-medium-border border-thin">
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
                                                                <span data-text="MOBILE">{{$all['category']}}</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h4 class="title"><a href="{{route('details',$all->id)}}">{{$all['topic']}}</a></h4>
                                    </div>
                                </div>
                                <!-- End Post Medium  -->
                            </div>
                            @endforeach
                            <div class="col-xl-7 col-lg-6 col-md-12 col-12 mt_md--40 mt_sm--40">
                                <!-- Start Post Grid  -->
                                <div class="content-block content-block post-grid post-grid-transparent">
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="assets/images/post-images/post-tech-06.jpg" alt="Post Images">
                                        </a>
                                    </div>
                                    <div class="post-grid-content">
                                        <div class="post-content">
                                            <div class="post-cat">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="APPLE">APPLE</span>
                                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="post-details.html">iPhone SE is discontinued, but these retailers are still selling it</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Post Grid  -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab Content  -->

                </div>
                <!-- End Tab Content  -->
            </div>
        </div>

    </div>
</div>
<!-- End Post Grid Area  -->
