<section class="logo-grid module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x small-up-2 medium-up-3 large-up-4">
			
			<?php if( have_rows('logos') ):?>
				<?php while ( have_rows('logos') ) : the_row();?>	
			
				<?php if( have_rows('single_logo') ):?>
					<?php while ( have_rows('single_logo') ) : the_row();?>	

					<div class="cell">
						<div class="inner">

							<?php if ( $url = get_sub_field('url')):?>
							
								<a href="<?php echo $url;?>" target="_blank">
									<?php
									$image = get_sub_field('logo');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</a>
								
							<?php else:?>
									
								<?php
								$image = get_sub_field('logo');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								
							<?php endif; ?>
							
						</div>
					</div>
				
					<?php endwhile;?>
				<?php endif;?>
							
				<?php endwhile;?>
			<?php endif;?>

					
		</div>
	</div>
</section>