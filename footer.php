<div class="footer-section-wrapper <% $classes %>">
  <div class="grid-container">
    <div class="grid-60 prefix-20 suffix-20 upper-nav">
      <div>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ) ); ?>
      </div>
    </div>
    <div class="grid-80 prefix-10 suffix-10 splitline"></div>

    <div class="grid-60 prefix-20 suffix-20 lower-nav footerlower">
      &copy; CatholicSingles.com, Inc. All Rights Reserved. -
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?>
    </div>


    <div class="grid-60 prefix-20 suffix-20 social-footer">
      <div class="badges align-center">
      <span class="badge"><a href="https://www.facebook.com/catholicsingles" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/fb256.png"></a></span>
        <span class="badge"><a href="https://twitter.com/CatholicSingles" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twt256.png"></a></span        
      </div>
    </div>

  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
