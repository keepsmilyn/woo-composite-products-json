<?php 

$product_array = array(
	array( 
		//UNIQUE ID FOR ACCESSORY GROUP	
		'id' => '1531372338',				//UNIQUE ID (product ID, ref id, eg: XXXX00001, XXXX000002)
		
		//TITLE (displays on web)	
		'title' => 'Accessory Title',
		
		//DESCRIPTION (displays on web... can include HTML)	
		'description' => 'Select an accessory. ',
		'query_type' => 'category_ids',
		
		//CATEGORY (CAT-NAME REQURIED)
		//EG: "query_ids":"Category > Subcategory > Subsubcategory > Subsubsubcategory > Subsubsubsubcategory > Subsubsubsubcategory",	
		'query_ids' => 'Category > Subcategory',
		'default_option_id' => '',			
		'thumbnail_id' => '',				
		'thumbnail_src' => '',				
		'quantity_min' =>1,
		'quantity_max' => '',				
		'priced_individually' =>true,		
		'shipped_individually' =>true,
		'optional' =>true,			
		'discount' => '',			
		'options_style' => 'thumbnails',	
		'pagination_style' => 'classic',
		'display_prices' => 'hidden', 	
		
		//NEWLY ADDED IN VERSION: 3.14.0-dev	
		'show_sorting_options' =>false,			
		'show_filtering_options' =>true,
		'product_title_visible' =>true,			
		'product_descr_visible' =>true,			
		'product_thumb_visible' =>true,			
		'product_price_visible' =>true,			
		'subtotal_visible_product' =>false,		
		'subtotal_visible_cart' =>true,			
		'subtotal_visible_orders' =>true,		
		
		//USES FILTER ATTRIBUTES SET ON PRODUCTS IN THE SELECTED CATEGORY. 	
		'attribute_filters' => array( 'Product Colour','Product type' )
	),
	array( 
		//UNIQUE ID FOR ACCESSORY GROUP	
		'id' => '1531372338',				//UNIQUE ID (product ID, ref id, eg: XXXX00001, XXXX000002)
		
		//TITLE (displays on web)	
		'title' => 'Accessory Title',
		
		//DESCRIPTION (displays on web... can include HTML)	
		'description' => 'Select an accessory. ',
		'query_type' => 'category_ids',
		
		//CATEGORY (CAT-NAME REQURIED)
		//EG: "query_ids":"Category > Subcategory > Subsubcategory > Subsubsubcategory > Subsubsubsubcategory > Subsubsubsubcategory",	
		'query_ids' => 'Category > Subcategory',
		'default_option_id' => '',			
		'thumbnail_id' => '',				
		'thumbnail_src' => '',				
		'quantity_min' =>1,
		'quantity_max' => '',				
		'priced_individually' =>true,		
		'shipped_individually' =>true,
		'optional' =>true,			
		'discount' => '',			
		'options_style' => 'thumbnails',	
		'pagination_style' => 'classic',
		'display_prices' => 'hidden', 	
		
		//NEWLY ADDED IN VERSION: 3.14.0-dev	
		'show_sorting_options' =>false,			
		'show_filtering_options' =>true,
		'product_title_visible' =>true,			
		'product_descr_visible' =>true,			
		'product_thumb_visible' =>true,			
		'product_price_visible' =>true,			
		'subtotal_visible_product' =>false,		
		'subtotal_visible_cart' =>true,			
		'subtotal_visible_orders' =>true,
		
		//USES FILTER ATTRIBUTES SET ON PRODUCTS IN THE SELECTED CATEGORY. 	
		'attribute_filters' => array( 'Product Colour','Product type' )
	)
); 


$json_products = json_encode( $product_array ); 

echo $json_products;
?>
