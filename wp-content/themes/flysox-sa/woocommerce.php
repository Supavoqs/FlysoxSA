<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header( 'shop' );
?>
<div class="container woocommerce-page-wrap">
<main id="main" class="site-main">
	<?php woocommerce_content(); ?>
</main>
</div>
<?php get_footer( 'shop' ); ?>
