<?php

/**
 * Class Lego15
 * Team
 */
class Lego15 extends BaseLego implements LegoInterface
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

			'key' => 'bloc_15_key',
			'name' => 'bloc_15',
			'label' => 'Bloc 15 - Team',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}