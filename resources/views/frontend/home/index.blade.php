@extends('frontend.layouts.design')
@section('content')


<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">

            @foreach($sliders as $slider)
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2"
                        style="background:url('{{asset('images/sliderImage').'/'.$slider->image}}'); background-position:center; background-size: cover;">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5> {{$slider->title}}</h5>
                                    <p class="mt-4 pr-lg-4">{{ $slider->description }}</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2"
                                        href="about.html">{{$slider->link}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            @endforeach
        </div>
    </div>

    <div class="waveWrapper waveAnimation">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none;"></path>
        </svg>
    </div>
</section>
<!-- /main-slider -->

@include('frontend.home.course');
@include('frontend.home.facilities')
@include('frontend.home.news')
@include('frontend.home.staffs')
@include('frontend.home.testimonials')
@include('frontend.home.sponsors')


@endsection