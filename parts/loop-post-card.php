<article id="post-<?php the_ID(); ?>" <?php post_class('post-card cell small-12 medium-6 tablet-4'); ?> role="article">
    <div class="inner post-card-shadow">
        
        <div class="top">

			<?php 
			$image = get_field('archive_card_image');
			if( !empty( $image ) ): ?>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
	        
	        <div class="tax-icons">
		        
	        </div>
	        
        </div>
        
        <div class="bottom" data-equalizer-watch>
	        
	        <div class="icons-text-wrap">
	        
		        <div class="tax-icons">
			        
				<?php
			        $insight_terms = get_the_terms( $post->ID , 'insight_type' );
			        
			        foreach ($insight_terms as $term): 
					if ( $term->parent != 0 ):
					$icon = get_field('icon', $term);									    
		        ?>		
		        
		        	<div class="icon">
			        	<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
		        	</div>
		        
		        <?php endif; endforeach; ?>										       
			        
		        </div>
		        
		        <h3><?php the_title();?></h3>
		        
		        <div class="excerpt"><?php the_field('excerpt');?></div>
		        
	        </div>
	        
	        <div class="link-wrap">
		        <a class="rm-link" href="<?php echo the_permalink();?>">Read More</a>
	        </div>
	        
        </div>
    
    </div>
</article>