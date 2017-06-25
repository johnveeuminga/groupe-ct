<div class="bloc-product-search-main-container">
    <div class="bloc-product-container">
        <div class="nav-cat-main-container">
            <!-- insert product category as a class in the <a> -->
            <nav class="nav-cat-container default-padding default-width">
                <h3 class="select-title"><?php _e('Sélectionnez la catégorie de votre choix', THEME_TEXTDOMAIN); ?></h3>
                <ul class="menu-item-container">
                    <li class="menu-item"><a class="primary-btn-blue-sky prod-printer" href="#"><?php _e('Imprimante', THEME_TEXTDOMAIN); ?></a></li>
                    <li class="menu-item"><a class="primary-btn-blue-sky prod-multia4" href="#"><?php _e('Multifonction A4', THEME_TEXTDOMAIN); ?></a></li>
                    <li class="menu-item"><a class="primary-btn-blue-sky prod-multia3" href="#"><?php _e('Multifonction A3', THEME_TEXTDOMAIN); ?></a></li>
                    <li class="menu-item"><a class="primary-btn-blue-sky prod-num" href="#"><?php _e('Numérisateur', THEME_TEXTDOMAIN); ?></a></li>
                </ul>
            </nav>

            <div class="product-main-container default-padding default-width">
                @foreach($block->get_field('bloc_10_products') as $product)
                    <div class="product-container">
                        <div class="product-inner-container">
                            <div class="content-container">
                                <div class="product-img-container">
                                    <img class="product-img" src="{{ $product['bloc_10_image']['url'] }}" alt="{{ $product['bloc_10_image']['alt'] }}">
                                </div>
                                <div class="product-text-container">
                                    <h3 class="product-title">{{ $product['bloc_10_title'] }}</h3>
                                    <p class="product-desc">{{ $product['bloc_10_description'] }}</p>
                                </div>
                            </div>
                            <div class="brochure-download-container">
                                @if ($product['bloc_10_product_pdf'])
                                    <a class="brochure-download-pdf-blue" href="{{ $product['bloc_10_product_pdf']['url'] }}" target="_blank">{{ pll__('BROCHURE') }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
