<?php

/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20/05/17
 * Time: 6:11 PM
 */
class Lego1 extends BaseLego implements LegoInterface
{
    private function get_unique_fields()
    {
        return [
        	$this->generate_select('bloc_1_header_type', 'Header Type', [
		        'standard' => 'Standard',
        		'hero' => 'Hero',
	        ]),
			$this->generate_repeater(
				'bloc_1_hero_slide',
				'Hero Slide',
				[
					$this->generate_image('bloc_1_hero_slide_image', 'Image', 'TBDxTBD'),
					$this->generate_text('bloc_1_hero_slide_title', 'Title'),
					$this->generate_cta('bloc_1_hero_slide_cta')[0],
					$this->generate_cta('bloc_1_hero_slide_cta')[1],
					$this->generate_cta('bloc_1_hero_slide_cta')[2],
				],
				1,
				0,
				[[[
					'field' => 'bloc_1_header_type_key',
					'operator' => '===',
					'value' => 'hero'
				]]]
			),
	        $this->generate_image('bloc_1_header_image', 'Image', 'TBDxTBD',
		        [[[
			        'field' => 'bloc_1_header_type_key',
			        'operator' => '===',
			        'value' => 'standard'
		        ]]]
	        ),
	        $this->generate_text('bloc_1_header_title', 'Title',
		        [[[
			        'field' => 'bloc_1_header_type_key',
			        'operator' => '===',
			        'value' => 'standard'
		        ]]]
	        ),
	        $this->generate_cta('bloc_1_header_cta', [[[
		            'field' => 'bloc_1_header_type_key',
		            'operator' => '===',
		            'value' => 'standard'
            ]]])[0],
	        $this->generate_cta('bloc_1_header_cta', [[[
		        'field' => 'bloc_1_header_type_key',
		        'operator' => '===',
		        'value' => 'standard'
	        ]]])[1],
	        $this->generate_cta('bloc_1_header_cta', [[[
		        'field' => 'bloc_1_header_type_key',
		        'operator' => '===',
		        'value' => 'standard'
	        ]]])[2],
        ];
    }

    public function get_fields_layout()
    {
        return [
            'key' => '5920b3ad5aec0',
            'name' => 'bloc_1_header',
            'label' => 'Bloc 1 - Header',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
	        'min' => '',
	        'max' => ''
        ];
    }
}