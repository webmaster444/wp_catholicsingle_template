<?php get_header(); ?>


<div class="grid-container spacer-top">
  <div class="grid-100">
    <div class="breadcrumbs">
      <a href="/">Home</a> &raquo; <a href="/blog/">Blog</a> &raquo; 

<?php
    if ( is_day() ) {
      printf( __('<a href="/blog/%s/">%s</a> &raquo; %s'), get_the_time('Y'), get_the_time('Y'), get_the_time('F'));
    }
    elseif ( is_month() ) {
      printf( __('<a href="/blog/%s/">%s</a> &raquo; %s'), get_the_time('Y'), get_the_time('Y'), get_the_time('F'));
    }
    elseif ( is_year() ) {
      printf( __('%s'), get_the_time('Y'));
    }
    else { _e( 'Archives', 'catholicsingles' ); }
?>
    </div>

    <h1 class="entry-title"><?php 
    if ( is_day() ) { printf( __( 'Daily Archives: %s', 'catholicsingles' ), get_the_time( get_option( 'date_format' ) ) ); }
    elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'catholicsingles' ), get_the_time( 'F Y' ) ); }
    elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'catholicsingles' ), get_the_time( 'Y' ) ); }
    else { _e( 'Archives', 'catholicsingles' ); }
    ?></h1>
  </div>
  <div class="grid-100 alternate-row-colors">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post-preview grid-container row">
        <div class="grid-100">
          <?php if (has_post_thumbnail()){ ?>
            <div class="featured-image-block" style="background-image: url(<?php the_post_thumbnail_url('large') ?>);">
              <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            </div>
          <?php } else { ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php } ?>
        </div>
        <?php the_excerpt(); ?>
        <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
      </div>
    <?php endwhile; endif; ?>
    <div class="nav-previous alignleft"><?php previous_posts_link( '&laquo; Newer posts' ); ?></div>
    <div class="nav-next alignright"><?php next_posts_link( 'Older posts &raquo;' ); ?></div>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
