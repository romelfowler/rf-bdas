<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blue_Diamond_Air_Solution
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<title>Blue Diamond Air Solutions</title>
<meta name="author" content="Rommel Santiago" />
<!-- Favicons (created with http://realfavicongenerator.net/)-->
<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">

<!-- Normalize -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/normalize.css">
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.css">
<!-- Owl -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.css">
<!-- Animate.css -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/animate.css">
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
<!-- Elegant Icons -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/fonts/eleganticons/et-icons.css">
<!-- Main style -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( '', 'bd_air_solution' ); ?></a>
  <div class="preloader">
    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/loader.gif" alt="Preloader image">
  </div>
  <nav class="navbar">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.PNG" width="100px" data-active-url="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.PNG" alt=""></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-nav">
          <li><a href="#intro">Schedules</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="default.html" class="btn btn-blue">Default</a></li>

          <!-- <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Default</a></li> -->
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>





	<header id="masthead" class="site-header" role="banner">

    <div class="container">
      <div class="table">
        <div class="header-text">
          <div class="row">

            <div class="col-md-12 text-center">

							<?php if( have_posts() ) : the_post() ?>
              <h3 class="light blue"><?php the_content(); ?></h3>
              <h1 class="white"><?php the_title(); ?></h1>
						<?php endif; ?>

              <span class="typed-cursor"></span>

            </div>

          </div>
        </div>
      </div>
    </div>

	</header>
