  <!-- Carousel Banner Start -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <?php 
		$args = array ('post_type'=>'banner', 'order'=>'ASC', 'orderby'=>'date');
		$query = new WP_Query( $args );
		$i=0;
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
		?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
      <?php $i++; ?>
      <?php endwhile; else: ?>
      <?php endif; ?>
    </ol>
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner"> 
      <!--1st item start-->
        <?php 
		$args = array ('post_type'=>'banner', 'order'=>'ASC', 'orderby'=>'date');
		$query = new WP_Query( $args );
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
		?>
          <div class="item"> <?php the_post_thumbnail(array(1500, 650),array('class' => 'img-responsive')); ?>
            <div class="carousel-caption">
              <h1 class="wow slideInLeft color-white"><?php the_title(); ?></h1>
              <div class="wow slideInRight color-white hidden-xs slide-desc"><?php the_content(); ?></div>
              <div class="item-btn-cont hidden-xs">
              	<a href="<?php $url = get_post_meta( get_the_ID(), 'btn-url-1', true );	echo esc_html( $url );  ?>" class="btn-primary">
				<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'btn-txt-1', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?> </a> &nbsp; 
                <a href="<?php $url = get_post_meta( get_the_ID(), 'btn-url-2', true );	echo esc_html( $url );  ?>" class="btn-default">
                	<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'btn-txt-2', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?>
                </a></div>
            </div>
          </div>
      	<?php endwhile; else: ?>
        <?php endif; ?> 
    </div>
    <!--4th item End--> 
  </div>
  <!-- Carousel controls --> 
  <a class="carousel-control left hidden-xs" href="#myCarousel" data-slide="prev"> <span class="carousel-arrow"> <i class="fa fa-chevron-left"></i></span> </a> <a class="carousel-control right hidden-xs" href="#myCarousel" data-slide="next"> <span class="carousel-arrow"><i class="fa fa-chevron-right"></i></span> </a> 
  <!-- Carousel Banner End --> 
</section>
<!-- /. Header -->