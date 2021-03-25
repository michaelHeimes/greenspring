<?php
/**
 * The template part for displaying an author byline
 */
 
$news_terms = get_the_terms( $post->ID , 'news_types' );
?>

<div class="byline tax-buttons grid-x grid-padding-x align-middle">
	
	<?php foreach ($news_terms as $term): 
		$link = get_term_link($term);
	?>
		
	<div class="cell shrink">
		<a class="button small" aria-label="<?php echo $term->name; ?> Archive Link" href="<?php echo $link;?>">
			<span class="theme-name"><?php echo $term->name; ?></span>
		</a>
	</div>
	<?php endforeach; ?>	
	
	<div class="post-date cell small-12 medium-shrink"><?php echo get_the_date( 'F jS Y', $post->ID );?></div>
	
</div>	
