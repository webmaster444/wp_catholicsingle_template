<div class="blog-section-wrapper">
  <div class="grid-container">
    <h1 class="grid-100 section_title text-center">From CatholicSingles.com Blogs</h1>
    <?php
    $blog_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4));    
    while($blog_query->have_posts()) : $blog_query->the_post();      
      ?>
      <div class="grid-25 post">
        <?php if (has_post_thumbnail()){ ?>
          <img src="<?php the_post_thumbnail_url('large');?>" width="100%" />
        <?php } ?>
        <h2 class="text-center"><a class="post_title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        
        <div class="post">
          <p><?php print the_excerpt(); ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="read-more btn btn-light-blue text-center">Read More</a>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>
    <div class="clearfix"> </div>
  </div>
</div>
