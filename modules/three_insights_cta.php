<?php 
	$tax = get_sub_field('insight_taxonomy');
;?>
				
<section class="three-insights-cta module tax-<?php echo $term_slug;?>">
	<div class="grid-container">

		<div class="header grid-x grid-margin-x">
			
			<div class="cell small-12 medium-auto">
				
				<?php if ($heading = get_sub_field('heading')):?>

					<h2><?php echo $heading; ?></h2>
				
				<?php else:?>
				
					<h2>Insights</h2>
				
				<?php endif;?>
				
			</div>
			
			<div class="btn-wrap cell shrink">
				<a href="/insights" class="button">
					<?php if( $btn_text = get_sub_field('link_button_text') ):?>
					
						<?php echo $btn_text;?>
					
					<?php else:?>
						View More Insights
					<?php endif;?>
				</a>
			</div>
			
			<div class="divider cell"></div>
		
		</div>				
				
		<div class="card-grid grid-x grid-padding-x" data-equalizer data-equalize-on="medium">
			

			<?php 
			if ($tax) {
			  if (!is_array($tax)) {
			    $tax = array($tax);
			    var_dump($tax);
			  }
			}
				
				
			$args = array(  
		        'post_type' => 'insight',
		        'post_status' => 'publish',
		        'posts_per_page' => 3, 
		        'order' => 'DESC',
				'tax_query' => array(
			        array(
			            'taxonomy' => 'insight_type',
			            'field' => 'term_id',
			            'terms' => $tax,
			        )
			    )
		    );

		    $loop = new WP_Query( $args ); 
		        
		    while ( $loop->have_posts() ) : $loop->the_post();
		    
				get_template_part('parts/loop', 'post-card');

		    endwhile; wp_reset_postdata();
		    
		    ?>
			
		</div>
	</div>
</section>