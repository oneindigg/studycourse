@extends('frontend.layouts.design')
@section('content')

<!-- about breadcrumb -->
<section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
            <h2 class="title mt-5 pt-lg-5 pt-sm-3">Get in touch</h2>
            <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-md-5">
                <li><a href="index.html">Home</a></li>
                <li class="active"> / Contact us </li>
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
<!-- contact block -->
<!-- contact1 -->
<section class="w3l-contact-1 pb-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <h4 class="title-small">Get in touch</h4>
                    <h3 class="title-big mb-4">Feel free to contact us</h3>
                    <p class="mb-sm-5 mb-4">Start working with Us, We guarantee that you’ll be able to have any issue
                        resolved within 24 hours.</p>

                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Our head office address</h6>
                            <p class="pr-lg-5">Address here, 208 Trainer Avenue street, Illinois, UK - 62617.</p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call for help </h6>
                            <p><a href="tel:+(21) 255 999 8888">+(21) 255 999 8888</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Contact with our support</h6>
                            <p><a href="mailto:coursing@mail.com" class="mail">coursing@mail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="map-content-9">
                    <h5 class="mb-sm-4 mb-3">Write to us</h5>
                    <form action="/admin/testimonial/store" method="post" enctype="multipart/form-data">
                        {{ @csrf_field() }}
                        <div class="twice-two">
                            <input type="text" class="form-control" name="name" id="w3lName" placeholder="Name"
                                required="">
                            <input type="email" class="form-control" name="email" id="w3lSender" placeholder="Email"
                                required="">

                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="designation" id="w3lSender"
                                placeholder="Designation" required="">
                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="subject" id="w3lSubject" placeholder="Subject"
                                required="">
                        </div>



                        <textarea name="message" class="form-control" id="w3lMessage" placeholder="Message"
                            required=""></textarea>

                        <div class="twice mt-3">
                            <input type="file" name="image" class="form-control" id="exampleInputFile">


                        </div>


                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /contact1 -->
<div class="map-iframe">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
</div>
<!-- //contact block -->

@endsection