<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); 
$archive_object = get_queried_object();
$post_type = get_post_type();
$post_type_object = get_post_type_object($post_type);
?>
			
	<div class="content">
			
		<div class="inner-content">
		
		    <main class="main" role="main">
			    <div class="grid-container">
				    
				    <div class="header grid-x grid-margin-x">
					    <div class="cell">
						    <h3>
							    <span><?php echo $archive_object->name;?></span>
							    <span><?php echo $post_type_object->label;?></span>
						    </h3>
					    </div>
					    <div class=" cell divider"></div>
				    </div>
			    	
					<div class="card-grid grid-x grid-padding-x small-up-1 medium-up-3 tablet-up-3" data-equalizer data-equalize-on="medium">
			
				    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					 
							<!-- To see additional archive styles, visit the /parts directory -->
							<?php get_template_part('parts/loop', 'post-card'); ?>
						    
						<?php endwhile; ?>	
		
							<?php joints_page_navi(); ?>
							
						<?php else : ?>
													
							<?php get_template_part( 'parts/content', 'missing' ); ?>
								
						<?php endif; ?>
						
					</div>
					
			    </div>
		
			</main> <!-- end #main -->
		    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>