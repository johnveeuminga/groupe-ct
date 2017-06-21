<?php

/**
 * Class Lego11
 * Software Product
 */
class Lego11 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			$this->generate_true_false( 'bloc_11_slide_image_left', __('Image on the left?', 'GROUPE-CT') ),
			$this->generate_image('bloc_11_slide_image',            __('Image', 'GROUPE-CT'), __('TBDxTBD', 'GROUPE-CT') ),
			$this->generate_url('bloc_11_video_link',               __('Video Link', 'GROUPE-CT') ),
			$this->generate_text('bloc_11_video_caption',           __('Video Caption', 'GROUPE-CT') ),
			$this->generate_text('bloc_11_title',                   __('Title', 'GROUPE-CT') ),
			$this->generate_text('bloc_11_subtitle',                __('Subtitle', 'GROUPE-CT') ),
			$this->generate_color_picker('bloc_11_accent_color',    __('Accent Color', 'GROUPE-CT') ),
			$this->generate_textarea('bloc_11_description',         __('Title', 'GROUPE-CT') ),
			$this->generate_file('bloc_11_brochure',                __('Brochure', 'GROUPE-CT'), 'pdf'),

		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_11_key',
			'name' => 'bloc_11',
			'label' => 'Bloc 11 - Software Product',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}