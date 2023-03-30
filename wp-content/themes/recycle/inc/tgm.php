<?php
/**
 * TGM implementation.
 *
 * @package recycle
 */

require get_template_directory()."/inc/class-tgm-plugin-activation.php";

add_action( 'tgmpa_register', 'recycle_register_recommended_plugins' );

/**
 * Register recommended plugins.
 *
 * @since 1.0.0
 */
function recycle_register_recommended_plugins() {

	// Plugins.
	$plugins = array(
		array(
			'name'               => 'Recycle Cpt', 
			'slug'               => 'recycle-cpt', 
			'source'             => 'https://www.nilanjanbanerjee.com/preview/plugins/recycle/recycle-cpt.zip', 
			'required'           => true, 
			'is_automatic' 		 => false,
			'version'            => '1.0', 
		),
		
		array(
			'name'               => 'Recycle Importer',
			'slug'               => 'recycle-importer',
			'source'             => 'https://www.nilanjanbanerjee.com/preview/plugins/recycle/recycle-importer.zip', 
			'required'           => false,
			'version'            => '1.0', 
		),

		array(
			'name'      => 'Redux Framework',
			'slug'      => 'redux-framework',
			'required'  => true,
			'is_automatic' => false,
		),
		
		array(
			'name'      => 'CMB2',
			'slug'      => 'cmb2',
			'required'  => true,
			'is_automatic' => false,
		),
		
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
	);

	// TGM configurations.
	$config = array(
	);

	// Register now.
	tgmpa( $plugins, $config );

}