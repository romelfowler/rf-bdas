<?php
/**
* Template Name: Footer
*
*/
$footer_header = get_field('footer_header', 44);
$blink_button = get_field('blink_button', 44);
$footer_info = get_field('footer_info', 44);
 ?>
 <div class="row">
   <div class="col-sm-6 text-center-mobile">
     <h3 class="white">Web Developer</h3>
     <h5 class="light regular light-white">Rommel Fowler</h5>

     <!-- <a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a> -->
   </div>
<div class="col-sm-6 text-center-mobile">
  <h3 class="white"><?php echo $footer_header; ?>
    <?php if ($blink_button): ?>
      <span class="open-blink"></span></h3>
    <?php endif; ?>

  <div class="row opening-hours">
    <?php echo $footer_info; ?>
  </div>
</div>
</div>
<div class="row bottom-footer text-center-mobile">
  <div class="col-sm-8">
  </div>
  <div class="col-sm-4 text-right text-center-mobile">

    <ul class="social-footer">
      <?php $loop = new WP_Query( array( 'post_type' => 'social_media', 'orderby' => 'post_id', 'order' =>'ASC', 'showposts' => 4 ) );
      $social_link = get_field('social_link');

      while($loop->have_posts()) : $loop-> the_post();?>

      <li><a href="<?php echo $social_link; ?>"><i class="fa <?php the_field('social_icon'); ?>"></i></a></li>

      <?php endwhile; ?>
    </ul>
  </div>
</div>
