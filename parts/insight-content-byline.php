<?php
/**
 * The template part for displaying an author byline
 */
 
$insight_terms = get_the_terms( $post->ID , 'insight_type' );
?>

<div class="byline tax-buttons grid-x grid-padding-x align-middle">
	
	<?php foreach ($insight_terms as $term): 
		if ( $term->parent != 0 ):
		$link = get_term_link($term);
		$icon = get_field('icon', $term);
	?>
		
	<div class="cell shrink">
		<a class="button small" aria-label="<?php echo $term->name; ?> Archive Link" href="<?php echo $link;?>">
			<div class="icon-wrap">
				<?php
				if( !empty( $icon ) ): ?>
				    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
				<?php endif; ?>
			</div>
			<span class="theme-name"><?php echo $term->name; ?></span>
		</a>
	</div>
	<?php endif; endforeach; ?>	
	
	<div class="post-date cell small-12 medium-shrink"><?php echo get_the_date( 'F jS Y', $post->ID );?></div>
	
</div>	
