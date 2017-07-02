<section id="home-echelle" class="bloc-echelle-main-container">

    @if (is_front_page() === false)
        <div class="benefits-title-container">
            <div class="line"></div>
            <div class="title"><?php _e('Échelle numérique', THEME_TEXTDOMAIN); ?></div>
            <div class="line"></div>
        </div>
    @endif

    <div class="bloc-echelle-container default-padding default-width">
        <a class="hover-zone-container" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_1_ENVIRONNEMENT_PAPIER) }}"><div class="hover-zone zone-papier" data-target="#hover-papier"></div></a>
        <a class="hover-zone-container" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_2_ENVIRONNEMENT_HYBRIDE) }}"><div class="hover-zone zone-hybride" data-target="#hover-hybride"></div></a>
        <a class="hover-zone-container" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE) }}"><div class="hover-zone zone-numerique" data-target="#hover-numerique"></div></a>
        <img id="echelle-background-image" src="{{ themosis_assets() }}/images/echelle/desktop/main-{{ pll_current_language() }}.png" class="" />
        <img id="hover-papier" class="{{ PageHelper::get_page_id(PageHelper::PAGE_1_1_ENVIRONNEMENT_PAPIER) === get_the_ID() ? 'active' : '' }}" src="{{ themosis_assets() }}/images/echelle/desktop/hover-papier-{{ pll_current_language() }}.png">
        <img id="hover-hybride" class="{{ PageHelper::get_page_id(PageHelper::PAGE_1_2_ENVIRONNEMENT_HYBRIDE) === get_the_ID() ? 'active' : '' }}" src="{{ themosis_assets() }}/images/echelle/desktop/hover-hybride-{{ pll_current_language() }}.png">
        <img id="hover-numerique"  class="{{ PageHelper::get_page_id(PageHelper::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE) === get_the_ID() ? 'active' : '' }}" src="{{ themosis_assets() }}/images/echelle/desktop/hover-numerique-{{ pll_current_language() }}.png">
    </div>
    <div class="bloc-echelle-mobile-container">
        <img src="{{ themosis_assets() }}/images/echelle/echelle-mobile.png" alt="">
        <a class="mobile-zone-container zone-papier" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_1_ENVIRONNEMENT_PAPIER) }}"></a>
        <a class="mobile-zone-container zone-hybride" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_2_ENVIRONNEMENT_HYBRIDE) }}"></a>
        <a class="mobile-zone-container zone-numerique" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE) }}"></a>
    </div>
</section>
