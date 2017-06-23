<?php

$acf_fields = new BaseLego();

acf_add_local_field_group(array (
    'key' => 'page_field_group',
    'title' => 'Page Details',
    'fields' => array (
        $acf_fields->generate_text('page_html_title', __('Titre H1 HTML', GROUPE_CT)),
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));
