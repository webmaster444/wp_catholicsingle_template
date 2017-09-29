<?php
$success_story_query = new WP_Query(array('post_type' => 'press_release', 'posts_per_page' => 20));
$counter = 0;
while($success_story_query->have_posts()) : $success_story_query->the_post();
  $counter++;
  ?>
  <div class="grid-container">
    <?php if($counter % 2 == 1): ?>
    <div class="grid-30 tablet-grid-50">
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
    </div>
    <?php endif; ?>

    <div class="grid-70 tablet-grid-50">
      <h2><a href="<?php print the_permalink() ?>"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>

      <p><a href="<?php the_permalink() ?>">Read More</a>
      </p>
    </div>

    <?php if($counter % 2 == 0): ?>
    <div class="grid-30 tablet-grid-50">
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
    </div>
    <?php endif; ?>
  </div>
<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
