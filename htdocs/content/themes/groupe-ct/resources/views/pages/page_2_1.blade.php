@extends('templates.main')

@section('main')
    <div class="container-fluid" id="_main-container-page-{{ get_the_ID() }}">
        <div class="bloc-product-search-main-container">
            <div class="bloc-product-container">
                <nav class="nav-type-container default-width">
                    <ul class="menu-item-container">
                        <li class="menu-item {{ PageHelper::get_page_id(PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU) === get_the_ID() ? 'item-type-active' : '' }}"><a class="" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU) }}#main-container-page-{{ PageHelper::get_page_id(PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU) }}</a></li>
                        <li class="menu-item {{ PageHelper::get_page_id(PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION) === get_the_ID() ? 'item-type-active' : '' }}"><a class="" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION) }}#main-container-page-{{ PageHelper::get_page_id(PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION) }}</a></li>
                        <li class="menu-item {{ PageHelper::get_page_id(PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT) === get_the_ID() ? 'item-type-active' : '' }}"><a class="" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT) }}#main-container-page-{{ PageHelper::get_page_id(PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT) }}</a></li>
                        <li class="menu-item {{ PageHelper::get_page_id(PageHelper::PAGE_2_1_4_FOURNITURES) === get_the_ID() ? 'item-type-active' : '' }}"><a class="" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_1_4_FOURNITURES) }}#main-container-page-{{ PageHelper::get_page_id(PageHelper::PAGE_2_1_4_FOURNITURES) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_2_1_4_FOURNITURES) }}</a></li>
                    </ul>
                </nav>

                @if( have_rows('blocks') )

                    @while ( have_rows('blocks') )
                        <?php the_row(); ?>

                        <?php
                            $row = get_row();
                            $row_id = array_shift($row);
                        ?>
                        @while ( has_sub_field('bloc_flexible_content', $row_id) )
                            <?php
                                $block = new \Theme\Models\Bloc(get_row_layout());
                            ?>
                            @include($block->load_path(), ['block' => $block])
                        @endwhile

                    @endwhile

                @endif
            </div>
        </div>
    </div>
@endsection