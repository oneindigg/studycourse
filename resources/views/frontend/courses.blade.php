@extends('frontend.layouts.design')
@section('content')

<!-- about breadcrumb -->
<section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
            <h2 class="title mt-5 pt-lg-5 pt-sm-3">Online Courses</h2>
            <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-md-5">
                <li><a href="index.html">Home</a></li>
                <li class="active"> / Courses </li>
            </ul>
        </div>
    </div>
    <div class="waveWrapper waveAnimation">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none;"></path>
        </svg>
    </div>
</section>
<!-- //about breadcrumb -->

<section class="w3l-courses">
    <div class="blog pb-5" id="courses">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-6 item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#course-single" class="zoom d-block">
                                <img class="card-img-bottom d-block"
                                    src="{{asset('images/courseImage').'/'.$course->image}}"" alt=" Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe blue">Beginner</a>
                            </div>
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                <p>{{ $course->price }}</p>
                                <!-- <ul class="rating-star">
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star-o"></span></li>
                                </ul> -->
                            </div>
                            <a href="#course-single" class="course-desc">{{ $course->title }}
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
                        <!-- <div class="card-footer">
                            <div class="author align-items-center">
                                <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <li>
                                        <span class="meta-value mx-1">by</span> <a href="#author"> Olivia</a>
                                    </li>
                                    <li>
                                        <span class="meta-value mx-1">in</span> <a href="#author"> Programing</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
                @endforeach

            </div>
            <!-- pagination -->
            <div class="pagination-wrapper mt-5 pt-lg-3 text-center">
                <ul class="page-pagination">
                    <li><a class="next" href="#url"><span class="fa fa-angle-left"></span> Prev</a></li>
                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="#url">2</a></li>
                    <li><a class="page-numbers" href="#url">3</a></li>
                    <li><a class="page-numbers" href="#url">....</a></li>
                    <li><a class="next" href="#url">Next <span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>
            <!-- //pagination -->
        </div>
    </div>
</section>

@endsection