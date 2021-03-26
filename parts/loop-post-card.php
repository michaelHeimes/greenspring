<?php
// type
if( get_post_type(get_the_ID()) == 'team_member'){
	$terms = get_the_terms( $post->ID , 'team_member_type' );
	$type_slugs = array();
	foreach ($terms as $key => $value) {
		$type_slugs[] = $value->slug;
	}
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-card cell small-12 medium-6 tablet-4'); ?> role="article" <?php if( get_post_type(get_the_ID()) == 'team_member'):?>data-type=".<?php echo implode('.', $type_slugs); ?>."<?php endif;?>>
	
    <div class="inner post-card-shadow">

	<?php if( get_post_type(get_the_ID()) == 'team_member'):?>
	<a href="<?php echo the_permalink();?>">
	<?php endif;?>
        
        <div class="top">
	        
	        <?php if( get_post_type(get_the_ID()) == 'team_member'):?>
	        
				<?php 
				$image = get_field('photo');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
	        
	        <?php endif;?>

			<?php 
			$image = get_field('archive_card_image');
			if( !empty( $image ) ): ?>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
	        	        
        </div>
        
        <div class="bottom" data-equalizer-watch>
	        
	        <div class="icons-text-wrap">
	        
		        
			        
				<?php if( get_post_type(get_the_ID()) == 'insight'):?>
					<div class="tax-icons">
						
				    <?php $insight_terms = get_the_terms( $post->ID , 'insight_type' );
				        foreach ($insight_terms as $term): 
						if ( $term->parent != 0 ):
						$icon = get_field('icon', $term);									    
		        	?>		
		        
		        	<div class="icon">
			        	<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
		        	</div>
		        
					<?php endif; endforeach;?>
		        
					</div>
		        <?php endif;?>										       
			        
		        
		        <h3><?php the_title();?></h3>
		        
		        <?php if( get_post_type(get_the_ID()) == 'team_member'):?>
		        <div class="title"><?php the_field('title');?></div>
		        <?php endif;?>
		        
		        <?php if( get_post_type(get_the_ID()) != 'team_member'):?>
		        	<div class="excerpt"><?php the_field('excerpt');?></div>
		        <?php endif;?>
		        
	        </div>
	        
	        <?php if( get_post_type(get_the_ID()) != 'team_member'):?>
	        
	        <div class="link-wrap">
		        <a class="rm-link" href="<?php echo the_permalink();?>">Read More</a>
	        </div>
	        
	        <?php endif;?>
	        
        </div>
    
    <?php if( get_post_type(get_the_ID()) == 'team_member'):?>
		</a>
	<?php endif;?>
    
    </div>
</article>