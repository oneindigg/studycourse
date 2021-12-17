<section class="w3l-courses">
    <div class="blog pb-5" id="courses">
        <div class="container py-lg-5 py-md-4 py-2">
            <h5 class="title-small text-center mb-1">Join our learn Courses</h5>
            <h3 class="title-big text-center mb-sm-5 mb-4">Featured Online <span>Courses</span></h3>
            <div class="row">
                <?php $i = 1; ?>
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-6 item {{ $i % 2 == 0 ? 'mt-md-0 mt-5' : 'mt-lg-0 mt-5' }}">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#course-single" class="zoom d-block">
                                <img class="card-img-bottom d-block"
                                    src="{{ asset('images/courseImage').'/'.$course->image }}" alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe blue">Beginner</a>
                            </div>
                        </div>
                        <div class="card-body course-details">
                            <!-- <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                <p>$35.00</p>
                                <ul class="rating-star">
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star-o"></span></li>
                                </ul>
                            </div> -->
                            <a href="#course-single" class="course-desc">{{ $course->title}}
                            </a>
                            <!-- <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fa fa-clock-o"></span>
                                    <span class="meta-value"> 20 hrs </span>
                                </div>
                                <div class="meta-item course-">
                                    <span class="fa fa-user-o"></span>
                                    <span class="meta-value"> 50 </span>
                                </div>
                            </div> -->
                        </div>
                        <div class="card-footer">
                            <div class="author align-items-center">
                                <img src="{{asset('images/courseImage').'/'.$course->image}}" alt=""
                                    class="img-fluid rounded-circle">
                                <!-- <ul class="blog-meta">
                                    <li>
                                        <span class="meta-value mx-1">by</span> <a href="#author"> Olivia</a>
                                    </li>
                                    <li>
                                        <span class="meta-value mx-1">in</span> <a href="#author"> Programing</a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-5 text-more">
                <p class="pt-md-3 sample text-center">
                    Control your personal preference settings to get notified about appropriate courses
                    <a href="/courses">View All Courses <span class="pl-2 fa fa-long-arrow-right"></span></a>
                </p>
            </div>
        </div>
    </div>
</section>