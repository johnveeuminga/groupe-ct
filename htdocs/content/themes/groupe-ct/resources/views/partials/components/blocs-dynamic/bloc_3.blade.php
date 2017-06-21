<!-- Block 3 - Text/Image & Image/Text - Standalone -->
<div class="img-plus-text img-plus-text-normal default-padding default-width">

    <div class="img-container">
        <img src="{{ $slide['bloc_3_image']['url'] }}" alt="{{ $slide['bloc_3_image']['alt'] }}">
    </div>
    <div class="buffer"></div>
    <div class="text-container">
        <!-- FIXME -->
        <li class="upper-title">{{ $block['bloc_3_subtitle'] }}</li>
        <h2 class="text-container-title">{{ $block['bloc_3_title'] }}</h2>
        <p class="text">{{ $block['bloc_3_text'] }}</p>
        <div class="contact-container">
            <div class="contact-content">
                <span class="contact-location">{{ $block['bloc_3_phone_1_label'] }}</span>
                <a class="contact-phone" href="tel:">1 800 967-3103</a>
                <a class="primary-btn-blue" href="#"><?php _e('CONTACTEZ-NOUS', THEME_TEXTDOMAIN); ?></a>
            </div>
            <div class="contact-content">
                <span class="contact-location"><?php _e('Québec', THEME_TEXTDOMAIN); ?></span>
                <a class="contact-phone" href="tel:">(418) 614-5301</a>
                <a class="primary-btn-blue" href="#"><?php _e('CONTACTEZ-NOUS', THEME_TEXTDOMAIN); ?></a>
            </div>
        </div>
    </div>
</div>
