<section class="slider module color-<?php the_sub_field('color_theme');?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
		
			<div class="left cell small-12 medium-6">
				<div class="inner">
					<div class="bg-box"></div>
					<div class="img-slider slider-module">
					<?php if( have_rows('slides') ):?>
						<?php while ( have_rows('slides') ) : the_row();?>
						
						<?php if( have_rows('single_slide') ):?>
							<?php while ( have_rows('single_slide') ) : the_row();?>	
							
								<?php 
								$image = get_sub_field('image');
								if( !empty( $image ) ): ?>
								<div class="img-wrap">
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif; ?>
						
							<?php endwhile;?>
						<?php endif;?>
					
						<?php endwhile;?>
					<?php endif;?>
					</div>
					
					<div class="slider-nav">
						<button class="sm-slide-prev" type="button">
							<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
							  <g id="Group_509" data-name="Group 509" transform="translate(-616 -1169)">
							    <g id="Ellipse_35" data-name="Ellipse 35" transform="translate(655 1208) rotate(180)" fill="none" stroke="#6aaa37" stroke-width="1.5">
							      <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
							      <circle cx="19.5" cy="19.5" r="18.75" fill="none"/>
							    </g>
							    <g id="Group_124" data-name="Group 124" transform="translate(2202.964 3748.288) rotate(180)">
							      <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
							        <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
							          <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#6aaa37" stroke-miterlimit="10" stroke-width="1.5"/>
							        </g>
							        <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#6aaa37" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
							      </g>
							    </g>
							  </g>
							</svg>
						</button>
						<button class="sm-slide-next" type="button">
							<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
							  <g id="Group_508" data-name="Group 508" transform="translate(-673 -1169)">
							    <g id="Group_507" data-name="Group 507">
							      <g id="Group_505" data-name="Group 505">
							        <g id="Ellipse_34" data-name="Ellipse 34" transform="translate(673 1169)" fill="#6aaa37" stroke="#6aaa37" stroke-width="1.5">
							          <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
							          <circle cx="19.5" cy="19.5" r="18.75" fill="none"/>
							        </g>
							      </g>
							    </g>
							    <g id="Group_123" data-name="Group 123" transform="translate(-874.964 -1371.288)">
							      <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
							        <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
							          <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/>
							        </g>
							        <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
							      </g>
							    </g>
							  </g>
							</svg>
						</button>
					</div>
					
				</div>
			</div>

			<div class="right cell small-12 medium-6 tablet-5 tablet-offset-1">
				<div class="inner">
				
					<div class="text-slider slider-module">
					<?php if( have_rows('slides') ):?>
						<?php while ( have_rows('slides') ) : the_row();?>
						
						<?php $slide_number = str_pad(strval(get_row_index()), 2, '0', STR_PAD_LEFT);?>
						
						<?php if( have_rows('single_slide') ):?>
							<?php while ( have_rows('single_slide') ) : the_row();?>	
							
								<div class="text-wrap">
									<div class="slide-number"><?php echo $slide_number;?></div>
									<h2><?php the_sub_field('heading');?></h2>
									<p><?php the_sub_field('text');?></p>
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
									<?php endif;?>
								</div>
						
							<?php endwhile;?>
						<?php endif;?>
					
						<?php endwhile;?>
					<?php endif;?>
					</div>

				
				</div>
			</div>
		
		</div>
	</div>
</section>