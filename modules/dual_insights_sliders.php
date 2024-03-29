<section class="dual-insights-sliders module" >
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="left-slider cell small-12 tablet-6">
				
				<?php if( have_rows('left_slider') ):?>
					<?php while ( have_rows('left_slider') ) : the_row();?>	
					
					<?php 
						$tax = get_sub_field('insight_taxonomy');
						$term_slug = $tax->slug;
						$term_ID = $tax->term_id;
						$term_name = $tax->name;
					;?>
					
					<div class="di-slider-left  di-slider-wrap tax-<?php echo $term_slug;?>">
						<h3><?php echo $term_name?> Insights</h3>
						
						<div class="divider cell"></div>
						
						<div class="di-slider">

							<?php 
							$args = array(  
						        'post_type' => 'insight',
						        'post_status' => 'publish',
						        'posts_per_page' => -1, 
						        'order' => 'DESC',
								'tax_query' => array(
							        array(
							            'taxonomy' => 'insight_type',
							            'field' => 'term_id',
							            'terms' => $term_ID,
							        )
							    )
						    );
			
						    $loop = new WP_Query( $args ); 
						        
						    $counter = 0;while ( $loop->have_posts() ) : $loop->the_post();
						    
			                       if ($counter % 2 == 0 && $counter != 0): ?>
			                      	</div>
			                      </div>
			                    <?php endif; ?>
			                    <?php if ($counter % 2 == 0 or $counter == 0): ?>
			                    <div>
						    
						    
						        <div class="di-card"> 
							        <?php endif; ?>
							        
								        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card horizontal'); ?> role="article">
									        
									        <div class="inner post-card-shadow">
										        
												<a class="permalink" href="<?php echo the_permalink();?>"></a>
									        
										        <div class="left" style="position: relative;">
											        <?php 
													$image = get_field('archive_card_image');
													if( !empty( $image ) ): ?>
														<div class="bg" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
													<?php endif; ?>
											        											        
										        </div>
										        
										        <div class="tax-icons">
											        
												<?php
											        $insight_terms = get_the_terms( $post->ID , 'insight_type' );
											        
											        foreach ($insight_terms as $term): 
													if ( $term->parent != 0 ):
													$link = get_term_link($term);
													$icon = get_field('icon', $term);								
										        ?>		
										        
										        	<a href="<?php echo $link;?>" class="icon">
											        	<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
										        	</a>
										        
										        <?php endif; endforeach; ?>										       
											        
										        </div>										  
										        
										        <div class="right">
											        <h3><?php the_title();?></h3>
											        
												    <div class="rm-link">Read More »</div>
											        
										        </div>
										        
									        </div>
									        
								        </article>
							        
									<?php $counter++; endwhile; ?>        
				                    </div>
							        
						        </div>
								
						    <?php wp_reset_postdata();?>
	
						</div>
						
						<div class="bottom grid-x grid-padding-x">
							
							<div class="btn-wrap cell shrink">
								<a href="/insights" class="button">View More Insights</a>
							</div>
						
							<div class="di-slider-nav-wrap cell shrink">
								
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
						$term_name = $tax->name;
					;?>
					
					<div class="di-slider-left  di-slider-wrap tax-<?php echo $term_slug;?>">
						<h3><?php echo $term_name?> Insights</h3>
						
						<div class="divider cell"></div>
						
						<div class="di-slider">

							<?php 
							$args = array(  
						        'post_type' => 'insight',
						        'post_status' => 'publish',
						        'posts_per_page' => -1, 
						        'order' => 'DESC',
								'tax_query' => array(
							        array(
							            'taxonomy' => 'insight_type',
							            'field' => 'term_id',
							            'terms' => $term_ID,
							        )
							    )
						    );
			
						    $loop = new WP_Query( $args ); 
						        
						    $counter = 0;while ( $loop->have_posts() ) : $loop->the_post();
						    
			                       if ($counter % 2 == 0 && $counter != 0): ?>
			                      	</div>
			                      </div>
			                    <?php endif; ?>
			                    <?php if ($counter % 2 == 0 or $counter == 0): ?>
			                    <div>
						    
						    
						        <div class="di-card"> 
							        <?php endif; ?>
							        
								        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card horizontal'); ?> role="article">

									        <div class="inner post-card-shadow">
										        
												<a class="permalink" href="<?php echo the_permalink();?>"></a>
									        
										        <div class="left" style="position: relative;">
											        <?php 
													$image = get_field('archive_card_image');
													if( !empty( $image ) ): ?>
														<div class="bg" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
													<?php endif; ?>
											        											        
										        </div>
										        
										        <div class="tax-icons">
											        
												<?php
											        $insight_terms = get_the_terms( $post->ID , 'insight_type' );
											        
											        foreach ($insight_terms as $term): 
													if ( $term->parent != 0 ):
													$link = get_term_link($term);
													$icon = get_field('icon', $term);								
										        ?>		
										        
										        	<a href="<?php echo $link;?>" class="icon">
											        	<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
										        	</a>
										        
										        <?php endif; endforeach; ?>										       
											        
										        </div>										  
										        
										        <div class="right">
											        <h3><?php the_title();?></h3>
												    <div class="rm-link">Read More »</div>
										        </div>
										        
									        </div>
									        
								        </article>
							        
									<?php $counter++; endwhile; ?>        
				                    </div>
							        
						        </div>
								
						    <?php wp_reset_postdata();?>
	
						</div>
						
						<div class="bottom grid-x grid-padding-x">
							
							<div class="btn-wrap cell shrink">
								<a href="/insights" class="button">View More Insights</a>
							</div>
						
							<div class="di-slider-nav-wrap cell shrink">
								
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