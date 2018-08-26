<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

/*
* Include the component stylesheet for the content.
* This call runs only once on index and archive pages.
* At some point, override functionality should be built in similar to the template part below.
*/
wp_print_styles( array( 'header-landing' ) ); // Note: If this was already done it will be skipped.

?>



<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( ! wprig_is_amp() ) : ?>
		<script>document.documentElement.classList.remove("no-js");</script>
	<?php endif; ?>

	<?php wp_head();

	/*
	* Include the component stylesheet for the content.
	* This call runs only once on index and archive pages.
	* At some point, override functionality should be built in similar to the template part below.
	*/
	wp_print_styles( array( 'wprig-header-landing' ) ); // Note: If this was already done it will be skipped.
	?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wprig' ); ?></a>

		<header id="masthead" class="site-header background">
			<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main menu', 'wprig' ); ?>" >
				<button class="menu-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'wprig' ); ?>" aria-controls="primary-menu" aria-expanded="false">
					<?php esc_html_e( 'Menu', 'wprig' ); ?>
				</button>

				<div class="primary-menu-container">
					<?php

					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'container'      => 'ul',
						)
					);

					?>
				</div>
			</nav><!-- #site-navigation -->
			<?php if ( has_header_image() ) : ?>
				<figure class="header-image">
					<?php the_header_image_tag(); ?>
				</figure>
			<?php endif; ?>
			<div class="site-branding">
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>

				<div class="titulo">
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>

					<?php $wprig_description = get_bloginfo( 'description', 'display' ); ?>
					<?php if ( $wprig_description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $wprig_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>


				</div><!-- titulo -->

				<div class="fecha-social">
					<?php echo esc_html( date_i18n( 'l, F j, Y' ) ); ?>
					<p>Enlaces sociales ...</p>
				</div>
			</div><!-- .site-branding -->
			<div class="busqueda-conoche">
				<?php get_search_form(); ?><!-- default search -->
				<!-- <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?> --><!-- ajax search lite plugin-->
			</div>
			<div class="star star-1"></div>
			<div class="star star-2"></div>
			<div class="star star-3"></div>
			<div class="star star-4"></div>
			<div class="star star-5"></div>
			<div class="star star-6"></div>
			<div class="star star-7"></div>
			<div class="star star-8"></div>


		</header><!-- #masthead -->