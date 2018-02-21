<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-framework-2' ); ?></a> -->

	<header id="header-mfw-001" class="site-header">

		<!-- Moose_Framework_2 NAVIGATION GOES HERE -->
		<nav class="navbar navbar-expand-xl fixed-top">
			<!-- <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo img-fluid" src="/wp-content/uploads/2018/02/LaCasa-Logo-150x100.jpg"></a> -->
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo img-fluid" src="/wp-content/uploads/2018/02/the-moose-builder-logo-200x150.jpg"></a>
			<button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar-content">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1', // Defined when registering the menu
					'menu_id'        => 'primary-menu',
					'container'      => false,
					'depth'          => 2,
					'menu_class'     => 'navbar-nav ml-auto  pt-lg-5 pt-xl-0',
					'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
					'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
				) );
				?>
			</div>
		</nav>

		<!-- Moose_Framework_2 NAVIGATION ENDS HERE -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
