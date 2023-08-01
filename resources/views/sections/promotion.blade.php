<!-- ***** Features Big Item Start ***** -->
<section class="section" id="promotion">
    <div class="container">
        <div class="row">
            <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                <ul>
                    @foreach ( $promotions as  $promotion)
                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="/images/{{ $promotion->image }}" alt="">
                        <div class="text">
                            <h4>{{ $promotion->title }}</h4>
                            <p> {{ $promotion->text }}<a
                                    rel="nofollow" href="{{ $promotion->url }}" target="_parent">{{ $promotion->link }}</a> 
                               </p>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->
