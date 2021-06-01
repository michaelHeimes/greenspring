<?php
/**
 * Template part for displaying page content in page.php
 */
global $post;
$parent_ID = $post->post_parent;
$post_slug = $post->post_name;

$post_data = get_post($post->post_parent);
$parent_post_slug = $post_data->post_name;
$parent_color_theme = get_field('color_theme', $parent_ID);
?>
	    
<?php if ( is_page() && $post->post_parent ):?>
<!-- 	Child Pages -->
	<article id="post-<?php the_ID(); ?>" <?php post_class($parent_post_slug); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
												
		<section class="entry-content" itemprop="text">
		    <?php the_content(); ?>
							    
			    <section class="child-links">
				    <div class="grid-container">
					    <div class="grid-x grid-margin-x">
	
						<?php
						
						$args = array(
						    'post_type'      => 'page',
						    'posts_per_page' => -1,
						    'post_parent'    => $parent_ID,
						    'order'          => 'ASC',
						    'orderby'        => 'menu_order',
							'meta_query' => array(
						        array(
						            'key'   => 'remove_from_on-page_navigation',
						            'value' => '1',
						            'compare' => '!='
						        )
						    )
						 );
						
						
						$parent = new WP_Query( $args );
						
						if ( $parent->have_posts() ) : ?>
						
						    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
						    
						    
						    <?php $post_link_slug = $post->post_name;?>
						    
						    <?php if(!get_field('remove_from_on-page_navigation')):?>
								<div class="cell shrink hi">
									<a class="button small small-caps<?php if ($post_slug == $post_link_slug ):?> current-tax<?php endif;?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</div>
							<?php endif;?>
											
						    <?php endwhile; ?>
						
						<?php endif; wp_reset_postdata(); ?>						
						    
					    </div>
				    </div>
			    </section>
		    
		    
		    <?php get_template_part( 'parts/loop', 'modules' ); ?>
			
		</section> <!-- end article section -->
							
	</article> <!-- end article -->
			
<?php else:?>
		
	<article id="post-<?php the_ID(); ?>" <?php post_class($post_slug); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
												
		<section class="entry-content" itemprop="text">
		    <?php the_content(); ?>

				<?php				
	
				if ($post->post_parent == 0) {
	
					$args = array(
					    'post_type'      => 'page',
					    'posts_per_page' => -1,
					    'post_parent'    => $post->ID,
					    'order'          => 'ASC',
					    'orderby'        => 'menu_order',
					);
					
					} else {
					
					$args = array(
					    'post_type'      => 'page',
					    'posts_per_page' => -1,
					    'post_parent'    => $post->ID,
					    'order'          => 'ASC',
					    'orderby'        => 'menu_order',
					    'meta_query' => array(
					        array(
					            'key'   => 'remove_from_on-page_navigation',
					            'value' => '1',
					            'compare' => '!='
					        )
					    )
					);
				
				}
				
				$parent = new WP_Query( $args );
				
				if ( $parent->have_posts() ) : ?>
			    
			    <section class="child-links module">
				    <div class="grid-container">
					    <div class="grid-x grid-margin-x">
	
						    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
						    <?php if(!get_field('remove_from_on-page_navigation')):?>
								<div class="cell shrink">
									<a class="button small small-caps" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</div>
							<?php endif;?>
											
						    <?php endwhile; ?>
						    
						    
						    <?php if ( is_page(41) ):?>
								<div class="cell shrink">
									<a class="button small small-caps" href="/about/team" title="<?php the_title(); ?>">Team</a>
								</div>
								<div class="cell shrink">
									<a class="button small small-caps" href="/about/news" title="<?php the_title(); ?>">News</a>
								</div>
							<?php endif;?>
											    
					    </div>
				    </div>
			    </section>
			    
				<?php endif; wp_reset_postdata(); ?>						
	
	
						    
		    <?php get_template_part( 'parts/loop', 'modules' ); ?>
		    
		</section> <!-- end article section -->
							
	</article> <!-- end article -->
			
			
<?php endif;?>
