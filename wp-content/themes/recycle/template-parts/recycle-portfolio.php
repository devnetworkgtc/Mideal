<?php 
global $recycle;
$heading=$recycle['portfolio-heading'];
$subheading=$recycle['portfolio-description'];
$background=$recycle['portfolio-background'];
?>
<!-- Portfolio -->
<section class="portfolio <?php echo esc_html($background); ?>">
  <div class="container">
  	<?php if(is_front_page() || is_home()){?>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="section-title">
          <h2><?php echo esc_html($heading); ?></h2>
          <br />
   
<a href="http://www.mideal.it/wp-content/uploads/2019/03/training_game.pdf">Scarica la brochure del gioco in PDF </a>
          <hr class="separator">
          <p><?php echo esc_html($subheading); ?></p>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="row">
      <div class="col-md-12">
        <div class="portfolioFilter text-center"> 
        	<a href="#" data-filter="*" class="current">All Categories</a> 
            <?php 
				$categories=get_terms('portfolio-category');
				foreach($categories as $category){
		  	?>
            <a href="#" data-filter=".<?php echo $category->name; ?>"><?php echo $category->name; ?></a> 
            <?php } ?>
        </div>
        <div class="portfolioContainer">
          <?php 
			$args = array ('post_type'=>'portfolio', 'order'=>'DESC', 'orderby'=>'date',);
			$query = new WP_Query( $args );
			if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
			$categories=get_the_terms( $post->ID, 'portfolio-category');
		  ?>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 <?php foreach($categories as $category){echo $category->name.' ';} ?>">
            <figure class="imghvr-push-down"><?php the_post_thumbnail(array(850, 600),array('class' => 'img-responsive')); ?> <a class="magnific-popup" href="<?php the_post_thumbnail_url(); ?>"><i class="fa fa-search fa-3x"></i></a> </figure>
          </div>
          <?php endwhile; else: ?>
    	  <?php endif; ?>  
        
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /. Portfolio -->