<?php
/**
 * Template part for displaying a single post
 */
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1 xlarge-8 xlarge-offset-2">
							
				<header class="article-header">				
					
					<?php if( is_singular('insight') || is_singular('news_post')):?>
						<?php 
						$image = get_field('archive_card_image');
						if( !empty( $image ) ): ?>
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<?php endif; ?>		
					
					<?php if ( is_singular('insight') ):?>
						<?php get_template_part( 'parts/insight-content', 'byline' ); ?>
					<?php endif;?>

					<?php if ( is_singular('news_post') ):?>
						<?php get_template_part( 'parts/content', 'news-byline' ); ?>
					<?php endif;?>
			
					<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
					
				</header> <!-- end article header -->
					
			    <section class="entry-content" itemprop="text">
			<!-- 		<?php the_post_thumbnail('full'); ?> -->
					<?php get_template_part( 'parts/loop', 'modules' ); ?>
				</section> <!-- end article section -->
				
				<footer class="article-footer cell">
					<div class="grid-x grid-padding-x">
						<div class="left cell small-12 medium-6">
						<?php
						$authors = get_field('author');
						if( $authors ): ?>
						    <?php foreach( $authors as $author ): 
						        $permalink = get_permalink( $author->ID );
						        $name = get_the_title( $author->ID );
						        $title = get_field('title', $author->ID );
						        $image = get_field('photo', $author->ID );
					        ?>
						        
						    <div class="grid-x grid-padding-x align-middle">
								<div class="img-wrap cell shrink">
									<div>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
								</div>
								
						        <div class="cell auto">
							        <h3><a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $name ); ?></a></h3>
							        <div class="title"><?php echo $title;?></div>
						        </div>
						    </div>
						    <?php endforeach; ?>
						<?php endif; ?>
						</div>
						
						<div class="right cell small-12 medium-6">
							<div class="grid-x grid-padding-x align-middle">
								<div class="cell share-label small-caps shrink">Share This Post</div>
								
								<div class="cell shrink">
								
									<div class="social-links a2a_kit a2a_default_style">
									
										<div><a class="a2a_button_facebook" href="#">

											<svg xmlns="http://www.w3.org/2000/svg" width="6.185" height="12.369" viewBox="0 0 6.185 12.369">
											  <path id="Path_8" data-name="Path 8" d="M137.045,2.054h1.129V.087A14.584,14.584,0,0,0,136.529,0a2.611,2.611,0,0,0-2.743,2.906V4.638h-1.8v2.2h1.8v5.532h2.2V6.837h1.724l.274-2.2h-2V3.124c0-.635.172-1.07,1.057-1.07Z" transform="translate(-131.989)" fill="#41474f"/>
											</svg>

										</a></div>
																				
										<div><a class="a2a_button_twitter" href="#">
											<svg xmlns="http://www.w3.org/2000/svg" width="13.169" height="10.7" viewBox="0 0 13.169 10.7">
											  <g id="Group_10" data-name="Group 10" transform="translate(0 0)">
											    <g id="Group_37" data-name="Group 37" transform="translate(0 0)">
											      <path id="Path_131" data-name="Path 131" d="M13.169,49.267a5.629,5.629,0,0,1-1.556.426A2.685,2.685,0,0,0,12.8,48.2a5.4,5.4,0,0,1-1.712.654A2.7,2.7,0,0,0,6.419,50.7a2.78,2.78,0,0,0,.063.616A7.642,7.642,0,0,1,.917,48.492a2.7,2.7,0,0,0,.83,3.608,2.666,2.666,0,0,1-1.22-.333v.03A2.712,2.712,0,0,0,2.69,54.45a2.7,2.7,0,0,1-.708.089,2.387,2.387,0,0,1-.511-.046,2.726,2.726,0,0,0,2.523,1.881A5.425,5.425,0,0,1,.646,57.526,5.056,5.056,0,0,1,0,57.488,7.6,7.6,0,0,0,4.142,58.7a7.631,7.631,0,0,0,7.684-7.683c0-.119,0-.235-.01-.349A5.386,5.386,0,0,0,13.169,49.267Z" transform="translate(0 -48)" fill="#41474f"/>
											    </g>
											  </g>
											</svg>
										</a></div>

										<div><a class="a2a_button_linkedin" data-url="<?php echo get_permalink();?>" href="#">
											<svg id="Group_20" data-name="Group 20" xmlns="http://www.w3.org/2000/svg" width="12.381" height="11.83" viewBox="0 0 12.381 11.83">
											  <path id="Path_5" data-name="Path 5" d="M12.881,7.756V12.33H10.233V8.066C10.233,7,9.854,6.26,8.891,6.26a1.45,1.45,0,0,0-1.358.963,1.882,1.882,0,0,0-.086.653V12.33H4.782s.034-7.239,0-7.979H7.43V5.487c0,.017-.017.017-.017.034H7.43V5.487A2.631,2.631,0,0,1,9.82,4.163c1.754,0,3.061,1.135,3.061,3.594ZM2,.5A1.39,1.39,0,0,0,.5,1.876,1.37,1.37,0,0,0,1.962,3.251h.017a1.381,1.381,0,0,0,1.5-1.376A1.366,1.366,0,0,0,2,.5ZM.655,12.33H3.3V4.352H.655Zm0,0" transform="translate(-0.5 -0.5)" fill="#41474f"/>
											</svg>
										</a></div>
										
									</div>
									
									<script async src="https://static.addtoany.com/menu/page.js"></script>
																			
								</div>
								
								<div class="post-disclaimer cell shrink text-right"><?php the_field('insights_and_news_disclaimer', 'option');?></div>
									
							</div>
						</div>
					</div>
										
				</footer> <!-- end article footer -->
	
			</div>
			
			<div class="cell small-12">
				<section class="insight-grid module">
					<div class="card-grid grid-x grid-padding-x" data-equalizer data-equalize-on="medium">
						
						<?php if( get_post_type() === 'insight'):?>
						
							<div class="cell small-12">
								<h3>Recent Insights</h3>
							</div>
	
							<?php 
								
							$insight_terms = get_the_terms($post->ID, 'insight_type');
													
							if( $insight_terms ) {
	         
							    $insight_termnames[] = 0;
							                     
							    foreach( $insight_terms as $insight_term ) {  
							                 
							        $insight_names[] = $insight_term->slug;
							             
							    }
							     
							}
								
							$args = array(  
						        'post_type' => 'insight',
						        'post_status' => 'publish',
						        'posts_per_page' => 3, 
						        'order' => 'DESC',
						        'post__not_in' => array( get_the_ID() ),
							    'tax_query' => array(
							        array(
							            'taxonomy' => 'insight_type',
							            'field'    => 'slug',
							            'terms'    => $insight_names,
							        ),
							    ),
						    );
			
						    $loop = new WP_Query( $args ); 
						        
						    while ( $loop->have_posts() ) : $loop->the_post(); 
						        get_template_part('parts/loop', 'post-card');
						    endwhile;
						
						    wp_reset_postdata(); 
						    ?>
						    
							<div class="cell text-center">
								<a class="button outline" aria-label="Insights" href="/insights">
									View More Insights
								</a>				
							</div>
							
						<?php endif;?>

						<?php if( get_post_type() === 'news_post'):?>
						
							<div class="cell small-12">
								<h3>Recent Greenspring News</h3>
							</div>
	
							<?php 
								
							$news_terms = get_the_terms($post->ID, 'news_types');
													
							if( $news_terms ) {
	         
							    $news_termnames[] = 0;
							                     
							    foreach( $news_terms as $news_term ) {  
							                 
							        $news_names[] = $news_term->slug;
							             
							    }
							    							     
							}
								
							$args = array(  
						        'post_type' => 'news_post',
						        'post_status' => 'publish',
						        'posts_per_page' => 3, 
						        'order' => 'DESC',
						        'post__not_in' => array( get_the_ID() ),
							    'tax_query' => array(
							        array(
							            'taxonomy' => 'news_types',
							            'field'    => 'slug',
							            'terms'    => $news_names,
							        ),
							    ),
						    );
			
						    $loop = new WP_Query( $args ); 
						        
						    while ( $loop->have_posts() ) : $loop->the_post(); 
						        get_template_part('parts/loop', 'post-card');
						    endwhile;
						
						    wp_reset_postdata(); 
						    ?>
						    
							<div class="cell text-center">
								<a class="button outline" aria-label="Insights" href="/news">
									View More News
								</a>				
							</div>
							
						<?php endif;?>
					    
					</div>
				</section>									
			</div>
			
		</div>
	
	</div>
											
</article> <!-- end article -->