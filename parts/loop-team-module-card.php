<article id="post-<?php the_ID(); ?>" <?php post_class('team-module-card cell small-12 medium-6 tablet-4'); ?> role="article">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	    <div class="inner grid-x grid-padding-x">
	        
			<div class="img-wrap cell small-12 tablet-shrink">

				<?php 
				$image = get_field('photo');
				$image_size = 'team-post';
		        $image_url = $image['sizes'][$image_size];
				if( !empty( $image ) ): ?>
				<div>
		        	<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['team-post']; ?>" height="<?php echo $image['sizes']['team-post']; ?>" alt="<?php echo $image['caption']; ?>" />
				</div>
				<?php endif; ?>		
				
			</div>
			
			<div class="cell auto">
				<h3><?php the_title();?></h3>
				<div class="title"><?php the_field('title');?></div>
			</div>
	    
	    </div>
	</a>
</article>