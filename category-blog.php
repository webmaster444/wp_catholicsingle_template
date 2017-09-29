<?php get_header(); ?>
<div class="grid-container spacer-top">
  <div class="grid-75 tablet-grid-75">
    <h1>CatholicSingles.com Blogs</h1>
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
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
          <h4>by <span class="author"><?php the_author(); ?></span> on <span class="date"><?php the_date() ?></span></h4>
        </div>
        <div class="grid-20 tablet-grid-20 mobile-grid-33">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?>
        </div>
        <div class="grid-80 tablet-grid-80 mobile-grid-66">
          <?php the_excerpt(); ?>
          <div>
            <a href="<?php the_permalink(); ?>">Read More</a>
          </div>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </div>
  <div class="grid-25 tablet-grid-25">
    <div id="#blog-index-widget-area" class="blog-sidebar">
      <?php dynamic_sidebar( 'blog-index-widget-area' ); ?>
     </div>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
