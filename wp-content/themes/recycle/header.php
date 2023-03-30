<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recycle
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<!-- Preloader -->
<div class="preloader"></div>

<?php 
global $recycle;
$top_left_item_1_icon=$recycle['top-lft-1-icon'];
$top_left_item_1_text=$recycle['top-lft-1-text'];

$top_left_item_2_icon=$recycle['top-lft-2-icon'];
$top_left_item_2_text=$recycle['top-lft-2-text'];

$top_left_item_3_icon=$recycle['top-lft-3-icon'];
$top_left_item_3_text=$recycle['top-lft-3-text'];


$top_right_item_1_icon=$recycle['top-rht-1-icon'];
$top_right_item_1_url=$recycle['top-rht-1-url'];

$top_right_item_2_icon=$recycle['top-rht-2-icon'];
$top_right_item_2_url=$recycle['top-rht-2-url'];

$top_right_item_3_icon=$recycle['top-rht-3-icon'];
$top_right_item_3_url=$recycle['top-rht-3-url'];

$top_right_item_4_icon=$recycle['top-rht-4-icon'];
$top_right_item_4_url=$recycle['top-rht-4-url'];

$top_right_item_5_icon=$recycle['top-rht-5-icon'];
$top_right_item_5_url=$recycle['top-rht-5-url'];



if(!empty($recycle['logo']['url']))
	{
		$logo_on_scroll=$recycle['logo']['url'];
	}
else
	{
		$logo_on_scroll=get_template_directory_uri().'/images/logo.png';
	}	

?>  
<!-- Header -->
<section id="header">
  <div class="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-7">
          <div class="top-left"><i class="fa <?php echo esc_html($top_left_item_1_icon); ?>"></i> <a href="#"><?php echo esc_html($top_left_item_1_text); ?></a></div>
          <div class="top-left hidden-xs"><i class="fa <?php echo esc_html($top_left_item_2_icon); ?>"></i> <a href="#"><?php echo esc_html($top_left_item_2_text); ?></a></div>
          <div class="top-left hidden-xs"><i class="fa <?php echo esc_html($top_left_item_3_icon); ?>"></i> <a href="#"><?php echo esc_html($top_left_item_3_text); ?></a></div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-5">
          <div class="top-right"><a target="_blank" href="<?php echo esc_url($top_right_item_1_url); ?>"><i class="fa <?php echo esc_html($top_right_item_1_icon); ?>"></i></a></div>
          <div class="top-right"><a target="_blank" href="<?php echo esc_url($top_right_item_2_url); ?>"><i class="fa <?php echo esc_html($top_right_item_2_icon); ?>"></i></a></div>
          <div class="top-right"><a target="_blank" href="<?php echo esc_url($top_right_item_3_url); ?>"><i class="fa <?php echo esc_html($top_right_item_3_icon); ?>"></i></a></div>
          <div class="top-right hidden-xs"><a target="_blank" href="<?php echo esc_url($top_right_item_4_url); ?>"><i class="fa <?php echo esc_html($top_right_item_4_icon); ?>"></i></a></div>
          <div class="top-right"><a target="_blank" href="<?php echo esc_url($top_right_item_5_url); ?>"><i class="fa <?php echo esc_html($top_right_item_5_icon); ?>"></i></a></div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>"><img src="<?php echo esc_url($logo_on_scroll); ?>" alt=""></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInUp">
        <?php wp_nav_menu(
			array(
				'theme-location'=>'primary',
				'menu_class'=>'nav navbar-nav navbar-right',
				'container'=> '',
				'fallback_cb'=>'recycle_default_menu',
				'walker'=>new recycle_walker(),
			)
		);
		?>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </nav>