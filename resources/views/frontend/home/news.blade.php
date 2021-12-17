<div class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <h5 class="title-small text-center mb-1">From the news</h5>
        <h3 class="title-big text-center mb-sm-5 mb-4">Latest <span>News</span></h3>
        <div class="row top-pics">

            <div class="col-md-6">
                <div class="top-pic1"
                    style="background:url('{{asset('images/newsImage').'/'.$new->image}}'); background-size: cover; background-position:center; background-repeat:no-repeat;">
                    <div class="card-body blog-details">
                        <a href="#blog-single" class="blog-desc">{{ $new->title }}
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/team1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="#author">Isabella ava</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> Nov 19, 2020 </span>. <span class="meta-value ml-2"><span
                                            class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-6 mt-md-0 mt-4">

                @foreach($news as $new)

                @if($loop->odd)
                <div class="top-pic2"
                    style="background:url('{{asset('images/newsImage').'/'.$new->image}}'); background-size: cover; background-position:center; background-repeat:no-repeat;">
                    <div class="card-body blog-details">
                        <a href="#blog-single" class="blog-desc">{{ $new->title}}
                        </a>
                        <!-- <div class="author align-items-center">
                            <img src="assets/images/team2.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="#author">Charlotte mia</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> Nov 19, 2020 </span>. <span class="meta-value ml-2"><span
                                            class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>

                @elseif($loop->even)
                <div class="mt-4">
                    <div class="top-pic3"
                        style="background:url('{{asset('images/newsImage').'/'.$new->image}}'); background-size: cover; background-position:center; background-repeat:no-repeat;">
                        <div class="card-body blog-details">
                            <a href="#blog-single" class="blog-desc"> {{$new->title}}
                            </a>
                            <div class="author align-items-center">
                                <img src="assets/images/team3.jpg" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="#author">Elizabeth</a> </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> Nov 19, 2020 </span>. <span
                                            class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <div class="mt-md-5 mt-4 text-more text-center">
            <a href="blog.html">View All Posts <span class="pl-2 fa fa-long-arrow-right"></span></a>
        </div>
    </div>
</div>