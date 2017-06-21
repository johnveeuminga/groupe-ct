<?php

/**
 * Class Lego16
 * Timeline
 */
class Lego16 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		// THIS IS VOLUNTARILY EMPTY -- TIMELINE EVENTS WILL BE DEFINED IN TEMPLATES
		return [];
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