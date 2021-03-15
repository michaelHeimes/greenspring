<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
 
 
 				<div class="pre-footer-cta green-bg">
	 				<div class="grid-container">
		 				<div class="left cell">
			 				
		 				</div>
		 				
		 				<div class="right cell">
			 				
		 				</div>
	 				</div>
 				</div>
					
				<footer class="footer gray-bg" role="contentinfo">
					<div class="grid-container">
					
						<div class="footer-top grid-x grid-padding-x">
							<div class="left cell small-12 tablet-4">
								<?php 
								$image = get_field('footer_logo', 'option');
								if( !empty( $image ) ): ?>
								<a href="<?php echo home_url(); ?>">
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
								<?php endif; ?>		
								
								<p><?php the_field('footer_copy', 'option');?></p>
														
							</div>
							
							<div class="right cell small-12 tablet-8">
								<div class="grid-x grid-padding-x">
									<div class="locations cell shrink medium-4">
										<h2>Locations</h2>
										
										<div class="address-wrap">
											<?php the_field('maryland_address', 'option');?>
										</div>

										<div class="address-wrap">
											<?php the_field('new_jersey_address', 'option');?>
										</div>
										
									</div>
									
									<div class="hours cell auto medium-4 tablet-4">
										<h2>Hours</h2>
										
										<?php the_field('hours', 'option');?>
										
									</div>									
									
									<div class="social cell small-12 medium-4">
										<h2>Follow</h2>
										
										<div class="social-links">
										
											<div><a href="<?php the_field('facebook_url', 'option');?>" target="_blank">
	
												<svg xmlns="http://www.w3.org/2000/svg" width="6.185" height="12.369" viewBox="0 0 6.185 12.369">
												  <path id="Path_8" data-name="Path 8" d="M137.045,2.054h1.129V.087A14.584,14.584,0,0,0,136.529,0a2.611,2.611,0,0,0-2.743,2.906V4.638h-1.8v2.2h1.8v5.532h2.2V6.837h1.724l.274-2.2h-2V3.124c0-.635.172-1.07,1.057-1.07Z" transform="translate(-131.989)" fill="#41474f"/>
												</svg>
	
											</a></div>
											<div><a href="<?php the_field('instagram_url', 'option');?>" target="_blank">
												<svg id="Group_6" data-name="Group 6" xmlns="http://www.w3.org/2000/svg" width="12.541" height="12.543" viewBox="0 0 12.541 12.543">
												  <g id="Group_5" data-name="Group 5" transform="translate(0 0)">
												    <path id="Path_5" data-name="Path 5" d="M13.407,3.688a4.584,4.584,0,0,0-.292-1.522A3.213,3.213,0,0,0,11.28.331,4.6,4.6,0,0,0,9.758.039C9.087.007,8.874,0,7.171,0S5.255.007,4.586.037A4.584,4.584,0,0,0,3.064.328a3.06,3.06,0,0,0-1.113.725,3.088,3.088,0,0,0-.723,1.11A4.6,4.6,0,0,0,.937,3.685C.905,4.357.9,4.57.9,6.273S.905,8.189.935,8.858a4.584,4.584,0,0,0,.292,1.522,3.213,3.213,0,0,0,1.835,1.835,4.6,4.6,0,0,0,1.522.292c.669.029.882.037,2.585.037s1.916-.007,2.585-.037a4.583,4.583,0,0,0,1.522-.292,3.208,3.208,0,0,0,1.835-1.835A4.6,4.6,0,0,0,13.4,8.858c.029-.669.037-.882.037-2.585S13.436,4.357,13.407,3.688Zm-1.13,5.121a3.438,3.438,0,0,1-.216,1.164,2.081,2.081,0,0,1-1.191,1.191,3.451,3.451,0,0,1-1.164.216c-.662.029-.86.037-2.534.037S5.3,11.409,4.64,11.379a3.437,3.437,0,0,1-1.164-.216,1.93,1.93,0,0,1-.72-.468,1.951,1.951,0,0,1-.468-.72,3.45,3.45,0,0,1-.216-1.164c-.029-.662-.037-.86-.037-2.534s.007-1.875.037-2.534A3.436,3.436,0,0,1,2.287,2.58a1.907,1.907,0,0,1,.471-.72,1.947,1.947,0,0,1,.72-.468,3.452,3.452,0,0,1,1.164-.216c.662-.029.86-.037,2.534-.037s1.875.007,2.534.037a3.437,3.437,0,0,1,1.164.216,1.928,1.928,0,0,1,.72.468,1.95,1.95,0,0,1,.468.72,3.452,3.452,0,0,1,.216,1.164c.029.662.037.86.037,2.534S12.307,8.147,12.277,8.809Z" transform="translate(-0.898 0)" fill="#41474f"/>
												    <path id="Path_6" data-name="Path 6" d="M128.4,124.281a3.222,3.222,0,1,0,3.222,3.222A3.223,3.223,0,0,0,128.4,124.281Zm0,5.312a2.09,2.09,0,1,1,2.09-2.09A2.09,2.09,0,0,1,128.4,129.593Z" transform="translate(-122.128 -121.23)" fill="#41474f"/>
												    <path id="Path_7" data-name="Path 7" d="M363.766,89.2a.752.752,0,1,1-.752-.752A.752.752,0,0,1,363.766,89.2Z" transform="translate(-353.391 -86.275)" fill="#41474f"/>
												  </g>
												</svg>
	
											</a></div>
											
											<div><a href="<?php the_field('twitter_url', 'option');?>" target="_blank">
												<svg xmlns="http://www.w3.org/2000/svg" width="13.169" height="10.7" viewBox="0 0 13.169 10.7">
												  <g id="Group_10" data-name="Group 10" transform="translate(0 0)">
												    <g id="Group_37" data-name="Group 37" transform="translate(0 0)">
												      <path id="Path_131" data-name="Path 131" d="M13.169,49.267a5.629,5.629,0,0,1-1.556.426A2.685,2.685,0,0,0,12.8,48.2a5.4,5.4,0,0,1-1.712.654A2.7,2.7,0,0,0,6.419,50.7a2.78,2.78,0,0,0,.063.616A7.642,7.642,0,0,1,.917,48.492a2.7,2.7,0,0,0,.83,3.608,2.666,2.666,0,0,1-1.22-.333v.03A2.712,2.712,0,0,0,2.69,54.45a2.7,2.7,0,0,1-.708.089,2.387,2.387,0,0,1-.511-.046,2.726,2.726,0,0,0,2.523,1.881A5.425,5.425,0,0,1,.646,57.526,5.056,5.056,0,0,1,0,57.488,7.6,7.6,0,0,0,4.142,58.7a7.631,7.631,0,0,0,7.684-7.683c0-.119,0-.235-.01-.349A5.386,5.386,0,0,0,13.169,49.267Z" transform="translate(0 -48)" fill="#41474f"/>
												    </g>
												  </g>
												</svg>
											</a></div>
	
											<div><a href="<?php the_field('linkedin_url', 'option');?>" target="_blank">
												<svg id="Group_20" data-name="Group 20" xmlns="http://www.w3.org/2000/svg" width="12.381" height="11.83" viewBox="0 0 12.381 11.83">
												  <path id="Path_5" data-name="Path 5" d="M12.881,7.756V12.33H10.233V8.066C10.233,7,9.854,6.26,8.891,6.26a1.45,1.45,0,0,0-1.358.963,1.882,1.882,0,0,0-.086.653V12.33H4.782s.034-7.239,0-7.979H7.43V5.487c0,.017-.017.017-.017.034H7.43V5.487A2.631,2.631,0,0,1,9.82,4.163c1.754,0,3.061,1.135,3.061,3.594ZM2,.5A1.39,1.39,0,0,0,.5,1.876,1.37,1.37,0,0,0,1.962,3.251h.017a1.381,1.381,0,0,0,1.5-1.376A1.366,1.366,0,0,0,2,.5ZM.655,12.33H3.3V4.352H.655Zm0,0" transform="translate(-0.5 -0.5)" fill="#41474f"/>
												</svg>
											</a></div>
											
										</div>
											
									</div>
								</div>
							</div>
						
						</div> <!-- end .top-footer -->
	
						<div class="footer-bottom grid-x grid-padding-x">
							
							<div class="left cell small-12 medium-4">
								<nav role="navigation">
		    						<?php joints_left_footer_links(); ?>
		    					</nav>
		    				</div>
		    				
		    				<div class="middle cell small-12 medium-4">
			    				<nav role="navigation">
		    						<?php joints_middle_footer_links(); ?>
			    				</nav>
		    				</div>

		    				<div class="right cell small-12 medium-4">
			    				<nav role="navigation">
		    						<?php joints_right_footer_links(); ?>
			    				</nav>
		    				</div>

							<div class="cell small-12 text-right">
								<div class="awards grid-x grid-padding-x">
								
									<?php if( have_rows('awards', 'option') ):?>
										<?php while ( have_rows('awards', 'option') ) : the_row();?>	
									
										<?php if( have_rows('single_award') ):?>
											<?php while ( have_rows('single_award') ) : the_row();?>	
											
											<div class="single-award cell shrink">
												<a href="<?php the_sub_field('link');?>" target="_blank">
													<?php 
													$image = get_sub_field('logo');
													if( !empty( $image ) ): ?>
													    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</a>
											</div>
										
											<?php endwhile;?>
										<?php endif;?>
									
										<?php endwhile;?>
									<?php endif;?>
									
								</div>
							</div>
							
							<div class="cell small-12 text-right">
								<div class="source-org copyright cell small-12 medium-auto">&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></div>
							</div>
						
						</div> <!-- end .footer-bottom -->
				
					</div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->