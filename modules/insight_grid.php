<?php 
	$tax = get_sub_field('insight_taxonomy');
	$term_slug = $tax->slug;
	$term_ID = $tax->term_id;
	$term_name = $tax->name;
;?>

<section class="insight-grid module">
	<div class="grid-container">
		<div class="card-grid grid-x grid-padding-x small-up-1 medium-up-3 tablet-up-3" data-equalizer data-equalize-on="medium">

			<?php 
			$args = array(  
		        'post_type' => 'insight',
		        'post_status' => 'publish',
		        'posts_per_page' => 9, 
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