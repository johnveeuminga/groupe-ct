<?php
$acf_fields = new BaseLego();

acf_add_local_field_group(array (
    'key' => 'page_field_group',
    'title' => 'Page Details',
    'fields' => array (
        $acf_fields->generate_text('page_html_title', __('Titre H1 HTML', GROUPE_CT)),
        $acf_fields->generate_text('page_header_image_desktop', __('Header desktop', GROUPE_CT)),
        $acf_fields->generate_image('page_header_image_desktop', __('Image Desktop', 'GROUPE-CT'), __('Minimum Width : 1920px | Minimum Height : 670px', 'GROUPE-CT') ),
        $acf_fields->generate_image('page_header_image_mobile', __('Image Mobile', 'GROUPE-CT'), __('Minimum Width : 415px | Minimum Height : 735px', 'GROUPE-CT') ),

    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
            ),
            array (
                'param' => 'page',
                'operator' => '!=',
                'value' => '158',
            ),
            array (
                'param' => 'page',
                'operator' => '!=',
                'value' => '255',
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

acf_add_local_field_group(array (
    'key' => 'home_field_group',
    'title' => 'Home Details',
    'fields' => [
        [
            $acf_fields->generate_repeater('bloc_1_slider', __('Slider', 'GROUPE-CT'),
                [
                    $acf_fields->generate_image('bloc_1_slide_image_desktop', __('Image', 'GROUPE-CT'), __('Minimum Width : 1920px | Minimum Height : 1175px', 'GROUPE-CT') ),
                    $acf_fields->generate_image('bloc_1_slide_image_mobile', __('Image', 'GROUPE-CT'), __('Minimum Width : 1920px | Minimum Height : 1175px', 'GROUPE-CT') ),
                    $acf_fields->generate_text('bloc_1_slide_title', __('Title', 'GROUPE-CT') ),
                    $acf_fields->generate_cta('bloc_1_slide')[0],
                    $acf_fields->generate_cta('bloc_1_slide')[1],
                    $acf_fields->generate_cta('bloc_1_slide')[2],
                ],
                1,
                6
            ),
        ]
    ],
    'location' => array (
        array (
            array (
                'param' => 'page',
                'operator' => '==',
                'value' => '158',
            ),
        ),
        array (
            array (
                'param' => 'page',
                'operator' => '==',
                'value' => '255',
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

