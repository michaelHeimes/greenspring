<?php 
	$tax = get_sub_field('insight_taxonomy');
	$term_slug = $tax->slug;
	$term_ID = $tax->term_id;
	$term_name = $tax->name;
	$term_link = get_term_link( $term_ID );
;?>

<section class="insight-grid module">
	<div class="grid-container">
		<div class="card-grid grid-x grid-padding-x" data-equalizer data-equalize-on="medium">

			<?php 
			$args = array(  
		        'post_type' => 'insight',
		        'post_status' => 'publish',
		        'posts_per_page' => 9, 
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
		        
		    while ( $loop->have_posts() ) : $loop->the_post();
		    
				get_template_part('parts/loop', 'post-card');

		    endwhile; wp_reset_postdata();?>
			
		</div>
		
		<div class="grid-x grid-padding-x">
			<div class="cell text-center">
				<a class="button outline" aria-label="<?php echo $term_name; ?> Archive Link" href="<?php echo $term_link;?>">
					View More Insights
				</a>				
			</div>
		</div>
		
	</div>
</section>