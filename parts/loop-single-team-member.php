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
						<div class="cell small-12 medium-shrink">
							
							<?php 
							$image = get_field('photo');
							$image_size = 'team-post';
					        $image_url = $image['sizes'][$image_size];
							if( !empty( $image ) ): ?>
					        	<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['team-post']; ?>" height="<?php echo $image['sizes']['team-post']; ?>" alt="<?php echo $image['caption']; ?>" />
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
							<div class="content-label">Favorite Greenspring Value</div>
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
				$featured_insights = get_field('insights');
				if( $featured_insights ): ?>
				<section class="insight-grid module">
					<div class="card-grid grid-x grid-padding-x" data-equalizer data-equalize-on="medium">
						
						<div class="cell small-12">
							<h3>Recent Insights</h3>
						</div>
						
					    <?php foreach( $featured_insights as $post ): 
					        setup_postdata($post); ?>						

							<?php get_template_part('parts/loop', 'post-card');?>
						
						<?php endforeach; ?>
						
						<div class="cell text-center">
							<a class="button outline" aria-label="Insights" href="/insights">
								View More Insights
							</a>				
						</div>

					</div>
				</section>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>	

				<?php
				$featured_news = get_field('news');
				if( $featured_news ): ?>
				<section class="insight-grid module">
					<div class="card-grid grid-x grid-padding-x" data-equalizer data-equalize-on="medium">
						
						<div class="cell small-12">
							<h3>Greenspring News</h3>
						</div>
						
					    <?php foreach( $featured_news as $post ): 
					        setup_postdata($post); ?>						

							<?php get_template_part('parts/loop', 'post-card');?>
						
						<?php endforeach; ?>
						
						<div class="cell text-center">
							<a class="button outline" aria-label="News" href="/about/news">
								View More News
							</a>				
						</div>

					</div>
				</section>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>	
				
				<?php get_template_part( 'parts/loop', 'modules' ); ?>

			</footer> <!-- end article footer -->
			
			
		</div>
	
	</div>
						

	

													
</article> <!-- end article -->