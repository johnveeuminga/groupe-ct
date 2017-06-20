<?php

/**
 * Class Lego14
 * Job Offer
 */
class Lego14 extends BaseLego implements LegoInterface
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

			'key' => 'bloc_14_key',
			'name' => 'bloc_14',
			'label' => 'Bloc 14 - Job Offer',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}