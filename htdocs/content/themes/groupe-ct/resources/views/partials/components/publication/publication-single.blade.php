<section class="publication-single-main-container default-padding default-width">

    <div class="publication-container">
        <div class="publication-page-title-container">
            <h2 class="page-title"><?php _e('NOS PUBLICATIONS', THEME_TEXTDOMAIN); ?></h2>
        </div>

        <div class="publication-nav-container">
            <div class="publication-nav">
                <a class="publication-nav-item cta-pub-left" href="#"><?php _e('Publication précédente', THEME_TEXTDOMAIN); ?></a>
                <a class="publication-nav-item link-pub-list" href="#"><?php _e('Liste', THEME_TEXTDOMAIN); ?></a>
                <a class="publication-nav-item cta-pub-right" href="#"><?php _e('Publication suivante', THEME_TEXTDOMAIN); ?></a>
            </div>
        </div>


        <div class="publication-content-container">
            <div class="pub-info-container">
                <p class="publication-cat"><?php _e('catégorie', THEME_TEXTDOMAIN); ?></p>
                <h3 class="publication-title">publication titre</h3>
                <p class="publication-date">date de publication</p>
            </div>
            <div class="wysiwyg-container">
                    <img src="{{ themosis_assets() }}/images/pub-bg.png" alt="">
                    <img src="{{ themosis_assets() }}/images/team/team_nic_pinto.png" alt="">
                    <img src="{{ themosis_assets() }}/images/news-bg01.png" alt="">
                    <h1>This is an Heading 1</h1>
                    <h2>This is an Heading 2</h2>
                    <h3>This is an Heading 3</h3>
                    <h4>This is an Heading 4</h4>
                    <h5>This is an Heading 5</h5>
                    <h6>This is an Heading 6</h6>

                    <p>Some text</p>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro...
                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                        numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>

                    <a href="#">This is a LINK</a>

                    <ul>
                        <li>List item</li>
                        <li>List item</li>
                        <li>List item</li>
                    </ul>
            </div>
        </div>

        <div class="publication-nav-container">
            <div class="publication-nav">
                <a class="publication-nav-item cta-pub-left" href="#"><?php _e('Publication précédente', THEME_TEXTDOMAIN); ?></a>
                <a class="publication-nav-item link-pub-list" href="#"><?php _e('Liste', THEME_TEXTDOMAIN); ?></a>
                <a class="publication-nav-item cta-pub-right" href="#"><?php _e('Publication suivante', THEME_TEXTDOMAIN); ?></a>
            </div>
        </div>
    </div>
    <div class="other-publication-title-container">
        <h2 class="page-title"><?php _e('Autres publications qui </br> peuvent vous intéresser', THEME_TEXTDOMAIN); ?></h2>
    </div>
    <div class="other-publication-container">

        @for ($i = 1; $i <= 3; $i++)
            <!-- THE ELEMENT START  -->
                <div class="publication-container"> <!-- reverse-elem : to swap img and text div -->
                    <div class="publication-img-container">
                        <img class="image-pub shadow" src="{{ themosis_assets() }}/images/img/img_pub01.png" alt="">
                    </div>
                    <div class="buffer"></div>
                    <div class="publication-text-container">
                        <p class="publication-cat"><?php _e('catégorie', THEME_TEXTDOMAIN); ?></p>
                        <h3 class="publication-title">publication titre</h3>
                        <p class="publication-date">date de publication</p>
                        <p class="publication-text">
                            Nunc elementum venenatis dui, quis tempor nulla molestie quis. Quisque dignissim sagittis
                            lorem id blandit. Nulla facilisi. Sed blandit quam ut arcu facilisis aliquet. Orci varius
                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam aliquam,
                            turpis non bibendum vestibulum, odio turpis viverra massa
                        </p>
                        <a href="#" class="cta-see-more"><?php _e('en savoir plus', THEME_TEXTDOMAIN); ?></a>
                    </div>
                </div>
                <!-- THE ELEMENT END  -->
        @endfor

    </div>

</section>