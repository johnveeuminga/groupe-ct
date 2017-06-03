<?php

class Lego9 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
            $this->generate_text('bloc_9_title', 'Title'),
            $this->generate_text('bloc_9_label', 'Label'),
            $this->generate_color_picker('bloc_9_primary', 'Primary Color'),
            $this->generate_color_picker('bloc_9_secondary', 'Secondary Color'),
            $this->generate_color_picker('bloc_9_unfilled', 'Unfilled color'),
            $this->generate_number('bloc_9_percent', 'Percentage filled'),
            $this->generate_textarea('bloc_9_description', 'Description'),
            $this->generate_text('bloc_9_source', 'Source'),
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_9_key',
            'name' => 'bloc_9',
            'label' => 'Bloc 9 - Statistics',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}