<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
			
	<div class="content" style="margin-top: 100px; margin-bottom: 100px;">
		<div class="grid-container">

			<div class="inner-content grid-x grid-padding-x">
		
				<main class="main small-12 medium-8 large-8 cell" role="main">
	
					<article class="content-not-found">
				
						<section class="entry-content">
							<p class="large"><?php _e( 'The page you were looking for was not found. Please use the navigation at the top of this page.', 'jointswp' ); ?></p>
						</section> <!-- end article section -->
				
					</article> <!-- end article -->
		
				</main> <!-- end #main -->
	
			</div> <!-- end #inner-content -->

		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>