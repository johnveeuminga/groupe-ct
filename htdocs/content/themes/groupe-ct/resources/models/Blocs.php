<?php

namespace Theme\Models;

class Blocs {

	private $block_type;
	private $fields;


	public function __construct($flexible_layout)
	{
		$this->block_type = $flexible_layout;
	}


	public function get_field($field_name)
	{
		if (empty($this->fields))
		{
			$this->fields = $this->get_fields();
		}

		return $this->fields[$field_name];

	}

	public function get_fields()
	{
		if (empty($this->fields)) {
			switch ( $this->block_type ) {
				// Bloc 1 - HEADER
				case "bloc_1":
					$this->fields['bloc_1_header_type'] = get_sub_field( 'bloc_1_header_type' );
					if ("standard" === $this->fields['bloc_1_header_type'])
					{
						$this->fields['bloc_1_header_image'] = get_sub_field('bloc_1_header_image');
						$this->fields['bloc_1_header_title'] = get_sub_field('bloc_1_header_title');
						$this->fields['bloc_1_header_cta_label'] = get_sub_field('bloc_1_header_cta_label');
						$this->fields['bloc_1_header_cta_link'] = get_sub_field('bloc_1_header_cta_link');
						$this->fields['bloc_1_header_cta_blank'] = get_sub_field('bloc_1_header_cta_blank');
					}
					else if ("slider" === $this->fields['bloc_1_header_type'])
					{
						$this->fields['bloc_1_slider'] = get_sub_field('bloc_1_slider');
					}
					break;
				case "bloc_2":
					$this->fields['bloc_2_slides'] = get_sub_field('bloc_2_slide');
					break;
				case "bloc_3":
					$this->fields['bloc_3_title'] = get_sub_field('bloc_3_title');
					$this->fields['bloc_3_subtitle'] = get_sub_field('bloc_3_subtitle');
					$this->fields['bloc_3_text'] = get_sub_field('bloc_3_text');
					$this->fields['bloc_3_cta_label'] = get_sub_field('bloc_3_cta_label');
					$this->fields['bloc_3_cta_link'] = get_sub_field('bloc_3_cta_link');
					$this->fields['bloc_3_cta_blank'] = get_sub_field('bloc_3_cta_blank');
					$this->fields['bloc_3_phone_1_location'] = get_sub_field('bloc_3_phone_1_location');
					$this->fields['bloc_3_phone_1_label'] = get_sub_field('bloc_3_phone_1_label');
					$this->fields['bloc_3_phone_1'] = get_sub_field('bloc_3_phone_1');
					$this->fields['bloc_3_phone_2_location'] = get_sub_field('bloc_3_phone_2_location');
					$this->fields['bloc_3_phone_2_label'] = get_sub_field('bloc_3_phone_2_label');
					$this->fields['bloc_3_phone_2'] = get_sub_field('bloc_3_phone_2');
					$this->fields['bloc_3_image'] = get_sub_field('bloc_3_image');
					$this->fields['bloc_3_image_left'] = get_sub_field('bloc_3_image_left');
					break;
				case "bloc_4":
					$this->fields['bloc_4_subheader'] = get_sub_field('bloc_4_subheader');
					$this->fields['bloc_4_title'] = get_sub_field('bloc_4_title');
					$this->fields['bloc_4_description'] = get_sub_field('bloc_4_description');

					$this->fields['bloc_4_1_icon'] = get_sub_field('bloc_4_1_icon');
					$this->fields['bloc_4_1_title'] = get_sub_field('bloc_4_1_title');
					$this->fields['bloc_4_1_description'] = get_sub_field('bloc_4_1_description');
					$this->fields['bloc_4_1_cta_label'] = get_sub_field('bloc_4_1_cta_label');
					$this->fields['bloc_4_1_cta_link'] = get_sub_field('bloc_4_1_cta_link');
					$this->fields['bloc_4_1_cta_blank'] = get_sub_field('bloc_4_1_cta_blank');

					$this->fields['bloc_4_2_icon'] = get_sub_field('bloc_4_2_icon');
					$this->fields['bloc_4_2_title'] = get_sub_field('bloc_4_2_title');
					$this->fields['bloc_4_2_description'] = get_sub_field('bloc_4_2_description');
					$this->fields['bloc_4_2_cta_label'] = get_sub_field('bloc_4_2_cta_label');
					$this->fields['bloc_4_2_cta_link'] = get_sub_field('bloc_4_2_cta_link');
					$this->fields['bloc_4_2_cta_blank'] = get_sub_field('bloc_4_2_cta_blank');

					$this->fields['bloc_4_3_icon'] = get_sub_field('bloc_4_3_icon');
					$this->fields['bloc_4_3_title'] = get_sub_field('bloc_4_3_title');
					$this->fields['bloc_4_3_description'] = get_sub_field('bloc_4_3_description');
					$this->fields['bloc_4_3_cta_label'] = get_sub_field('bloc_4_3_cta_label');
					$this->fields['bloc_4_3_cta_link'] = get_sub_field('bloc_4_3_cta_link');
					$this->fields['bloc_4_3_cta_blank'] = get_sub_field('bloc_4_3_cta_blank');

					$this->fields['bloc_4_4_icon'] = get_sub_field('bloc_4_4_icon');
					$this->fields['bloc_4_4_title'] = get_sub_field('bloc_4_4_title');
					$this->fields['bloc_4_4_description'] = get_sub_field('bloc_4_4_description');
					$this->fields['bloc_4_4_cta_label'] = get_sub_field('bloc_4_4_cta_label');
					$this->fields['bloc_4_4_cta_link'] = get_sub_field('bloc_4_4_cta_link');
					$this->fields['bloc_4_4_cta_blank'] = get_sub_field('bloc_4_4_cta_blank');
					break;
				case "bloc_5":
					$this->fields['bloc_5_slides'] = get_sub_field('bloc_5_slide');
					break;
				case "bloc_6":
					$this->fields['bloc_6_subheader'] = get_sub_field('bloc_6_subheader');
					$this->fields['bloc_6_title'] = get_sub_field('bloc_6_title');
					$this->fields['bloc_6_description'] = get_sub_field('bloc_6_description');

					$this->fields['bloc_6_1_icon'] = get_sub_field('bloc_6_1_icon');
					$this->fields['bloc_6_1_title'] = get_sub_field('bloc_6_1_title');
					$this->fields['bloc_6_1_description'] = get_sub_field('bloc_6_1_description');
					$this->fields['bloc_6_1_cta_label'] = get_sub_field('bloc_6_1_cta_label');
					$this->fields['bloc_6_1_cta_link'] = get_sub_field('bloc_6_1_cta_link');
					$this->fields['bloc_6_1_cta_blank'] = get_sub_field('bloc_6_1_cta_blank');

					$this->fields['bloc_6_2_icon'] = get_sub_field('bloc_6_2_icon');
					$this->fields['bloc_6_2_title'] = get_sub_field('bloc_6_2_title');
					$this->fields['bloc_6_2_description'] = get_sub_field('bloc_6_2_description');
					$this->fields['bloc_6_2_cta_label'] = get_sub_field('bloc_6_2_cta_label');
					$this->fields['bloc_6_2_cta_link'] = get_sub_field('bloc_6_2_cta_link');
					$this->fields['bloc_6_2_cta_blank'] = get_sub_field('bloc_6_2_cta_blank');

					$this->fields['bloc_6_3_icon'] = get_sub_field('bloc_6_3_icon');
					$this->fields['bloc_6_3_title'] = get_sub_field('bloc_6_3_title');
					$this->fields['bloc_6_3_description'] = get_sub_field('bloc_6_3_description');
					$this->fields['bloc_6_3_cta_label'] = get_sub_field('bloc_6_3_cta_label');
					$this->fields['bloc_6_3_cta_link'] = get_sub_field('bloc_6_3_cta_link');
					$this->fields['bloc_6_3_cta_blank'] = get_sub_field('bloc_6_3_cta_blank');

					break;
				case "bloc_7":

					break;
				case "bloc_8":
					break;
				case "bloc_9":
					break;
				case "bloc_10":
					break;
				case "bloc_11":
					break;
				case "bloc_12":
					break;
				case "bloc_13":
					break;
				case "bloc_14":
					break;
				case "bloc_15":
					break;
				case "bloc_16":
					break;
				case "bloc_17":
					break;
				case "bloc_18":
					break;
				case "bloc_static":
				    var_dump(get_sub_field('bloc_static_file'));die();
				    $this->fields['bloc_static_file'] = get_sub_field('bloc_static_file');
					break;
				default:
					break;
			}
		}


		return $this->fields;
	}

	public function load_path()
    {
        $dir = $this->block_type === 'bloc_static' ? 'blocs-static' : 'blocs-dynamic';
        $this->get_fields();
        var_dump($this->fields);
//        $file = $this->block  _type === 'bloc_static' ? $this->fields['bloc_static'] : $this->block_type;
//        var_dump('partials.components.' . $dir . '.' . $file);
//die();        return 'partials.components.' . $dir . '.' . $file;
//die();        return 'partials.components.' . $dir . '.' . $file;
    }

}