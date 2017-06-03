<?php

class Lego3 extends BaseLego implements LegoInterface
{
    private function get_unique_fields()
    {
        return [
            array (
                'key' => 'bloc_3_image_text_key',
                'label' => 'Slides',
                'name' => 'bloc_3_image_text',
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
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array (
                    array (
                        'key' => 'bloc_3_subheader_key',
                        'label' => 'Subheader',
                        'name' => 'bloc_3_subheader',
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
                        'key' => 'bloc_3_title_key',
                        'label' => 'Title',
                        'name' => 'bloc_3_title',
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
                        'key' => 'bloc_3_subtitle_key',
                        'label' => 'Subtitle',
                        'name' => 'bloc_3_subtitle',
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
                        'key' => 'bloc_3_description_key',
                        'label' => 'Description',
                        'name' => 'bloc_3_description',
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
                        'key' => 'bloc_3_phone_label_1',
                        'label' => 'Phone label 1',
                        'name' => 'bloc_3_phone_label_1',
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
                        'key' => 'bloc_3_phone_number_1',
                        'label' => 'Phone number 1',
                        'name' => 'bloc_3_phone_number_1',
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
                        'key' => 'bloc_3_phone_label_2_key',
                        'label' => 'Phone label 2',
                        'name' => 'bloc_3_phone_label_2',
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
                        'key' => 'bloc_3_phone_number_key',
                        'label' => 'Phone number 2',
                        'name' => 'bloc_3_phone_number',
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
                    $this->generate_cta('bloc_3')[0],
                    $this->generate_cta('bloc_3')[1],
                    $this->generate_cta('bloc_3')[2],
                ),
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
            'key' => 'bloc_3_key',
            'name' => 'bloc_3',
            'label' => 'Bloc 3 - Slider Text / Image',
            'display' => 'block',
            'sub_fields' => $this->get_subfields(),
            'min' => '',
            'max' => '',
        ];
    }
}