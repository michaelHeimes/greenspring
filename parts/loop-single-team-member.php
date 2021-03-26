<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 tablet-8">
							
				<header class="article-header">		
					<div class="grid-x grid-padding-x align-middle">
						<div class="cell shrink">
							<?php 
							$image = get_field('photo');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</div>
						
						<div class="cell auto">							
							<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
							<div class="job-title"><?php the_field('title');?></div>
						</div>
				</header> <!-- end article header -->
				
					
			    <section class="entry-content" itemprop="text">
					
					<?php the_field('bio');?>
					
				</section> <!-- end article section -->
	
			</div>
	
			<div class="right cell small-12 tablet-4">
				<div class="inner">
					
					<div class="row">
						<div class="pipe"></div>
						<div class="content-wrap">
							<div class="content-label">Contact</div>
							<div class="content">
								<div><a href="tel:<?php the_field('phone_number');?>"><?php the_field('phone_number');?></a></div>
								<div><a href="mailto:<?php the_field('email_address');?>"><?php the_field('email_address');?></a></div>
							</div>
						</div>
					</div>

					<?php if($awards = get_field('education_awards_&_recognition')):?>
					<div class="row">
						<div class="pipe"></div>
						<div class="content-wrap">
							<div class="content-label">Education Awards Recognition</div>
							<div class="content">
								<?php echo $awards;?>
							</div>
						</div>
					</div>
					<?php endif;?>

					<?php if($hometown = get_field('hometown')):?>
					<div class="row">
						<div class="pipe"></div>
						<div class="content-wrap">
							<div class="content-label">Hometown</div>
							<div class="content">
								<?php echo $hometown;?>
							</div>
						</div>
					</div>
					<?php endif;?>
					
					<?php if($alma_mater = get_field('alma_mater')):?>
					<div class="row">
						<div class="pipe"></div>
						<div class="content-wrap">
							<div class="content-label">Alma Mater</div>
							<div class="content">
								<?php echo $alma_mater;?>
							</div>
						</div>
					</div>
					<?php endif;?>
					
					<?php if($favorite_philanthropy = get_field('favorite_philanthropy')):?>
					<div class="row">
						<div class="pipe"></div>
						<div class="content-wrap">
							<div class="content-label">Favorite Philanthropy</div>
							<div class="content">
								<?php echo $favorite_philanthropy;?>
							</div>
						</div>
					</div>
					<?php endif;?>					

					<?php if($interests = get_field('interests')):?>
					<div class="row">
						<div class="pipe"></div>
						<div class="content-wrap">
							<div class="content-label">Interests</div>
							<div class="content">
								<?php echo $interests;?>
							</div>
						</div>
					</div>
					<?php endif;?>
					
					<?php if($favorite_green_spring_value = get_field('favorite_green_spring_value')):?>
					<div class="row">
						<div class="pipe"></div>
						<div class="content-wrap">
							<div class="content-label">Favorite Green Spring Value</div>
							<div class="content">
								<?php echo $favorite_green_spring_value;?>
							</div>
						</div>
					</div>
					<?php endif;?>					
					
				</div>
			</div>
			
			<?php if( have_rows('quote_box') ):?>
				<?php while ( have_rows('quote_box') ) : the_row();?>	
					<?php get_template_part('modules/gray_rectangle_cta');?>
				<?php endwhile;?>
			<?php endif;?>
			
			
			<footer class="article-footer cell">
				
				<?php 
				$args = array(  
			        'post_type' => 'insight',
			        'post_status' => 'publish',
			        'posts_per_page' => 3, 
			        'order' => 'ASC',
			    );

			    $loop = new WP_Query( $args ); 
			        
			    while ( $loop->have_posts() ) : $loop->the_post(); 
			        print the_title(); 
			    endwhile;
			
			    wp_reset_postdata(); 
			    ?>

			</footer> <!-- end article footer -->
			
			
		</div>
	
	</div>
						

	

													
</article> <!-- end article -->