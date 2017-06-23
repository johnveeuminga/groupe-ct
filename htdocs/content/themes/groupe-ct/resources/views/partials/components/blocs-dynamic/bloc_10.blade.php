<!-- Block 10 - Products and Categories -->
<div class="product-main-container default-padding default-width">
    <!-- THE ELEMENT START  -->

    @foreach($block->get_field('bloc_10_products') as $product)
    <div class="product-container">
        <div class="product-inner-container">
            <div class="product-img-container">
                <img class="product-img" src="{{ $product->image['url'] }}" alt="{{ $product->image['alt'] }}">
            </div>
            <div class="product-text-container">
                <h3 class="product-title">{{ $product->post_title }}</h3>
                <p class="product-desc">{{ $product->description }}</p>
                <a class="brochure-download-pdf-blue" href="{{ $product->brochure }}"><?php _e('BROCHURE', THEME_TEXTDOMAIN); ?></a>
            </div>
        </div>
    </div>
    @endforeach

    <!-- THE ELEMENT END  -->
</div>

