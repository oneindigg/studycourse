<?php

use App\Models\CompanyInfo;

$info = CompanyInfo::where('id', '1')->first(); ?>
<!-- footer -->
<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
        <div class="container py-md-4">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                    <h6 class="footer-title-29">Contact Info </h6>
                    <p>Address : {{ $info->address }}</p>
                    <p class="my-2">Phone : <a href="tel:{{ $info->phone }}">{{ $info->phone }}</a></p>
                    <p>Email : <a href="mailto:{{ $info->email }}">{{ $info->email }}</a></p>
                    <div class="main-social-footer-29 mt-4">
                        <a href="{{$info->facebook_link}}" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="{{$info->twitter_link}}" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="{{$info->instagram_link}}" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="{{$info->linkedin_link}}" class="linkedin"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                    <ul>
                        <h6 class="footer-title-29">Company</h6>
                        <li><a href="about.html">About company</a></li>
                        <li><a href="#blog"> Latest Blog posts</a></li>
                        <li><a href="#teacher"> Became a teacher </a></li>
                        <li><a href="/courses">Online Courses</a></li>
                        <li><a href="/contact">Get in touch</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">Programs</h6>
                    <ul>
                        <li><a href="#traning">Training Center</a></li>
                        <li><a href="#documentation">Documentation</a></li>
                        <li><a href="#release">Release Status</a></li>
                        <li><a href="#customers"> Customers</a></li>
                        <li><a href="#helpcenter"> Help Center</a></li>
                    </ul>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">Suppport</h6>
                    <a href="#playstore"><img src="{{asset('frontend//images/googleplay.png') }}" class="img-responsive"
                            alt=""></a>
                    <a href="#appstore"><img src="{{asset('frontend//images/appstore.png') }}"
                            class="img-responsive mt-3" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <section class="w3l-copyright text-center">
        <div class="container">
            <p class="copy-footer-29">© 2020 {{ $info->name }}. All rights reserved. Design by <a
                    href="{{ $info->facebook_link }}" target="_blank">
                    {{ $info->name }}</a></p>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            &#10548;
        </button>
        <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->
</section>
<!-- //footer -->

<!-- Template JavaScript -->
<script src="{{asset('frontend//js/jquery-3.3.1.min.js') }}"></script>

<script src="{{asset('frontend//js/theme-change.js') }}"></script>

<!-- stats number counter-->
<script src="{{asset('frontend//js/jquery.waypoints.min.js') }}"></script>
<script src="{{asset('frontend//js/jquery.countup.js') }}"></script>
<script>
$('.counter').countUp();
</script>
<!-- //stats number counter -->

<script src="{{asset('frontend//js/owl.carousel.js') }}"></script>
<!-- script for banner slider-->
<script>
$(document).ready(function() {
    $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            667: {
                items: 1
            },
            1000: {
                items: 1,
                nav: true
            }
        }
    })
})
</script>
<!-- //script -->

<!-- script for tesimonials carousel slider -->
<script>
$(document).ready(function() {
    $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: false
            }
        }
    })
})
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
$(function() {
    $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
    })
});
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
$(window).on("scroll", function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
    } else {
        $("#site-header").removeClass("nav-fixed");
    }
});

//Main navigation Active Class Add Remove
$(".navbar-toggler").on("click", function() {
    $("header").toggleClass("active");
});
$(document).on("ready", function() {
    if ($(window).width() > 991) {
        $("header").removeClass("active");
    }
    $(window).on("resize", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
    });
});
</script>
<!--//MENU-JS-->

<script src="{{asset('frontend/js/bootstrap.min.js') }}"></script>


</body>

</html>