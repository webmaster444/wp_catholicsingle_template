<?php get_header(); ?>
<div class="grid-container">
<div class="grid-100">
<section id="content" role="main">
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'catholicsingles' ), get_search_query() ); ?></h1>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h2 class="entry-title"><?php _e( 'Nothing Found', 'catholicsingles' ); ?></h2>
</header>
<section class="entry-content">
<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'catholicsingles' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
<?php endif; ?>
</section>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
