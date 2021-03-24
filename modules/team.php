<?php 
	$tax = get_sub_field('type_to_show');
	$term_slug = $tax->slug;
	$term_ID = $tax->term_id;
	$term_name = $tax->name;
	$term_link = get_term_link( $term_ID );
;?>

<section class="team-module module">
	<div class="color-bg">
		
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<h2 class="text-center"><?php the_sub_field('heading');?></h2>
			</div>
			
			<div class="card-grid grid-x grid-padding-x small-up-1 medium-up-3 tablet-up-3" data-equalizer data-equalize-on="medium">
	
				<?php 
				$args = array(  
			        'post_type' => 'team_member',
			        'post_status' => 'publish',
			        'posts_per_page' => 9, 
			        'order' => 'ASC',
					'tax_query' => array(
				        array(
				            'taxonomy' => 'team_member_type',
				            'field' => 'term_id',
				            'terms' => $term_ID,
				        )
				    )
			    );
	
			    $loop = new WP_Query( $args ); 
			        
			    while ( $loop->have_posts() ) : $loop->the_post();
			    
					get_template_part('parts/loop', 'team-module-card');
	
			    endwhile; wp_reset_postdata();?>
				
			</div>
			
		</div>
		
	</div>
</section>