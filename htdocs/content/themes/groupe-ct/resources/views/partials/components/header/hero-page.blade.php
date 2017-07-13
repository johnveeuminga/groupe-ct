@if (get_post_type(get_the_ID()) === 'post')
    <style scoped>
        .hero-page {
            display: none;
        }
    </style>
@endif

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
@endif

    <section class="hero-page row">
        @include('partials.components.header.sub-menu')
        @include('partials.components.header.contact-form')
        @if (get_post_type(get_the_ID()) !== 'post')
            <div class="hero-content-container">
                <div class="hero-title-container">
                    @loop
                        <h1 class="hero-title">@if(get_field('page_html_title', Loop::id()) && !empty(get_field('page_html_title', Loop::id()))){!! get_field('page_html_title', Loop::id())  !!} @else<span class="red-border">{{ Loop::title() }}</span>@endif</h1>
                    @endloop
                </div>
                <div class="overlay"></div>
            </div>
        @endif
    </section>
