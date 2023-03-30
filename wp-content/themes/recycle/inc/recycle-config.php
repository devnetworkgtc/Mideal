<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "recycle";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    

    // Background Patterns Reader
 
    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Recycle Options', 'recycle' ),
        'page_title'           => __( 'Recycle Options', 'recycle' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
         'footer_credit'     => 'Recycle',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '', 'recycle' ), $v );
    } else {
        $args['intro_text'] = __( '', 'recycle' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '', 'recycle' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'recycle' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'recycle' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'recycle' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'recycle' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'recycle' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
  

	Redux::setSection( $opt_name, array(
        'title' => __( 'General settings', 'recycle' ),
        'id'    => 'general-settings',
        'desc'  => __( 'Change settings of this website', 'recycle' ),
        'icon'  => 'el el-home'
    ) );	
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Site Default Color', 'recycle' ),
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'default-color',
				'type'     => 'color',
				'title'    => __('Default Color', 'recycle'), 
				'subtitle' => __('Select Default Color of your Website', 'recycle'),
				'default'  => '#f16528',
				'validate' => 'color',
				'output'    => array(
					'color' => 'a, .btn-default, .about-us h5, .count i, .comming-soon .countdown-wrapper ul li span, .portfolioFilter a.current, .member-cont h5, .blog-post h5 a, .blog-post h5, .comming-soon h1 span.red,  .subscribe h3, .footer-item h3, .footer-item ul li i, .footer-contact h3, .footer-contact ul li i, .navbar-default .navbar-nav>li>a:hover, .carousel-inner>.item > .carousel-caption h1 span, .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.active>a, .blog-item ul li a:hover, .blog-comment-form a, .blog-post h3 a:hover, .blog-post-small h3 a:hover, .blog-post-small h5,  .blog-post-small h5 a',
					
					'background-color' => 'th, .btn-primary, .btn-primary:hover, .btn-small, .section-title .separator, .top, .dropdown-menu> li >a:hover, .about-feature i, .caption, .services-box i, .portfolioContainer .imghvr-push-down, #fade-quote-carousel.carousel .carousel-indicators > li, .member-details-btn, .blog-item button[type="submit"], .blog-item .separator, .blog-comment-form input[type="submit"], .contact .separator, .contact .submit, .dropdown-menu>.active>a, .dropdown-menu>li>a:hover, .post-password-form>p>input[type="submit"]',
					'border-color'=>'th, .divider-last, .blog-item button[type="submit"]'
					
					)
            ),
			array(
                'id'       => 'logo',
                'type'     => 'media',
                'title'    => __( 'Upload Logo', 'recycle' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

	Redux::setSection( $opt_name, array(
        'title'      => __( 'Top Bar', 'recycle' ),
        'id'         => 'top-bar',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'top-lft-1-icon',
                'type'     => 'text',
                'title'    => __( 'Left 1st Icon', 'recycle' ),
                'default'  => 'fa-clock-o',
				),
			array(
                'id'       => 'top-lft-1-text',
                'type'     => 'text',
                'title'    => __( 'Left 1st Text', 'recycle' ),
                'default'  => 'Mon - Sat: 09.00 - 19.00',
				),	
			array(
                'id'       => 'top-lft-2-icon',
                'type'     => 'text',
                'title'    => __( 'Left 2nd Icon', 'recycle' ),
                'default'  => 'fa-phone',
				),
			array(
                'id'       => 'top-lft-2-text',
                'type'     => 'text',
                'title'    => __( 'Left 2nd Text', 'recycle' ),
                'default'  => '+(789) 675 978',
				),	
			array(
                'id'       => 'top-lft-3-icon',
                'type'     => 'text',
                'title'    => __( 'Left 3rd Icon', 'recycle' ),
                'default'  => 'fa-envelope',
				),
			array(
                'id'       => 'top-lft-3-text',
                'type'     => 'text',
                'title'    => __( 'Left 3rd Text', 'recycle' ),
                'default'  => 'support@industry.com',
				),		
				
				
				
			array(
                'id'       => 'top-rht-1-icon',
                'type'     => 'text',
                'title'    => __( 'Right 1st Icon', 'recycle' ),
                'default'  => 'fa-facebook',
				),
			array(
                'id'       => 'top-rht-1-url',
                'type'     => 'text',
                'title'    => __( 'Right 1st URL', 'recycle' ),
                'default'  => '#',
				),	
			array(
                'id'       => 'top-rht-2-icon',
                'type'     => 'text',
                'title'    => __( 'Right 2nd Icon', 'recycle' ),
                'default'  => 'fa-twitter',
				),
			array(
                'id'       => 'top-rht-2-url',
                'type'     => 'text',
                'title'    => __( 'Right 2nd URL', 'recycle' ),
                'default'  => '#',
				),	
			array(
                'id'       => 'top-rht-3-icon',
                'type'     => 'text',
                'title'    => __( 'Right 3rd Icon', 'recycle' ),
                'default'  => 'fa-google-plus',
				),
			array(
                'id'       => 'top-rht-3-url',
                'type'     => 'text',
                'title'    => __( 'Right 3rd URL', 'recycle' ),
                'default'  => '#',
				),	
			array(
                'id'       => 'top-rht-4-icon',
                'type'     => 'text',
                'title'    => __( 'Right 4th Icon', 'recycle' ),
                'default'  => 'fa-pinterest',
				),
			array(
                'id'       => 'top-rht-4-url',
                'type'     => 'text',
                'title'    => __( 'Right 4th URL', 'recycle' ),
                'default'  => '#',
				),	
			array(
                'id'       => 'top-rht-5-icon',
                'type'     => 'text',
                'title'    => __( 'Right 5th Icon', 'recycle' ),
                'default'  => 'fa-linkedin',
				),
			array(
                'id'       => 'top-rht-5-url',
                'type'     => 'text',
                'title'    => __( 'Right 5th URL', 'recycle' ),
                'default'  => '#',
				),					
        )
    ) );
	
	Redux::setSection( $opt_name, array(
        'title' => __( 'Manage Secrions', 'recycle' ),
        'id'    => 'manage-sections',
        'icon'  => 'el el-home'
    ) );	
	
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Caption', 'recycle' ),
        'id'         => 'caption',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'caption-description',
                'type'     => 'text',
                'title'    => __( 'Section Subheading', 'recycle' ),
                'default'  => 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
            ),
			array(
                'id'       => 'caption-heading',
                'type'     => 'text',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => 'Lorem Ipsum is simply dummy text of the printing industry',
            ),
			array(
                'id'       => 'caption-btn',
                'type'     => 'text',
                'title'    => __( 'Button', 'recycle' ),
                'default'  => 'Click Here',
            ),
			array(
                'id'       => 'caption-btn-url',
                'type'     => 'text',
                'title'    => __( 'Button Url', 'recycle' ),
                'default'  => '#',
            ),
			
        )
    ) );
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Counters', 'recycle' ),
        'id'         => 'counters',
        'subsection' => true,
        'fields'     => array(
			array(
                'id'       => 'counter-banner',
                'type'     => 'media',
                'title'    => __( 'Upload Background', 'recycle' ),
                'default'  => 'Default Text',
            ),
			array(
				'id'          => 'counter-items',
				'type'        => 'slides',
				'title'       => __('About Items', 'recycle'),
				'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'recycle'),
				'placeholder' => array(
					'url'             => __('Font Awasome Icon Code', 'recycle'),
					'title'           => __('This is a title', 'recycle'),
					'description'     => __('Description Here', 'recycle'),
				),
			),
			
        )
    ) );
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Portfolio', 'recycle' ),
        'id'         => 'portfolio',
        'subsection' => true,
        'fields'     => array(
			 array(
                'id'       => 'portfolio-background',
                'type'     => 'select',
                'title'    => __( 'Select Background Color', 'recycle' ),
                'options'  => array(
					'section-padding' => 'White',
					'section-gray' => 'gray',
				),
				'default'  => 'section-padding',
            ),
            array(
                'id'       => 'portfolio-description',
                'type'     => 'textarea',
                'title'    => __( 'Section Subheading', 'recycle' ),
                'default'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries',
            ),
			array(
                'id'       => 'portfolio-heading',
                'type'     => 'text',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => 'Portfolio',
            ),
        )
    ) );
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Testimonials', 'recycle' ),
        'id'         => 'testimonial',
        'subsection' => true,
        'fields'     => array(
			array(
                'id'       => 'testimonial-banner',
                'type'     => 'media',
                'title'    => __( 'Upload Background', 'recycle' ),
                'default'  => 'Default Text',
            ),
            array(
                'id'       => 'testimonial-description',
                'type'     => 'textarea',
                'title'    => __( 'Section Subheading', 'recycle' ),
                'default'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries',
            ),
			array(
                'id'       => 'testimonial-heading',
                'type'     => 'text',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => 'Testimonials',
            ),
			
			
        )
    ) );

	Redux::setSection( $opt_name, array(
        'title'      => __( 'Team', 'recycle' ),
        'id'         => 'team',
        'subsection' => true,
        'fields'     => array(
			 array(
                'id'       => 'team-background',
                'type'     => 'select',
                'title'    => __( 'Select Background Color', 'recycle' ),
                'options'  => array(
					'section-padding' => 'White',
					'section-gray' => 'gray',
				),
				'default'  => 'section-padding',
            ),
            array(
                'id'       => 'team-description',
                'type'     => 'textarea',
                'title'    => __( 'Section Subheading', 'recycle' ),
                'default'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries',
            ),
			array(
                'id'       => 'team-heading',
                'type'     => 'text',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => 'Team',
            ),
			
        )
    ) );

	Redux::setSection( $opt_name, array(
        'title'      => __( 'Recent Posts', 'recycle' ),
        'id'         => 'posts',
        'subsection' => true,
        'fields'     => array(
			 array(
                'id'       => 'posts-background',
                'type'     => 'select',
                'title'    => __( 'Select Background Color', 'recycle' ),
                'options'  => array(
					'section-padding' => 'White',
					'section-gray' => 'gray',
				),
				'default'  => 'section-padding',
            ),
            array(
                'id'       => 'posts-description',
                'type'     => 'textarea',
                'title'    => __( 'Section Subheading', 'recycle' ),
                'default'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries',
            ),
			array(
                'id'       => 'posts-heading',
                'type'     => 'text',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => 'Recent Posts',
            ),
			
        )
    ) );

	Redux::setSection( $opt_name, array(
        'title'      => __( 'Clients', 'recycle' ),
        'id'         => 'client',
        'subsection' => true,
        'fields'     => array(
			 array(
                'id'       => 'client-background',
                'type'     => 'select',
                'title'    => __( 'Select Background Color', 'recycle' ),
                'options'  => array(
					'section-padding' => 'White',
					'section-gray' => 'gray',
				),
				'default'  => 'section-padding',
            ),
            array(
                'id'       => 'client-description',
                'type'     => 'textarea',
                'title'    => __( 'Section Subheading', 'recycle' ),
                'default'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries',
            ),
			array(
                'id'       => 'client-heading',
                'type'     => 'text',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => 'Clients',
            ),
			
        )
    ) );

	Redux::setSection( $opt_name, array(
        'title'      => __( 'Newsletter', 'recycle' ),
        'id'         => 'newsletter',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'newsletter-description',
                'type'     => 'text',
                'title'    => __( 'Section Subheading', 'recycle' ),
                'default'  => 'Lorem Ipsum is simply dummy text of the printing',
            ),
			array(
                'id'       => 'newsletter-heading',
                'type'     => 'text',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => 'Newsletter Subscribtion',
            ),
			array(
                'id'       => 'newsletter-code',
                'type'     => 'textarea',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => '<div class="col-lg-3">
        <div class="control-group form-group">
          <div class="controls">
            <input type="text" class="form-control wow fadeInLeft" id="name" name="name" required placeholder="Name">
            <p class="help-block"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="control-group form-group">
          <div class="controls">
            <input type="email" class="form-control wow fadeInLeft" id="email" name="email" required placeholder="Email ID">
            <p class="help-block"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="control-group form-group">
          <div class="controls">
            <button type="submit" class="btn btn-small wow tada">Submit</button>
            <p class="help-block"></p>
          </div>
        </div>
      </div>',
            ),
        )
    ) );
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact Page', 'recycle' ),
        'id'         => 'contact-page',
        'subsection' => true,
        'fields'     => array(
			array(
                'id'       => 'contact-map',
                'type'     => 'textarea',
                'title'    => __( 'Put Your Location map', 'recycle' ),
                'default'  => 'Submit the embed code with iframe',
				)
        )
    ) );
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Posts Listing', 'recycle' ),
        'id'         => 'posts-list',
        'subsection' => true,
        'fields'     => array(
           array(
                'id'       => 'posts-list-banner',
                'type'     => 'media',
                'title'    => __( 'Upload Banner', 'recycle' ),
                'default'  => 'Default Text',
            ),
        )
    ) );
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Comming  Soon', 'recycle' ),
        'id'         => 'commingsoon-page',
        'subsection' => true,
        'fields'     => array(
			array(
                'id'       => 'commingsoon-heading',
                'type'     => 'text',
                'title'    => __( 'Title', 'recycle' ),
                'default'  => '<span class="red">WEBSITE</span>  is <span>coming</span> very soon',
				),
			array(
                'id'       => 'commingsoon-days',
                'type'     => 'text',
                'title'    => __( 'Days', 'recycle' ),
                'default'  => '00',
				),
			array(
                'id'       => 'commingsoon-hrs',
                'type'     => 'text',
                'title'    => __( 'Hours', 'recycle' ),
                'default'  => '00',
				),
			array(
                'id'       => 'commingsoon-mnts',
                'type'     => 'text',
                'title'    => __( 'Minuts', 'recycle' ),
                'default'  => '00',
				),
			array(
                'id'       => 'commingsoon-sec',
                'type'     => 'text',
                'title'    => __( 'Seconds', 'recycle' ),
                'default'  => '00',
				),			
        )
    ) );
	Redux::setSection( $opt_name, array(
        'title'      => __( '404 Page', 'recycle' ),
        'id'         => 'error-page',
        'subsection' => true,
        'fields'     => array(
           array(
                'id'       => 'error-page-banner',
                'type'     => 'media',
                'title'    => __( 'Upload Banner', 'recycle' ),
                'default'  => 'Default Text',
            ),
			array(
                'id'       => 'error-heading',
                'type'     => 'text',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => '404',
            ),
			array(
                'id'       => 'error-sub-heading',
                'type'     => 'text',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => 'OOPS... PAGE NOT FOUND!',
            ),
			array(
                'id'       => 'error-description',
                'type'     => 'textarea',
                'title'    => __( 'Section Heading', 'recycle' ),
                'default'  => 'Sorry the Page You are Looking for is No Longer Exist. Try something Different or Redirect to Home Page.',
				)
        )
    ) );
	
    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'recycle' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'recycle' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

