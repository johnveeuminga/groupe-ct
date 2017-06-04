<?php

class Lego2 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
        	$this->generate_text('bloc_2_title', 'Title'),
			$this->generate_textarea('bloc_2_text', 'Text'),
	        $this->generate_image('bloc_2_image', 'Image', 'TBDxTBD')
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_2_key',
            'name' => 'bloc_2',
            'label' => 'Bloc 2 - Text / Image',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}