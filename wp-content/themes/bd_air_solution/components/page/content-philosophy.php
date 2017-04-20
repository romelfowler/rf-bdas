<div class="row services">
    <?php $loop = new WP_Query( array( 'post_type' => 'philosophy', 'orderby' => 'post_id', 'order' =>'ASC', 'showposts' => 3 ) );

    while($loop->have_posts()) : $loop-> the_post();?>
    <div class="col-md-4">

    <div class="service">
      <div class="icon-holder">

        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail(array(50, 50)); ?>
        <?php endif; ?>
      </div>
      <h4 class="heading"><?php the_title(); ?></h4>
      <div class="description"><?php the_content(); ?></div>
    </div>
  </div>

  <?php endwhile; ?>

</div>
