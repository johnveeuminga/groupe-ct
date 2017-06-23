<section class="hero-page row">

    @include('partials.components.header.sub-menu')

    <div class="hero-content-container">
        <div class="hero-title-container">
            {{--<h1 class="hero-title">NOS </br> <span class="red-border">PUBLICATIONS</span></h1>--}}
            @loop
                <h1 class="hero-title">@if(get_field('page_html_title', Loop::id()) && !empty(get_field('page_html_title', Loop::id()))){{ get_field('page_html_title', Loop::id()) }}@else{{ Loop::title() }}@endif</h1>
            @endloop
        </div>
    </div>

</section>
