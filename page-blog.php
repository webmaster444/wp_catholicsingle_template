<?php get_header(); ?>

<?php
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  query_posts( array( 'posts_per_page' => 10, 'post_status' => 'publish', 'paged' => $paged ) );
?>

<div class="grid-container spacer-top">
  <div class="grid-75 tablet-grid-75">
    <h1 class="entry-title"><?php 
    if ( is_day() ) { printf( __( 'Daily Archives: %s', 'catholicsingles' ), get_the_time( get_option( 'date_format' ) ) ); }
    elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'catholicsingles' ), get_the_time( 'F Y' ) ); }
    elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'catholicsingles' ), get_the_time( 'Y' ) ); }
    else { _e( 'CatholicSingles.com Blogs', 'catholicsingles' ); }
    ?></h1>
  </div>
  <div class="grid-25 tablet-grid-25">
    <div class="spacer-bottom">
      <a href="https://app.catholicsingles.com/subscribe.html" class="btn alt message">Subscribe to Newsletter</a>
    </div>
  </div>
  <div class="grid-75 tablet-grid-75 alternate-row-colors">
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
  <div class="grid-25 tablet-grid-25">
    <div id="#blog-index-widget-area" class="blog-sidebar">
      <?php dynamic_sidebar( 'blog-index-widget-area' ); ?>
     </div>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
