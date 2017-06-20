<?php

/**
 * Class Lego11
 * Software Product
 */
class Lego11 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			$this->generate_object('bloc_11_image_text_block', __('Image/Text Block', 'GROUPE-CT'), ['blocs'])
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_11_key',
			'name' => 'bloc_11',
			'label' => 'Bloc 11 - Software Product',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}