<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
		<?php if( is_front_page() ):?>
		
			<h1 class="page-title show-for-sr"><?php the_title(); ?></h1>
		
		<?php else:?>
		
			<?php if( $alt_title = get_sub_field('alternative_title') ):?>
				<div class="cell">
					<h1 class="page-title"><?php echo $alt_title; ?></h1>
				</div>
			<?php else:?>
				<div class="cell">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</div>
			<?php endif;?>
				
		<?php endif;?>
		
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	    
	    <?php get_template_part( 'parts/loop', 'modules' ); ?>
	    
	</section> <!-- end article section -->
						
</article> <!-- end article -->