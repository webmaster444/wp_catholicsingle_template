<div class="success-section-wrapper-wrapper">
  <div class="grid-container">
    <h1 class="grid-100 section_title">CatholicSingles.com Success Stories</h1>
  </div>
  <?php
  $success_story_query = new WP_Query(array('post_type' => 'success_stories', 'posts_per_page' => 3));  
  while($success_story_query->have_posts()) : $success_story_query->the_post();?>
    <div class="success-section-wrapper">
      <div class="grid-33 story">
        <div class="grid-70 tablet-grid-50">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>        
      </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); // reset the query ?>
</div>
