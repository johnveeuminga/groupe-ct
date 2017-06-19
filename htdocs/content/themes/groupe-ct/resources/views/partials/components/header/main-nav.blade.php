<div class="nav-content-container nav-mobile row">

    <div class="nav-content col-xs-10 col-xs-offset-1">

        <div class="nav-logo-container"> </div>
        <div class="nav-menu-btn-container">
            <div id="menu-btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

</div> <!-- SECTION END -->

<div class="nav-content-container desktop row">

    <div class="nav-logo-container col-xs-2">
        <a class="link-home" href="<?php echo get_home_url(); ?>"></a>
    </div>
    <div class="nav-container col-xs-8">

        <nav class="nav-top">
            <ul class="nav-link-container">
                <li class="menu-item"><a class="nav-link" href="#">English</a></li>
                <li class="menu-item"><a class="nav-link" href="#">Nous joindre</a></li>
                <li class="menu-item"><a class="nav-link" href="#">Infolettre</a></li>
                <li class="menu-item"><a class="nav-link" href="#">Carrière</a></li>
                <li class="menu-item"><a class="nav-link link-account" href="#">Mon compte</a></li>
            </ul>
        </nav>

        <nav class="nav-bottom">
            <ul class="nav-link-container">
                <li class="menu-item"><a class="nav-link" href="#"><?= __('Accueil', GROUPE_CT) ?></a></li>
                <li class="menu-item"><a class="nav-link nl1" href="#"><?= __('Approche-conseil', GROUPE_CT) ?></a><img class="menu-item-triangle" src="{{ themosis_assets() }}/images/icon/icon-white-triangle.png" alt=""></li>
                <li class="menu-item"><a class="nav-link nl2" href="#"><?= __('Produits et solutions', GROUPE_CT) ?></a><img class="menu-item-triangle" src="{{ themosis_assets() }}/images/icon/icon-white-triangle.png" alt=""></li>
                <li class="menu-item"><a class="nav-link nl3" href="#">SOUTIENT TECHNIQUE</a><img class="menu-item-triangle" src="{{ themosis_assets() }}/images/icon/icon-white-triangle.png" alt=""></li>
                <li class="menu-item"><a class="nav-link nl4" href="#">À PROPOS</a><img class="menu-item-triangle" src="{{ themosis_assets() }}/images/icon/icon-white-triangle.png" alt=""></li>
                <li class="menu-item"><a class="nav-link nl5" href="#">NOUVELLES</a><img class="menu-item-triangle" src="{{ themosis_assets() }}/images/icon/icon-white-triangle.png" alt=""></li>
            </ul>
        </nav>
    </div>
    <div class="nav-contact-us col-xs-2">
        <a class="contact-us-link" href="#">
            <span><?php _e('CONTACTEZ-NOUS', THEME_TEXTDOMAIN); ?></span>
            <img class="icon-arrow" src="{{ themosis_assets() }}/images/icon/icon-arrow.png" alt="arrow contact us">
        </a>

    </div>

</div> <!-- SECTION END -->