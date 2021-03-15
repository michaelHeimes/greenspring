<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>


	<a class="logo" href="<?php echo home_url(); ?>">
		<?php 
		$image = get_field('header_logo', 'option');
		if( !empty( $image ) ): ?>
		    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
	</a>
	
	<?php joints_off_canvas_nav(); ?>

<!--
	<?php joints_dropdown_nav(); ?>	

	<div class="divider"></div>
			
	<?php joints_top_nav(); ?>	
-->

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
