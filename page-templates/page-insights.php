<?php 
/**
 * Template Name: Insights Page
 *
 * This is the template that displays all pages by default.
 */ 
get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>		
			    
			    <?php if( have_rows('types') ):?>
			    	<?php while ( have_rows('types') ) : the_row();?>
			    	
			    	<?php 
				    	$tax = get_sub_field('insight_taxonomy');
						$term_slug = $tax[0]->slug;
						$term_ID = $tax[0]->term_id;
						$term_name = $tax[0]->name;	
						$term_link = get_term_link( $term_ID );
				    	$insight_terms = get_terms( array(
						    'taxonomy' => 'insight_type',
						    'hide_empty' => false,
						    'parent' => $term_ID,
						) );
					?>
					
					<div class="tax-row grid-container <?php echo $term_slug;?>">
					
						<div class="row-header tax-buttons grid-x grid-padding-x">
							
							<div class="cell">
								<h2><?php echo $term_name?> Insights</h2>
							</div>
															
							<?php foreach ($insight_terms as $term): 
								if ( $term->parent != 0 ):
								$link = get_term_link($term);
								$icon = get_field('icon', $term);
							?> 
							<div class="cell shrink">
								<a class="button small" aria-label="<?php echo $term->name; ?> Archive Link" href="<?php echo $link;?>">
									<div class="icon-wrap">
										<?php
										if( !empty( $icon ) ): ?>
										    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
										<?php endif; ?>
									</div>
									<span class="theme-name"><?php echo $term->name; ?></span>
								</a>
							</div>
							<?php endif; endforeach; ?>	

						</div>

						<div class="grid-x grid-padding-x">
							<div class="cell"><div class="divider"></div></div>
						</div>	
				    	
						<div class="card-grid grid-x grid-padding-x" data-equalizer data-equalize-on="medium">
							
							<?php 
							$args = array(  
						        'post_type' => 'insight',
						        'post_status' => 'publish',
						        'posts_per_page' => 3, 
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
						        
						    while ( $loop->have_posts() ) : $loop->the_post();
						    
								get_template_part('parts/loop', 'post-card');
				
						    endwhile; wp_reset_postdata();?>
					    
						</div>	
						
						<div class="grid-x grid-padding-x">
							<div class="cell text-center">
								<a class="button outline" aria-label="<?php echo $term_name; ?> Archive Link" href="<?php echo $term_link;?>">
									View More <?php echo $term_name;?> Insights
								</a>				
							</div>
						</div>				
						
					</div>			    		
			    
			    	<?php endwhile;?>
			    <?php endif;?>					
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>