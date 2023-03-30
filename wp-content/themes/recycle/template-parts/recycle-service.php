<?php 
global $recycle;
$heading=$recycle['service-heading'];
$subheading=$recycle['service-description'];
$background=$recycle['service-background'];
?>


<!-- Services -->
<section class="services <?php echo esc_html($background); ?>" style="display:none;">
  <div class="container">
    <?php if(is_front_page() || is_home()){?>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="section-title">
          <h2><?php echo esc_html($heading); ?></h2>
          <hr class="separator">
          <p><?php echo esc_html($subheading); ?></p>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="row">
    <?php $args = array ('post_type'=>'service', 'order'=>'ASC', 'orderby'=>'date');
    $query = new WP_Query( $args );
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
	?>
      <div class="col-lg-4">
        <div class="services-box wow fadeInUp">
          <div class="services-box-title"><i class="fa <?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'service-fa', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?> "></i>
            <h4>
              <?php the_title(); ?>
            </h4>
          </div>
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      </div>
      <?php endwhile; else: ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- /. Services --> 
