<div class="bloc-name row">
    <h1>BLOC #2 Slider</h1>
</div>

<div class="img-plus-text default-padding default-width">

    <div class="slider-main-container">
        @for($i = 1; $i < 5; $i++)
            <div class="slide-container slide0{{ $i }} @if($i == 1) {{ 'active-slide' }} @endif">
                <div class="img-container">
                    <img src="{{ themosis_assets() }}/images/img/img-service01.png" alt="">
                </div>
                <div class="buffer"></div>

                <div class="text-container">
                    <li class="upper-title">Amet dolor simaet</li>
                    <h2 class="text-container-title">{{ $i }}Des histoires et des succès</h2>
                    <h3 class="text-container-subtitle">Maisonbureau</h3>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud tempor i
                        ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                    <a class="btn-bloc2 primary-btn-blue" href="#"><?php _e('DÉCOUVRIR', THEME_TEXTDOMAIN); ?></a>
                </div>
            </div>
        @endfor
    </div>
    <div class="slider-link-container-bloc02">
        @for($i = 1; $i < 5; $i++)
            <a class="slider-dot slide0{{ $i }} blue-dot @if($i == 1) {{ 'active-dot-blue' }} @endif" href="#"></a>
        @endfor
    </div>

</div>


