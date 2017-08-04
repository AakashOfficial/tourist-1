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
        
    <?php if ( is_front_page() ) : ?>
        
		<div id="branding" class="site-branding">
            <nav id="top-nav" class="top-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">&#9776;</button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'top-menu'
					) );
				?>
			</nav><!-- #top-navigation -->
			<div class="site-intro">
				<div id="title" class="title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo" src= "http://wp.touristnewapp.com/wp-content/uploads/2017/07/tourist-logo-e1500065924998.png" />
						<span>ourist</span>
					</a>
				</div>
				<h2 id="subtitle-one">New App</h2>
				<p id="subtitle-two">Find your Tour Guide on Demand and in Real Time</p>
			</div>

		</div><!-- .site-branding -->
        
    <?php else : ?>
        
        <div class="site-branding-page">  
            <nav id="top-nav" class="top-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">&#9776;</button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'top-menu'
					) );
				?>
			</nav><!-- #top-navigation -->
			<div class="site-intro-page">
				<div class="title-page">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo" src= "http://wp.touristnewapp.com/wp-content/uploads/2017/07/tourist-logo-e1500065924998.png" />
						<span>ourist</span>
					</a>
				</div>
			</div>

		</div><!-- .site-branding-page -->
            
    <?php endif; ?>
			

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => is_front_page() ? 'front-menu' : 'menu-1',
					'menu_id'        => is_front_page() ? 'front-page-menu' : 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
