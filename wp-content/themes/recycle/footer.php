<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recycle
 */

?>

<!-- Footer -->
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <?php 
		if (is_active_sidebar('footer-1')) {
			dynamic_sidebar( 'footer-1' ); 
		}
		?>
      </div>
      <div class="col-lg-2">
        <?php 
		if (is_active_sidebar('footer-2')) {
			dynamic_sidebar( 'footer-2' ); 
		}
		?>
      </div>
      <div class="col-lg-3">
        <?php 
		if (is_active_sidebar('footer-3')) {
			dynamic_sidebar( 'footer-3' ); 
		}
		?>
      </div>
      <div class="col-lg-3">
        <?php 
		if (is_active_sidebar('footer-4')) {
			dynamic_sidebar( 'footer-4' ); 
		}
		?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="copyright">
          <?php 
		  if (is_active_sidebar('footer-5')) {
			 dynamic_sidebar( 'footer-5' ); 
		  }
		  ?> 	
          <p></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /. Footer -->
<ul id="clockdiv" class="hide">
            <li> <span class="days">12</span>
              <p>days</p>
            </li>
            <li> <span class="hours">12</span>
              <p>hours </p>
            </li>
            <li> <span class="minutes">12</span>
              <p>minutes</p>
            </li>
            <li> <span class="seconds">12</span>
              <p>seconds</p>
            </li>
          </ul>
<?php wp_footer(); ?>

</body>
</html>
