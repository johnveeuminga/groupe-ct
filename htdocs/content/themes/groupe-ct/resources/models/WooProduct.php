<?php
	
namespace Theme\Models;

use WP_Query;

class WooProduct{
	public static function getProductsWithBrandAndType($brand_id, $type_id){
		$query = new WP_Query([
			'post_type' => 'product',
			'posts_per_page' => -1,
			'tax_query' => [
				'relation' => 'OR',
				[
					'taxonomy' => 'product_cat',
					'field' => 'term_id',
					'terms' => $type_id
				]
			]
		]);

		return $query->get_posts();

	}
}