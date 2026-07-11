<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>
<div class="container">
<main id="main" class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article <?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-content"><?php the_excerpt(); ?></div>
			</article>
			<?php
		endwhile;
		the_posts_navigation();
	else :
		echo '<p>' . esc_html__( 'Nothing found.', 'flysox-sa' ) . '</p>';
	endif;
	?>
</main>
</div>
<?php get_footer(); ?>
