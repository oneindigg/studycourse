<section class="w3l-team py-5" id="team">
    <div class="call-w3 py-lg-5 py-md-4">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-5 feature-grid-left">
                    <h5 class="title-small mb-1">{{ $pageInfoStaff->sub_title }}</h5>
                    <h3 class="title-big mb-4">{{ $pageInfoStaff->title }}</h3>
                    <p class="text-para">{{$pageInfoStaff->description}}</p>
                    <a href="#url" class="btn btn-primary btn-style mt-md-5 mt-4">Discover More</a>
                </div>
                <div class="col-lg-7 feature-grid-right mt-lg-0 mt-5">
                    <div class="row">
                        <?php $i = 1; ?>
                        @foreach($staffs as $staff)

                        <div class="col-sm-6 {{$i % 2 == 0 ? 'mt-sm-0' : 'mt-lg-4 mt-3'}}">
                            <div class="box16">
                                <a href="#url"><img src="{{asset('images/staffImage').'/'.$staff->image}}" alt=""
                                        class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">{{ $staff->name }}</a></h3>
                                    <span class="post">{{$staff->designation}}</span>
                                    <ul class="social">
                                        <li>
                                            <a href="{{$staff->facebook_link}}" class="facebook">
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$staff->twitter_link}}" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
</section>