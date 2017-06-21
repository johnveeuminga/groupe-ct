{{--<section id="home-echelle" class="bloc-echelle-main-container">--}}
    {{--<div class="bloc-echelle-container default-padding default-width">--}}

        {{--<div class="benefits-container">--}}
            {{--<img src="{{ themosis_assets() }}/images/echelle/echelle-mobile.png" alt="">--}}
            {{--<div class="benefit-bg paper hideMe">--}}

                {{--<img src="{{ themosis_assets() }}/images/echelle/over-papier-mobile.png" alt="">--}}
            {{--</div>--}}
            {{--<div class="benefit-bg hyb hideMe">--}}

                {{--<img src="{{ themosis_assets() }}/images/echelle/over-hybrid-mobile.png" alt="">--}}
            {{--</div>--}}
            {{--<div class="benefit-bg num hideMe">--}}

                {{--<img src="{{ themosis_assets() }}/images/echelle/over-num-mobile.png" alt="">--}}
            {{--</div>--}}

            {{--<div class="cat-container">--}}
                {{--<div class="cat paper col-sm-4"><a href="#"></a></div>--}}
                {{--<div class="cat hyb col-sm-4"><a href="#"></a></div>--}}
                {{--<div class="cat num col-sm-4"><a href="#"></a></div>--}}
            {{--</div>--}}


        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

<section id="home-echelle" class="bloc-echelle-main-container">

    <div class="benefits-title-container">
        <div class="line"></div>
        <div class="title"><?php _e('Échelle numérique', THEME_TEXTDOMAIN); ?></div>
        <div class="line"></div>
    </div>

    <div class="bloc-echelle-container default-padding default-width bloc-echelle-michael">
        <a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_1_ENVIRONNEMENT_PAPIER) }}"><div class="hover-zone zone-papier" data-target="#hover-papier"></div></a>
        <a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_2_ENVIRONNEMENT_HYBRIDE) }}"><div class="hover-zone zone-hybride" data-target="#hover-hybride"></div></a>
        <a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE) }}"><div class="hover-zone zone-numerique" data-target="#hover-numerique"></div></a>
        <img id="echelle-background-image" src="{{ themosis_assets() }}/images/echelle/desktop/main.png" class="" />
        <img id="hover-papier" src="{{ themosis_assets() }}/images/echelle/desktop/hover-papier.png">
        <img id="hover-hybride" src="{{ themosis_assets() }}/images/echelle/desktop/hover-hybride.png">
        <img id="hover-numerique" src="{{ themosis_assets() }}/images/echelle/desktop/hover-numerique.png">
    </div>
</section>
