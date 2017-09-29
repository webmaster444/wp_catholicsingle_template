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
        <div class="logo pull-left" style="text-align: left">
          <a href="/" class="logo"><img src="<?php echo get_stylesheet_uri();?>/../images/logo-1.png" alt="Catholic Singles Logo" /></a>
        </div>

        <div class="login pull-right">
          <span class="hide-on-mobile">Already have an account?</span><a href="https://app.catholicsingles.com/login.html" class="btn btn-primary">Sign In</a>
        </div>
      </div>
    </div>
    <div class="header-boxshadow"> </div>
  </div>
  <!-- End Header -->
  <?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
