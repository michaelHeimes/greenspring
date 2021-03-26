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
				    
				    <?php if( get_post_type(get_the_ID()) == 'team_member'):?>
				    
					    <div class="post-filter filter-buttons tax-buttons grid-x grid-padding-x">
						    
					    	<?php
								$args = array(
									'taxonomy' => 'team_member_type',
									'hide_empty' => true
								);
								$terms = get_terms($args);
								$default_term_slug = 'all'; // featured
							?>
							
							<?php foreach ($terms as $term): ?>
							<div class="cell shrink">
								
								<button class="button small filter-btn" id="filter-<?php echo $term->slug; ?>" data-tax="type" data-term="<?php echo $term->slug; ?>" <?php echo ($term->slug == $default_term_slug ? 'selected="selected"' : ''); ?>>
									<span class="cat"><?php echo $term->name; ?></span>								
								</button>
								
							</div>
							<?php endforeach; ?>
						    
					    </div>
				    
				    <?php endif;?>
				    
				    <?php if( get_post_type(get_the_ID()) != 'team_member'):?>
				    
				    <div class="header grid-x grid-margin-x">
					    <div class="cell">
						    <h2>
							    <?php if ( is_archive('news_post') && !is_tax() ):?>
								    <span>Greenspring</span>
								    
								<?php elseif ( is_tax() ):?>
								    <span><?php echo $archive_object->name;?></span>
							    <?php else:?>
							    	<span><?php echo $archive_object->name;?></span>
							    <?php endif;?>
							    <span><?php echo $post_type_object->label;?></span>
						    </h2>
					    </div>
					    <div class=" cell divider"></div>
				    </div>
				    
				    <?php endif;?>
			    	
					<div class="card-grid grid-x grid-padding-x" data-equalizer data-equalize-on="medium">
			
				    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					 
							<!-- To see additional archive styles, visit the /parts directory -->
							<?php get_template_part('parts/loop', 'post-card'); ?>
						    
						<?php endwhile; ?>	
							
							<div class="cell text-center">
								<?php joints_page_navi(); ?>
							</div>
							
						<?php else : ?>
													
							<?php get_template_part( 'parts/content', 'missing' ); ?>
								
						<?php endif; ?>
						
					</div>
					
			    </div>
		
			</main> <!-- end #main -->
		    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>