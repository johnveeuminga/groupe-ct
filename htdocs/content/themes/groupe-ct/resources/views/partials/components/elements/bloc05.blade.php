<div class="bloc-name row">
    <h1>BLOC #5 : Testimonials</h1>
</div>

<div class="testimonials-main-container row">

    <div class="slider-main-container">
        @for($i = 1; $i < 5; $i++)
            <div class="slide-container slide0{{ $i }} @if($i == 1) {{ 'active-slide' }} @endif">
                <div class="img-container mobile">
                    <img src="{{ themosis_assets() }}/images/logo/logo-loblaw.png" alt="">
                </div>

                <div class="text-container col-md-6">
                    <img class="testimonial-quote" src="{{ themosis_assets() }}/images/icon/icon-testimonial-quote-top.png" alt="">
                    <p class="text">{{ $i }}Groupe CT c’est la garantiede la satisfaction,
                        du dévouement de notre équipe lorem ipsum dolor sit amet, consectetur adipiscing.
                    </p>
                    <img class="testimonial-quote" src="{{ themosis_assets() }}/images/icon/icon-testimonial-quote-bottom.png" alt="">
                    <p class="testimonial-name">LOREM IPSUM - <span class="testimonial-desc">Président, Loblaws</span></p>
                </div>

                <div class="img-container desktop col-md-6">
                    <img src="{{ themosis_assets() }}/images/logo/logo-loblaw.png" alt="">
                </div>
            </div>
        @endfor
    </div>
    <div class="slider-link-container">
        @for($i = 1; $i < 5; $i++)
            <a class="slider-dot slide0{{ $i }} white-dot @if($i == 1) {{ 'active-dot' }} @endif" href="#"></a>
        @endfor
    </div>

</div>


