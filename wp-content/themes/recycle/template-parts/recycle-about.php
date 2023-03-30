<?php $args = array ('post_type'=>'about', 'order'=>'ASC', 'orderby'=>'date','posts_per_page' =>1);
    $query = new WP_Query( $args );
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
?>
<!-- About us -->
<section class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 wow fadeInLeft">
        <h5>
        	<?php 
			// Grab the metadata from the database
			$text = get_post_meta( get_the_ID(), 'about-subtitle', true );
			
			// Echo the metadata
			echo esc_html( $text ); 
			?> 
        </h5>
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
        <div class="about-features">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-feature">
                <div class="about-feature-title"><i class="fa 
               	<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'fa-1', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?> 
                
                "></i>
                  <h4>
                  		<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'title-1', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?>
                  
                  </h4>
                </div>
                <p>
                		<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'desc-1', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?>
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-feature">
                <div class="about-feature-title"><i class="fa 
               	<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'fa-2', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?> 
                
                "></i>
                  <h4>
                  		<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'title-2', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?>
                  
                  </h4>
                </div>
                <p>
                		<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'desc-2', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="about-feature">
                <div class="about-feature-title"><i class="fa 
               	<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'fa-3', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?>
                "></i>
                  <h4>
                  		<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'title-3', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?>
                  </h4>
                </div>
                <p>
                		<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'desc-3', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?>
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-feature">
                <div class="about-feature-title"><i class="fa 
               	<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'fa-4', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?> 
                
                "></i>
                  <h4>
                  		<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'title-4', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?>
                  
                  </h4>
                </div>
                <p>
                		<?php 
						// Grab the metadata from the database
						$text = get_post_meta( get_the_ID(), 'desc-4', true );
						
						// Echo the metadata
						echo esc_html( $text ); 
						?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      					<?php 
						// Grab the metadata from the database
						$img = get_post_meta( get_the_ID(), 'about-image', true );
						?>
      <div class="col-lg-4 wow fadeInRight"><img src="<?php echo esc_html( $img ); ; ?>" class="img-responsive about-img" alt="about-us"></div>
    </div>
  </div>
</section>
<!-- /. About us -->
 <?php endwhile; else: ?>
 <?php endif; ?>  