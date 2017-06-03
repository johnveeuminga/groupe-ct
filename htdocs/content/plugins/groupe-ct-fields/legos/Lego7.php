<?php

class Lego7 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
            array (
                'key' => 'bloc_7_row_repeater_key',
                'label' => 'Row repeater',
                'name' => 'bloc_7_row_repeater',
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
                    $this->generate_text('bloc_8_title', 'text'),
                    $this->generate_textarea('bloc_8_description', 'text'),
                )
            )
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_7_key',
            'name' => 'bloc_7',
            'label' => 'Bloc 7 - Row repeater',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}