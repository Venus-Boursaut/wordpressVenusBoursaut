<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soissons-Game-Show
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/webfils/js/OwlCarousel/dist/assets/owl.carousel.min.css">
	<!--Récupère l'URI=(url) du répertoire de modèles pour le thème actif. -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/webfils/js/OwlCarousel/dist/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/styles.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'soissons-game-show'); ?></a>

		<header id="masthead" class="site-header">
			<div class="header">
				
				<?php
				$image = get_field('image-header-titre');
				$size = 'full';
				if (!empty($image)) : ?>
					<img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
				<?php endif; ?>
				<div class="site-branding">


					<h1 class="h1">Soissons Game Show

					</h1>
					<!-- <div class="menu">
					<nav class="header__nav nav-bar">
						<div class="toggle-menu">
							<div class="line line1"></div>
							<div class="line line2"></div>
							<div class="line line3"></div>
						</div>
						<ul class="nav-list">
							<li class="nav-list-item"><a href="" class="nav-link">Home</a></li>
							<li class="nav-list-item"><a href="" class="nav-link">About</a></li>
							<li class="nav-list-item">
								<a href="" class="nav-link">Portfolio</a>
							</li>
							<li class="nav-list-item"><a href="" class="nav-link">About Us</a></li>
							<li class="nav-list-item">
								<a href="" class="nav-link">Contacts</a>
							</li>
						</ul>
					</nav>
				</div>
 -->

					<?php  ?>


					<!-- <?php /*echo get_field('header-paragraphe');*/ ?>/*FAIUT FAIRE CA!!!!!!!! ¨POUR APPELER LES CHAMPS*/ -->

					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>


						<!-- se code permet d'afficher l'image du header  -->

				</div>
			<?php

					endif;
					$soissons_game_show_description = get_bloginfo('description', 'display');
					if ($soissons_game_show_description || is_customize_preview()) :
			?>
				<p class="site-description"><?php echo $soissons_game_show_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
											?></p>
			<?php endif; ?>
			</div><!-- .site-branding -->




			<nav id="site-navigation" class="main-navigation">

			<div class="header-titrepara">
				<h1><?php echo get_field('header-titre-2'); ?></h1>

				<p><?php echo get_field('header-paragraphe'); ?></p>

			</div>

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'soissons-game-show'); ?></button>

				

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);

				?>

			</nav><!-- #site-navigation -->
			

		</header><!-- #masthead -->