 <!-- ***** Features Big Item Start ***** -->
 <section class="section" id="about">
    <div class="container">
        <div class="row">
            @foreach ( $cards as   $card)
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
            data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <div class="features-item">
                <div class="features-icon">
                    <h2>{{ $card->number }}</h2>
                    <img src="/images/{{ $card->image }}" alt="">
                    <h4>{{ $card->title }}</h4>
                    <p>{{ $card->text }}</p>
                    <a href="#testimonials" class="main-button">
                      {{ $card->btn }}
                    </a>
                </div>
            </div>
        </div>
            @endforeach

        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->
