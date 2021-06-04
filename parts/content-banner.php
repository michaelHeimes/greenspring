<div class="page-banner">
	<?php if (is_post_type_archive('news_post')):?>
		<div class="bg" style="background-image: url(<?php the_field('news_archive_banner_image', 'option');?>);"></div>
	<?php elseif (is_post_type_archive('team_member')):?>
		<div class="bg" style="background-image: url(<?php the_field('team_archive_banner_image', 'option');?>);"></div>
	<?php else:?>
		<div class="bg" style="background-image: url(<?php the_field('background_image');?>);"></div>
	<?php endif;?>
		
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
				
			<?php if( is_archive() ):
				$post_type = get_post_type();
				$post_type_object = get_post_type_object($post_type);
				?>
				
				<?php if (is_post_type_archive('team_member')):?>
								
					<?php if( $alternative_title = get_field('team_archive_heading', 'option') ):?>
						<h1><?php echo $alternative_title;?></h1>
					<?php else:?>
						<h1><?php echo $post_type_object->label ?></h1>
					<?php endif;?>
										
				<?php elseif (is_post_type_archive('news_post')):?>
				
					<?php if( $alternative_title = get_field('news_archive_heading', 'option') ):?>
						<h1><?php echo $alternative_title;?></h1>
					<?php else:?>
						<h1><?php echo $post_type_object->label ?></h1>
					<?php endif;?>
					
				<?php endif;?>
				
			<?php elseif( is_404() ):?>
				<div class="cell small-12">
					<h1><?php _e( '404 - Not Found', 'jointswp' ); ?></h1>			
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
			
			<?php if ( is_page() && $post->post_parent ):
				global $post;
			?>
				<div class="cell">
					<nav aria-label="You are here:" role="navigation">
						<ul class="breadcrumbs">
							<li><a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php echo get_the_title( $post->post_parent ); ?></a></li>
							<li class="underlined">
								<?php the_title();?>
							</li>
						</ul>
					</nav>	
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