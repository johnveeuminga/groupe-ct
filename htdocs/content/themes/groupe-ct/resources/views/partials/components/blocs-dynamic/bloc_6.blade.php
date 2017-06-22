<!-- Block 6 - 3-columns with icons -->
<div class="three-col-icons-main-container default-padding default-width">
    <div class="three-col-icons-container row">
        <div class="three-col-icons-item col-md-4">
            <div class="three-col-icons-img-container">
                <img class="three-col-icons-img" src="{{ $block->get_field('bloc_6_1_icon')['url'] }}" alt="{{ $block->get_field('bloc_6_1_icon')['alt'] }}" >
            </div>
            <div class="three-col-icon-text">
                <h3 class="three-col-icons-title">{{ $block->get_field('bloc_6_1_title') }}</h3>

                <p class="three-col-icons-desc">{{ $block->get_field('bloc_6_1_description') }}</p>
                <a class="cta-see-more" href="{{ $block->get_field('bloc_6_1_cta_link') }}" {{ $block->get_field('bloc_6_1_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_6_1_cta_label') }}</a>
            </div>

        </div>
        <div class="three-col-icons-item col-md-4">
            <div class="three-col-icons-img-container">
                <img class="three-col-icons-img" src="{{ $block->get_field('bloc_6_2_icon')['url'] }}" alt="{{ $block->get_field('bloc_6_2_icon')['alt'] }}" >
            </div>
            <div class="three-col-icon-text">
                <h3 class="three-col-icons-title">{{ $block->get_field('bloc_6_2_title') }}</h3>

                <p class="three-col-icons-desc">{{ $block->get_field('bloc_6_2_description') }}</p>
                <a class="cta-see-more" href="{{ $block->get_field('bloc_6_2_cta_link') }}" {{ $block->get_field('bloc_6_2_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_6_2_cta_label') }}</a>
            </div>
        </div>

        <div class="three-col-icons-item col-md-4">
            <div class="three-col-icons-img-container">
                <img class="three-col-icons-img" src="{{ $block->get_field('bloc_6_3_icon')['url'] }}" alt="{{ $block->get_field('bloc_6_3_icon')['alt'] }}" >
            </div>
            <div class="three-col-icon-text">
                <h3 class="three-col-icons-title">{{ $block->get_field('bloc_6_3_title') }}</h3>

                <p class="three-col-icons-desc">{{ $block->get_field('bloc_6_3_description') }}</p>
                <a class="cta-see-more" href="{{ $block->get_field('bloc_6_3_cta_link') }}" {{ $block->get_field('bloc_6_3_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_6_3_cta_label') }}</a>
            </div>
        </div>

    </div>
    <!-- FIXME -->
    <h3>Missing fields</h3>
    <ul>
        <li>bloc_6_subheader</li>
        <li>bloc_6_title</li>
        <li>bloc_6_description</li>
    </ul>


</div>