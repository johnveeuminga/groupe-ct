<!-- Block 3 - Text/Image & Image/Text - Standalone -->
<div class="img-plus-text img-plus-text-normal default-padding default-width">

    <div class="img-container">
        <img src="{{ $block->get_field('bloc_3_image')['url'] }}" alt="{{ $block->get_field('bloc_3_image')['alt'] }}">
    </div>
    <div class="buffer"></div>
    <div class="text-container">
        <!-- FIXME -->
        @if (!empty('bloc_3_subtitle'))<p class="upper-title">{{ $block->get_field('bloc_3_subtitle') }}</p>@endif
        @if (!empty('bloc_3_title'))<h2 class="text-container-title">{{ $block->get_field('bloc_3_title') }}</h2>@endif
        @if (!empty('bloc_3_text'))<p class="text">{{ $block->get_field('bloc_3_text') }}</p>@endif
        @if (!empty($block->get_field('bloc_3_phone_1')) || !empty($block->get_field('bloc_3_phone_2')))
            <div class="contact-container">
                @if (!empty($block->get_field('bloc_3_phone_1')))
                    <div class="contact-content">
                        @if (!empty('bloc_3_phone_1_location'))<span class="contact-location">{{ $block->get_field('bloc_3_phone_1_location') }}</span>@endif
                        @if (!empty('bloc_3_phone_1_label'))<a class="contact-phone" href="tel:+{{ $block->get_field('bloc_3_phone_1') }}">{{ $block->get_field('bloc_3_phone_1_label') }}</a>@endif
                        <a class="primary-btn-blue" href="tel:+{{ $block->get_field('bloc_3_phone_1') }}"><?php _e('CONTACTEZ-NOUS', THEME_TEXTDOMAIN); ?></a>
                    </div>
                @endif
                @if (!empty($block->get_field('bloc_3_phone_2')))
                    <div class="contact-content">
                        @if (!empty('bloc_3_phone_2_location'))<span class="contact-location">{{ $block->get_field('bloc_3_phone_2_location') }}</span>@endif
                        @if (!empty('bloc_3_phone_2_label'))<a class="contact-phone" href="tel:+{{ $block->get_field('bloc_3_phone_2') }}">{{ $block->get_field('bloc_3_phone_2_label') }}</a>@endif
                        <a class="primary-btn-blue" href="#"><?php _e('CONTACTEZ-NOUS', THEME_TEXTDOMAIN); ?></a>
                    </div>
                @endif
            </div>
        @endif
        @if ($slide['bloc_3_slide_cta_link'])<a class="btn-bloc2 primary-btn-blue" href="{{ $block->get_field('bloc_3_cta_link') }}" {{ $$block->get_field('bloc_3_cta_blank') ? "target='_blank'" : "" }}>{{ $block->get_field('bloc_3_cta_label') }}</a>@endif
    </div>
</div>
