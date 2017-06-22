<!-- Block 3 - Text/Image & Image/Text - Standalone -->
<div class="img-plus-text img-plus-text-normal default-padding default-width">

    <div class="img-container">
        <img src="{{ $block['bloc_3_image']['url'] }}" alt="{{ $block['bloc_3_image']['alt'] }}">
    </div>
    <div class="buffer"></div>
    <div class="text-container">
        <!-- FIXME -->
        @if (!empty('bloc_3_subtitle'))<p class="upper-title">{{ $block['bloc_3_subtitle'] }}</p>@endif
        @if (!empty('bloc_3_title'))<h2 class="text-container-title">{{ $block['bloc_3_title'] }}</h2@endif>
        @if (!empty('bloc_3_text'))<p class="text">{{ $block['bloc_3_text'] }}</p>@endif
        @if (!empty($block['bloc_3_phone_1']) || !empty($block['bloc_3_phone_2']))
            <div class="contact-container">
                @if (!empty($block['bloc_3_phone_1']))
                    <div class="contact-content">
                        @if (!empty('bloc_3_phone_1_location'))<span class="contact-location">{{ $block['bloc_3_phone_1_location'] }}</span>@endif
                        @if (!empty('bloc_3_phone_1_label'))<a class="contact-phone" href="tel:+{{ $block['bloc_3_phone_1'] }}">{{ $block['bloc_3_phone_1_label'] }}</a>@endif
                        <a class="primary-btn-blue" href="tel:+{{ $block['bloc_3_phone_1'] }}"><?php _e('CONTACTEZ-NOUS', THEME_TEXTDOMAIN); ?></a>
                    </div>
                @endif
                @if (!empty($block['bloc_3_phone_2']))
                    <div class="contact-content">
                        @if (!empty('bloc_3_phone_2_location'))<span class="contact-location">{{ $block['bloc_3_phone_2_location'] }}</span>@endif
                        @if (!empty('bloc_3_phone_2_label'))<a class="contact-phone" href="tel:+{{ $block['bloc_3_phone_2'] }}">{{ $block['bloc_3_phone_2_label'] }}</a>@endif
                        <a class="primary-btn-blue" href="#"><?php _e('CONTACTEZ-NOUS', THEME_TEXTDOMAIN); ?></a>
                    </div>
                @endif
            </div>
        @endif
        @if ($slide['bloc_3_slide_cta_link'])<a class="btn-bloc2 primary-btn-blue" href="{{ $slide['bloc_3_slide_cta_link'] }}" {{ $slide['bloc_3_slide_cta_blank'] ? "target='_blank'" : "" }}>{{ $slide['bloc_3_slide_cta_label'] }}</a>@endif
    </div>
</div>
