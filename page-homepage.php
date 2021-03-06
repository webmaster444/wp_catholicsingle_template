<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>
<section id="homepage" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="grid-100">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (false): ?>
      <header class="header">
      <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
      </header>
    <?php endif ?>
    <section class="entry-content">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    <?php echo do_shortcode('[home_guest_search]'); ?>    
    <div class="entry-links"><?php wp_link_pages(); ?></div>
    </section>
    </article>
    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
    <?php endwhile; endif; ?>
    </section>
  </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
