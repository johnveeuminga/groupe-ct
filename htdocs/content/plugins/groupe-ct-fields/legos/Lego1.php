<?php

/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20/05/17
 * Time: 6:11 PM
 */
class Lego1 extends BaseLego implements LegoInterface
{
    private function get_unique_fields()
    {
        return [
            array (
                'key' => 'bloc_1_header_slides_key',
                'label' => 'Slides',
                'name' => 'bloc_1_header_slides',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5920b402429a2',
                            'operator' => '==',
                            'value' => 'bloc_1_header_format_hero',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => [
                    array (
                        'key' => 'field_5920ba4f6dde6',
                        'label' => 'Subheader',
                        'name' => 'bloc_2_subheader',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_5920ba676dde7',
                        'label' => 'Title',
                        'name' => 'bloc_2_title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_5920ba956dde8',
                        'label' => 'Subtitle',
                        'name' => 'bloc_2_subtitle',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_5920baa66dde9',
                        'label' => 'Description',
                        'name' => 'bloc_2_description',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => 'wpautop',
                    ),
                    array (
                        'key' => 'field_5920bb1e6dded',
                        'label' => 'Phone label 1',
                        'name' => 'bloc_2_phone_label_1',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_5920bb316ddee',
                        'label' => 'Phone number 1',
                        'name' => 'bloc_2_phone_number_1',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_5920bb526ddef',
                        'label' => 'Phone label 2',
                        'name' => 'bloc_2_phone_label_2',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_5920bb726ddf0',
                        'label' => 'Phone number 2',
                        'name' => 'bloc_2_phone_number',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    $this->generate_cta('bloc_2')[0],
                    $this->generate_cta('bloc_2')[1],
                    $this->generate_cta('bloc_2')[2],
                ]
            ),
        ];
    }

    protected function get_subfields()
    {
        return array_merge($this->get_unique_fields());
    }

    public function get_fields_layout()
    {
        return [
            'key' => '5920b3ad5aec0',
            'name' => 'bloc_1_header',
            'label' => 'Bloc 1 - Header',
            'display' => 'block',
            'sub_fields' => $this->get_subfields(),
        ];
    }
}