<?php

/**
 * Class Lego5
 * Testimonials
 */
class Lego5 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
        	$this->generate_repeater('bloc_5_slide',                 __('Testimonial', 'GROUPE-CT'), [
		        // FIXME Image size to be defined
		        $this->generate_image('bloc_5_slide_image',          __('Image', 'GROUPE-CT'), __('TBDxTBD', 'GROUPE-CT') ),
		        $this->generate_textarea('bloc_5_slide_testimonial', __('Text', 'GROUPE-CT') ),
		        $this->generate_text('bloc_5_slide_author',          __('Author', 'GROUPE-CT') ),
		        $this->generate_text('bloc_5_slide_author_title',    __('Author Title', 'GROUPE-CT') ),
	        ] )
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_5_key',
            'name' => 'bloc_5',
            'label' => __('Bloc 5 - Testimonials', 'GROUPE-CT'),
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}