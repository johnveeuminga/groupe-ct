<?php

/**
 * Class Lego10
 * Products and Categories
 */
class Lego10 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
            $this->generate_repeater('bloc_8_collapse',     __('Collapsible Drawer', 'GROUPE-CT'), [
                $this->generate_image('bloc_3_image',            __('Image', 'GROUPE-CT'), __('Width : 295px | Height : 255px', 'GROUPE-CT') ),
                $this->generate_text('bloc_10_title', 'Title'),
                $this->generate_textarea('bloc_10_description', 'Product Description'),
                $this->generate_file('bloc_10_product_pdf', 'PDF File', 'pdf')
            ]),
        ];

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