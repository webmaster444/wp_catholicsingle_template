<?php get_header(); ?>


<div class="grid-container spacer-top">
  <div class="grid-100">
    <h1 class="entry-title"><?php 
    if ( is_day() ) { printf( __( 'Daily Archives: %s', 'catholicsingles' ), get_the_time( get_option( 'date_format' ) ) ); }
    elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'catholicsingles' ), get_the_time( 'F Y' ) ); }
    elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'catholicsingles' ), get_the_time( 'Y' ) ); }
    else { _e( 'Press Releases', 'catholicsingles' ); }
    ?></h1>
  </div>
  <div class="grid-100 alternate-row-colors">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post-preview grid-container row">
        <div class="grid-100">
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="grid-20 tablet-grid-20 mobile-grid-33">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?>
        </div>
        <div class="grid-80 tablet-grid-80 mobile-grid-66">
          <?php the_content(); ?>
          <div>
            <a href="<?php the_permalink(); ?>">Read More</a>
          </div>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
