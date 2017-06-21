<!-- Block 4 - 4-columns with icons -->
<div class="section-title">

</div>

<div class="four-col-icons-main-container default-padding default-width">

    <div class="four-col-icons-container">
        <div class="four-col-icons-item col-xs-12 col-sm-6 col-md-3">
            <div class="four-col-icons-img-container">
                <!-- FIXME Two variants of icon not in specs?! -->
                <img class="four-col-icons-img" src="{{ $block->get_field('bloc_4_1_icon')['url'] }}" alt="{{ $block->get_field('bloc_4_1_icon')['alt'] }}">
                <img class="four-col-icons-img" src="{{ $block->get_field('bloc_4_1_icon')['url'] }}" alt="{{ $block->get_field('bloc_4_1_icon')['alt'] }}">
            </div>

            <h3 class="four-col-icons-title">{{ $block->get_field('bloc_4_1_title') }}</h3>
            <p class="four-col-icons-desc">{{ $block->get_field('bloc_4_1_description') }}</p>
        </div>
        <div class="four-col-icons-item col-xs-12 col-sm-6 col-md-3">
            <div class="four-col-icons-img-container">
                <img class="four-col-icons-img" src="{{ $block->get_field('bloc_4_2_icon')['url'] }}" alt="{{ $block->get_field('bloc_4_2_icon')['alt'] }}">
                <img class="four-col-icons-img" src="{{ $block->get_field('bloc_4_2_icon')['url'] }}" alt="{{ $block->get_field('bloc_4_2_icon')['alt'] }}">
            </div>

            <h3 class="four-col-icons-title">{{ $block->get_field('bloc_4_2_title') }}</h3>
            <p class="four-col-icons-desc">{{ $block->get_field('bloc_4_2_description') }}</p>
        </div>
        <div class="four-col-icons-item col-xs-12 col-sm-6 col-md-3">
            <div class="four-col-icons-img-container">
                <img class="four-col-icons-img" src="{{ $block->get_field('bloc_4_3_icon')['url'] }}" alt="{{ $block->get_field('bloc_4_3_icon')['alt'] }}">
                <img class="four-col-icons-img" src="{{ $block->get_field('bloc_4_3_icon')['url'] }}" alt="{{ $block->get_field('bloc_4_3_icon')['alt'] }}">
            </div>

            <h3 class="four-col-icons-title">{{ $block->get_field('bloc_4_3_title') }}</h3>
            <p class="four-col-icons-desc">{{ $block->get_field('bloc_4_3_description') }}</p>
        </div>
        <div class="four-col-icons-item col-xs-12 col-sm-6 col-md-3">
            <div class="four-col-icons-img-container">
                <img class="four-col-icons-img" src="{{ $block->get_field('bloc_4_4_icon')['url'] }}" alt="{{ $block->get_field('bloc_4_4_icon')['alt'] }}">
                <img class="four-col-icons-img" src="{{ $block->get_field('bloc_4_4_icon')['url'] }}" alt="{{ $block->get_field('bloc_4_4_icon')['alt'] }}">
            </div>

            <h3 class="four-col-icons-title">{{ $block->get_field('bloc_4_4_title') }}</h3>
            <p class="four-col-icons-desc">{{ $block->get_field('bloc_4_4_description') }}</p>
        </div>
    </div>

    <div class="btn-container">
        <a class="primary-btn-blue" href="{{ $block->get_field('bloc_4_1_cta_link') }}" {{ $block->get_field('bloc_4_1_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_4_1_cta_label') }}</a>
    </div>


</div>