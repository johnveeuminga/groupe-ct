<section class="hero-page row">

    @include('partials.components.header.sub-menu')

    <div class="hero-content-container">
        <div class="hero-title-container">
            {{--<h1 class="hero-title">NOS </br> <span class="red-border">PUBLICATIONS</span></h1>--}}
            @loop
                <h1 class="hero-title">{{ Loop::title() }}</h1>
            @endloop
        </div>
    </div>

</section>
