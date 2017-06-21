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
			$this->generate_select('bloc_static_file', 'Bloc Static', [
			    'bloc-a-propos-3-col-4-0' => 'Bloc à propos 3 colonnes - 4.0',
			    'bloc-a-propos-3-col-4-7' => 'Bloc à propos 3 colonnes - 4.7',
			    'bloc-echelle' => 'Échelle numérique',
			    'bloc-tab-change-2-0' => 'Bloc Produit et solution - 2.0',
			    'bloc-tab-change-2-1' => 'Bloc Équipements d\'impression - 2.1',
			    'bloc-tab-change-2-2' => 'Bloc Services d\'impression gérés - 2.2',
			    'bloc-tab-change-2-3' => 'Bloc Gestion électronique des documents - 2.3',
			    'bloc-tab-newsletter' => 'Bloc Partenaires',
			    'bloc-tab-partner' => 'Bloc Infolettre',
            ]),
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_static_key',
			'name' => 'bloc_static',
			'label' => 'Bloc Static',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}