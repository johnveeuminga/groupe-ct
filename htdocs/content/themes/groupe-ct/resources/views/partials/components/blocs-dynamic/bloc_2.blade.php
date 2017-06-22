<!-- Block 2 - Text/Image & Image/Text - Slider -->
<div class="img-plus-text default-padding default-width">
    <div class="slider-main-container">
        @foreach($block->get_field('bloc_2_slides') as $i => $slide)
            <div class="slide-container slide{{ $i }} @if($i == 0) {{ 'active-slide' }} @endif">
                <div class="img-container">
                    <img src="{{ $slide['bloc_2_slide_image']['url'] }}" alt="{{ $slide['bloc_2_slide_image']['alt'] }}">
                </div>
                <div class="buffer"></div>

                <div class="text-container">
                    @if ($slide['bloc_2_slide_subheader'])<li class="upper-title">{{ $slide['bloc_2_slide_subheader'] }}</li>@endif
                    @if ($slide['bloc_2_slide_title'])<h2 class="text-container-title">{{ $slide['bloc_2_slide_title'] }}</h2>@endif
                    @if ($slide['bloc_2_slide_title'])<h3 class="text-container-subtitle">{{ $slide['bloc_2_slide_subtitle'] }}</h3>@endif
                    @if ($slide['bloc_2_slide_title'])<p class="text">{{ $slide['bloc_2_slide_text'] }}</p>@endif
                    @if ($slide['bloc_2_slide_cta_link'])<a class="btn-bloc2 primary-btn-blue" href="{{ $slide['bloc_2_slide_cta_link'] }}" {{ $slide['bloc_2_slide_cta_blank'] ? "target='_blank'" : "" }}>{{ $slide['bloc_2_slide_cta_label'] }}</a>@endif

                    <!-- FIXME -->
                    <h3>Missing fields</h3>
                    <ul>
                        <li>bloc_2_slide_phone_1</li>
                        <li>bloc_2_slide_phone_2_label</li>
                        <li>bloc_2_slide_phone_2</li>
                        <li>bloc_2_slide_image_left</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
    <div class="slider-link-container-bloc02">
        @foreach($block->get_field('bloc_2_slides') as $i => $slide)
            <a class="slider-dot slide{{ $i }} blue-dot @if($i == 0) {{ 'active-dot-blue' }} @endif" href="#"></a>
        @endforeach
    </div>

</div>