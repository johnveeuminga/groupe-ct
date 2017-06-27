<!-- Block 2 - Text/Image & Image/Text - Slider -->
<div class="img-plus-text default-padding default-width">
    <div class="slider-main-container">
        @foreach($block->get_field('bloc_2_slides') as $i => $slide)
            <div class="slide-container slide{{ $i }} @if($i == 0) {{ 'active-slide' }} @endif @if($slide['bloc_2_slide_image_left'] === false) reverse-elem @endif">

                <div class="img-container">
                    <img src="{{ $block['bloc_2_image']['url'] }}" alt="{{ $block['bloc_2_image']['alt'] }}">
                </div>
                <div class="buffer"></div>
                <div class="text-container">
                    @if (!empty($block['bloc_2_subheader']))<p class="upper-title">{{ $block['bloc_2_subheader'] }}</p>@endif
                    @if (!empty($block['bloc_2_title']))<h2 class="text-container-title">{{ $block['bloc_2_title'] }}</h2>@endif
                    @if (!empty($block['bloc_2_text']))<p class="text">{!! nl2br($block['bloc_2_text']) !!}</p>@endif
                    @if (!empty($block['bloc_2_phone_1']) || !empty($block['bloc_2_phone_2']))
                        <div class="contact-container">
                            @if (!empty($block['bloc_2_phone_1']))
                                <div class="contact-content">
                                    @if (!empty($block['bloc_2_phone_1_location']))<span class="contact-location">{{ $block['bloc_2_phone_1_location'] }}</span>@endif
                                    @if (!empty($block['bloc_2_phone_1_label']))<a class="contact-phone" href="tel:+{{ $block['bloc_2_phone_1'] }}">{{ $block['bloc_2_phone_1_label'] }}</a>@endif
                                </div>
                            @endif
                            @if (!empty($block['bloc_2_phone_2']))
                                <div class="contact-content">
                                    @if (!empty($block['bloc_2_phone_2_location']))<span class="contact-location">{{ $block['bloc_2_phone_2_location'] }}</span>@endif
                                    @if (!empty($block['bloc_2_phone_2_label']))<a class="contact-phone" href="tel:+{{ $block['bloc_2_phone_2'] }}">{{ $block['bloc_2_phone_2_label'] }}</a>@endif
                                </div>
                            @endif
                        </div>
                    @endif
                    <div>
                        @if ($block['bloc_2_cta_label'])<a class="btn-bloc2 primary-btn-blue @if ($block['bloc_2_cta_open_contact']) open-contact-form @endif" href="@if($block['bloc_2_cta_open_contact'])#@else{{ $block['bloc_2_cta_link'] }}@endif" @if($block['bloc_2_cta_blank'])target='_blank'@endif>{{ $block['bloc_2_cta_label'] }}</a>@endif
                    </div>
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