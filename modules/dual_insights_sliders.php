<section class="dual-insights-sliders module" data-equalizer data-equalize-on="small" data-equalize-on-stack="true">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="left-slider cell small-12 tablet-6">
				
				<?php if( have_rows('left_slider') ):?>
					<?php while ( have_rows('left_slider') ) : the_row();?>	
					
					<?php 
						$tax = get_sub_field('insight_taxonomy');
						$term_slug = $tax->slug;
						$term_ID = $tax->term_id;
					;?>
					
					<div class="di-slider-left  di-slider-wrap tax-<?php echo $term_slug;?>">
						<h3><?php the_sub_field('heading');?></h3>
						
						<div class="di-slider">

							<?php 
							$args = array(  
						        'post_type' => 'insight',
						        'post_status' => 'publish',
						        'posts_per_page' => -1, 
						        'order' => 'ASC',
								'tax_query' => array(
							        array(
							            'taxonomy' => 'insight_type',
							            'field' => 'term_id',
							            'terms' => $term_ID,
							        )
							    )
						    );
			
						    $loop = new WP_Query( $args ); 
						        
						    while ( $loop->have_posts() ) : $loop->the_post();?>
						    
						        <div class="di-card"> 
							        <div class="inner" data-equalizer-watch>
								        
								        <div class="left">
									        <?php 
											$image = get_field('archive_card_image');
											if( !empty( $image ) ): ?>
												<div class="bg" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
											<?php endif; ?>
									        
									        <div class="tax-icons">
										        
									        </div>
									        
								        </div>
								        
								        <div class="right">
									        <h3><?php the_title();?></h3>
									        
									        <div>
										        <a class="rm-link" href="<?php echo the_permalink();?>">Read More</a>
									        </div>
									        
								        </div>
								        
							        </div>
						        </div>
								
						    <?php endwhile;
						
						    wp_reset_postdata(); 
						    ?>
	
						</div>
						
						<div class="bottom grid-x grid-padding-x">
							
							<div class="btn-wrap cell shrink">
								<a href="#" class="button">View More Insights</a>
							</div>
						
							<div class="di-slider-nav-wrap cell auto">
								
								<button type="button" class="button-next">
									<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
									  <g id="Group_505" data-name="Group 505" transform="translate(-616 -1169)">
									    <g id="Ellipse_35" data-name="Ellipse 35" transform="translate(655 1208) rotate(180)" fill="none" stroke="#6c6c6c" stroke-width="1.5">
									      <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
									      <circle cx="19.5" cy="19.5" r="18.75" fill="none"/>
									    </g>
									    <g id="Group_124" data-name="Group 124" transform="translate(3196.217 -378.835) rotate(90)">
									      <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
									        <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
									          <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#6c6c6c" stroke-miterlimit="10" stroke-width="1.5"/>
									        </g>
									        <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#6c6c6c" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
									      </g>
									    </g>
									  </g>
									</svg>
								</button>
								
								<button type="button" class="button-prev">
									<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
									  <g id="Group_505" data-name="Group 505" transform="translate(-673 -1169)">
									    <g id="Ellipse_34" data-name="Ellipse 34" transform="translate(673 1169)" fill="none" stroke="#6c6c6c" stroke-width="1.5">
									      <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
									      <circle cx="19.5" cy="19.5" r="18.75" fill="none"/>
									    </g>
									    <g id="Group_123" data-name="Group 123" transform="translate(-1868.217 2755.834) rotate(-90)">
									      <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
									        <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
									          <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#6c6c6c" stroke-miterlimit="10" stroke-width="1.5"/>
									        </g>
									        <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#6c6c6c" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
									      </g>
									    </g>
									  </g>
									</svg>
								</button>
								
							</div>
							
						</div>
						
					</div>
					<?php endwhile;?>
				<?php endif;?>
						
			</div>


			<div class="right-slider cell small-12 tablet-6">
				
				<?php if( have_rows('right_slider') ):?>
					<?php while ( have_rows('right_slider') ) : the_row();?>	
					
					<?php 
						$tax = get_sub_field('insight_taxonomy');
						$term_slug = $tax->slug;
						$term_ID = $tax->term_id;
					;?>
					
					<div class="di-slider-right di-slider-wrap tax-<?php echo $term_slug;?>">
						<h3><?php the_sub_field('heading');?></h3>
						
						<div class="di-slider">

							<?php 
							$args = array(  
						        'post_type' => 'insight',
						        'post_status' => 'publish',
						        'posts_per_page' => -1, 
						        'order' => 'ASC',
								'tax_query' => array(
							        array(
							            'taxonomy' => 'insight_type',
							            'field' => 'term_id',
							            'terms' => $term_ID,
							        )
							    )
						    );
			
						    $loop = new WP_Query( $args ); 
						        
						    while ( $loop->have_posts() ) : $loop->the_post();?>
						    
						        <div class="di-card"> 
							        <div class="inner" data-equalizer-watch>
								        
								        <div class="left">
									        <?php 
											$image = get_field('archive_card_image');
											if( !empty( $image ) ): ?>
												<div class="bg" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
											<?php endif; ?>
									        
									        <div class="tax-icons">
										        
									        </div>
									        
								        </div>
								        
								        <div class="right">
									        <h3><?php the_title();?></h3>
									        
									        <div>
										        <a class="rm-link" href="<?php echo the_permalink();?>">Read More</a>
									        </div>
									        
								        </div>
								        
							        </div>
						        </div>
								
						    <?php endwhile;
						
						    wp_reset_postdata(); 
						    ?>
	
						</div>
						
						<div class="bottom grid-x grid-padding-x">
							
							<div class="btn-wrap cell shrink">
								<a href="#" class="button">View More Insights</a>
							</div>
						
							<div class="di-slider-nav-wrap cell auto">
								
								<button type="button" class="button-next">
									<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
									  <g id="Group_505" data-name="Group 505" transform="translate(-616 -1169)">
									    <g id="Ellipse_35" data-name="Ellipse 35" transform="translate(655 1208) rotate(180)" fill="none" stroke="#6c6c6c" stroke-width="1.5">
									      <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
									      <circle cx="19.5" cy="19.5" r="18.75" fill="none"/>
									    </g>
									    <g id="Group_124" data-name="Group 124" transform="translate(3196.217 -378.835) rotate(90)">
									      <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
									        <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
									          <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#6c6c6c" stroke-miterlimit="10" stroke-width="1.5"/>
									        </g>
									        <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#6c6c6c" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
									      </g>
									    </g>
									  </g>
									</svg>
								</button>
								
								<button type="button" class="button-prev">
									<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
									  <g id="Group_505" data-name="Group 505" transform="translate(-673 -1169)">
									    <g id="Ellipse_34" data-name="Ellipse 34" transform="translate(673 1169)" fill="none" stroke="#6c6c6c" stroke-width="1.5">
									      <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
									      <circle cx="19.5" cy="19.5" r="18.75" fill="none"/>
									    </g>
									    <g id="Group_123" data-name="Group 123" transform="translate(-1868.217 2755.834) rotate(-90)">
									      <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
									        <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
									          <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#6c6c6c" stroke-miterlimit="10" stroke-width="1.5"/>
									        </g>
									        <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#6c6c6c" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
									      </g>
									    </g>
									  </g>
									</svg>
								</button>
								
							</div>
							
						</div>
						
					</div>
					<?php endwhile;?>
				<?php endif;?>
						
			</div>



			<div class="cell small-12 tablet-6">
				<?php the_sub_field('editor');?>			
			</div>
					
		</div>
	</div>
</section>