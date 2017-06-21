<div class="bloc-contact-container default-padding default-width">

    <div class="contact-container">
        <div class="inner-container">
            <div class="about-img-container">
                <img class="contact-icon" src="{{ themosis_assets() }}/images/icon/icon-help.png" alt="">
            </div>
            <h2 class="contact-title">{{ pll__('Demander conseil') }}</h2>
            <p class="contact-text">{!! nl2br('Contact nous joindre col 1') !!}</p>
            <a class="contact-link-cta" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_3_HISTORIQUE) }}"><img class="contact-cta" src="{{ themosis_assets() }}/images/icon/icon-cta-arrow-white.png" alt=""></a>
        </div>
    </div>

    <div class="contact-container">
        <div class="inner-container">
            <div class="about-img-container">
                <img class="contact-icon" src="{{ themosis_assets() }}/images/icon/icon-assist.png" alt="">
            </div>
            <h2 class="contact-title">{{ pll__('Assistance technique') }}</h2>
            <p class="contact-text">{!! nl2br('Contact nous joindre col 2') !!}</p>
            <a class="contact-link-cta" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_4_EQUIPE) }}"><img class="contact-cta" src="{{ themosis_assets() }}/images/icon/icon-cta-arrow-white.png" alt=""></a>
        </div>
    </div>

    <div class="contact-container">
        <div class="inner-container">
            <div class="about-img-container">
                <img class="contact-icon" src="{{ themosis_assets() }}/images/icon/icon-fourniture.png" alt="">
            </div>
            <h2 class="contact-title">{{ pll__('Commande de fournitures') }}</h2>
            <p class="contact-text">{!! nl2br('Contact nous joindre col 3') !!}</p>
            <a class="contact-link-cta" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_2_DIVISIONS) }}"><img class="contact-cta" src="{{ themosis_assets() }}/images/icon/icon-cta-arrow-white.png" alt=""></a>
        </div>
    </div>

</div>

