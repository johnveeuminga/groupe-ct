<?php

PostType::make('product', __('Products', 'GROUPE-CT'), __('Product', 'GROUPE-CT') )->set([
	'menu_icon' => 'dashicons-products',
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'exclude_from_search' => true,
	'show_in_nav_menus' => false,
	'has_archive' => false,
	'rewrite' => [
		'slug' => 'products'
	],
	'supports' => ['title', 'thumbnail'],
	'taxonomies' => ['category']
]);

$acf_fields = new BaseLego();

acf_add_local_field_group(array (
	'key' => 'product_field_group',
	'title' => 'Product Details',
	'fields' => array (
		$acf_fields->generate_textarea('product_description', 'Product Description'),
		$acf_fields->generate_file('product_pdf', 'PDF File', 'pdf')
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));