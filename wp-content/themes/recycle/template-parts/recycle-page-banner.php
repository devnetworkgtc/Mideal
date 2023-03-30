
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