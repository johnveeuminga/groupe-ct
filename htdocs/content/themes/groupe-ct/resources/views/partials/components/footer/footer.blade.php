<div class="footer-main-container row">
    <div class="col-xs-10 col-xs-offset-1">

        <div class="footer-top">
            <nav class="footer-nav footer-nav-01">
                <h4 class="footer-nav-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_0_APPROCHE_CONSEIL) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_1_0_APPROCHE_CONSEIL) }}</a></h4>

                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_1_ENVIRONNEMENT_PAPIER])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_2_ENVIRONNEMENT_HYBRIDE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE])
                </ul>
            </nav>
            <nav class="footer-nav footer-nav-02">
                <h4 class="footer-nav-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_0_PRODUITS_SOLUTIONS) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_2_0_PRODUITS_SOLUTIONS) }}</a></h4>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_4_FOURNITURES])
                </ul>
            </nav>
            <nav class="footer-nav footer-nav-03">
                <h4 class="footer-nav-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_3_0_ASSISTANCE) }}</a></h4>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Gestion documentaire</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Gestion documentaire</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Gestion documentaire</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Gestion documentaire</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Gestion documentaire</a></li>
                </ul>
            </nav>
            <nav class="footer-nav footer-nav-04">
                <h4 class="footer-nav-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_0_A_PROPOS) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_3_0_ASSISTANCE) }}</a></h4>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Gestion documentaire</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Gestion documentaire</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Gestion documentaire</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Gestion documentaire</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Gestion documentaire</a></li>
                </ul>
            </nav>

            <nav class="footer-nav contact">
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#"><?php _e('À propos', THEME_TEXTDOMAIN); ?></a></li>
                    <li class="menu-item"><a class="nav-link" href="#"><?php _e('Carrières', THEME_TEXTDOMAIN); ?></a></li>
                    <li class="menu-item"><a class="nav-link" href="#"><?php _e('Nous joindre', THEME_TEXTDOMAIN); ?></a></li>
                </ul>
            </nav>

        </div>

        <div class="footer-bottom">

            <div class="social-media-container">

                <a class="social-link" href="#">
                    <img class="social-icon" src="{{ themosis_assets() }}/images/icon/icon-linked.png" alt="">
                    <img class="social-icon over" src="{{ themosis_assets() }}/images/icon/icon-over-linked.png" alt="">
                </a>

                <a class="social-link" href="#">
                    <img class="social-icon" src="{{ themosis_assets() }}/images/icon/icon-fb.png" alt="">
                    <img class="social-icon over" src="{{ themosis_assets() }}/images/icon/icon-over-fb.png" alt="">
                </a>

            </div>
            <div class="legal-container">
                <p>© <?php echo date("Y"); ?> Groupe C.T Tous droits réservé</p>
                <a href="#">{{ pll__('Mentions légales') }}</a>
            </div>


        </div>

    </div>
</div>