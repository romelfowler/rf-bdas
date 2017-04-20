<div class="intro-table intro-table-third">
  <h5 class="white heading"></h5>
  <div class="owl-testimonials bottom">
    <?php $loop = new WP_Query( array( 'post_type' => 'testimonials', 'orderby' => 'post_id', 'order' =>'ASC', 'showposts' => 12 ) );
    while($loop->have_posts()) : $loop-> the_post();?>
    <div class="item">
      <h4 class="white heading content"><?php the_content(); ?></h4>
      <h5 class="white heading light author"><?php the_title(); ?></h5>
    </div>
  <?php endwhile; ?>
  </div><!-- owl testimonial -->
</div>
