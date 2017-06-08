
<section id="header" class="header-main-container container-fluid">

<!--    INCLUDE HEADER COMPONENTS -->
    @include('partials.components.header.main-nav')

    @if(is_front_page())
        @include('partials.components.header.hero')
    @else
        @include('partials.components.header.hero-page')
    @endif

</section>