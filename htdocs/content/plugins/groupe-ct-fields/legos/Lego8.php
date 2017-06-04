<?php

class Lego8 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
        	$this->generate_repeater('bloc_8_collapse', 'Collapsible Drawer', [
		        $this->generate_image('bloc_8_icon', 'Icon', 'TBDxTBD'),
		        $this->generate_text('bloc_8_title', 'Title'),
		        $this->generate_wysiwyg('bloc_8_content', 'Content'),
		        $this->generate_true_false('bloc_8_active', 'Open by default?'),
		        $this->generate_repeater('bloc_8_blocks', 'Drawer Blocks', [
		        	$this->generate_object('bloc_8_block', 'Block', ['blocs'])
		        ])
	        ])
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