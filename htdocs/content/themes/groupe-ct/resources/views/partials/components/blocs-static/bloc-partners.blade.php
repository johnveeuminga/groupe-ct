@include('partials.components.blocs-dynamic.bloc-section-title', [
    'desc' => pll__('Nos partenaires')
])

<div class="bloc-partners-container default-width">
    <h2>{{ pll__('Nos partenaires') }}</h2>
    <div class="partners-text-container">
        <p class="partners-text">
            {!! nl2br(pll__('Partenaire description')) !!}
        </p>
    </div>
    <div class="partners-logo-container">

        <div class="partners-logo-row">
            <div class="logo-container">
                <img class="partners-logo" src="{{ themosis_assets() }}/images/logo/logo-canon.png" alt="">
            </div>
            <div class="logo-container">
                <img class="partners-logo" src="{{ themosis_assets() }}/images/logo/logo-hp.png" alt="">
            </div>
            <div class="logo-container">
                <img class="partners-logo" src="{{ themosis_assets() }}/images/logo/logo-hp.png" alt="">
            </div>
        </div>

        <div class="partners-logo-row">
            <div class="logo-container">
                <img class="partners-logo" src="{{ themosis_assets() }}/images/logo/logo-oki.png" alt="">
            </div>
            <div class="logo-container">
                <img class="partners-logo" src="{{ themosis_assets() }}/images/logo/logo-oki.png" alt="">
            </div>
            <div class="logo-container">
                <img class="partners-logo" src="{{ themosis_assets() }}/images/logo/logo-oki.png" alt="">
            </div>

        </div>

    </div>
</div>
