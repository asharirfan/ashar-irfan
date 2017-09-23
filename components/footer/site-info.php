<?php
/**
 * The template for displaying footer information.
 *
 * @package Cover2
 */

?>

<div class="site-info">
	<p class="copyrights">
		<?php esc_html_e( 'Copyright @ Ashar Irfan.', 'cover2' ); ?>
		<?php printf( esc_html__( 'Proudly published with WordPress.', 'cover2' ) ); ?>
	</p>
	<?php if ( has_nav_menu( 'jetpack-social-menu' ) ) : ?>
		<?php cover2_social_menu(); ?>
	<?php endif; ?>
</div><!-- .site-info -->
