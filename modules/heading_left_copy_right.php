<section class="heading-left-copy-right module<?php if(get_sub_field('remove_top_padding')):?> no-top-padding<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bottom-padding<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="heading-wrap cell small-12 tablet-3 xlarge-4">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			
			<div class="copy-wrap cell small-12 tablet-7 xlarge-8">
				<?php the_sub_field('copy');?>
			</div>
					
		</div>
	</div>
</section>