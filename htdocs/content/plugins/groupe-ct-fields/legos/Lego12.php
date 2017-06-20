<?php

/**
 * Class Lego12
 * Standard Post
 */
class Lego12 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			// TODO
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_12_key',
			'name' => 'bloc_12',
			'label' => 'Bloc 12 - Standard Post',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}