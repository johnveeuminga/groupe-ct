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
                <li class="menu-item"><a class="nav-link" href="#">{{ pll_current_language() === 'fr' ? 'English' : 'Français' }}</a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_0_A_PROPOS) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_4_0_A_PROPOS) }}</a></li>
                <li class="menu-item"><a class="nav-link" href="#newsletter">{{ pll__('Infolettre') }}</a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_6_CARRIERE) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_4_6_CARRIERE) }}</a></li>
                <li class="menu-item"><a class="nav-link link-account" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD">{{ pll__('Mon compte') }}</a></li>
            </ul>
        </nav>

        <nav class="nav-bottom">
            <ul class="nav-link-container">
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_1_0_APPROCHE_CONSEIL, 'has_submenu' => true, 'submenu_id' => 1])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_2_0_PRODUITS_SOLUTIONS, 'has_submenu' => true, 'submenu_id' => 2])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_3_0_ASSISTANCE, 'has_submenu' => true, 'submenu_id' => 3])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_4_0_A_PROPOS, 'has_submenu' => true, 'submenu_id' => 4])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_5_0_PUBLICATIONS, 'has_submenu' => false,   'submenu_id' => null])
            </ul>
        </nav>
    </div>
    <div class="nav-contact-us col-xs-2">
        <a class="contact-us-link open-contact-form" href="#">
            <span>{{ pll__('CONTACTEZ-NOUS') }}</span>
            <img class="icon-arrow" src="{{ themosis_assets() }}/images/icon/icon-arrow.png" alt="arrow contact us">
        </a>

    </div>

</div> <!-- SECTION END -->