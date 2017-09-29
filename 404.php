<?php get_header(); ?>
<div class="grid-container">
<div class="grid-100">
<section id="content" role="main">
<article id="post-0" class="post not-found">
<header class="header">
<h1 class="entry-title"><?php _e( 'Not Found', 'catholicsingles' ); ?></h1>
</header>
<section class="entry-content">
<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'catholicsingles' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
</section>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
