<?php
// This bloc is sometime used by static bloc.
$bloc_19_background_color = $block->get_field('block_19_background_color') ? $block->get_field('block_19_background_color') : 'inherit';
$bloc_19_subheader = isset($bloc_19_subheader) ? $bloc_19_subheader : $block->get_field('bloc_19_subheader');
$bloc_19_subheader_carret = isset($bloc_19_subheader_carret) ? $bloc_19_subheader_carret : $block->get_field('bloc_19_subheader_carret');
$bloc_19_center_subheader = isset($bloc_19_center_subheader) ? $bloc_19_center_subheader: $block->get_field('bloc_19_center_subheader');
$bloc_19_title = isset($bloc_19_title) ? $bloc_19_title : $block->get_field('bloc_19_title');
$bloc_19_center_title = isset($bloc_19_center_title) ? $bloc_19_center_title : $block->get_field('bloc_19_center_title');
$bloc_19_description = isset($bloc_19_description) ? $bloc_19_description : $block->get_field('bloc_19_description');
$bloc_19_center_description = isset($bloc_19_center_description) ? $bloc_19_center_description : $block->get_field('bloc_19_center_description');

?>

<div class="section-title-wrapper" style="background-color: {{ $bloc_19_background_color }}">
    <div class="default-padding default-width">

        <!-- TITLE START -->
        <div class="section-title-container">

            {{--@if(isset($bloc_19_subheader))--}}
                <p class="{{ $bloc_19_subheader_carret === true ? 'upper-title' : 'upper-title-no-dot' }} {{ $bloc_19_center_subheader === true ? 'align-center' : '' }}">{{ $bloc_19_subheader }}</p> <!-- upper-title-no-dot : enleve le list style -->
            {{--@endif--}}

            {{--@if(isset($bloc_19_title))--}}
                <h2 class="title {{ $bloc_19_center_title === true ? 'align-center' : '' }}">{!! $bloc_19_title !!} </h2> <!-- align-center : text-align:center for title and desc  -->
            {{--@endif--}}

            {{--@if(isset($bloc_19_description))--}}
                <div class="desc {{ $bloc_19_center_description === true ? 'align-center' : '' }}">{!! $bloc_19_description !!}</div>
            {{--@endif--}}
        </div>
        <!-- TITLE END -->
    </div>
</div>