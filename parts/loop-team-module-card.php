<article id="post-<?php the_ID(); ?>" <?php post_class('team-module-card cell small-12 medium-6 tablet-4'); ?> role="article">
    <div class="inner grid-x grid-padding-x">
        
		<div class="img-wrap cell shrink">
			<?php 
			$image = get_field('photo');
			if( !empty( $image ) ): ?>
			<div>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			</div>
			<?php endif; ?>
		</div>
		
		<div class="cell auto">
			<h3><?php the_title();?></h3>
			<div class="title"><?php the_field('title');?></div>
		</div>
    
    </div>
</article>