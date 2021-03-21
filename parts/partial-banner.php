<div class="page-banner">
	<div class="bg" style="background-image: url(<?php the_field('background_image');?>);"></div>
	<div class="mask"></div>
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell">
				
				<?php if( is_archive() ):
					$post_type = get_post_type();
					$post_type_object = get_post_type_object($post_type);
					?>
					
					<h1><?php echo $post_type_object->label ?></h1>
					
				<?php else:?>

					<?php if( $alternative_title = get_field('alternative_title') ):?>
						<h1><?php echo $alternative_title;?></h1>
					<?php else:?>
						<h1><?php the_title();?></h1>
					<?php endif;?>
				
				<?php endif;?>
					
				<?php if( is_singular('team_member') ):?>
					
					<nav aria-label="You are here:" role="navigation">
						<ul class="breadcrumbs">
							<li><a href="/about/">About</a></li>
							<li><a href="/about/team/">Team</a></li>
							<li class="underlined">
								<?php the_title();?>
							</li>
						</ul>
					</nav>										
					
				<?php endif;?>

			</div>
		</div>
	</div>
	
</div>