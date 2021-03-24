<?php 
	$tax = get_sub_field('insight_taxonomy');
	$term_slug = $tax->slug;
	$term_ID = $tax->term_id;
	$term_name = $tax->name;	
;?>
				
<section class="three-insights-cta module tax-<?php echo $term_slug;?>">
	<div class="grid-container">

		<div class="header grid-x grid-margin-x">
			
			<div class="cell small-12 medium-auto">
				<h2><?php echo $term_name?> Insights</h2>
			</div>
			
			<div class="btn-wrap cell shrink">
				<a href="#" class="button">View More Insights</a>
			</div>
			
			<div class="divider cell"></div>
		
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
	</div>
</section>