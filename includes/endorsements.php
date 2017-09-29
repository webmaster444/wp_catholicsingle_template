<div class="endorsements-section-wrapper">
  <div class="grid-container desktop-equal-height-container">
    <?php
    $success_story_query = new WP_Query(array('post_type' => 'success_stories', 'posts_per_page' => 3));
    $counter = 0;
    while($success_story_query->have_posts()) : $success_story_query->the_post();
      $counter++;
      ?>
      <div class="grid-33">
        <div class="endorsement equal-height">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'endorsements-thumbnail')); } ?>

          <?php the_excerpt(); ?>

          <p><a href="<?php print the_permalink() ?>">Read More</a></p>
        </div>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>
  </div>
</div>
