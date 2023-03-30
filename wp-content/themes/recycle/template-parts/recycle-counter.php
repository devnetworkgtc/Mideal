<?php 
global $recycle;
if(!empty($recycle['counter-banner']['url']))
{
	$banner=$recycle['counter-banner']['url'];
}
$counter_items=$recycle['counter-items'];
?>
<!-- Counter -->
<section class="couners" <?php if(!empty($banner)){ ?>style="background:url(<?php echo esc_url($banner); ?>) fixed;" <?php } ?>>
  <div class="container">
    <div class="row">
    <?php if (isset($counter_items) && !empty($counter_items)) { ?>
    <?php foreach($counter_items as $counter_item){ ?>
      <div class="col-lg-3">
        <div class="count"> <i class="fa <?php echo esc_html($counter_item['url']); ?> fa-4x"></i>
          <div class="count-numbers">
            <h2><span class="counter"><?php echo esc_html($counter_item['description']); ?></span>+</h2>
            <h4><?php echo esc_html($counter_item['title']); ?></h4>
          </div>
        </div>
      </div>
    <?php } }?>   
    </div>
  </div>
</section>
<!-- /. Counters -->