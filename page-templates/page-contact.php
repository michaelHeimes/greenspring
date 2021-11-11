<?php 
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 */ 
get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>		


			    <section class="form-header module no-bottom-padding">
				    <div class="grid-container">
					    <div class="grid-x grid-padding-x">
						    <div class="cell">
						    	<h2><?php the_field('form_heading');?></h2>
						    </div>
							<?php if( have_rows('book_cta') ):?>
								<?php while ( have_rows('book_cta') ) : the_row();?>	
			
							    <div class="cell">
								    <div class="copy-wrap">
									    <?php the_sub_field('copy');?>
								    </div>
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									<div class="link-wrap">
									    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									</div>
									<?php endif; ?>
							    </div>
			
								<?php endwhile;?>
							<?php endif;?>						    
					    </div>
				    </div>
			    </section>
			    
			    <section class="form module">
					<?php gravity_form( 1, false, false, false, '', true );?>
			    </section>

			    <section class="module">
				    <div class="grid-container">
					    <div class="grid-x grid-margin-x">
							<div class=" cell divider"></div>
					    </div>
				    </div>
				</section>		
				
				<section class="module contact">	 
					<div class="grid-container">
						
					    <div class="location-wrap grid-x grid-padding-x">   		  
				    	
				    		<div class="cell small-12 medium-4 tablet-6">
					    		<div class="grid-x grid-padding-x"> 
						    		
						    		<div class="cell">
							    		<h2>Maryland</h2>
						    		</div>
						    		
						    		<div class="cell small-12 tablet-6">
							    		<h4>Location</h4>
							    		
							    		<div class="info-wrap">
							    			<?php the_field('maryland_address', 'option');?>
							    		</div>
							    		
						    		</div>
	
						    		<div class="cell small-12 tablet-6">
							    		
							    		<h4>Contact</h4>

							    		<div class="info-wrap">
								    		<div>Phone: <?php the_field('maryland_phone_number');?></div>
								    		<div>Fax: <?php the_field('maryland_fax_number');?></div>
							    		</div>						
							    		
						    		</div>
						    		
						    		<div class="cell small-12 tablet-6">
							    		
							    		<h4>Hours</h4>

							    		<div class="info-wrap">
								    		<div><?php the_field('hours', 'option');?></div>
							    		</div>						
							    		
						    		</div>						    		
						    		
					    		</div>
				    		</div>

				    		<div class="cell small-12 medium-8 tablet-6">
					    		<?php the_field('maryland_map_embed');?>
				    		</div>
				    	
					    </div>

					    <div class="location-wrap grid-x grid-padding-x">   		  
				    	
				    		<div class="cell small-12 medium-4 tablet-6">
					    		<div class="grid-x grid-padding-x"> 
						    		
						    		<div class="cell">
							    		<h2>New Jersey</h2>
						    		</div>
						    		
						    		<div class="cell small-12 tablet-6">
							    		<h4>Location</h4>
							    		
							    		<div class="info-wrap">
							    			<?php the_field('new_jersey_address', 'option');?>
							    		</div>
							    		
						    		</div>
	
						    		<div class="cell small-12 tablet-6">
							    		
							    		<h4>Contact</h4>

							    		<div class="info-wrap">
								    		<div>Phone: <?php the_field('new_jersey_phone_number');?></div>
								    		<div>Fax: <?php the_field('new_jersey_fax_number');?></div>
							    		</div>						
							    		
						    		</div>
						    		
					    		</div>
				    		</div>

				    		<div class="cell small-12 medium-8 tablet-6">
					    		<?php the_field('new_jersey_map_embed');?>
				    		</div>
				    	
					    </div>

					</div>			  
				</section>
			    			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>