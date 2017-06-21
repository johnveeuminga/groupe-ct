<div class="default-padding default-width">

    <!-- TITLE START -->
    <div class="section-title-container">

        @if(isset($subheader))
            <li class="upper-title-no-dot">{{ $subheader }}</li> <!-- upper-title-no-dot : enleve le list style -->
        @endif

        @if(isset($title))
            <h2 class="title {{ isset($title_center) && $title_center === true ? 'align-center' : '' }}">{{ $title }}</h2> <!-- align-center : text-align:center for title and desc  -->
        @endif

        @if(isset($desc))
            <p class="desc {{ isset($desc_center) && $desc_center === true ? 'align-center' : '' }}">{!! nl2br($desc)  !!}</p>
        @endif
    </div>
    <!-- TITLE END -->
</div>



