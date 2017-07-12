@if (get_post_type(get_the_ID()) !== 'post')
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
            @media (max-width: 767px) { /* or 301 if you want really the same as previously.  */
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
                <h1 class="hero-title">@if(get_field('page_html_title', PageHelper::get_page_id(PageHelper::PAGE_5_0_PUBLICATIONS)) && !empty(get_field('page_html_title', Loop::id()))){!! get_field('page_html_title', PageHelper::get_page_id(PageHelper::PAGE_5_0_PUBLICATIONS))  !!} @else<span class="red-border">{{ get_the_title(PageHelper::get_page_id(PageHelper::PAGE_5_0_PUBLICATIONS)) }}</span>@endif</h1>
                @loop
                    <h1 class="hero-title">@if(get_field('page_html_title', Loop::id()) && !empty(get_field('page_html_title', Loop::id()))){!! get_field('page_html_title', Loop::id())  !!} @else<span class="red-border">{{ Loop::title() }}</span>@endif</h1>
                @endloop
            </div>
            <div class="overlay"></div>
        </div>
    </section>
@endif
