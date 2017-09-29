<?php get_header(); ?>


<div class="grid-container spacer-top">
  <div class="grid-100">
    <h1 class="entry-title"><?php 
    if ( is_day() ) { printf( __( 'Daily Archives: %s', 'catholicsingles' ), get_the_time( get_option( 'date_format' ) ) ); }
    elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'catholicsingles' ), get_the_time( 'F Y' ) ); }
    elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'catholicsingles' ), get_the_time( 'Y' ) ); }
    else { _e( 'Success Stories', 'catholicsingles' ); }
    ?></h1>
  </div>
  <div class="grid-100 alternate-row-colors">
    <?php $counter = 0 ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <?php $counter++; ?>
      <div class="post-preview grid-container row">
        <?php if($counter % 2 == 1): ?>
        <div class="grid-30 tablet-grid-33 mobile-grid-33">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
        </div>
        <?php endif; ?>

        <div class="grid-70 tablet-grid-66 mobile-grid-66">
          <?php the_content(); ?>
        </div>

        <?php if($counter % 2 == 0): ?>
        <div class="grid-30 tablet-grid-33 mobile-grid-33">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
        </div>
        <?php endif; ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
