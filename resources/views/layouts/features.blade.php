<h1 class="d-none">Home Blog</h1>
<div class="axil-tech-post-banner pt--30 bg-color-grey">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-12 col-12">
                @foreach($post as $pk)
                <!-- Start Post Grid  -->
                <div class="content-block post-grid post-grid-transparent">
                    <div class="post-thumbnail">
                        <a href="{{route('details',$pk->id)}}">
                            <img src="{{asset('assets/images/post-images/post-tect-01.jpg')}}" alt="Post Images">
                        </a>
                    </div>
                    <div class="post-grid-content">
                        <div class="post-content">
                            <div class="post-cat">
                                <div class="post-cat-list">
                                    <a class="hover-flip-item-wrapper" href="#">
                                                <span class="hover-flip-item">
                                                    <span data-text="FEATURED POST">FEATURED POST</span>
                                                </span>
                                    </a>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{url('details',$pk->id)}}">{{$pk->topic}}</a></h3>
                        </div>
                    </div>
                </div>
                <!-- Start Post Grid  -->
                    @endforeach
            </div>

            <div class="col-xl-3 col-md-6 mt_lg--30 mt_md--30 mt_sm--30 col-12">
                <!-- Start Single Post  -->
                @foreach($post2 as $po)
                <div class="content-block image-rounded">
                    <div class="post-thumbnail">
                        <a href="{{route('details',$po->id)}}">
                            <img src="{{url($po->image)}}" alt="Post Images">
                        </a>
                    </div>
                    <div class="post-content pt--20">
                        <div class="post-cat">
                            <div class="post-cat-list">
                                <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="LEADERSHIP">{{$po->Category}}</span>
                                            </span>
                                </a>
                            </div>
                        </div>
                        <h5 class="title"><a href="{{route('details',$po->id)}}">{{$po->topic}}</a></h5>
                    </div>
                </div>
                <!-- End Single Post  -->
            @endforeach

            </div>

            <div class="col-xl-3 col-md-6 mt_lg--30 mt_md--30 mt_sm--30 col-12">
                <!-- Start Single Post  -->
                @foreach($post3 as $po)
                    <div class="content-block image-rounded">
                        <div class="post-thumbnail">
                            <a href="{{route('details',$po->id)}}">
                                <img src="{{url($po->image)}}" alt="Post Images">
                            </a>
                        </div>
                        <div class="post-content pt--20">
                            <div class="post-cat">
                                <div class="post-cat-list">
                                    <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="LEADERSHIP">{{$po->Category}}</span>
                                            </span>
                                    </a>
                                </div>
                            </div>
                            <h5 class="title"><a href="{{route('details',$po->id)}}">{{$po->topic}}</a></h5>
                        </div>
                    </div>
                    <!-- End Single Post  -->
            @endforeach

            </div>
        </div>
    </div>
</div>
