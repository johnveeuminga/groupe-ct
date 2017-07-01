<section class="hero row">

    @include('partials.components.header.sub-menu')
    @include('partials.components.header.contact-form')

    <div class="img-plus-text default-padding default-width">
        <div class="slider-main-container">
            @foreach(get_field('home_slider') as $i => $slide)
                <div class="slide-container slide{{ $i }} @if($i == 0) {{ 'active-slide' }} @endif">
                    <div class="img-container">
                        <img src="{{ $slide['bloc_1_slide_image_desktop']['url'] }}" alt="{{ $slide['bloc_1_slide_image_desktop']['alt'] }}">
                    </div>
                    <div class="buffer"></div>

                    <div class="text-container">
                        <h1 class="text-container-title">{{ $slide['bloc_1_slide_title'] }}</h1>
                        <h2 class="text-container-subtitle">his subtitle shouldn't exists?!</h2>
                        {{--<a class="btn-bloc2 primary-btn-blue" href="{{ $slide['bloc_1_slide_cta_link'] }}">{{ $slide['bloc_1_slide_cta_label'] }}</a>--}}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="slider-link-container-bloc02">
            @foreach($block->get_field('bloc_1_slider') as $slide)
                <a class="slider-dot slide{{ $i }} blue-dot @if($i == 0) {{ 'active-dot-blue' }} @endif" href="#"></a>
            @endforeach
        </div>
    </div>

</section>
