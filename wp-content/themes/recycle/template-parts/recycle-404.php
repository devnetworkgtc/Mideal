<?php 
global $recycle;
if(!empty($recycle['error-page-banner']['url']))
{
	$banner=$recycle['error-page-banner']['url'];
}
$title=$recycle['error-heading'];
$subtitle=$recycle['error-sub-heading'];
$description=$recycle['error-description'];
?>
<section class="inner-page-banner section-padding" <?php if(!empty($banner)){ ?> style="background:url(<?php echo esc_url($banner) ?>) fixed;" <?php } ?>>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <?php if(!empty($banner)){ ?>
      	 <h1>404</h1>
         <h6>Home / 404</h6>
      <?php }else{ ?>
         <h1 class="nobg">404</h1>
         <h6 class="nobg">Home / 404</h6>
      <?php } ?>   
      </div>
    </div>
  </div>
</section>
<section class="error-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInLeft">
        <h1><?php if(!empty($title)){ echo esc_html($title); }else{ echo '404';} ?></h1>
        <h3><?php if(!empty($subtitle)){ echo esc_html($subtitle); }else{ echo 'OOPS... PAGE NOT FOUND!';} ?></h3>
        <p><?php if(!empty($description)){ echo esc_html($description); }else{ echo 'Sorry the Page You are Looking for is No Longer Exist. Try something Different or Redirect to Home Page.';} ?></p>
      </div>
    </div>
  </div>
</section>  