<?php
/* Template Name: Sorter */
get_header();
			
$x= get_post_meta(get_the_ID(), 'ingredients', true); 
$layout=$x['enabled'];	
if ($layout): foreach ($layout as $key=>$value) { 
	switch($key) {
		
		case 'slider': get_template_part( 'template-parts/recycle-banner', 'slider' );
        break;
	
		case 'inner-banner': get_template_part( 'template-parts/recycle-page-banner', 'inner-banner' );
        break;
 
        case 'about': get_template_part( 'template-parts/recycle-about', 'about' );
        break;
		
		case 'caption': get_template_part( 'template-parts/recycle-caption', 'caption' );
        break;
		
		case 'service': get_template_part( 'template-parts/recycle-service', 'service' );
        break;
 
        case 'counter': get_template_part( 'template-parts/recycle-counter', 'counter' );
        break;
		
		case 'portfolio': get_template_part( 'template-parts/recycle-portfolio', 'portfolio' );
        break;
		
		case 'portfolio-4': get_template_part( 'template-parts/recycle-portfolio-4', 'portfolio-4' );
        break;
		
		case 'testimonial': get_template_part( 'template-parts/recycle-testimonial', 'testimonial' );
        break;
 
        case 'team': get_template_part( 'template-parts/recycle-team', 'team' );
        break;
		
		case 'blog': get_template_part( 'template-parts/recycle-blog', 'blog' );
        break;
		
		case 'client': get_template_part( 'template-parts/recycle-client', 'client' );
        break;
		
		case 'newsletter': get_template_part( 'template-parts/recycle-subscribe', 'newsletter' );
        break;
		
		case 'error': get_template_part( 'template-parts/recycle-404', 'error' );
        break;
		
		case 'commingsoon': get_template_part( 'template-parts/recycle-commingsoon', 'commingsoon' );
        break;
		
		case 'contact': get_template_part( 'template-parts/recycle-contact', 'contact' );
        break;
		
	}
}
endif;
			
?>
<?php get_footer(); ?>