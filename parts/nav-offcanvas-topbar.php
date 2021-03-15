<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<div class="grid-container fluid">
	<div class="grid-x grid-padding-x" id="top-bar-menu">
		<div class="logo-wrap cell shrink top-bar-left">
			<ul class="menu">
				<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
				
				<li><a href="<?php echo home_url(); ?>">
					<?php 
					$image = get_field('header_logo', 'option');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</a></li>
				
			</ul>
		</div>
		<div class="cell auto top-bar-right show-for-large">
			<?php joints_dropdown_nav(); ?>	
			
			<div class="divider"></div>
			
			<?php joints_top_nav(); ?>	
		</div>
				
		<div class="cell auto top-bar-right mobile-button-wrap hide-for-large">
			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a id="menu-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
			</ul>
		</div>
	</div>
</div>