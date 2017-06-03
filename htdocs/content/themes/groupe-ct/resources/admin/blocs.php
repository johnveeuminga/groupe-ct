<?php

PostType::make('blocs', 'Blocks', 'Bloc')->set([
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'exclude_from_search' => true,
    'show_in_nav_menus' => false,
    'has_archive' => false,
    'rewrite' => false,
    'supports' => ['title'],
]);

