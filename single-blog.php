<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="grid-container spacer-top blog-page">
    <div class="grid-75 tablet-grid-75">
      <h1>Recent Blog</h1>
    </div>
    <div class="grid-25 tablet-grid-25">
      <div class="spacer-bottom">
      <a href="https://app.catholicsingles.com/subscribe.html" class="btn alt message">Subscribe to Newsletter</a>
      </div>
    </div>
    <div class="grid-75 tablet-grid-75 alternate-row-colors">
      <div class="grid-container">
        <div class="grid-100">
          <h2>
            <h2 class="entry-title"><?php the_title(); ?></h1>
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(array('class' => 'post bordered fl')); } ?>
          <div class="blog-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="grid-25 blog-sidebar">
      <h2>About the Author</h2>
      <h4><?php the_author(); ?></h4>
      <span class="bio-photo"><?php echo get_avatar( get_the_author_id(), 83, get_the_author()); ?> </span>
      <?php echo get_the_author_description(); ?>
      <?php dynamic_sidebar( 'blog-index-widget-area' ); ?>
    </div>
  </div>
<?php endwhile; endif; ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
