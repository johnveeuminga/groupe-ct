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
        @foreach ($suggested as $post)
            <!-- THE ELEMENT START  -->
            <div class="publication-container"> <!-- reverse-elem : to swap img and text div -->
                <div class="publication-img-container">
                    <img class="image-pub shadow" src="{{ get_field('post_standard_image', $post->ID)['url'] }}" alt="">
                </div>
                <div class="buffer"></div>
                <div class="publication-text-container">
                    <p class="publication-cat">{{ get_the_category(get_the_ID())[0]->name }}</p>
                    <h3 class="publication-title">{{ get_the_title(get_the_ID()) }}</h3>
                    @if (get_field('post_show_date', $post->ID))
                        <p class="publication-date">{{ get_the_date( 'd F Y', $post->ID) }}</p>
                    @endif
                    <p class="publication-text">
                        {{ get_the_excerpt(get_the_ID()) }}
                    </p>
                    <a href="{{ get_the_permalink(get_the_ID()) }}" class="cta-see-more">{{ pll__('Lire la suite') }}</a>
                </div>
            </div>
            <!-- THE ELEMENT END  -->
        @endforeach
    </div>
</section>
