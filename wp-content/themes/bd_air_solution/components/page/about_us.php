<div class="intro-table intro-table-hover">
  <?php $loop = new WP_Query( array( 'post_type' => 'about_us', 'orderby' => 'post_id', 'order' =>'ASC', 'showposts' => 1 ) );
  while($loop->have_posts()) : $loop-> the_post();
  $about_us_link	= get_field('about_us_link');
  $about_us_text = get_field('about_us_text');
  ?>
  <p class="white heading hide-hover"><?php the_title(); ?></p>
  <div class="bottom">
    <h5 class="white heading small-heading no-margin regular"><?php the_content(); ?></h5>
    <?php if (($about_us_link)) { ?>
      <a href="<?php echo $about_us_link; ?>" class="btn btn-white-fill expand"><?php echo $about_us_text; ?></a>
    <?php  } else {  ?>
      <div class="empty"></div>
    <?php } ?>
  </div>
<?php endwhile; ?>
</div>
