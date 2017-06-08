<?php

define ('POST_TYPE_PUBLICATION', 'publications');

PostType::make(POST_TYPE_PUBLICATION, 'Publications', 'Publication')->set([
    'public'        => true,
    'menu_position' => 21,
    'menu_icon' => 'dashicons-clipboard',

]);
