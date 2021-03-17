<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lora&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

		<header class="header banner-style-<?php the_field('banner_style');?>" role="banner" data-sticky data-margin-top="0" data-sticky-on="small">

			<!-- This navs will be applied to the topbar, above all content 
			To see additional nav styles, visit the /parts directory -->
			<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

		</header> <!-- end .header -->
		
		
		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<?php if (is_front_page()):?>
				
					<div class="home-banner">
						
						<div class="full-width grid-container fluid grid-1400">
							<div class="grid-x grid-padding-x">
							
								<div class="left cell small-12 tablet-auto show-for-tablet" style="background-image: url(<?php the_field('banner_background_image');?>);">
									<div class="mask"></div>
								</div>
								
								<div class="right cell small-12 tablet-shrink">
									<div class="inner">
									
									<?php if( have_rows('banner_nav_1') ):?>
										<?php while ( have_rows('banner_nav_1') ) : the_row();?>	
										
										<div class="bn-col">
											
											<div class="img" style="background-image: url(<?php the_sub_field('image');?>);"></div>
											
											<?php 
											$link = get_sub_field('link');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											    <a class="green-bg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
													<span><?php echo esc_html( $link_title ); ?></span>
													<svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="11.773" viewBox="0 0 17.002 11.773">
													  <g id="Group_488" data-name="Group 488" transform="translate(-1558.964 -2554.301)">
													    <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
													      <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
													        <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/>
													      </g>
													      <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
													    </g>
													  </g>
													</svg>

												</a>
											<?php endif; ?>
											
										</div>
									
										<?php endwhile;?>
									<?php endif;?>

									<?php if( have_rows('banner_nav_2') ):?>
										<?php while ( have_rows('banner_nav_2') ) : the_row();?>	
										
										<div class="bn-col">
											
											<div class="img" style="background-image: url(<?php the_sub_field('image');?>);"></div>
											
											<?php 
											$link = get_sub_field('link');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											    <a class="blue-bg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
													<span><?php echo esc_html( $link_title ); ?></span>
													<svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="11.773" viewBox="0 0 17.002 11.773">
													  <g id="Group_488" data-name="Group 488" transform="translate(-1558.964 -2554.301)">
													    <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
													      <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
													        <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/>
													      </g>
													      <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
													    </g>
													  </g>
													</svg>

												</a>
											<?php endif; ?>
											
										</div>
									
										<?php endwhile;?>
									<?php endif;?>
									
									<?php if( have_rows('banner_nav_3') ):?>
										<?php while ( have_rows('banner_nav_3') ) : the_row();?>	
										
										<div class="bn-col">
											
											<div class="img" style="background-image: url(<?php the_sub_field('image');?>);"></div>
											
											<?php 
											$link = get_sub_field('link');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											    <a class="purple-bg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
													<span><?php echo esc_html( $link_title ); ?></span>
													<svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="11.773" viewBox="0 0 17.002 11.773">
													  <g id="Group_488" data-name="Group 488" transform="translate(-1558.964 -2554.301)">
													    <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
													      <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
													        <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/>
													      </g>
													      <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
													    </g>
													  </g>
													</svg>

												</a>
											<?php endif; ?>
											
										</div>
									
										<?php endwhile;?>
									<?php endif;?>
									
									</div>
								</div>
							
							</div>
						</div>
						
						<div class="heading-wrap grid-container">
							<div class="bg hide-for-tablet" style="background-image: url(<?php the_field('banner_background_image');?>);">
								<div class="mask"></div>
							</div>
							<div class="grid-x grid-padding-x align-middle">
						
								<div class="cell small-12 tablet-5 xlarge-7">
									<div class="inner">
										<h1><?php the_field('banner_heading');?></h1>
										<p><?php the_field('banner_sub-heading');?></p>
									</div>
								</div>
						
							</div>
						</div>
						
					</div>
					
				<?php else:?>
				
				<div class="page-banner">
					<div class="bg" style="background-image: url();"></div>
					
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell">
									
								<?php if( is_singular('team_member') ):?>
									<h1>Get to Know <?php the_field('first_name');?></h1>
									
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
								
				<?php endif;?>