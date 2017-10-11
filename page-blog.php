<?php get_header(); ?>

<?php
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  query_posts( array( 'posts_per_page' => 15, 'post_status' => 'publish', 'paged' => $paged ) );
  global $wp_query;
  $pagecnt = $wp_query->max_num_pages;
  $args1 = array( 'numberposts' => 1, 'offset' => 0, 'category' => 0, 'orderby' => 'post_date', 'order' => 'DESC'); 
  $post1 = wp_get_recent_posts($args1);  
  $postId = $post1[0]['ID'];
  $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($postId) );
  $img_src_url = $img_src[0];  
  $backimgsrc = get_the_post_thumbnail_url($postId,'large');
?>
<div class="grid-container spacer-top">
  <div class="grid-100 tablet-grid-100">
    <h1 class="blog-page-title"><?php 
    if ( is_day() ) { printf( __( 'Daily Archives: %s', 'catholicsingles' ), get_the_time( get_option( 'date_format' ) ) ); }
    elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'catholicsingles' ), get_the_time( 'F Y' ) ); }
    elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'catholicsingles' ), get_the_time( 'Y' ) ); }
    else { _e( 'CatholicSingles.com Blog', 'catholicsingles' ); }
    ?></h1>
  </div>  
  <div class="grid-100 tablet-grid-100">
  <div class="latest-slide">
  <div class="img_wrapper" style="background:url('<?php echo $backimgsrc;?>') no-repeat;background-size: cover;">
  <div class='grid-40 tablet-grid-40 prefix-60' id="content">
    <h4 class="cwhite post_title"><?php echo $post1[0]['post_title'];?></h4>
    <span class="cwhite pull-left" style="margin-right: 5px;font-weight: 500;"><?php echo get_the_date('F j, Y', $postId);?></span>
    <span class="cwhite pull-left">By <?php $authorId = $post1[0]['post_author']; echo get_the_author_meta( 'display_name', $authorId ); ?></span><br/><br/>
    <p class="cwhite"><?php echo get_the_excerpt($postId); ?></p>
  </div>
  </div>
  </div>
  </div>
  <div class="grid-100 tablet-grid-100">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post-preview grid-33">
        <div class="grid-100">
          <?php if (has_post_thumbnail()){ ?>
            <div style="background-image:url(<?php the_post_thumbnail_url('large');?>)" class="blog_post_img_back">
          </div>
          <?php } ?>
          <h1 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>          
        </div>
        <span class="bio-photo" style="margin-right:10px;"><?php echo get_the_date('F j, Y'); ?> </span>
        <span class="cblack">by <?php echo get_author_name(); ?></span>
        <?php the_excerpt(); ?>        
      </div>
    <?php endwhile; endif; ?>
    <div class="clearfix"> </div>
    <div class="aligncenter pagination_section">
      <div class=""><?php previous_posts_link( 'Previous' ); ?></div>
      <div class=""><input type="text" class="blueborder" value="<?php echo $paged; ?>" /> <?php echo " of " .$pagecnt;?></div>
      <div class=""><?php next_posts_link( 'Next' ); ?></div>
    </div>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
