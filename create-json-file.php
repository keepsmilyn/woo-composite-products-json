<?php
$jsonstart = '[';
$string = $string . '{';
	//UNIQUE ID FOR ACCESSORY GROUP
	$string = $string . '"id":"1531372338",';			//UNIQUE ID (product ID, ref id, eg: XXXX00001, XXXX000002)
	//TITLE (displays on web)
	$string = $string . '"title":"Accessory Title",';
	//DESCRIPTION (displays on web... can include HTML)
	$string = $string . '"description":"Select an accessory. ",';
	$string = $string . '"query_type":"category_ids",';
	//CATEGORY (CAT-NAME REQURIED)
	//EG: "query_ids":"Category > Subcategory > Subsubcategory > Subsubsubcategory > Subsubsubsubcategory > Subsubsubsubcategory",	
	$string = $string . '"query_ids":"Category > Subcategory",';
	$string = $string . '"default_option_id":"",';				//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"thumbnail_id":"",';				//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"thumbnail_src":"",';				//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"quantity_min":1,';				//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"quantity_max":"",';				//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"priced_individually":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"shipped_individually":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"optional":true,';					//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"discount":"",';					//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"options_style":"thumbnails",';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"pagination_style":"classic",';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"display_prices":"hidden"';			//SAME FOR ALL COMPOSITE PRODUCTS
	//NEWLY ADDED IN VERSION: 3.14.0-dev
	$string = $string . '"show_sorting_options":false,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"show_filtering_options":true,'; 			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"product_title_visible":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"product_descr_visible":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"product_thumb_visible":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"product_price_visible":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"subtotal_visible_product":false,';		//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"subtotal_visible_cart":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"subtotal_visible_orders":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	//USES FILTER ATTRIBUTES SET ON PRODUCTS IN THE SELECTED CATEGORY. 
	$string = $string . '"attribute_filters":["Product Colour","Product type"]';
//IF MORE, USE ONE WITH COMMA
//$string = $string . '}';
$string = $string . '},';
$string = $string . '{';
	//UNIQUE ID FOR ACCESSORY GROUP
	$string = $string . '"id":"1531368130",';			//UNIQUE ID (product ID, ref id, eg: XXXX00001, XXXX000002)
	//TITLE (display on web)
	$string = $string . '"title":"Accessory Title",';
	//DESCRIPTION (displays on web... can include HTML)
	$string = $string . '"description":"Select an accessory. ",';
	$string = $string . '"query_type":"category_ids",';
	//CATEGORY (CAT-NAME REQURIED)
	//EG: "query_ids":"Category > Subcategory > Subsubcategory > Subsubsubcategory > Subsubsubsubcategory > Subsubsubsubcategory",	
	$string = $string . '"query_ids":"Category > Subcategory",';
	$string = $string . '"default_option_id":"",';				//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"thumbnail_id":"",';				//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"thumbnail_src":"",';				//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"quantity_min":1,';				//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"quantity_max":"",';				//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"priced_individually":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"shipped_individually":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"optional":true,';					//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"discount":"",';					//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"options_style":"thumbnails",';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"pagination_style":"classic",';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"display_prices":"hidden"';			//SAME FOR ALL COMPOSITE PRODUCTS
	//NEWLY ADDED IN VERSION: 3.14.0-dev
	$string = $string . '"show_sorting_options":false,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"show_filtering_options":true,'; 			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"product_title_visible":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"product_descr_visible":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"product_thumb_visible":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"product_price_visible":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"subtotal_visible_product":false,';		//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"subtotal_visible_cart":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	$string = $string . '"subtotal_visible_orders":true,';			//SAME FOR ALL COMPOSITE PRODUCTS
	//USES FILTER ATTRIBUTES SET ON PRODUCTS IN THE SELECTED CATEGORY. 
	$string = $string . '"attribute_filters":["Product Colour","Product type"]';
//IF MORE, USE ONE WITH COMMA
$string = $string . '}';
//$string = $string . '},';
$jsonend = ']';
echo $jsonstart.$string.$jsonend;
?>