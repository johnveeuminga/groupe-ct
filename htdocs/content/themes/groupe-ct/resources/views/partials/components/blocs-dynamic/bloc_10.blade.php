<div class="bloc-product-search-main-container">
    <div class="bloc-product-container">
        <div class="product-dropdown-container default-padding">
            <h3 class="select-title">Sélectionnez le type d’équipement</h3>
            <select name="dropdown-equipment" id="">
                <option value="" selected>Équipement de bureau</option>
                <option value="">Grand format</option>
                <option value="">Fourniture</option>
            </select>
        </div>


        <nav class="nav-type-container default-width">
            <ul class="menu-item-container">
                <li class="menu-item item-type-active"><a class="" href="#"><?php _e('Équipement de bureau', THEME_TEXTDOMAIN); ?></a></li>
                <li class="menu-item"><a class="" href="#"><?php _e('Équipement de production', THEME_TEXTDOMAIN); ?></a></li>
                <li class="menu-item"><a class="" href="#"><?php _e('Grand format', THEME_TEXTDOMAIN); ?></a></li>
                <li class="menu-item"><a class="" href="#"><?php _e('Fourniture', THEME_TEXTDOMAIN); ?></a></li>
            </ul>
        </nav>
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
            </div>
        </div>
    </div>
</div>
