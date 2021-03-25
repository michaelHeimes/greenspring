<section class="accordion module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="cell small-12">
				
				<?php if( $heading =  get_sub_field('heading')):?>
					<h2><?php echo $heading;?></h2>
				<?php endif;?>
				
				<?php if( have_rows('accordions') ):?>
				<div class="accordions" data-accordion data-allow-all-closed="true">
					<?php while ( have_rows('accordions') ) : the_row();?>	
					
					<div class="single-accordion" data-accordion-item>
						
						<?php if( have_rows('single_accordion') ):?>
							<?php while ( have_rows('single_accordion') ) : the_row();?>	
							
							<a href="#" class="accordion-title h3"><?php the_sub_field('question');?><svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39"><g id="Group_506" data-name="Group 506" transform="translate(-1220 -1796)"><g id="Group_462" data-name="Group 462" transform="translate(1932 3004) rotate(180)"><g id="Ellipse_34" data-name="Ellipse 34" transform="translate(673 1169)" fill="none" stroke="#6aaa37" stroke-width="1.5"><circle cx="19.5" cy="19.5" r="19.5" stroke="none"/><circle cx="19.5" cy="19.5" r="18.75" fill="none"/></g><g id="Group_123" data-name="Group 123" transform="translate(-879.964 -1371.288)"><g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)"><path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(19.02 -64.322) rotate(90)" fill="none" stroke="#6aaa37" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/></g></g></g></g></svg></a>
							
							<div class="accordion-content" data-tab-content>
								<?php the_sub_field('answer');?>
							</div>
						
							<?php endwhile;?>
						<?php endif;?>
						
					</div>
				
					<?php endwhile;?>
				<?php endif;?>
				</div>
					
			</div>
					
		</div>
	</div>
</section>