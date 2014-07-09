<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">

	    <div class="container-fluid bg-circles-header">

	      <div class="container">
	        <div class="row">

	          <div class="col-xs-3">
	            <a href="/" class="logo-a">
	              <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="">
	            </a>  
	          </div>

	          <div class="col-xs-9 text-right">
	            <P class="bold-t">+7 (351) 452 30 66</P>
	            <p class="bold-t">+7 (951) 243 47 49</p>
	          </div>

	        </div>
	      </div>

	    </div> 


	    <div class="container top-nav-menu-style">
	      <div class="row">

	        <div class="col-xs-9">


			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container_class' => '',
					'menu_class' => 'top-nav-menu',
					'fallback_cb' => '',
					'menu_id' => 'main-menu',
					'walker' => new wp_bootstrap_navwalker()
				)
			); ?>


	        </div>

	        <div class="col-xs-3">
				<div class="searchbar">
			        <?php get_search_form(); ?>
				</div>
	        </div>

	      </div>  
	    </div>

</header><!-- #masthead -->


<div class="main-content">
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-xs-12">

