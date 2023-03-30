<?php 
    /*
    Plugin Name: Recycle Cpt
    Plugin URI: http://www.cpt.net
    Description: Plugin for displaying Custom posts 
    Author: Nilanjan banerjee
    Version: 1.0
    Author URI: http://www.cpt.net
    */



//Section Banner
function recycle_banner() {
		
	$args=array(
			'labels'=>array(
			'name'=>'Banner',
			'singular_name'=>'Banner',
			'add_new'=>'Add Item',
			'add_new_item'=>'Add Item',
			'edit_item'=>'Edit Item',
			'new_item'=>'Add Item',
			'view_item'=>'View Item',
			'search_item'=>'Search Item',
			'not_found'=>'Item not Found',
			'not_found_in_trash'=>'No Item Found in Trash',
			),
			'query_var'=>'banner',
			'rewrite'=>array(
				'slug'=>'banner',
			),	
			'public'=>true,
			'supports'=>array(
				'title',
				'editor',
				'thumbnail'
			)
		);
    register_post_type( 'banner',$args);	
}
add_action( 'init', 'recycle_banner' );



//Section About
function recycle_about() {
		
	$args=array(
			'labels'=>array(
			'name'=>'About',
			'singular_name'=>'About',
			'add_new'=>'Add Item',
			'add_new_item'=>'Add Item',
			'edit_item'=>'Edit Item',
			'new_item'=>'Add Item',
			'view_item'=>'View Item',
			'search_item'=>'Search Item',
			'not_found'=>'Item not Found',
			'not_found_in_trash'=>'No Item Found in Trash',
			),
			'query_var'=>'about',
			'rewrite'=>array(
				'slug'=>'about',
			),	
			'public'=>true,
			'supports'=>array(
				'title',
				'editor',
			)
		);
    register_post_type( 'about',$args);	
}
add_action( 'init', 'recycle_about' );


//Section Services
function recycle_service() {
		
	$args=array(
			'labels'=>array(
			'name'=>'Service',
			'singular_name'=>'Service',
			'add_new'=>'Add Item',
			'add_new_item'=>'Add Item',
			'edit_item'=>'Edit Item',
			'new_item'=>'Add Item',
			'view_item'=>'View Item',
			'search_item'=>'Search Item',
			'not_found'=>'Item not Found',
			'not_found_in_trash'=>'No Item Found in Trash',
			),
			'query_var'=>'service',
			'rewrite'=>array(
				'slug'=>'service',
			),	
			'public'=>true,
			'supports'=>array(
				'title',
				'editor'
			)
		);
    register_post_type( 'service',$args);	
	
}
add_action( 'init', 'recycle_service' );



//Section Portfolio
function recycle_portfolio() {
	$args=array(
			'labels'=>array(
			'name'=>'Portfolio',
			'singular_name'=>'portfolio',
			'add_new'=>'Add Item',
			'add_new_item'=>'Add Item',
			'edit_item'=>'Edit Item',
			'new_item'=>'Add Item',
			'view_item'=>'View Item',
			'search_item'=>'Search Item',
			'not_found'=>'Item not Found',
			'not_found_in_trash'=>'No Item Found in Trash',
			),
			'query_var'=>'portfolio',
			'rewrite'=>array(
				'slug'=>'portfolio',
			),	
			'public'=>true,
			'supports'=>array(
				'title',
				'thumbnail',
			)
		);
    register_post_type( 'portfolio',$args);
	
}
add_action( 'init', 'recycle_portfolio' );

function recycle_portfolio_category(){
register_taxonomy('portfolio-category', array('portfolio'), array(
		'lables'=>array(
			'name'=>'Portfolio Category',
			'add_new_item'=>'Add Item'
		),
		'public'=>true,
		'hierarchical' => true,
	)

);
}
add_action('init', 'recycle_portfolio_category');


//Section Testimonial
function recycle_testimonial() {
		
	$args=array(
			'labels'=>array(
			'name'=>'Testimonial',
			'singular_name'=>'Testimonial',
			'add_new'=>'Add Item',
			'add_new_item'=>'Add Item',
			'edit_item'=>'Edit Item',
			'new_item'=>'Add Item',
			'view_item'=>'View Item',
			'search_item'=>'Search Item',
			'not_found'=>'Item not Found',
			'not_found_in_trash'=>'No Item Found in Trash',
			),
			'query_var'=>'testimonial',
			'rewrite'=>array(
				'slug'=>'testimonial',
			),	
			'public'=>true,
			'supports'=>array(
				'title',
				'editor',
			)
		);
    register_post_type( 'testimonial',$args);	
}
add_action( 'init', 'recycle_testimonial' );


//Section Team
function recycle_team() {
	$args=array(
			'labels'=>array(
			'name'=>'Team',
			'singular_name'=>'Team',
			'add_new'=>'Add Member',
			'add_new_item'=>'Add Member',
			'edit_item'=>'Edit Item',
			'new_item'=>'Add New Item',
			'view_item'=>'View Member',
			'search_item'=>'Search Member',
			'not_found'=>'Member not Found',
			'not_found_in_trash'=>'No Member Found in Trash',
			),
			'query_var'=>'team',
			'rewrite'=>array(
				'slug'=>'team',
			),	
			'public'=>true,
			'supports'=>array(
				'title',
				'editor',
				'thumbnail'
			)
		);
    register_post_type( 'team',$args);
}
add_action( 'init', 'recycle_team' );



//Section Clients
function recycle_clients() {
	$args=array(
			'labels'=>array(
			'name'=>'Clients',
			'singular_name'=>'Client',
			'add_new'=>'Add Item',
			'add_new_item'=>'Add Item',
			'edit_item'=>'Edit Item',
			'new_item'=>'Add Item',
			'view_item'=>'View Item',
			'search_item'=>'Search Item',
			'not_found'=>'Item not Found',
			'not_found_in_trash'=>'No Item Found in Trash',
			),
			'query_var'=>'clients',
			'rewrite'=>array(
				'slug'=>'clients',
			),	
			'public'=>true,
			'supports'=>array(
				'title',
				'thumbnail',
			)
		);
    register_post_type( 'clients',$args);
	
}
add_action( 'init', 'recycle_clients' );

//Section Contact
function recycle_contact() {
	$args=array(
			'labels'=>array(
			'name'=>'Contact Section',
			'singular_name'=>'Contact',
			'add_new'=>'Add Item',
			'add_new_item'=>'Add Item',
			'edit_item'=>'Edit Item',
			'new_item'=>'Add Item',
			'view_item'=>'View Item',
			'search_item'=>'Search Item',
			'not_found'=>'Item not Found',
			'not_found_in_trash'=>'No Item Found in Trash',
			),
			'query_var'=>'contact',
			'rewrite'=>array(
				'slug'=>'contact',
			),	
			'public'=>true,
			'supports'=>array(
				'title',
				'editor',
				'thumbnail',
			)
		);
    register_post_type( 'contact',$args);
	
}
add_action( 'init', 'recycle_contact' );


?>
