<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<div id="container">
  <!-- Header -->
  <div class="header-section-wrapper">
    <div class="grid-container">
      <div class="grid-parent header-wrapper">
        <div class="logo grid-60 tablet-grid-50 mobile-grid-60" style="text-align: left">
          <a href="/"><img src="<?php echo get_stylesheet_uri();?>/images/logo.png" alt="Catholic Singles Logo" /></a>
        </div>

        <div class="login grid-40 tablet-grid-50 mobile-grid-40">
          <div class="hide-on-desktop hide-on-tablet">
            <div class="join-block">
              <div class="btn-wrapper"><a href="https://app.catholicsingles.com/cgi-bin/members_secure_signup_1.cgi" class="btn alt4 user">Join</a></div>
            </div>
            <div class="login-block">
              <div class="btn-wrapper"><a href="https://app.catholicsingles.com/login.html" class="btn alt lock">Login</a></div>
            </div>
          </div>

          <div class="hide-on-mobile grid-parent">
            <div class="grid-50 tablet-grid-50 align-right">
              <div class="join-block">
                <div>New to CatholicSingles?</div>
                <div class="btn-wrapper"><a href="https://app.catholicsingles.com/cgi-bin/members_secure_signup_1.cgi" class="btn alt4 user">Join for FREE</a></div>
              </div>
            </div>
            <div class="grid-50 tablet-grid-50 align-left">
              <div class="login-block">
                <div>Already a member?</div>

                <div class="btn-wrapper"><a href="https://app.catholicsingles.com/login.html" class="btn alt lock">Log In</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header -->
  <?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
