<?php if( have_rows('two_cta_boxes') ):?>		    
	<?php while ( have_rows('two_cta_boxes') ) : the_row();?>	
	
<section class="module two-cta-boxes color-<?php the_sub_field('box_color');?>">
    <div class="grid-container">
	    <div class="grid-x grid-padding-x small-up-1 medium-up-2">
	
	<?php if( have_rows('left_box') ):?>
	<div class="cell">
    	<div class="inner">
		<?php while ( have_rows('left_box') ) : the_row();?>
		
		<div class="top">
		
    		<h2><?php the_sub_field('heading');?></h2>	
    	
			<p><?php the_sub_field('copy');?></p>
			
		</div>
		
		<?php 
		$link = get_sub_field('button_link');
		if( $link ): 
		    $link_url = $link['url'];
		    $link_title = $link['title'];
		    $link_target = $link['target'] ? $link['target'] : '_self';
		    ?>
		<div>
		    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		</div>
		<?php endif; ?>
	
		<?php endwhile;?>
    	</div>
	</div>
	<?php endif;?>

	<?php if( have_rows('right_box') ):?>
	<div class="cell">
    	<div class="inner">
		<?php while ( have_rows('right_box') ) : the_row();?>
		
		<div class="top">
		
    		<h2><?php the_sub_field('heading');?></h2>	
    	
			<p><?php the_sub_field('copy');?></p>
			
		</div>
		
		<?php 
		$link = get_sub_field('button_link');
		if( $link ): 
		    $link_url = $link['url'];
		    $link_title = $link['title'];
		    $link_target = $link['target'] ? $link['target'] : '_self';
		    ?>
		<div>
		    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		</div>
		<?php endif; ?>
	
		<?php endwhile;?>
    	</div>
	</div>
	<?php endif;?>


	    </div>
    </div>
</section>

	<?php endwhile;?>
<?php endif;?>
