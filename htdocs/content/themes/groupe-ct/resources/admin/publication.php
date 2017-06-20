<?php

define ('POST_TYPE_PUBLICATION', 'publication');

PostType::make(POST_TYPE_PUBLICATION, 'Publications', 'Publication')->set([
    'menu_icon' => 'dashicons-clipboard',
    'public'        => true,
    'menu_position' => 21,
    'rewrite' => [
	    'slug' => 'publications'
    ],
]);
