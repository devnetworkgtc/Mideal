<?php 
global $recycle;
$map=$recycle['contact-map'];
?>
<?php $args = array ('post_type'=>'contact', 'order'=>'ASC', 'orderby'=>'date','posts_per_page' =>1);
    $query = new WP_Query( $args );
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
?>
<section id="contact" class="section-padding contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3><?php the_title(); ?></h3>
        <hr class="separator">
      </div>
    </div>
    <div class="row"> 
      <!-- Form Starts -->
      <div class="col-lg-8 col-md-8">
        <?php the_content(); ?>
      </div>
      <!-- Form Starts --> 
      <!-- Contact Info Starts -->
      <div class="col-lg-4 col-md-4">
         <div class="contact-map"><?php echo $map; ?></div>
      </div>
      <!-- Contact Info Ends -->
    </div>
  </div>
</section>
 <?php endwhile; else: ?>
 <?php endif; ?> 