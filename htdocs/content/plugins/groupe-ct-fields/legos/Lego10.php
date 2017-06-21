<?php

/**
 * Class Lego10
 * Products and Categories
 */
class Lego10 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
    	// THIS IS VOLUNTARILY EMPTY -- PRODUCTS WILL BE DEFINED IN TEMPLATES
        return [];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_10_key',
            'name' => 'bloc_10',
            'label' => 'Bloc 10 - Products',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}