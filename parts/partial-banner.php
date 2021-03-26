<?php
// get object for archives
$archive_object = get_queried_object();

// get background image for CPT Archive from the page with the matching slug
$cpt_slug = $archive_object->name;
$post_type_object = get_post_type_object($cpt_slug);
$rewrite_slug  = $post_type_object->rewrite['slug'];
$source_page = get_page_by_path($rewrite_slug);
$source_page_id = $source_page->ID;
$source_page_bg_img = get_field('background_image', $source_page_id);

// get background image for Custom Tax Archive from the page with the matching slug
$tax_post_type = get_taxonomy( $archive_object->taxonomy )->object_type[0];
$tax_cpt_object = get_queried_object($tax_post_type);


var_dump($tax_cpt_object);


?>

<div class="page-banner">
	<?php if (is_archive()):?>
		<div class="bg" style="background-image: url(<?php echo $source_page_bg_img;?>);"></div>
	<?php else:?>
		<div class="bg" style="background-image: url(<?php the_field('background_image');?>);"></div>
	<?php endif;?>
	
	<div class="mask"></div>
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
				
			<?php if( is_archive() ):
				$post_type = get_post_type();
				$post_type_object = get_post_type_object($post_type);
				?>
				<div class="cell">
					<h1><?php echo $post_type_object->label ?></h1>
				</div>
				
				
			<?php elseif ( is_page_template('page-templates/page-insights.php') ):?>
			
				<div class="cell small-12 xlarge-3">
					<h1><?php the_title();?></h1>
				</div>
				
				<div class="cell small-12 xlarge-9">
					<?php if( have_rows('types') ):?>
					<nav>
						<ul class="menu jump-links" data-smooth-scroll data-offset="100" data-animation-easing="swing">
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
						
							<li class="jump-link-wrap <?php echo $term_slug;?>">
								<a class="button" href="#<?php echo $term_slug;?>"><?php echo $term_name;?></a>
							</li>
						
				    	<?php endwhile;?>
						</ul>
					</nav>
				    <?php endif;?>	
				</div>					
				
			<?php else:?>
			
				<div class="cell">

				<?php if( $alternative_title = get_field('alternative_title') ):?>
					<h1><?php echo $alternative_title;?></h1>
				<?php else:?>
					<h1><?php the_title();?></h1>
				<?php endif;?>
			
				</div>

								
			<?php endif;?>
				
			<?php if( is_singular('team_member') ):?>
				<div class="cell">
					<nav aria-label="You are here:" role="navigation">
						<ul class="breadcrumbs">
							<li><a href="/about/">About</a></li>
							<li><a href="/about/team/">Team</a></li>
							<li class="underlined">
								<?php the_title();?>
							</li>
						</ul>
					</nav>	
				</div>									
			<?php endif;?>

		</div>
	</div>
	
</div>