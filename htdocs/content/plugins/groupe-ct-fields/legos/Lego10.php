<?php

class Lego10 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
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