<!-- 5.8.2020 -->

<!-- EDITOITAVA TIEDOSTO:
boldlab-core/inc/post-types/portfolio/shortcodes/portfolio-list/variations/info-on-hover/layouts/info-on-hover.php
 -->

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
	<div class="tpf_portfo-list-titlebox">
		<?php if(get_field('portfolio_title_description')) { ?>
			<h5>
				<?php the_field('portfolio_title_description'); ?>
			</h5>
		<?php 
			} else {?>
		<h5>_</h5> 
		<?php	} ?>	
	
		<?php boldlab_core_list_sc_template_part( 'post-types/portfolio/shortcodes/portfolio-list', 'post-info/title', '', $params ); ?>

	</div>
</article>