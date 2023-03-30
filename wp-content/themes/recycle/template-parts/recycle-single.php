<?php 
global $recycle;
if(!empty($recycle['posts-list-banner']['url']))
{
	$banner=$recycle['posts-list-banner']['url'];
}
?>
<?php if(!empty($banner)){ ?>
<section class="inner-page-banner section-padding" <?php if(!empty($banner)){ ?>style="background:url(<?php echo esc_url($banner); ?>) fixed;" <?php } ?>>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      	 <?php if(!empty($banner)){ ?>
      	 <h1>Blog Listing</h1>
         <h6>Home / Blog Listing</h6>
      <?php }else{ ?>
      	 <h1 class="nobg">Blog Listing</h1>
         <h6 class="nobg">Home / Blog Listing</h6>
      <?php } ?> 	
         
      </div>
    </div>
  </div>
</section>
<?php } ?>
<section class="blog-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="blog-post wow fadeInLeft"> <?php the_post_thumbnail(array(850, 600),array('class' => 'img-responsive')); ?>
          <h3><a href="#"><?php the_title(); ?></a></h3>
          <h5><span></span> <?php the_time('F jS, Y') ?>   &nbsp; &nbsp; &nbsp;  </h5>
          <p><?php the_content(); ?></p>
        </div>
        <?php endwhile; ?>
        <?php 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>