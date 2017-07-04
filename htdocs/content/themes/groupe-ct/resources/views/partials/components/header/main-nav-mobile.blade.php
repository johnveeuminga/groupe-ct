<div id="menu-mobile" class="main-nav-mobile-container">
    <a class="close-menu-btn" href="#"><img src="{{ themosis_assets() }}/images/icon/icon-arrow.png" alt=""></a>
    <div class="nav-content-container mobile">
        <nav class="nav-bottom">
            <ul class="nav-link-container">
                @include('partials.components.header.link-atom01', ['page_id' => PageHelper::PAGE_1_0_APPROCHE_CONSEIL, 'has_submenu' => true, 'submenu_id' => 1])
                @include('partials.components.header.link-atom02', ['page_id' => PageHelper::PAGE_2_0_PRODUITS_SOLUTIONS, 'has_submenu' => true, 'submenu_id' => 2])
                @include('partials.components.header.link-atom03', ['page_id' => PageHelper::PAGE_3_0_ASSISTANCE, 'has_submenu' => true, 'submenu_id' => 3])
                @include('partials.components.header.link-atom04', ['page_id' => PageHelper::PAGE_4_0_A_PROPOS, 'has_submenu' => true, 'submenu_id' => 4])
                @include('partials.components.header.main-nav-mobile-link-atom', ['page_id' => PageHelper::PAGE_5_0_PUBLICATIONS, 'has_submenu' => false,   'submenu_id' => null])
                <li class="menu-item">
                    <a class="nav-link mobile-open-contact-form open-contact-form" href="#">{{ pll__('CONTACTEZ-NOUS') }}</a>
                </li>
            </ul>
        </nav>
        <nav class="nav-top">
            <ul class="nav-link-container">
                @if (pll_current_language() === 'fr')
                    @if (isset(pll_get_post_translations(get_the_ID())['en']))
                        <li class="menu-item"><a class="nav-link" href="{{ get_permalink(pll_get_post_translations(get_the_ID())['en']) }}">English</a></li>
                    @endif
                @else
                    @if (isset(pll_get_post_translations(get_the_ID())['fr']))
                        <li class="menu-item"><a class="nav-link" href="{{ get_permalink(pll_get_post_translations(get_the_ID())['fr']) }}">Français</a></li>
                    @endif
                @endif

                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_0_A_PROPOS) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_4_0_A_PROPOS) }}</a></li>
                <li class="menu-item"><a class="nav-link scroll-to" href="#" data-target="#form-newsletter">{{ pll__('Infolettre') }}</a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_6_CARRIERE) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_4_6_CARRIERE) }}</a></li>
                <li class="menu-item"><a class="nav-link link-account" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD">{{ pll__('Mon compte') }}</a></li>
            </ul>
        </nav>
    </div>
</div>

