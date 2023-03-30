<?php 
global $recycle;
$heading=$recycle['newsletter-heading'];
$subheading=$recycle['newsletter-description'];
$code=$recycle['newsletter-code'];
?>
<!-- Subscribe -->
<section class="subscribe">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="subscribe-cont">
          <h3><?php echo esc_html($heading); ?></h3>
          <p><?php echo esc_html($subheading); ?></p>
        </div>
      </div>
      <?php echo $code; ?>
    </div>
  </div>
</section>
<!-- /. Subscribe -->