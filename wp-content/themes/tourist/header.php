<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tourist
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Asap:400,400i,500,500i,700,700i" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tourist' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<div class="header-line"><img src="http://localhost:8888/tourist/wp-content/uploads/2017/06/blurred-line-1.png" alt="Blurred Line"/></div>

			<div class="app-store">
				<a href="https://itunes.apple.com/us/app/tourist-new-app/id1207732311?mt=8"><img src="http://localhost:8888/tourist/wp-content/uploads/2017/06/applestore.png" alt="Apple App Store" /></a>
				<a href="https://play.google.com/store/apps/details?id=com.pinegroup.touristapp"><img src="http://localhost:8888/tourist/wp-content/uploads/2017/06/googleplay.png" alt="Google Play" /></a>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tourist' ); ?></button> -->
			<?php
				wp_nav_menu( array(
					'theme_location' => is_front_page() ? 'front-menu' : 'menu-1',
					'menu_id'        => is_front_page() ? 'front-page-menu' : 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
