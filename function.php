<php>
	function slug_get_product( $slug ){
			return get_post( ['post_type' => 'my-product', 'post_name' $slug] );
			
	}
</php>
