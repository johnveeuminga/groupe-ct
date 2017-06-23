<!-- Block 11 - Software Product -->
<!-- prod-logiciel MAIN CONTAINER START -->
<div class="prod-logiciel-main-container default-padding default-width">

    <!-- THE ELEMENT START  -->
    <div class="prod-logiciel-container {{ $block->get_field('bloc_11_slide_image_left') ? '' : 'reverse-elem' }}"><!-- reverse-elem : to swap img and text div -->
        <div class="prod-logiciel-img-container">
            <a class="youtube-lity" href="{{ $block->get_field('bloc_11_video_link') }}" data-lity></a>
            <img class="img-video shadow" src="{{ $block->get_field('bloc_11_slide_image')['url'] }}" alt="{{ $block->get_field('bloc_11_slide_image')['alt'] }}">
            <span class="prod-logiciel-lang">{{ $block->get_field('bloc_11_video_caption') }}</span>
        </div>
        <div class="buffer"></div>
        <div class="prod-logiciel-text-container">
            <h3 class="prod-logiciel-title">{{ $block->get_field('bloc_11_title') }}</h3>
            <p class="prod-logiciel-subtitle">{{ $block->get_field('bloc_11_subtitle') }}</p>
            <p class="prod-logiciel-text">{{ $block->get_field('bloc_11_description') }}</p>
            <a class="brochure-download-pdf-white" href="{{ $block->get_field('bloc_11_brochure')['url'] }}"><?php _e('BROCHURE', THEME_TEXTDOMAIN); ?></a>
        </div>
    </div>
    <!-- THE ELEMENT END  -->

</div><!-- prod-logiciel MAIN CONTAINER END -->

