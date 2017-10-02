<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

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
