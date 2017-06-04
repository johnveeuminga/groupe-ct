@extends('templates.main')

@section('main')
    <div class="container-fluid">

        @if( have_rows('blocks') )

            @while ( have_rows('blocks') )
                <?php the_row(); ?>

                <?php
                    $row = get_row();
                    $row_id = array_shift($row);
                ?>
                @while ( has_sub_field('bloc_flexible_content', $row_id) )
                    @include('partials.components.elements.'.get_row_layout())
                @endwhile

            @endwhile

        @endif
    </div>
@endsection