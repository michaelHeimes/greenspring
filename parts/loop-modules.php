<?php if ( have_rows('modules') ) : ?>
<?php while ( have_rows('modules') ) : ?> 
	<?php the_row(); ?>

	<?php if ( get_row_layout() == 'accordion' ) : 
	
		get_template_part('modules/accordion');
	
	endif;?>

	<?php if ( get_row_layout() == 'dual_insights_sliders' ) : 
	
		get_template_part('modules/dual_insights_sliders');
	
	endif;?>

	<?php if ( get_row_layout() == 'gray_rectangle_cta' ) : 
	
		get_template_part('modules/gray_rectangle_cta');
	
	endif;?>

	<?php if ( get_row_layout() == 'heading_left_copy_right' ) : 
	
		get_template_part('modules/heading_left_copy_right');
	
	endif;?>

	<?php if ( get_row_layout() == 'icon_left_copy_right' ) : 
	
		get_template_part('modules/icon_left_copy_right');
	
	endif;?>

	<?php if ( get_row_layout() == 'insight_grid' ) : 
	
		get_template_part('modules/insight_grid');
	
	endif;?>

	<?php if ( get_row_layout() == 'klarity_quotient' ) : 
	
		get_template_part('modules/klarity_quotient');
	
	endif;?>

	<?php if ( get_row_layout() == 'logo_grid' ) : 
	
		get_template_part('modules/logo_grid');
	
	endif;?>

	<?php if ( get_row_layout() == 'overflow_slider' ) : 
	
		get_template_part('modules/overflow_slider');
	
	endif;?>
	
	<?php if ( get_row_layout() == 'side-by-side_images' ) : 
	
		get_template_part('modules/side_by_side_images');
	
	endif;?>

	<?php if ( get_row_layout() == 'slider' ) : 
	
		get_template_part('modules/slider');
	
	endif;?>

	<?php if ( get_row_layout() == 'team' ) : 
	
		get_template_part('modules/team');
	
	endif;?>

	<?php if ( get_row_layout() == 'three_column_ctas' ) : 
	
		get_template_part('modules/three_column_ctas');
	
	endif;?>

	<?php if ( get_row_layout() == 'three_insights_with_cta' ) : 
	
		get_template_part('modules/three_insights_cta');
	
	endif;?>

	<?php if ( get_row_layout() == 'two_cta_boxes' ) : 
	
		get_template_part('modules/two_cta_boxes');
	
	endif;?>
	
	<?php if ( get_row_layout() == 'two_columns_copy_and_link' ) : 
	
		get_template_part('modules/two_columns_copy_and_link');
	
	endif;?>

	<?php if ( get_row_layout() == 'wysiwyg_editor' ) : 
	
		get_template_part('modules/wysiwyg_editor');
	
	endif;?>
	
	<?php endwhile;?>
<?php endif;?>
