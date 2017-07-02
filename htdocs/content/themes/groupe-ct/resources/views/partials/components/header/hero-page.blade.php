<style scoped>
    .hero-content-container {
        background: black;
    }

    @if (is_array(get_field('page_header_image_desktop')))
        .hero-content-container {
            background-image: url({{ get_field('page_header_image_desktop')['url'] }});
        }
    @endif
    @if (is_array(get_field('page_header_image_mobile')))
        @media (max-width: 768px) { /* or 301 if you want really the same as previously.  */
            .hero-content-container {
                background-image: url({{ get_field('page_header_image_mobile')['url'] }});
            }
        }
    @endif
</style>

<section class="hero-page row">

    @include('partials.components.header.sub-menu')
    @include('partials.components.header.contact-form')

    <div class="hero-content-container">
        <div class="hero-title-container">
            @loop
                <h1 class="hero-title">@if(get_field('page_html_title', Loop::id()) && !empty(get_field('page_html_title', Loop::id()))){!! get_field('page_html_title', Loop::id())  !!} @else<span class="red-border">{{ Loop::title() }}</span>@endif</h1>
            @endloop
            @if (is_array(get_field('page_header_image_desktop')))
                {{--<img src="{{ get_field('page_header_image_desktop')['url'] }}" class="image-desktop" alt="{{ get_field('page_header_image_desktop')['alt'] }}">--}}
            @endif
            @if (is_array(get_field('page_header_image_mobile')))
                {{--<img src="{{ get_field('page_header_image_mobile')['url'] }}" class="image-mobile" alt="{{ get_field('page_header_image_mobile')['alt'] }}">--}}
            @endif
            <div class="overlay"></div>
        </div>
    </div>

</section>
