<!-- Block 11 - Software Product -->
<!-- prod-logiciel MAIN CONTAINER START -->
<div class="prod-logiciel-main-container default-padding default-width">

    <!-- THE ELEMENT START  -->
    <div class="prod-logiciel-container {{ $block->get_field('bloc_11_slide_image_left') ? '' : 'reverse-elem' }}"><!-- reverse-elem : to swap img and text div -->
        <div class="prod-logiciel-img-container">
            @if (!empty($block->get_field('bloc_11_video_link')))
                <a class="youtube-lity" href="{{ $block->get_field('bloc_11_video_link') }}" data-lity></a>
            @endif
                <img class="img-video shadow" src="{{ $block->get_field('bloc_11_slide_image')['url'] }}" alt="{{ $block->get_field('bloc_11_slide_image')['alt'] }}">
            @if (!empty($block->get_field('bloc_11_video_caption')))
                <span class="prod-logiciel-lang">{{ $block->get_field('bloc_11_video_caption') }}</span>
            @endif
        </div>
        <div class="buffer"></div>
        <div class="prod-logiciel-text-container">
            @if (!empty($block->get_field('bloc_11_title')))
                <h3 class="prod-logiciel-title">{{ $block->get_field('bloc_11_title') }}</h3>
            @endif
            @if (!empty($block->get_field('bloc_11_subtitle')))
                <p class="prod-logiciel-subtitle">{{ $block->get_field('bloc_11_subtitle') }}</p>
            @endif
            @if (!empty($block->get_field('bloc_11_description')))
                <p class="prod-logiciel-text">{{ $block->get_field('bloc_11_description') }}</p>
            @endif
            @if ($block->get_field('bloc_11_brochure'))
                <a class="brochure-download-pdf-white" href="{{ $block->get_field('bloc_11_brochure')['url'] }}" target="_blank"><?php _e('BROCHURE', THEME_TEXTDOMAIN); ?></a>
            @endif
        </div>
    </div>
    <!-- THE ELEMENT END  -->

</div><!-- prod-logiciel MAIN CONTAINER END -->

