<section class="publication-single-main-container default-padding default-width">
    <div class="publication-container">
        <div class="publication-page-title-container">
            <h2 class="page-title"><?php _e('NOS PUBLICATIONS', THEME_TEXTDOMAIN); ?></h2>
        </div>

        <div class="publication-nav-container">
            <div class="publication-nav">
                @if (get_previous_post())
                    <a class="publication-nav-item cta-pub-left" href="{{ get_permalink(get_previous_post()) }}">{{ pll__('Publication précédente') }}</a>
                @else
                    <span></span>
                @endif
                <a class="publication-nav-item link-pub-list" href="{{PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}"><?php _e('Liste', THEME_TEXTDOMAIN); ?></a>
                @if (get_next_post())
                    <a class="publication-nav-item cta-pub-right" href="{{ get_permalink(get_next_post()) }}">{{ pll__('Publication suivante') }}</a>
                @else
                    <span></span>
                @endif
            </div>
        </div>


        <div class="publication-content-container">
            <div class="pub-info-container">
                <p class="publication-cat">{{ get_the_category(get_the_ID())[0]->name }}</p>
                <h3 class="publication-title">{{ get_the_title() }}</h3>
                <p class="publication-date">{{ get_the_date( 'd F Y', get_the_ID()) }}</p>
            </div>
            <div class="wysiwyg-container">
                {!! wpautop(get_the_content(get_the_ID())) !!}
            </div>
        </div>

        <div class="publication-nav-container">
            <div class="publication-nav">
                @if (get_previous_post())
                    <a class="publication-nav-item cta-pub-left" href="{{ get_permalink(get_previous_post()) }}">{{ pll__('Publication précédente') }}</a>
                @else
                    <span></span>
                @endif
                <a class="publication-nav-item link-pub-list" href="{{PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}"><?php _e('Liste', THEME_TEXTDOMAIN); ?></a>
                @if (get_next_post())
                    <a class="publication-nav-item cta-pub-right" href="{{ get_permalink(get_next_post()) }}">{{ pll__('Publication suivante') }}</a>
                @else
                    <span></span>
                @endif
            </div>
        </div>
    </div>
    <div class="other-publication-title-container">
        <h2 class="page-title">{!! pll__('Publications<br/>qui pourraient vous intéresser') !!}</h2>
    </div>
    <div class="other-publcation-container">
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
