<?php dynamic_sidebar( 'footer-widget-area' ); ?>

<div class="footer-section-wrapper <% $classes %>">
  <div class="grid-container">
    <div class="grid-60 prefix-20 suffix-20 upper-nav">
      <div>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ) ); ?>
      </div>

      <div>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?>
      </div>

      <div>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-3' ) ); ?>
      </div>
    </div>

    <div class="grid-60 prefix-20 suffix-20">
      <div class="badges align-center spacer-top">
      <span class="badge"><a href="https://www.facebook.com/catholicsingles" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook-desaturated.png"></a></span>
        <span class="badge"><a href="https://twitter.com/CatholicSingles" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter-desaturated.png"></a></span>
        <span class="badge"><a href="https://plus.google.com/110821810264084738977" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/google_plus_desaturated.png"></a></span>
      </div>
    </div>

    <div class="grid-60 prefix-20 suffix-20 lower-nav">
      &copy; CatholicSingles.com, Inc. All Rights Reserved. |
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-4' ) ); ?>
    </div>

    <div class="grid-60 prefix-20 suffix-20">
      <div class="badges align-center">
        <span class="badge"><a href="https://seal.godaddy.com/verifySeal?sealID=68FbcW1ci4u6sJMhvBpM25SwvAj5keWzTEuIlHq6xFmvHdI7zqGtW29icxJ" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/godaddy-desaturated.png"></a></span>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
