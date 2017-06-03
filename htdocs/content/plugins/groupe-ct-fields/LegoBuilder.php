<?php

include_once __DIR__ . '/legos/BaseLego.php';
include_once __DIR__ . '/legos/LegoInterface.php';
include_once __DIR__ . '/legos/Lego1.php';
include_once __DIR__ . '/legos/Lego2.php';
include_once __DIR__ . '/legos/Lego3.php';
include_once __DIR__ . '/legos/Lego4.php';
include_once __DIR__ . '/legos/Lego5.php';
include_once __DIR__ . '/legos/Lego6.php';
include_once __DIR__ . '/legos/Lego7.php';
include_once __DIR__ . '/legos/Lego8.php';
include_once __DIR__ . '/legos/Lego9.php';

class LegoBuilder
{
    public function run()
    {
        $lego1 = new Lego1();
        $lego2 = new Lego2();
        $lego3 = new Lego3();
        $lego4 = new Lego4();
        $lego5 = new Lego5();
        $lego6 = new Lego6();
        $lego7 = new Lego7();
        $lego8 = new Lego8();
        $lego9 = new Lego9();

        acf_add_local_field_group(array (
            'key' => 'group_5920b39e18711',
            'title' => 'Flexible Content',
            'fields' => array (
                array (
                    'key' => 'field_5920b3a8429a1',
                    'label' => 'Flexible Content',
                    'name' => 'bloc_flexible_content',
                    'type' => 'flexible_content',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layouts' => array (
                        'bloc_1_layout_key' => $lego1->get_fields_layout(),
                        'bloc_2_layout_key' => $lego2->get_fields_layout(),
                        'bloc_3_layout_key' => $lego3->get_fields_layout(),
                        'bloc_4_layout_key' => $lego4->get_fields_layout(),
                        'bloc_5_layout_key' => $lego5->get_fields_layout(),
                        'bloc_6_layout_key' => $lego6->get_fields_layout(),
                        'bloc_7_layout_key' => $lego7->get_fields_layout(),
                        'bloc_8_layout_key' => $lego8->get_fields_layout(),
                        'bloc_9_layout_key' => $lego9->get_fields_layout(),
                    ),
                    'button_label' => 'Add Row',
                    'min' => '',
                    'max' => '',
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'blocs',
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
    }
}