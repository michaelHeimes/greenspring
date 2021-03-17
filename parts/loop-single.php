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
					
					<?php if ( is_singular('insight') ):?>
						<?php get_template_part( 'parts/insight-content', 'byline' ); ?>
					<?php endif;?>
			
					<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
				</header> <!-- end article header -->
				
					
			    <section class="entry-content" itemprop="text">
			<!-- 		<?php the_post_thumbnail('full'); ?> -->
					<?php get_template_part( 'parts/loop', 'modules' ); ?>
				</section> <!-- end article section -->
	
			</div>
			
			<footer class="article-footer cell">

			</footer> <!-- end article footer -->
			
			
		</div>
	
	</div>
						

	

													
</article> <!-- end article -->