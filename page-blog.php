<?php get_header(); ?>

<?php
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  query_posts( array( 'posts_per_page' => 15, 'post_status' => 'publish', 'paged' => $paged ) );  
  global $wp_query;
  $pagecnt = $wp_query->max_num_pages;
?>

<div class="grid-container spacer-top">
  <div class="grid-100 tablet-grid-100">
    <h1 class="entry-title"><?php 
    if ( is_day() ) { printf( __( 'Daily Archives: %s', 'catholicsingles' ), get_the_time( get_option( 'date_format' ) ) ); }
    elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'catholicsingles' ), get_the_time( 'F Y' ) ); }
    elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'catholicsingles' ), get_the_time( 'Y' ) ); }
    else { _e( 'CatholicSingles.com Blogs', 'catholicsingles' ); }
    ?></h1>
  </div>

  <div class="grid-100 tablet-grid-100">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post-preview grid-33">
        <div class="grid-100">
          <?php if (has_post_thumbnail()){ ?>
            <img src="<?php the_post_thumbnail_url('large');?>" width="100%" />
          <?php } ?>
          <h1 class="entry-title"><?php the_title(); ?></h1>          
        </div>
        <span class="bio-photo" style="margin-right:10px;"><?php echo get_the_date('F j, Y'); ?> </span>
        <span class="cblack">by <?php echo get_author_name(); ?></span>
        <?php the_excerpt(); ?>        
      </div>
    <?php endwhile; endif; ?>
    <div class="clearfix"> </div>
    <div class="nav-previous alignleft"><?php previous_posts_link( 'Previous' ); ?></div>
    <div class="nav-previous alignleft"><input type="text" class="btn blueborder" value="<?php echo $paged; ?>" /> <?php echo " of " .$pagecnt;?></div>
    <div class="nav-next alignright"><?php next_posts_link( 'Next' ); ?></div>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
