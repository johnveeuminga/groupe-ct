<div class="news-main-container" style="@if(get_field('post_featured_image', $post->ID)) background-image: url('{{ get_field('post_featured_image', $post->ID)['url'] }}'); @endif">
    <div class="news-inner-container">
        <div class="news-content">
            @if (get_field('post_show_date', $post->ID))
                <p class="news-date">{{ get_the_date( 'd F Y', $post->ID) }}</p>
            @endif
            <h2 class="news-title">{{ get_the_title($post->ID) }}</h2>
            <p class="news-excerpt">{{ get_the_excerpt($post->ID) }}</p>
        </div>
        <div class="news-footer">
            <a href="{{ get_the_permalink($post->ID) }}" class="news-read-more-cta">{{ pll__('Lire la nouvelle') }}</a>
        </div>
    </div>
    <div class="overlay"></div>
</div>
