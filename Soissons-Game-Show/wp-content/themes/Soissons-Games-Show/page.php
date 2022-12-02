<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soissons-Game-Show
 */

get_header();
?>

<main id="primary" class="site-main">

	<!--FAIUT FAIRE CA!!!!!!!! ¨POUR APPELER LES CHAMPS -->
	<div class="main">
		<h2><?php echo get_field('titre-second-niveau-body'); ?></h2>

		<div class="main2">
			<h2><?php echo get_field('titre-troisieme-niveau-body-1'); ?></h2>
		</div>
		<div class="luigipara">
			<?php
			$image = get_field('image-luigi');
			$size = 'full';
			if (!empty($image)) : ?>
				<img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
			<?php endif; ?>



			<p><?php echo get_field('paragraphe-body-1'); ?></p>

		</div>

		<div class="pokemon">


			<?php
			$image = get_field('image-carte-pokemon');
			$size = 'full';
			if (!empty($image)) : ?>
				<img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
			<?php endif; ?>
			<div class="pokemon2">


				<h2><?php echo get_field('titre-troisieme-niveau-body-2'); ?></h2>


				<p><?php echo get_field('paragraphe-body-1'); ?></p>

			</div>
		</div>

		<div class="youtubeur">
			<h2><?php echo get_field('titre-troisieme-niveau-body-3'); ?></h2>

			<?php
			$image = get_field('image-youtubeur-1');
			$size = 'full';
			if (!empty($image)) : ?>
				<img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
			<?php endif; ?>


			<?php
			$image = get_field('image-youtubeur-2');
			$size = 'full';
			if (!empty($image)) : ?>
				<img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
			<?php endif; ?>


		</div>


		<div class="cosplay">


			
			<div class="pokemon2">


				<h2><?php echo get_field('titre-troisieme-niveau-body-4'); ?></h2>


				<p><?php echo get_field('paragraphe-body-3'); ?></p>

			</div>
		</div>



		<div class="sponsor">


			<h2><?php echo get_field('titres-troisieme-niveau-4'); ?></h2>

			<?php
			$image = get_field('sponsors');
			$size = 'full';
			if (!empty($image)) : ?>
				<img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
			<?php endif; ?>

		</div>
		



	</div>

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>




</main><!-- #main -->


<?php
// get_sidebar();
get_footer();
