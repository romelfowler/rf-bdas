<?php $schedule_header = get_field('schedule_header'); ?>
<div class="intro-table intro-table-first">
  <h5 class="white heading"><?php echo $schedule_header; ?></h5>
  <div class="owl-carousel owl-schedule bottom">
    <div class="item">
      <?php $loop = new WP_Query( array( 'post_type' => 'schedule', 'orderby' => 'post_id', 'order' =>'ASC', 'showposts' => 4 ) );
      while($loop->have_posts()) : $loop-> the_post();
      $schedules = get_field('schedules');
      ?>
      <div class="schedule-row row">
        <div class="col-xs-6">
          <h5 class="regular white"><?php the_title(); ?></h5>
        </div>
        <div class="col-xs-6 text-right">
          <h5 class="white"><?php echo $schedules; ?></h5>
        </div>
      </div>
    <?php endwhile; ?>
    </div><!-- item -->
  </div>
</div><!-- intro table -->
