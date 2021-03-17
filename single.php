<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">

	<div class="inner-content">

		<main class="main" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    
		    	<?php if ( is_singular('team_member') ):?>
		    		<?php get_template_part( 'parts/loop', 'single-team-member' ); ?>
		    	<?php else:?>
		
		    		<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    	<?php endif;?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>