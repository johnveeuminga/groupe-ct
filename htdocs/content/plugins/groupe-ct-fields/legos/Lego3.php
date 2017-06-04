<?php

class Lego3 extends BaseLego implements LegoInterface
{
    private function get_unique_fields()
    {
        return [
            $this->generate_repeater('bloc_3_slide', 'Text / Image Slide', [
	            $this->generate_text('bloc_3_slide_title', 'Title'),
	            $this->generate_textarea('bloc_3_slide_text', 'Text'),
	            $this->generate_image('bloc_3_slide_image', 'Image', 'TBDxTBD')
            ])
        ];
    }

    public function get_fields_layout()
    {
        return [
            'key' => 'bloc_3_key',
            'name' => 'bloc_3',
            'label' => 'Bloc 3 - Slider Text / Image',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}