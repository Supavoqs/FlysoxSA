<?php
/**
 * Template Name: About Us
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>
<article class="about-page">
	<div class="container">
		<h1>Real South African Socks, Real South African Swagger</h1>
		<div class="about-content">
			<?php
			while ( have_posts() ) :
				the_post();
				$content = get_the_content();
				if ( trim( $content ) !== '' ) :
					the_content();
				else :
					?>
					<p>FlySox SA started with one mission: kill the boring black sock forever. We design funky, colorful socks for guys who want their outfit to say something — even from the ankle down. Every pair is built for comfort, made to last, and designed to turn heads from Cape Town to Joburg.</p>
					<p>We're proudly South African, and every order is packed and shipped locally — so you get your FlySox fast, no drama.</p>
					<?php
				endif;
			endwhile;
			?>
			<p class="about-signoff">Wear something loud. Wear FlySox.</p>
		</div>
	</div>
</article>
<?php get_footer(); ?>
