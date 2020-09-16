<!-- EDITED FILE: boldlab-core/inc/title/layouts/standard/templates/standard.php -->

<?php
// Load title image template
boldlab_core_get_page_title_image(); ?>
<div class="qodef-m-content <?php echo esc_attr( boldlab_core_get_page_title_content_classes() ); ?>">
	<!-- ORIGINAL CODE -->
	<!--<h1 class="qodef-m-title entry-title portfo-title-style <?php /*echo esc_attr( boldlab_core_get_page_title_tag_classes() ); ?>">
		<?php  if ( qode_framework_is_installed( 'theme' ) ) {
			echo esc_html( boldlab_get_page_title_text() );
		} else {
			echo get_option( 'blogname' );
		} */?> 
	</h1>-->
	
	<!-- TEAM PULP FACTORY CODE -->
	<h1 class="qodef-m-title entry-title portfo-title-style" >
			
		
			<?php
			if (has_term('creative-services','portfolio-category')){
				echo "Creative Services & Production Agency_";				
			} else if (has_term('model-management', 'portfolio-category')) {
				echo "Model Management_";
			} else if (has_term('talent-platform','portfolio-category')) {
				echo "Talent Platform_";
			} else if ( qode_framework_is_installed( 'theme' ) ) {
			echo esc_html( boldlab_get_page_title_text() );
			} else {
			echo get_option( 'blogname' );
			}
		
		?>	
		 
	</h1>
	
	<p class="portfo-title-categories">
		<?php echo get_the_term_list(get_the_ID(), 'portfolio-category', '', ' | ', '');?>
	</p>
	<?php
	// Load subtitle template
	boldlab_core_template_part( 'title/layouts/standard', 'templates/parts/subtitle', '', boldlab_core_get_standard_title_layout_subtitle_text() ); ?>
</div>


<!-- Finished codesnippet -->

<?php
// Load title image template
boldlab_core_get_page_title_image(); ?>
<div class="qodef-m-content <?php echo esc_attr( boldlab_core_get_page_title_content_classes() ); ?>">	
<h1 class="qodef-m-title entry-title portfo-title-style <?php if (is_single()) { echo 'tpf_single-title-style'; } ?>" >
			<?php
			if (has_term('creative-services','portfolio-category')){
				echo "Creative Services & Production Agency_";				
			} else if (has_term('model-management', 'portfolio-category')) {
				echo "Model Management_";
			} else if (has_term('talent-platform','portfolio-category')) {
				echo "Talent Platform_";
			} else if ( qode_framework_is_installed( 'theme' ) ) {
			echo esc_html( boldlab_get_page_title_text() );
			} else {
			echo get_option( 'blogname' );
			}?>		 
	</h1>
	
	<p class="tpf_portfo-title-categories">
		<?php echo get_the_term_list(get_the_ID(), 'portfolio-category', '', ' | ', '');?>
	</p>
	<?php
	// Load subtitle template
	boldlab_core_template_part( 'title/layouts/standard', 'templates/parts/subtitle', '', boldlab_core_get_standard_title_layout_subtitle_text() ); ?>
</div>


<!-- Masonry small content edist -->

<article <?php post_class( 'qodef-portfolio-single-item qodef-e' ); ?>>
    <div class="qodef-e-inner tpf_single-contentbox">
        <div class="qodef-e-content qodef-grid qodef-layout--template qodef-gutter--small qodef--no-bottom-space">
            <div class="qodef-grid-inner clear">
                <div class="qodef-grid-item qodef-col--8">
                    <div class="qodef-media">
						<?php boldlab_core_template_part( 'post-types/portfolio', 'templates/parts/post-info/media', 'masonry' ); ?>
                    </div>
                </div>
                <div class="qodef-grid-item qodef-col--4 ">
					<?php boldlab_core_template_part( 'post-types/portfolio', 'templates/parts/post-info/title' ); ?>
					<?php boldlab_core_template_part( 'post-types/portfolio', 'templates/parts/post-info/content' ); ?>
                    <div class="qodef-portfolio-info">
						<?php boldlab_core_template_part( 'post-types/portfolio', 'templates/parts/post-info/custom-fields' ); ?>
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
						
						<?php // boldlab_core_template_part( 'post-types/portfolio', 'templates/parts/post-info/date' ); ?>
						<?php // boldlab_core_template_part( 'post-types/portfolio', 'templates/parts/post-info/categories' ); ?>
						<?php // boldlab_core_template_part( 'post-types/portfolio', 'templates/parts/post-info/social-share' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php boldlab_core_template_part( 'post-types/portfolio', 'single-navigation/templates/single-navigation' ); ?>
</article>



<!-- HOVER EFFECT on GALLERY PAGE -->

boldlab-core/inc/post-types/portfolio/shortcodes/portfolio-list/variations/info-on-hover/layouts/info-on-hover.php

<!-- default -->

<article <?php post_class( $item_classes ); ?>>
	<div class="qodef-e-inner" <?php qode_framework_inline_style($this_shortcode->get_list_item_style($params)) ?>>
		<div class="qodef-e-image">
			<?php boldlab_core_list_sc_template_part( 'post-types/portfolio/shortcodes/portfolio-list', 'post-info/image', '', $params ); ?>
		</div>
		<div class="qodef-e-content">
            <div class="qodef-e-content-inner">
				<a itemprop="url" href="<?php the_permalink(); ?>"></a>
				<div class="qodef-e-content-wrapper">
					<?php boldlab_core_list_sc_template_part( 'post-types/portfolio/shortcodes/portfolio-list', 'post-info/category', '', $params ); ?>
					<?php boldlab_core_list_sc_template_part( 'post-types/portfolio/shortcodes/portfolio-list', 'post-info/title', '', $params ); ?>
				</div>
			</div>
        </div>
	</div>
</article>

<!-- modified -->

<article <?php post_class( $item_classes ); ?>>
	<div class="qodef-e-inner" <?php qode_framework_inline_style($this_shortcode->get_list_item_style($params)) ?>>
		<div class="qodef-e-image">
			<?php boldlab_core_list_sc_template_part( 'post-types/portfolio/shortcodes/portfolio-list', 'post-info/image', '', $params ); ?>
		</div>
		<div class="qodef-e-content">
            <div class="qodef-e-content-inner">
				<a itemprop="url" href="<?php the_permalink(); ?>"></a>
				<div class="qodef-e-content-wrapper">
					<?php //boldlab_core_list_sc_template_part( 'post-types/portfolio/shortcodes/portfolio-list', 'post-info/category', '', $params ); ?>
					<?php boldlab_core_list_sc_template_part( 'post-types/portfolio/shortcodes/portfolio-list', 'post-info/title', '', $params ); 
					if (has_term('model-management','portfolio-category')){
							if(get_field('height')) : ?>
								<h5 class="tpf_portfo-hover-text">
									Height <span> <?php the_field('height'); ?></span>
							</h5>
							<?php endif; ?>

							<?php if(get_field('bust')) : ?>
								<h5 class="tpf_portfo-hover-text">
									Bust <span> <?php the_field('bust'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('waist')) : ?>
								<h5 class="tpf_portfo-hover-text">
									Waist <span> <?php the_field('waist'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('hips')) : ?>
								<h5 class="tpf_portfo-hover-text">
									Hips <span> <?php the_field('hips'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('size')) : ?>
								<h5 class="tpf_portfo-hover-text">
									Size <span> <?php the_field('size'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('shoes')) : ?>
								<h5 class="tpf_portfo-hover-text">
									Shoes <span> <?php the_field('shoes'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('hair')) : ?>
								<h5 class="tpf_portfo-hover-text">
									Hair <span> <?php the_field('hair'); ?></span>
							</h5>
							<?php endif; ?>
						
							<?php if(get_field('eyes')) : ?>
								<h5 class="tpf_portfo-hover-text">
									Eyes <span> <?php the_field('eyes'); ?></span>
							</h5>
							<?php endif; 
					} else 	if (has_term('talent-platform','portfolio-category')){
							if(get_field('location')) : ?>
								<h5 class="tpf_portfo-hover-text">
									<?php the_field('location'); ?>
							</h5>
							<?php endif; 
					}
					?>
				</div>
			</div>
        </div>
	</div>
</article>