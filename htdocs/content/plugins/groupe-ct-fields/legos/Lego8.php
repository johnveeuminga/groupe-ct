<?php

class Lego8 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
            array (
                'key' => 'bloc_8_collapse_key',
                'label' => 'Row repeater',
                'name' => 'bloc_8_collapse',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 1,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array (
                    $this->generate_image('bloc_8_icon', 'Icon', 'TBDxTBD'),
                    $this->generate_text('bloc_8_title', 'Title'),
                    $this->generate_wysiwyg('bloc_8_content', 'Content'),
                    $this->generate_true_false('bloc_8_active', 'Open by default?'),
                    array (
                        'key' => 'bloc_8_blocs_key',
                        'label' => 'Blocs',
                        'name' => 'bloc_8_blocs',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'collapsed' => '',
                        'min' => 1,
                        'max' => 0,
                        'layout' => 'block',
                        'button_label' => '',
                        'sub_fields' => array (
                            array (
                                'key' => 'bloc_8_bloc_key',
                                'label' => 'Bloc',
                                'name' => 'bloc_8_bloc',
                                'type' => 'post_object',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'post_type' => array (
                                    0 => 'blocs',
                                ),
                                'taxonomy' => array (
                                ),
                                'allow_null' => 0,
                                'multiple' => 0,
                                'return_format' => 'object',
                                'ui' => 1,
                            ),
                        )
                    )
                )
            )
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_8_key',
            'name' => 'bloc_8',
            'label' => 'Bloc 8 - Collapse',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}