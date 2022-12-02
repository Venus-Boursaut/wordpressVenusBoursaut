<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soissons-Game-Show
 */

?>
<svg width='100%' height='100%' id='svg' viewBox='0 0 1440 400' xmlns='http://www.w3.org/2000/svg' class='transition duration-300 ease-in-out delay-150'>
		<defs>
			<linearGradient id='gradient' x1='0%' y1='53%' x2='100%' y2='47%'>
				<stop offset='5%' stop-color='#ed4621'></stop>
				<stop offset='95%' stop-color='#ba1493'></stop>
			</linearGradient>
		</defs>
		<path d='M 0,400 C 0,400 0,200 0,200 C 134.8,241.06666666666666 269.6,282.1333333333333 445,265 C 620.4,247.86666666666665 836.4000000000001,172.53333333333333 1009,152 C 1181.6,131.46666666666667 1310.8,165.73333333333335 1440,200 C 1440,200 1440,400 1440,400 Z' stroke='none' stroke-width='0' fill='url(#gradient)' fill-opacity='1' class='transition-all duration-300 ease-in-out delay-150 path-0'></path>
	</svg>
<footer id="colophon" class="site-footer">


	<?php
	wp_footer();
	date_default_timezone_set('Europe/Paris');
	?>



	<section class="form">
		<div class="formulaire-de-contact">

			<h3>Nous contacter</h3>
			<p>Besoin d'un quelconque renseignement, avez-vous besoins d’une<br> information ?</p>



			<h1>Formulaire de contact</h1>
			<form action="formulaire">
				<div class="deux">
					<div class="np">
						<label for="fname">Nom*</label>
						<input type="text" id="fname" name="nom" placeholder="">

					</div>
					<div class="pn">
						<label for="fname">prénom*</label>
						<input type="text" id="fname" name="prenom" placeholder="">
					</div>
				</div>
				<label for="emailAddress">Email*</label>
				<input id="emailAddress" type="email" name="email" placeholder="">

				<label for="sujet">Objet*</label>
				<input type="text" id="sujet" name="Objet" placeholder="">


				<label for="subject">Message*</label>
				<textarea id="subject" name="subject" placeholder="" style="height:200px"></textarea>
				<label for="subject">Champs obligatoires*</label>

			</form>
			<input type="checkbox" value="1" name="user[subscribe_to_newsletter]" id="user_subscribe_to_newsletter">
			En soumettant ce formulaire, j'autorise<br>
			que les informations saisies soient utilisées<br>
			pour permettre de me recontacter ainsi que<br>
			les conditions relatives à l'utilisation de mes<br>
			données personnelles décrites dans les mentions légales.
			</label>

			<input type="submit" value="Envoyer le Message">


		</div>

		<div class="carte">
			<div class="carte-1">
				<h3>Carte</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20779.79849716586!2d3.3170914276657775!3d49.38100967788189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1669730255287!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</iframe>
			</div>
			<h3>Coordonnées</h3>
			<div class="adress">
				<a href="#" title="Adress du lieu"><img src="/wp-content/uploads/2022/11/pin.png" alt="adress">8 Allée de l'Innovation</a>
				<div class="pol"><a href="#" title="Adress du lieu">
						02200 - Soissons</a></div>
			</div>

			<div class="mail">
				<a href="#" title="Mail"><img src="/wp-content/uploads/2022/11/mail.png" alt="mail">example@email.com</a>
			</div>

			<div class="num">
				<a href="#" title="Numéro ou nous joindre"><img src="/wp-content/uploads/2022/11/vector.png" alt="Numero de telephone">03 00 00 00 00 </a>
			</div>

			<h3>Réseaux</h3>

			<a href="#" title="facebook"><img src="" alt="facebook"><img class="header-image" src="/wp-content/uploads/2022/11/logo-facebook.png" alt="Luigi"></a>
			<a href="#" title="messenger"><img src="" alt="messenger"><img class="header-image" src="/wp-content/uploads/2022/11/logo-Messenger.png" alt="Luigi"></a>
			<a href="#" title="instagram"><img src="" alt="instagram"><img class="header-image" src="/wp-content/uploads/2022/11/logo-instagram.png" alt="Luigi"></a>
			<a href="#" title="tweeter"><img src="" alt="tweeter"><img class="header-image" src="/wp-content/uploads/2022/11/logo-tweeter.png" alt="Luigi"></a>
		</div>
	</section>



	<p>&copy;&nbsp;<?= date("Y"); ?>&nbsp;-Soissons Game Show | Réalisé par Vénus Boursaut </p>





	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'soissons-game-show')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'soissons-game-show'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'soissons-game-show'), 'soissons-game-show', '<a href="http://underscores.me/">Underscores.me</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>