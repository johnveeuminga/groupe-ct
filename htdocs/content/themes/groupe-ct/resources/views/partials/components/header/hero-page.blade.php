<section class="hero-page row">

    @include('partials.components.header.sub-menu')

    <div class="hero-content-container">
        <div class="hero-title-container">
            @loop
            <h1 class="hero-title">@if(get_field('page_html_title', Loop::id()) && !empty(get_field('page_html_title', Loop::id()))){!! get_field('page_html_title', Loop::id())  !!} @else<span class="red-border">{{ Loop::title() }}</span>@endif</h1>
            @endloop
        </div>
    </div>

</section>
