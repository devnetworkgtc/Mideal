<?php 

function recycle_metabox(array $parm){
	
/**
 * About Section
*/
	$parm[]= array(
		'id'=>'about-meta',
		'title'=>'Subtitle and Image',
		'object_types'=>array('about'),
		'fields'=>array(
			array(
				'name'=>'Sub Title',
				'type'=>'text',
				'id'=>'about-subtitle'
			),
			array(
				'name'=>'Default Image',
				'type'=>'file',
				'id'=>'about-image'
			)
		)
	);
	$parm[]= array(
		'id'=>'about-meta-1',
		'title'=>'Feature 1',
		'object_types'=>array('about'),
		'fields'=>array(
			array(
				'name'=>'Font Awasome Icon',
				'type'=>'text_small',
				'id'=>'fa-1'
			),
			array(
				'name'=>'Title',
				'type'=>'text',
				'id'=>'title-1'
			),
			array(
				'name'=>'Description',
				'type'=>'textarea_small',
				'id'=>'desc-1'
			)
		)
	);
	$parm[]= array(
		'id'=>'about-meta-2',
		'title'=>'Feature 2',
		'object_types'=>array('about'),
		'fields'=>array(
			array(
				'name'=>'Font Awasome Icon',
				'type'=>'text_small',
				'id'=>'fa-2'
			),
			array(
				'name'=>'Title',
				'type'=>'text',
				'id'=>'title-2'
			),
			array(
				'name'=>'Description',
				'type'=>'textarea_small',
				'id'=>'desc-2'
			)
		)
	);
	$parm[]= array(
		'id'=>'about-meta-3',
		'title'=>'Feature 3',
		'object_types'=>array('about'),
		'fields'=>array(
			array(
				'name'=>'Font Awasome Icon',
				'type'=>'text_small',
				'id'=>'fa-3'
			),
			array(
				'name'=>'Title',
				'type'=>'text',
				'id'=>'title-3'
			),
			array(
				'name'=>'Description',
				'type'=>'textarea_small',
				'id'=>'desc-3'
			)
		)
	);
	$parm[]= array(
		'id'=>'about-meta-4',
		'title'=>'Feature 4',
		'object_types'=>array('about'),
		'fields'=>array(
			array(
				'name'=>'Font Awasome Icon',
				'type'=>'text_small',
				'id'=>'fa-4'
			),
			array(
				'name'=>'Title',
				'type'=>'text',
				'id'=>'title-4'
			),
			array(
				'name'=>'Description',
				'type'=>'textarea_small',
				'id'=>'desc-4'
			)
		)
	);
	
/**
 * Banner Section
*/
	$parm[]= array(
		'id'=>'banner-meta-1',
		'title'=>'Button 1',
		'object_types'=>array('banner'),
		'fields'=>array(
			array(
				'name'=>'Button Text 1',
				'type'=>'text_small',
				'id'=>'btn-txt-1'
			),
			array(
				'name'=>'Button Url 1',
				'type'=>'text',
				'id'=>'btn-url-1'
			),
		)
	);	
	$parm[]= array(
		'id'=>'banner-meta-2',
		'title'=>'Button 2',
		'object_types'=>array('banner'),
		'fields'=>array(
			array(
				'name'=>'Button Text 2',
				'type'=>'text_small',
				'id'=>'btn-txt-2'
			),
			array(
				'name'=>'Button Url 2',
				'type'=>'text',
				'id'=>'btn-url-2'
			),
		)
	);	

/**
 * Service Section
*/
	$parm[]= array(
		'id'=>'service-meta',
		'title'=>'Font Awasome Icon',
		'object_types'=>array('service'),
		'fields'=>array(
			array(
				'name'=>'Font Awasome Icon',
				'type'=>'text_small',
				'id'=>'service-fa'
			),
		)
	);		
	
/**
 * Team Section
*/
	$parm[]= array(
		'id'=>'team-meta',
		'title'=>'Designation',
		'object_types'=>array('team'),
		'fields'=>array(
			array(
				'name'=>'Designation',
				'type'=>'text',
				'id'=>'member-designation'
			),
			array(
				'name'=>'URL',
				'type'=>'text',
				'id'=>'member-url'
			),
		)
	);


/**
 * Banner Section
*/
	$parm[]= array(
		'id'=>'page-meta',
		'title'=>'Manage Page Sections',
		'show_on' => array( 'key' => 'page-template', 'value' => 'sorter.php' ),
		'object_types'=>array('page'),
		'fields'=>array(
			array(
                'name'    => 'Page Layout',
				'id'      => 'ingredients',
				'desc'    => 'Select Page Layout',
				'type'    => 'tb_sorter',
				'options' => array(
					'enabled'  => array(
						'slider' =>'Home Slider',
						'inner-banner' => 'Page Header',
						'about'     => 'About',
						'caption'   => 'Caption',
						'service'   => 'Service',
						'counter' => 'Counter',
						'portfolio' => 'Portfolio 3',
						'portfolio-4' => 'Portfolio 4',
						'testimonial' => 'Testimonial',
						'team'   => 'Team',
						'blog'   => 'Blog',
						'client'   => 'Client',
						'newsletter'   => 'Newsletter',
						'error'   => 'Error',
						'commingsoon'   => 'Comming Soon',
						'contact'   => 'Contact Us',
						      
					),
					'disabled' => array(
						'placebo' =>'Placebo',
					)        
				),
			)
		)
	);
	
	
	
	
	return $parm;
		
}
add_filter('cmb2_meta_boxes', 'recycle_metabox')

?>