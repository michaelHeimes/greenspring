<section class="icon-left-copy-right module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<?php if( have_rows('cards') ):?>
				<?php while ( have_rows('cards') ) : the_row();?>
				
				<?php if( have_rows('single_card') ):?>
					<?php while ( have_rows('single_card') ) : the_row();?>	
					
					<div class="single-card cell small-12 medium-6">
						<div class="inner">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 medium-shrink">
									<?php 
									$image = get_sub_field('icon');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								
								<div class="cell small-12 medium-auto">
									<h3 class="small-caps"><?php the_sub_field('heading');?></h3>
									<div class="copy-wrap"><?php the_sub_field('copy');?></div>
								</div>
							</div>
						</div>
					</div>
				
					<?php endwhile;?>
				<?php endif;?>	
			
				<?php endwhile;?>
			<?php endif;?>


					
		</div>
	</div>
</section>