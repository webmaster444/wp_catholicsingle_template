<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="grid-container spacer-top blog-page">
    <div class="grid-75 tablet-grid-75 alternate-row-colors">
      <div class="grid-container">
        <div class="grid-100">
          <div class="breadcrumbs">
            <a href="/">Home</a> &raquo; <a href="/blog/">Blog</a> &raquo; <?php the_title(); ?>
          </div>
          <?php if (has_post_thumbnail()){ ?>
            <div class="featured-image-block" style="background-image: url(<?php the_post_thumbnail_url('large') ?>);">
              <h1><?php the_title(); ?></h1>
            </div>
            <hr />
          <?php } else { ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php } ?>
          <div class="blog-content">
            <?php the_content(); ?>
          </div>
        </div>

        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
      </div>
    </div>
    <div class="grid-25 blog-sidebar">
      <div class="spacer-bottom">
      <a href="https://app.catholicsingles.com/subscribe.html" class="btn alt message">Subscribe to Newsletter</a>
      </div>

      <h2>About the Author</h2>
      <h4><?php the_author(); ?></h4>
      <span class="bio-photo"><?php echo get_avatar( get_the_author_id()); ?> </span>
      <?php echo get_the_author_description(); ?>
      <?php dynamic_sidebar( 'blog-index-widget-area' ); ?>
    </div>
  </div>
<?php endwhile; endif; ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
