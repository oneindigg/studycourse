<section class="w3l-clients py-5" id="clients">
    <div class="call-w3 py-md-4 py-2">
        <div class="container">
            <div class="company-logos text-center">
                <div class="row logos">
                    @foreach($sponsors as $sponsor)
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{asset('images/sponsorImage').'/'.$sponsor->image}}" alt="{{$sponsor->image}}"
                            class="img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>