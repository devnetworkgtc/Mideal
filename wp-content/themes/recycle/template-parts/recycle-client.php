<?php
global $recycle;
$heading=$recycle['client-heading'];
$subheading=$recycle['client-description'];
$background=$recycle['client-background'];
?>

<!-- Clients -->
<section class="clients <?php echo esc_html($background); ?> <?php echo $page_id; ?>">
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
       <?php
		$args = array ('post_type'=>'clients', 'order'=>'ASC', 'orderby'=>'date', 'nopaging'=>'5');
		$query = new WP_Query( $args );
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
		?>
      <div class="col-lg-2"><?php the_post_thumbnail(array('165','58'),array('class' => 'img-responsive')); ?></div>
      	<?php endwhile; else: ?>
        <?php endif; ?>
    </div>
  </div>
</section>
<!-- /. Clients -->
