<section class="hero row">

    @include('partials.components.header.sub-menu')
    @include('partials.components.header.contact-form')


    <div class="hero-content-container">
        @foreach(get_field('home_slider') as $i => $slide)
            <div class="hero-content" style="background-image: url()">
                <div class="slide-container slide{{ $i }} @if($i == 0) {{ 'active-slide' }} @endif">
                    <div class="img-container">
                        <img src="{{ $slide['bloc_1_slide_image_desktop']['url'] }}" alt="{{ $slide['bloc_1_slide_image_desktop']['alt'] }}">
                    </div>
                    <div class="buffer"></div>

                    <div class="text-container">
                        <h1 class="text-container-title">{{ $slide['bloc_1_slide_title'] }}</h1>
                        {{--<a class="btn-bloc2 primary-btn-blue" href="{{ $slide['bloc_1_slide_cta_link'] }}">{{ $slide['bloc_1_slide_cta_label'] }}</a>--}}
                    </div>
                </div>

                <a href="#"><img class="hero-arrow" src="{{ themosis_assets() }}/images/icon/icon-hero-arrow.png" alt=""></a>
            </div>
        @endforeach
        <div class="slider-link-container-bloc01">
            @foreach(get_field('home_slider') as $i => $slide)
                <a class="slider-dot slide{{ $i }} blue-dot @if($i == 0) {{ 'active-dot-blue' }} @endif" href="#"></a>
            @endforeach
        </div>

        <div class="triangle"></div>
    </div>
</section>
