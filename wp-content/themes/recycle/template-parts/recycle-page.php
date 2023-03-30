<section class="inner-page-banner section-padding" style="background:url(<?php the_post_thumbnail_url(); ?>) fixed;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      
      <?php if ( has_post_thumbnail()){ ?>
         <h1><?php the_title(); ?></h1>
         <h6>Home / <?php the_title(); ?></h6>
      <?php }else{ ?>
      	 <h1 class="nobg"><?php the_title(); ?></h1>
         <h6 class="nobg">Home / <?php the_title(); ?></h6>
      <?php } ?>   
         
      </div>
    </div>
  </div>
</section>
<section class="post-<?php the_ID(); ?> section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-cont wow fadeInUp">
          <?php the_content(); ?>
          <?php the_posts_pagination( array(
				'prev_text'          => __( '<< Previous page', 'recycle' ),
				'next_text'          => __( 'Next page >>', 'recycle' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'recycle' ) . ' </span>',
			) );
		  ?>
        </div>  	
         <?php  // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
		 ?>	
      </div>
    </div>
  </div>
</section>