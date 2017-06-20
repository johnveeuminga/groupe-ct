<?php

/**
 * Class Lego17
 * Stats Banner
 */
class Lego17 extends BaseLego implements LegoInterface
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

			'key' => 'bloc_17_key',
			'name' => 'bloc_17',
			'label' => 'Bloc 17 - Stats Banner',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}