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
	            <a href="#" class="logo-a">
	              <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="">
	            </a>  
	          </div>

	          <div class="col-xs-9 text-right">
	            <P>+7 (351) 452 30 66</P>
	            <p>+7 (951) 243 47 49</p>
	          </div>

	        </div>
	      </div>

	    </div> 


	    <div class="container top-nav-menu-style">
	      <div class="row">

	        <div class="col-xs-10">
	          <ul class="top-nav-menu">
	            <li>
	              <a href="">
	                Стройматериалы   
	              </a>
	            </li>
	            <li>
	              <a href="">
	                Все для бани
	              </a>
	            </li>
	            <li>
	              <a href="">
	                Инструменты
	              </a>
	            </li>
	            <li>
	              <a href="">
	                Инструменты
	              </a>
	            </li>
	            <li>
	              <a href="">
	                Дача и сад
	              </a>
	            </li>
	            <li>
	              <a href="">
	                Распродажа
	              </a>
	            </li>
	          </ul>
	        </div>

	        <div class="col-xs-2">
	        найти
	        </div>

	      </div>  
	    </div>


	<div class="container">
		<div class="row">
			<div class="site-header-inner col-sm-12">

				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>


				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
				</div>

			</div>
		</div>
	</div><!-- .container -->
</header><!-- #masthead -->

<nav class="site-navigation">
	<div class="container">
		<div class="row">
			<div class="site-navigation-inner col-sm-12">
				<div class="navbar navbar-default">
					<div class="navbar-header">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>

					<!-- Your site title as branding in the menu -->
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				  </div>

				<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
					'menu_class' => 'nav navbar-nav',
					'fallback_cb' => '',
					'menu_id' => 'main-menu',
					'walker' => new wp_bootstrap_navwalker()
				)
			); ?>

				</div><!-- .navbar -->
			</div>
		</div>
	</div><!-- .container -->
</nav><!-- .site-navigation -->

<div class="main-content">
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-8">

