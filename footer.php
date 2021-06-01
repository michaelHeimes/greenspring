<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
 
 
 				<div class="pre-footer-cta green-bg" style="background-image: url(<?php the_field('nf_background_image', 'option');?>)">
	 				<div class="grid-container">
	 					<div class="grid-x grid-padding-x">
		 					<div class="cell">
			 					<h2 class="text-center"><?php the_field('nf_heading', 'option');?></h2>
			 					<?php gravity_form( 2, false, false, false, '', true );?>
		 					</div>
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
										
											<?php if ( $facebook = get_field('facebook_url', 'option')):?>
											<div><a href="<?php echo $facebook;?>" target="_blank">
												<svg xmlns="http://www.w3.org/2000/svg" width="6.185" height="12.369" viewBox="0 0 6.185 12.369">
												  <path id="Path_8" data-name="Path 8" d="M137.045,2.054h1.129V.087A14.584,14.584,0,0,0,136.529,0a2.611,2.611,0,0,0-2.743,2.906V4.638h-1.8v2.2h1.8v5.532h2.2V6.837h1.724l.274-2.2h-2V3.124c0-.635.172-1.07,1.057-1.07Z" transform="translate(-131.989)" fill="#41474f"/>
												</svg>
											</a></div>
											<?php endif;?>
											
											<?php if ( $instagram = get_field('instagram_url', 'option')):?>
											<div><a href="<?php echo $instagram;?>" target="_blank">
												<svg id="Group_6" data-name="Group 6" xmlns="http://www.w3.org/2000/svg" width="12.541" height="12.543" viewBox="0 0 12.541 12.543">
												  <g id="Group_5" data-name="Group 5" transform="translate(0 0)">
												    <path id="Path_5" data-name="Path 5" d="M13.407,3.688a4.584,4.584,0,0,0-.292-1.522A3.213,3.213,0,0,0,11.28.331,4.6,4.6,0,0,0,9.758.039C9.087.007,8.874,0,7.171,0S5.255.007,4.586.037A4.584,4.584,0,0,0,3.064.328a3.06,3.06,0,0,0-1.113.725,3.088,3.088,0,0,0-.723,1.11A4.6,4.6,0,0,0,.937,3.685C.905,4.357.9,4.57.9,6.273S.905,8.189.935,8.858a4.584,4.584,0,0,0,.292,1.522,3.213,3.213,0,0,0,1.835,1.835,4.6,4.6,0,0,0,1.522.292c.669.029.882.037,2.585.037s1.916-.007,2.585-.037a4.583,4.583,0,0,0,1.522-.292,3.208,3.208,0,0,0,1.835-1.835A4.6,4.6,0,0,0,13.4,8.858c.029-.669.037-.882.037-2.585S13.436,4.357,13.407,3.688Zm-1.13,5.121a3.438,3.438,0,0,1-.216,1.164,2.081,2.081,0,0,1-1.191,1.191,3.451,3.451,0,0,1-1.164.216c-.662.029-.86.037-2.534.037S5.3,11.409,4.64,11.379a3.437,3.437,0,0,1-1.164-.216,1.93,1.93,0,0,1-.72-.468,1.951,1.951,0,0,1-.468-.72,3.45,3.45,0,0,1-.216-1.164c-.029-.662-.037-.86-.037-2.534s.007-1.875.037-2.534A3.436,3.436,0,0,1,2.287,2.58a1.907,1.907,0,0,1,.471-.72,1.947,1.947,0,0,1,.72-.468,3.452,3.452,0,0,1,1.164-.216c.662-.029.86-.037,2.534-.037s1.875.007,2.534.037a3.437,3.437,0,0,1,1.164.216,1.928,1.928,0,0,1,.72.468,1.95,1.95,0,0,1,.468.72,3.452,3.452,0,0,1,.216,1.164c.029.662.037.86.037,2.534S12.307,8.147,12.277,8.809Z" transform="translate(-0.898 0)" fill="#41474f"/>
												    <path id="Path_6" data-name="Path 6" d="M128.4,124.281a3.222,3.222,0,1,0,3.222,3.222A3.223,3.223,0,0,0,128.4,124.281Zm0,5.312a2.09,2.09,0,1,1,2.09-2.09A2.09,2.09,0,0,1,128.4,129.593Z" transform="translate(-122.128 -121.23)" fill="#41474f"/>
												    <path id="Path_7" data-name="Path 7" d="M363.766,89.2a.752.752,0,1,1-.752-.752A.752.752,0,0,1,363.766,89.2Z" transform="translate(-353.391 -86.275)" fill="#41474f"/>
												  </g>
												</svg>
											</a></div>
											<?php endif;?>
											
											<?php if ( $twitter = get_field('twitter_url', 'option')):?>
											<div><a href="<?php echo $twitter;?>" target="_blank">
												<svg xmlns="http://www.w3.org/2000/svg" width="13.169" height="10.7" viewBox="0 0 13.169 10.7">
												  <g id="Group_10" data-name="Group 10" transform="translate(0 0)">
												    <g id="Group_37" data-name="Group 37" transform="translate(0 0)">
												      <path id="Path_131" data-name="Path 131" d="M13.169,49.267a5.629,5.629,0,0,1-1.556.426A2.685,2.685,0,0,0,12.8,48.2a5.4,5.4,0,0,1-1.712.654A2.7,2.7,0,0,0,6.419,50.7a2.78,2.78,0,0,0,.063.616A7.642,7.642,0,0,1,.917,48.492a2.7,2.7,0,0,0,.83,3.608,2.666,2.666,0,0,1-1.22-.333v.03A2.712,2.712,0,0,0,2.69,54.45a2.7,2.7,0,0,1-.708.089,2.387,2.387,0,0,1-.511-.046,2.726,2.726,0,0,0,2.523,1.881A5.425,5.425,0,0,1,.646,57.526,5.056,5.056,0,0,1,0,57.488,7.6,7.6,0,0,0,4.142,58.7a7.631,7.631,0,0,0,7.684-7.683c0-.119,0-.235-.01-.349A5.386,5.386,0,0,0,13.169,49.267Z" transform="translate(0 -48)" fill="#41474f"/>
												    </g>
												  </g>
												</svg>
											</a></div>
											<?php endif;?>
											
											<?php if ( $linkedin = get_field('linkedin_url', 'option')):?>
											<div><a href="<?php echo $linkedin;?>" target="_blank">
												<svg id="Group_20" data-name="Group 20" xmlns="http://www.w3.org/2000/svg" width="12.381" height="11.83" viewBox="0 0 12.381 11.83">
												  <path id="Path_5" data-name="Path 5" d="M12.881,7.756V12.33H10.233V8.066C10.233,7,9.854,6.26,8.891,6.26a1.45,1.45,0,0,0-1.358.963,1.882,1.882,0,0,0-.086.653V12.33H4.782s.034-7.239,0-7.979H7.43V5.487c0,.017-.017.017-.017.034H7.43V5.487A2.631,2.631,0,0,1,9.82,4.163c1.754,0,3.061,1.135,3.061,3.594ZM2,.5A1.39,1.39,0,0,0,.5,1.876,1.37,1.37,0,0,0,1.962,3.251h.017a1.381,1.381,0,0,0,1.5-1.376A1.366,1.366,0,0,0,2,.5ZM.655,12.33H3.3V4.352H.655Zm0,0" transform="translate(-0.5 -0.5)" fill="#41474f"/>
												</svg>
											</a></div>
											<?php endif;?>
											
											<?php if ( $youtube = get_field('youtube_url', 'option')):?>
											<div><a href="<?php echo $youtube;?>" target="_blank">
											<svg width="18px" height="13px" viewBox="0 0 18 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											        <g id="Youtube-Icon-Solo" transform="translate(-0.003126, 0.000000)" fill="#41474F" fill-rule="nonzero">
											            <path d="M7.37812594,3.415 L6.68512594,3.015 L6.68512594,3.815 C6.68512594,4.795 6.68512594,5.77466667 6.68512594,6.754 L6.68512594,9.614 L7.37812594,9.214 L11.1151259,7.056 L12.3971259,6.315 L11.7051259,5.915 L7.37812594,3.415 Z" id="Path_402"></path>
											            <path d="M17.5861259,4.659 C17.5546796,3.84728869 17.4543186,3.03971716 17.2861259,2.245 C17.1108684,1.49730219 16.6079727,0.86840707 15.9171259,0.533 C15.5459367,0.367293412 15.1492938,0.26585023 14.7441259,0.233 L14.7181259,0.233 C14.0571259,0.154 13.3881259,0.117 12.7031259,0.083 L12.7031259,0.083 C11.4031259,0.028 10.0881259,0 8.80312594,0 C8.05612594,0 7.30312594,0.009 6.56012594,0.028 L6.52812594,0.028 C5.39212594,0.06 4.21712594,0.094 3.05912594,0.215 L3.05012594,0.215 L2.95012594,0.227 C2.53133365,0.257146836 2.12043308,0.356492862 1.73412594,0.521 C1.26253224,0.746040882 0.870776211,1.10954025 0.611125939,1.563 C0.387300336,2.00607908 0.249532965,2.48758622 0.205125939,2.982 C0.199125939,3.024 0.192125939,3.066 0.186125939,3.108 L0.186125939,3.12 C0.0598781961,4.19334277 -0.00223210634,5.27326061 6.1249757e-05,6.354 L6.1249757e-05,6.363 C0.00037981219,7.46965386 0.0705193928,8.57518725 0.210125939,9.673 L0.225125939,9.761 C0.272695733,10.1902361 0.393086681,10.6082227 0.581125939,10.997 C0.954226708,11.6947655 1.62977643,12.1800975 2.41012594,12.311 C3.17174498,12.4288972 3.93982969,12.5003625 4.71012594,12.525 L4.93912594,12.537 L4.93912594,12.537 C6.22712594,12.592 7.53212594,12.62 8.81612594,12.62 C9.70812594,12.62 10.6111259,12.607 11.5011259,12.58 C12.6011259,12.546 13.5871259,12.509 14.5911259,12.402 L14.6911259,12.39 C15.106966,12.3595288 15.5148535,12.2601759 15.8981259,12.096 C16.5873405,11.7679274 17.0936016,11.1486748 17.2781259,10.408 C17.4279015,9.7268166 17.5215488,9.03449525 17.5581259,8.338 L17.5581259,8.338 C17.645488,7.11350209 17.6548402,5.88468577 17.5861259,4.659 L17.5861259,4.659 Z M16.6411259,8.271 C16.6099886,8.91640456 16.5243503,9.55802207 16.3851259,10.189 C16.2652146,10.6587449 15.9438455,11.0514887 15.5071259,11.262 L15.5011259,11.262 C15.207621,11.3806157 14.8970295,11.4515116 14.5811259,11.472 L14.4951259,11.483 C13.5241259,11.583 12.5551259,11.622 11.4791259,11.656 C10.5991259,11.682 9.70512594,11.695 8.82212594,11.695 C7.55112594,11.695 6.26112594,11.668 4.98712594,11.613 L4.76012594,11.601 C4.02644245,11.5783354 3.2947872,11.5115481 2.56912594,11.401 L2.56912594,11.401 C2.07293566,11.3149351 1.64338885,11.0065898 1.40312594,10.564 L1.40312594,10.558 C1.26600098,10.259303 1.17916513,9.94000389 1.14612594,9.613 L1.13312594,9.541 C1.00000054,8.48522273 0.933064307,7.42213721 0.933064307,6.358 C0.930874444,5.31706213 0.990311963,4.27690555 1.11112594,3.243 C1.11712594,3.202 1.12312594,3.161 1.13012594,3.12 C1.16027211,2.7384806 1.25990989,2.36568618 1.42412594,2.02 C1.58962755,1.73008529 1.83980903,1.49769915 2.14112594,1.354 L2.14112594,1.354 C2.43763417,1.23497653 2.75125233,1.16408329 3.07012594,1.144 L3.16312594,1.132 C4.28512594,1.015 5.44012594,0.982 6.55812594,0.95 L6.58912594,0.95 C7.32112594,0.932 8.06812594,0.922 8.80712594,0.922 C10.0801259,0.922 11.3791259,0.95 12.6691259,1.004 C13.3601259,1.038 13.9831259,1.072 14.6141259,1.148 L14.6331259,1.148 C14.9364696,1.16898261 15.2343702,1.2392358 15.5151259,1.356 L15.5231259,1.356 C15.9614212,1.57132658 16.2813062,1.97035838 16.3961259,2.445 L16.3961259,2.445 C16.5500833,3.18868593 16.6410722,3.94402718 16.6681259,4.703 C16.7354178,5.89168741 16.7263993,7.08346709 16.6411259,8.271 Z" id="Path_403"></path>
											        </g>
											    </g>
											</svg>
											</a></div>
											<?php endif;?>
											
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