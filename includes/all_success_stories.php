<div class="success-section-wrapper-wrapper">
  <div class="grid-container">
    <h1 class="grid-100">CatholicSingles.com&reg; Success Stories</h1>
  </div>
  <?php
  $success_story_query = new WP_Query(array('post_type' => 'success_stories', 'posts_per_page' => 1000));
  $counter = 0;
  while($success_story_query->have_posts()) : $success_story_query->the_post();
    $counter++;
    ?>
    <div class="success-section-wrapper">
      <div class="grid-container story">
        <?php if($counter % 2 == 1): ?>
        <div class="grid-30 tablet-grid-50">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
        </div>
        <?php endif; ?>

        <?php if(has_post_thumbnail()): ?>
          <div class="grid-70 tablet-grid-50">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        <?php else: ?>
          <div class="grid-100">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        <?php endif; ?>

        <?php if($counter % 2 == 0): ?>
        <div class="grid-30 tablet-grid-50">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); // reset the query ?>
</div>
