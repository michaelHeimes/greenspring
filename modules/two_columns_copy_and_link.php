<section class="two-columns-copy-and-link module<?php if(get_sub_field('remove_top_padding')):?> no-top-padding<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bottom-padding<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<?php if( have_rows('left_column') ):?>
				<?php while ( have_rows('left_column') ) : the_row();?>	

				<div class="cell small-12 medium-6">
					<div class="inner">
						<div class="copy-wrap">
							<?php the_sub_field('copy');?>		
						</div>
						
						<?php 
						$link = get_sub_field('link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div>
						    <a class="rm-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>					
					
					</div>	
				</div>
			
				<?php endwhile;?>
			<?php endif;?>

			<?php if( have_rows('right_column') ):?>
				<?php while ( have_rows('right_column') ) : the_row();?>	

				<div class="cell small-12 medium-6">
					<div class="inner">
						<div class="copy-wrap">
							<?php the_sub_field('copy');?>		
						</div>
						
						<?php 
						$link = get_sub_field('link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div>
						    <a class="rm-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>					
					
					</div>	
				</div>
			
				<?php endwhile;?>
			<?php endif;?>
					
		</div>
	</div>
</section>