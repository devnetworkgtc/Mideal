<?php 
global $recycle;
$title=$recycle['commingsoon-heading'];
$days=$recycle['commingsoon-days'];
$hrs=$recycle['commingsoon-hrs'];
$mnts=$recycle['commingsoon-mnts'];
$sec=$recycle['commingsoon-sec'];
?>
<section class="comming-soon">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 wow fadeInUp">
        <h1><?php echo $title; ?></h1>
        <div class="countdown-wrapper animated fadeIn delay-2">
          <ul id="clockdiv">
            <li> <span class="days"><?php echo esc_html($days); ?></span>
              <p>days</p>
            </li>
            <li> <span class="hours"><?php echo esc_html($hrs); ?></span>
              <p>hours </p>
            </li>
            <li> <span class="minutes"><?php echo esc_html($mnts); ?></span>
              <p>minutes</p>
            </li>
            <li> <span class="seconds"><?php echo esc_html($sec); ?></span>
              <p>seconds</p>
            </li>
          </ul>
          <!-- /countdown --> 
        </div>
      </div>
    </div>
  </div>
</section>