	<!-- EDIT FILE: boldlab-core/inc/post-types/portfolio/variations/masonry-small/layout/masonry-small.php  --> 
    
    <!-- Place code inside <div class="qodef-portfolio-info"> -->
    
    <!-- Custom code for displaying *model* category custom fields -->
							
							<?php if(get_field('height')) : ?>
								<h5>
									Height <span> <?php the_field('height'); ?></span>
							</h5>
							<?php endif; ?>

							<?php if(get_field('bust')) : ?>
								<h5>
									Bust <span> <?php the_field('bust'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('waist')) : ?>
								<h5>
									Waist <span> <?php the_field('waist'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('hips')) : ?>
								<h5>
									Hips <span> <?php the_field('hips'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('size')) : ?>
								<h5>
									Size <span> <?php the_field('size'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('shoes')) : ?>
								<h5>
									Shoes <span> <?php the_field('shoes'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('hair')) : ?>
								<h5>
									Hair <span> <?php the_field('hair'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('eyes')) : ?>
								<h5>
									Eyes <span> <?php the_field('eyes'); ?></span>
							</h5>
							<?php endif; ?>
						
							<br><br>
						
						<!-- End Of Custom Code -->