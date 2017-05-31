<div class="bloc-name row">
    <h1>BLOC #10 Products</h1>
</div>



<div class="row default-padding">
    <div class="col-xs-12">

        <div class="product-main-container">

            <!-- THE ELEMENT START  -->
            @for ($i = 1; $i <= 7; $i++)
                <div class="product-container">
                    <div class="product-inner-container">
                        <div class="product-img-container">
                            <img class="product-img" src="{{ themosis_assets() }}/images/product/printer.png" alt="">
                        </div>
                        <div class="product-text-container">
                            <h3 class="product-title">Nom du produit lorem ipsum dolor isit ametsetire frol ipsum</h3>
                            <p class="product-desc">Lorem ipsum dolor sit, consectetur adipiscing elit, sed eiusmod tempor...
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                            <a class="brochure-download-pdf-blue" href="#"><?php _e('BROCHURE', THEME_TEXTDOMAIN); ?></a>
                        </div>
                    </div>
                </div>
            @endfor
        <!-- THE ELEMENT END  -->



        </div>

    </div>
</div>