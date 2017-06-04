<?php

class Lego7 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
        	$this->generate_repeater('bloc_7_row', 'Rows', [
		        $this->generate_image('bloc_7_row_icon', 'Icon', 'TBDxTBD'),
		        $this->generate_text('bloc_7_row_title', 'Title'),
		        $this->generate_textarea('bloc_7_row_description', 'Description'),
	        ])
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