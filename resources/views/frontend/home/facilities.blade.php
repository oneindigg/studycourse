<section class="w3l-features py-5" id="facilities">
    <div class="call-w3 py-lg-5 py-md-4 py-2">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-5 feature-grid-left">
                    <h5 class="title-small mb-1">{{ $pageInfoFacilities->sub_title }}</h5>
                    <h3 class="title-big mb-4">{{ $pageInfoFacilities->title }} </h3>
                    <p class="text-para">{{ $pageInfoFacilities->description}} </p>
                    <a href="#url" class="btn btn-primary btn-style mt-md-5 mt-4">Discover More</a>
                </div>
                <div class="col-lg-7 feature-grid-right mt-lg-0 mt-5">
                    <div class="call-grids-w3 d-grid">
                        @foreach($facilities as $facility)
                        <div class="grids-1 box-wrap">
                            <a href="{{$facility->link}}" class="icon"><span
                                    class="fa fa-{{ $facility->icon }}"></span></a>
                            <h4><a href="{{$facility->link}}" class="title-head">{{ $facility->title }}</a></h4>
                            <p>{{ $facility->description }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>