<?php 
global $recycle;
$heading=$recycle['team-heading'];
$subheading=$recycle['team-description'];
$background=$recycle['team-background'];
?>
<!-- Team -->
<section class="<?php echo esc_html($background); ?>">
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
		$args = array ('post_type'=>'team', 'order'=>'ASC', 'orderby'=>'date');
		$query = new WP_Query( $args );
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
		?>
          <div class="col-lg-4">
            <div class="member-cont wow fadeInLeft"> <?php the_post_thumbnail(array(850, 600),array('class' => 'img-responsive')); ?>
              <h3><?php the_title(); ?></h3>
              <h5>
              <?php 
				// Grab the metadata from the database
				$text = get_post_meta( get_the_ID(), 'member-designation', true );
				
				// Echo the metadata
				echo esc_html( $text ); 
				?> 
              </h5>
              <p><?php the_content(); ?></p>
              <a href="<?php $url = get_post_meta( get_the_ID(), 'member-url', true );
				echo esc_url( $url ); ?>" class="btn btn-small">Contatta Mideal</a> </div>
          </div>
        <?php endwhile; else: ?>
        <?php endif; ?> 
    </div>
  </div>
</section>
<!-- /. Team -->