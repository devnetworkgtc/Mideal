<?php 
global $recycle;
$heading=$recycle['caption-heading'];
$subheading=$recycle['caption-description'];
$btn=$recycle['caption-btn'];
$url=$recycle['caption-btn-url'];
?>
<!-- Caption -->
<section class="caption">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="caption-cont">
          <h3><?php echo esc_html($heading); ?></h3>
          <p><?php echo esc_html($subheading); ?></p>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="caption-btn-cont wow tada"><a href="<?php echo esc_url($url); ?>" class="btn-default"><?php echo esc_html($btn); ?></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /. Caption -->