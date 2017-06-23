<div class="toggle-content-main-container default-padding default-width">
    @foreach ($block->get_field('bloc_8_collapse') as $collapse)
        <div class="toggle-content-container @if($collapse['bloc_8_active']) active-header @endif">
            <div class="toggle-content-header">
                <div class="title-container">
                    <img class="title-icon" src="{{ $collapse['bloc_8_icon']['url'] }}" alt="{{ $collapse['bloc_8_icon']['alt'] }}">
                    <h3 class="toggle-content-title" href="">{{ $collapse['bloc_8_title'] }}</h3>
                </div>
                <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
                <div class="triangle-blue"></div>
                <a class="open-toggle-content" href="#"></a>
            </div>
            <div class="toggle-content">
                <div class="wys-content">{!! $collapse['bloc_8_content'] !!}</div>
            </div>
        </div>
        @foreach ($block->get_field('bloc_8_blocks') as $blocks)
            <?php var_dump($blocks) ?>
        @endforeach
    @endforeach
</div>