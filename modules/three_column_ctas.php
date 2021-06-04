<section class="three-column-ctas module no-bottom-padding">
	<div class="color-bg light-gray-bg">
		<div class="grid-container">
			<div class="header grid-x grid-margin-x">
				<?php if( $heading = get_sub_field('heading') ):?>
				<div class="cell">
					<div class="inner">
						<svg id="Group_311" data-name="Group 311" xmlns="http://www.w3.org/2000/svg" width="42.016" height="62.291" viewBox="0 0 42.016 62.291">
							<path id="Path_153" data-name="Path 153" d="M321.5,429.779c-3.653-2.493-9.524-.5-9.524-.5-2.786.848-4.076,4.161-4.076,4.161a10.557,10.557,0,0,1-1.915,3.055,25.765,25.765,0,0,0-7.012,4.3c3.194-4.739,5.394-8.677,5.394-8.677l.015-.054c.482-.817.929-1.63,1.322-2.42a12.713,12.713,0,0,1,5.217-4.577s4.273-2.262,3.7-10.584c0,0-.759-4.939-2.439-7.771,0,0-.894-1.114-3.333,1.275,0,0-9.632,7.756-5.779,15.134A10.834,10.834,0,0,1,304.05,428c-1.51,3.807-4.565,8.484-7.209,12.175a17.562,17.562,0,0,0,.6-9.043,4.811,4.811,0,0,1,.578-2.339c.928-1.564,1.93-4.62-.62-8.642,0,0-4.932-6.334-7.193-5.224,0,0-1.907.705-2.034,6.238,0,0-.177,4.338,1.248,5.984A10.024,10.024,0,0,0,293.4,430.5a5.589,5.589,0,0,1,1.792,2.3c1.029,4.639-.447,9.274-1.21,11.223-1.133,1.464-1.884,2.377-1.884,2.377-1.256,1.73-2.343,3.325-3.286,4.8a14.425,14.425,0,0,0-.566-5.082,3.752,3.752,0,0,1,.732-3.028,10.328,10.328,0,0,0,1.761-4.855c.081-4.627-3.491-8.037-5.043-9.509-1.668-1.587-2.246-.655-2.246-.655-4.7,4.6-3.144,11.366-3.144,11.366a7.907,7.907,0,0,0,4.377,5.286c3.044,2.007,2.535,7.521,2.208,9.648-3.988,7.043-4.119,10.7-3.514,12.541l0,0a2.784,2.784,0,0,0,.724,1.279l.058.062.081.077.1.092a2.728,2.728,0,0,0,.4.293l0,0,.031.015,0,0c.054.023.1,0,.12-.093a3.9,3.9,0,0,1-.628-1.7c-.254-2.812,1.114-6.323,2.94-9.628l.008.019s3.98-5.286,12.687-5.556a13.563,13.563,0,0,1,4.677.844,8.155,8.155,0,0,0,4.126.9s3.884.15,8.507-6.369a1.515,1.515,0,0,0-.347-2.339s-7.062-5.471-13.134-1.194a8.925,8.925,0,0,0-2.936,4.18,4.929,4.929,0,0,1-2.435,1.988,39.784,39.784,0,0,0-8.993,3.984,72.806,72.806,0,0,1,5.348-7.074c.328-.42.651-.84.967-1.264l-.012.038s5.425-5.741,12.672-6.715a11.478,11.478,0,0,1,2.986.366c5.14,1.714,8.615-3.244,8.615-3.244C323.522,430.7,321.5,429.779,321.5,429.779Z" transform="translate(-280.053 -406.452)" fill="#6aaa37"/>
						</svg>
						
						<h2><?php echo $heading;?></h2>
					</div>
				</div>
				<?php endif;?>
			</div>
			
			<div class="col-wrap grid-x grid-margin-x small-up-1 medium-up-2 tablet-up-3">
				
				<?php if( have_rows('column_1') ):?>
				<div class="cell">
					<div class="inner row-height">
					<?php while ( have_rows('column_1') ) : the_row();?>	
					
					<div class="top">
						<?php if( $heading = get_sub_field('heading') ):?>
						<h3><?php echo $heading;?></h3>
						<?php endif;?>
						
						<p><?php the_sub_field('copy');?></p>
					</div>
					
					<?php 
					$link = get_sub_field('link');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					<div class="link-wrap">
					    <a class="rm-link black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
					<?php endif; ?>
					
					<?php endwhile;?>
					</div>
				</div>
				<?php endif;?>


				<?php if( have_rows('column_2') ):?>
				<div class="cell">
					<div class="inner row-height">
					<?php while ( have_rows('column_2') ) : the_row();?>	
					
					<div class="top">
						<?php if( $heading = get_sub_field('heading') ):?>
						<h3><?php echo $heading;?></h3>
						<?php endif;?>
						
						<p><?php the_sub_field('copy');?></p>
					</div>
					
					<?php 
					$link = get_sub_field('link');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					<div class="link-wrap">
					    <a class="rm-link black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
					<?php endif; ?>
					
					<?php endwhile;?>
					</div>
				</div>
				<?php endif;?>
				
				<?php if( have_rows('column_3') ):?>
				<div class="cell">
					<div class="inner row-height">
					<?php while ( have_rows('column_3') ) : the_row();?>	
					
					<div class="top">
						<?php if( $heading = get_sub_field('heading') ):?>
						<h3><?php echo $heading;?></h3>
						<?php endif;?>
						
						<p><?php the_sub_field('copy');?></p>
					</div>
					
					<?php 
					$link = get_sub_field('link');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					<div class="link-wrap">
					    <a class="rm-link black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
					<?php endif; ?>
					
					<?php endwhile;?>
					</div>
				</div>
				<?php endif;?>
	
			</div>			
			
		</div>
	</div>
</section>