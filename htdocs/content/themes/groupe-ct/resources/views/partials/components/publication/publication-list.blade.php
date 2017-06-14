<section class="publication-list-main-container default-padding default-width">

        <div class="publication-header-container">
            <h2 class="publication-header-title"><?php _e('nos publications', THEME_TEXTDOMAIN); ?></h2>
            <p class="publication-header-subtitle">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
            <p class="publication-header-subtitle">
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <nav class="nav-cat-container">
            <h3 class="select-title"><?php _e('Sélectionnez la catégorie de votre choix', THEME_TEXTDOMAIN); ?></h3>
            <ul class="menu-item-container">
                <li class="menu-item item-cat-active"><a class="primary-btn-grey" href="#"><?php _e('Nouvelle', THEME_TEXTDOMAIN); ?></a></li>
                <li class="menu-item"><a class="primary-btn-grey" href="#"><?php _e('Événement', THEME_TEXTDOMAIN); ?></a></li>
                <li class="menu-item"><a class="primary-btn-grey" href="#"><?php _e('Communiqué de presse', THEME_TEXTDOMAIN); ?></a></li>
                <li class="menu-item"><a class="primary-btn-grey" href="#"><?php _e('Papier blanc', THEME_TEXTDOMAIN); ?></a></li>
                <li class="menu-item"><a class="primary-btn-grey" href="#"><?php _e('Étude de cas', THEME_TEXTDOMAIN); ?></a></li>
            </ul>
        </nav>

        <div class="publication-nav-container">
            <div class="publication-nav">
                <a class="publication-nav-item pagination active-pagination" href="#">1</a>
                <a class="publication-nav-item pagination" href="#">2</a>
                <a class="publication-nav-item pagination" href="#">3</a>
                <a class="publication-nav-item pagination" href="#">4</a>
                <a class="publication-nav-item pagination" href="#">5</a>
                <a class="publication-nav-item pagination next" href="#"><img src="{{ themosis_assets() }}/images/icon/chevron-right-grey.png" alt=""></a>
                <a class="publication-nav-item cta-pub-right" href="#"><?php _e('Publication suivante', THEME_TEXTDOMAIN); ?></a>
            </div>
        </div>

        <!-- INSERT PUBLICATIONS HERE -->
        <div class="publication-main-container default-padding default-width">
            @for ($i = 1; $i <= 7; $i++)
                    <div class="publication-container @if($i%2==1) {{ 'reverse-elem' }} @endif"> <!-- reverse-elem : to swap img and text div -->
                        <div class="publication-img-container">

                            <img class="image-pub shadow" src="{{ themosis_assets() }}/images/img/img_pub01.png" alt="">

                            <span></span>
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
            @endfor
        </div>
        <!-- END OF PUBLICATIONS-->

        <div class="publication-nav-container">
            <div class="publication-nav">
                <a class="publication-nav-item pagination active-pagination" href="#">1</a>
                <a class="publication-nav-item pagination" href="#">2</a>
                <a class="publication-nav-item pagination" href="#">3</a>
                <a class="publication-nav-item pagination" href="#">4</a>
                <a class="publication-nav-item pagination" href="#">5</a>
                <a class="publication-nav-item pagination next" href="#"><img src="{{ themosis_assets() }}/images/icon/chevron-right-grey.png" alt=""></a>
                <a class="publication-nav-item cta-pub-right" href="#"><?php _e('Publication suivante', THEME_TEXTDOMAIN); ?></a>
            </div>
        </div>

</section>