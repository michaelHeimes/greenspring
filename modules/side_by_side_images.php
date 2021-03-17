<section class="side-by-side-images module ">
	<div class="grid-container">
		<div class="grid-x grid-padding-x text-center">

			<div class="cell small-12 medium-6">
				<?php 
				$image = get_sub_field('left_image');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>					
			</div>
			<div class="cell small-12 medium-6">
				<?php 
				$image = get_sub_field('right_image');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>					
			</div>			
			
		</div>
	</div>
</section>