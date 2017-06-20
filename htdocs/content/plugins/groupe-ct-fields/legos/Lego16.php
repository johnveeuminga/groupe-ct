<?php

/**
 * Class Lego16
 * Timeline
 */
class Lego16 extends BaseLego implements LegoInterface
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

			'key' => 'bloc_16_key',
			'name' => 'bloc_16',
			'label' => 'Bloc 16 - Timeline',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}