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
				
		    <?php if( have_rows('two_cta_boxes', $parent_ID) ):?>
		    
			    <section class="module two-cta-boxes">
				    <div class="grid-container">
					    <div class="grid-x grid-padding-x small-up-1 medium-up-2">
						    
			    	<?php while ( have_rows('two_cta_boxes', $parent_ID) ) : the_row();?>	
			    	
			    	<?php if( have_rows('left_box') ):?>
			    	<div class="cell">
				    	<div class="inner row-height">
			    		<?php while ( have_rows('left_box') ) : the_row();?>
			    		
			    		<div class="top">
			    		
				    		<h2><?php the_sub_field('heading');?></h2>	
				    	
							<p><?php the_sub_field('copy');?></p>
							
			    		</div>
			    		
						<?php 
						$link = get_sub_field('button_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div>
						    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>
			    	
			    		<?php endwhile;?>
				    	</div>
			    	</div>
			    	<?php endif;?>
		
			    	<?php if( have_rows('right_box') ):?>
			    	<div class="cell">
				    	<div class="inner">
			    		<?php while ( have_rows('right_box') ) : the_row();?>
			    		
			    		<div class="top">
			    		
				    		<h2><?php the_sub_field('heading');?></h2>	
				    	
							<p><?php the_sub_field('copy');?></p>
							
			    		</div>
			    		
						<?php 
						$link = get_sub_field('button_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div>
						    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>
			    	
			    		<?php endwhile;?>
				    	</div>
			    	</div>
			    	<?php endif;?>
		
			    
			    	<?php endwhile;?>
			    	
					    </div>
				    </div>
			    </section>
			    
			    <section class="module">
				    <div class="grid-container">
					    <div class="grid-x grid-margin-x">
							<div class=" cell divider"></div>
					    </div>
				    </div>
				</section>
			    
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
						    
							<div class="cell shrink hi">
								<a class="button small small-caps<?php if ($post_slug == $post_link_slug ):?> current-tax<?php endif;?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</div>
											
						    <?php endwhile; ?>
						
						<?php endif; wp_reset_postdata(); ?>						
						    
					    </div>
				    </div>
			    </section>
		    
		    <?php endif;?>
		    
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
							<div class="cell shrink">
								<a class="button small small-caps" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</div>
											
						    <?php endwhile; ?>
											    
					    </div>
				    </div>
			    </section>
			    
				<?php endif; wp_reset_postdata(); ?>						
	
	
						    
		    <?php get_template_part( 'parts/loop', 'modules' ); ?>
		    
		</section> <!-- end article section -->
							
	</article> <!-- end article -->
			
			
<?php endif;?>
