<?php 
global $recycle;
$heading=$recycle['posts-heading'];
$subheading=$recycle['posts-description'];
$background=$recycle['posts-background'];
?>

<!-- Blog -->
<section class="<?php echo esc_html($background); ?>" style="display:none;">
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
		$args = array ('post_type'=>'post', 'order'=>'ASC', 'orderby'=>'date', 'posts_per_page' => 2);
		$query = new WP_Query( $args );
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
		?>	
      <div class="col-lg-4">
        <div class="blog-post wow fadeInLeft"> <?php the_post_thumbnail(array(850, 600),array('class' => 'img-responsive')); ?>
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
          <h5><span></span> <?php the_time('F jS, Y') ?>   &nbsp; &nbsp; &nbsp; <span>By</span> <a href="#"><?php the_author() ?></a> </h5>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="btn btn-small">Leggi tutto</a> </div>
      </div>
      	<?php endwhile; else: ?>
        <?php endif; ?> 
      
      <div class="col-lg-4">
      	<?php 
		$args = array ('post_type'=>'post', 'order'=>'ASC', 'orderby'=>'date', 'posts_per_page' => 5);
		$query = new WP_Query( $args );
		$i=0;
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
		$i++;
		if($i>2)
		{
		?>	
        <div class="blog-post-small wow fadeInUp">
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
          <h5><span></span> <?php the_time('F jS, Y') ?>   &nbsp; &nbsp; &nbsp;  </h5>
          <?php the_excerpt(); ?>
        </div>
        <?php } endwhile; else: ?>
        <?php endif; ?> 
        
      </div>
    </div>
  </div>
</section>
<!-- /. Blog -->