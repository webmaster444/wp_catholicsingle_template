<div class="spacer-bottom">
  <?php
  $blog_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5));
  $counter = 0;
  while($blog_query->have_posts()) : $blog_query->the_post();
    $counter++;
    ?>
      <p class="blog_recent_link">
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
      </p>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); // reset the query ?>
</div>
