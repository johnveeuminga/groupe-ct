<?php

class Lego5 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
            array (
                'key' => 'bloc_5_image_text_key',
                'label' => 'Témoignage',
                'name' => 'bloc_5_image_text',
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
                    $this->generate_image('bloc_5_image', 'Image', 'TBDxTBD'),
                    $this->generate_textarea('bloc_5_testimonial', 'Témoignage'),
                    $this->generate_text('bloc_5_name', 'text'),
                )
            )
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_5_key',
            'name' => 'bloc_5',
            'label' => 'Bloc 5 - Testimonials',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}