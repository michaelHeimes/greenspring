<?php 
	$tax = get_sub_field('type_to_show');
	$term_slug = $tax->slug;
	$term_ID = $tax->term_id;
	$term_name = $tax->name;
	$term_link = get_term_link( $term_ID );
?>

<section class="team-module module<?php if(get_sub_field('remove_top_padding')):?> no-top-padding<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bottom-padding<?php endif;?> <?php echo $term_slug;?>">
	<div class="color-bg">
		
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell">
					<h2 class="text-center"><?php the_sub_field('heading');?></h2>
				</div>
			</div>
			
			<div class="divider"></div>
			
			<div class="card-grid grid-x grid-padding-x small-up-2 medium-up-3 tablet-up-3" data-equalizer data-equalize-on="medium">
	
				<?php 
				$args = array(  
			        'post_type' => 'team_member',
			        'post_status' => 'publish',
			        'posts_per_page' => 999, 
					'tax_query' => array(
				        array(
				            'taxonomy' => 'team_member_type',
				            'field' => 'term_id',
				            'terms' => $term_ID,
				        )
				    ),
				    
					'orderby' => 'meta_value',
					'order' => 'ASC',
					'meta_key' => 'last_name',
					'meta_compare' => 'EXISTS',
						

				    
			    );
	
			    $loop = new WP_Query( $args ); 
			        
			    while ( $loop->have_posts() ) : $loop->the_post();
			    
					get_template_part('parts/loop', 'team-module-card');
	
			    endwhile; wp_reset_postdata();?>
				
			</div>
			
		</div>
		
	</div>
</section>