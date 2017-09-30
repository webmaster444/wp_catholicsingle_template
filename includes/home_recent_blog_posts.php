<div class="blog-section-wrapper">
  <div class="grid-container">
    <h1 class="grid-100">Catholic Singles Dating Blogs</h1>
    <?php
    $blog_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4));    
    while($blog_query->have_posts()) : $blog_query->the_post();      
      ?>
      <div class="grid-50 post">
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

        <div class="byline">by <span class="author"><?php the_author(); ?></span> on <span class="date"><?php the_date() ?></span></div>

        <div class="post">
          <p><?php print the_excerpt(); ?>
        </div>

        <p><a href="<?php the_permalink(); ?>" class="read-more">Read More</a></p>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>
  </div>
</div>
