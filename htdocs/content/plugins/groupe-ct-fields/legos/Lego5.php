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
        	$this->generate_repeater('bloc_5_slide', 'Testimonial', [
		        $this->generate_image('bloc_5_slide_image', 'Image', 'TBDxTBD'),
		        $this->generate_textarea('bloc_5_slide_testimonial', 'Text'),
		        $this->generate_text('bloc_5_slide_author', 'Author'),
		        $this->generate_text('bloc_5_slide_author_title', 'Author Title'),
	        ] )
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_5_key',
            'name' => 'bloc_5',
            'label' => 'Bloc 5 - Testimonials',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}