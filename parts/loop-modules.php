<?php if ( have_rows('modules') ) : ?>
<?php while ( have_rows('modules') ) : ?> 
	<?php the_row(); ?>

	<?php if ( get_row_layout() == 'gray_rectangle_cta' ) : 
	
		get_template_part('modules/gray_rectangle_cta');
	
	endif;?>

	<?php if ( get_row_layout() == 'side-by-side_images' ) : 
	
		get_template_part('modules/side_by_side_images');
	
	endif;?>

	<?php if ( get_row_layout() == 'slider' ) : 
	
		get_template_part('modules/slider');
	
	endif;?>

	<?php if ( get_row_layout() == 'wysiwyg_editor' ) : 
	
		get_template_part('modules/wysiwyg_editor');
	
	endif;?>
	
	<?php endwhile;?>
<?php endif;?>