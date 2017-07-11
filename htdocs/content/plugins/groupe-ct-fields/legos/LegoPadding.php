<?php

/**
 * Class LegoStatic
 * Charge les blocs statiques sur demande
 */
class LegoStatic extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			$this->generate_select('bloc_padding', 'Bloc Padding', [
			    'bloc_padding_mobile' => 'Padding Mobile (768px<)',
			    'bloc_padding_tablet' => 'Padding Tablet (1024x<)',
			    'bloc_padding_laptop' => 'Padding Laptop (1440<)',
			    'bloc_padding_desktop' => 'Padding Desktop (1440>)',
            ]),
		];
	}

	public function get_fields_layout()
	{
		return [
			'key' => 'bloc_padding_key',
			'name' => 'bloc_padding',
			'label' => 'Bloc Static',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}