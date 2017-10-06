<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="grid-container spacer-top blog-page">
    <div class="grid-80 tablet-grid-80 prefix-10 alternate-row-colors">
      <div class="grid-container">
        <div class="grid-100">
          <div class="breadcrumbs">
            <a href="/">Home</a> / <a href="/blog/">Blog</a> / <?php the_title(); ?>          
          </div>
          <div class="post-categories"><?php echo get_the_category_list();?></div>
          <div class="clearfix"></div>
          <h1 class="h1title"><?php the_title(); ?></h1>
          <div class="bio-info">
          <span class="bio-photo" style="margin-right:10px;"><?php the_date(); ?> </span>
          <span class="bio-photo" style="margin-right:10px;"><?php echo get_avatar( get_the_author_id()); ?> </span>
          <span class="cblack">by <?php echo get_author_name(); ?></span>
          </div>
          <?php if (has_post_thumbnail()){ ?>            
            <img src="<?php the_post_thumbnail_url('large');?>" width="100%" />            
          <?php }  ?>
                      
          <div class="blog-content">
            <?php the_content(); ?>
          </div>
          <div class="small-post-categories"><?php echo get_the_category_list();?></div>
          <div class="clearfix"></div>
          <div class="author-section"><span class="bio-photo"><?php echo get_avatar( get_the_author_id()); ?> </span>
          <span class="bio-text"><?php echo author_excerpt(get_the_author_description()); ?></span></div>
        </div>

        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
