<?php 
global $recycle;
if(!empty($recycle['testimonial-banner']['url']))
{
	$banner=$recycle['testimonial-banner']['url'];
}
$heading=$recycle['testimonial-heading'];
$subheading=$recycle['testimonial-description'];


?>
<!-- Testimonials -->
<section class="testimonials section-padding" <?php if(!empty($banner)){ ?>style="background:url(<?php echo esc_url($banner); ?>) fixed;" <?php } ?>>
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
      <div class="col-lg-10 col-lg-offset-1">
        <div class="testimonials-cont">
          <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
          <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000"> 
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
			<?php $args = array ('post_type'=>'testimonial', 'order'=>'ASC', 'orderby'=>'date');
            $query = new WP_Query( $args );
			$i=0;
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
            ?>
              <li data-target="#fade-quote-carousel" data-slide-to="<?php $i; ?>"></li>
              <?php $i++; ?>
              <?php endwhile; else: ?>
      		  <?php endif; ?>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
		    <?php $args = array ('post_type'=>'testimonial', 'order'=>'ASC', 'orderby'=>'date');
            $query = new WP_Query( $args );
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
            ?>
              <div class="item">
                <blockquote>
                  <p><?php the_content(); ?></p>
                </blockquote>
                <h5>- <?php the_title(); ?></h5>
              </div>
            <?php endwhile; else: ?>
      		<?php endif; ?>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /. Testimonials -->