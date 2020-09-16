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
					
					<!-- Custom code for displaying *talent* category custom fields -->
					<?php if(get_field('location')) : ?>
								<h5>
									Location: <span> <?php the_field('location'); ?></span>
							</h5>
							<?php endif; ?>
					
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
						
					</div>
						
					<div class="tpf_social-follow-linkbox">
								<?php 
									if (get_field('instagram')) : ?>
									<span class="qodef-shortcode qodef-m qodef-icon-holder qodef-size--small qodef-layout--normal tpf_social-follow-link" data-hover-color="#4200ff">
			<a itemprop="url" href="<?php the_field(instagram);?>" target="_blank">
            <span class="qodef-icon-elegant-icons social_instagram qodef-icon qodef-e tpf_social-icon-size" style="color: rgb(0, 0, 0);"></span>            </a>
	</span><?php endif;
								if (get_field('facebook')) : ?>
									<span class="qodef-shortcode qodef-m qodef-icon-holder qodef-size--small qodef-layout--normal tpf_social-follow-link" data-hover-color="#4200ff">
			<a itemprop="url" href="<?php the_field(facebook);?>" target="_blank">
            <span class="qodef-icon-elegant-icons social_facebook qodef-icon qodef-e tpf_social-icon-size" style="color: rgb(0, 0, 0);"></span>            </a>
	</span><?php endif;
								if (get_field('twitter')) : ?>
									<span class="qodef-shortcode qodef-m qodef-icon-holder qodef-size--small qodef-layout--normal tpf_social-follow-link" data-hover-color="#4200ff">
			<a itemprop="url" href="<?php the_field(twitter);?>" target="_blank">
            <span class="qodef-icon-elegant-icons social_twitter qodef-icon qodef-e tpf_social-icon-size" style="color: rgb(0, 0, 0);"></span>            </a>
	</span><?php endif;
								if (get_field('linkedin')) : ?>
									<span class="qodef-shortcode qodef-m qodef-icon-holder qodef-size--small qodef-layout--normal tpf_social-follow-link" data-hover-color="#4200ff">
			<a itemprop="url" href="<?php the_field(linkedin);?>" target="_blank">
            <span class="qodef-icon-elegant-icons social_linkedin qodef-icon qodef-e tpf_social-icon-size" style="color: rgb(0, 0, 0);"></span>            </a>
	</span><?php endif;
								if (get_field('youtube')) : ?>
									<span class="qodef-shortcode qodef-m qodef-icon-holder qodef-size--small qodef-layout--normal tpf_social-follow-link" data-hover-color="#4200ff">
			<a itemprop="url" href="<?php the_field(linkedin);?>" target="_blank">
            <span class="qodef-icon-elegant-icons social_youtube qodef-icon qodef-e tpf_social-icon-size" style="color: rgb(0, 0, 0);"></span>            </a>
	</span><?php endif;
								if (get_field('kavyar')) : ?>
			<h5 class="tpf_social-follow-kavyar"><a class="tpf_kavyar-link" href="<?php the_field('kavyar'); ?>">Kavyar portfolio</a></h5>
								<?php endif;?>	
					</div>
						
						<!-- End Of Custom Code -->
						
						<?php // boldlab_core_template_part( 'post-types/portfolio', 'templates/parts/post-info/date' ); ?>
						<?php // boldlab_core_template_part( 'post-types/portfolio', 'templates/parts/post-info/categories' ); ?>
						<?php // boldlab_core_template_part( 'post-types/portfolio', 'templates/parts/post-info/social-share' ); ?>
                   
                </div>
            </div>
        </div>
    </div>
	<?php boldlab_core_template_part( 'post-types/portfolio', 'single-navigation/templates/single-navigation' ); ?>
</article>

<section>
<?php if(has_term('model-management','portfolio-category')) {?>
<div class="tpf_quote-box tpf_flex-center tpf_space-eighty">
    <img class="tpf_quote-icon" src="http://www.teampulpfactory.net/wp-content/uploads/2020/07/quotation.png" alt="quote marks icon">
    <div class="tpf_quote-textbox">
        <h3>Want to be part of the Team Pulp Family?</h3>
        <p><a href="#">Apply Here</a> <span class="tpf_tiny-text">to become our model. Let's chase those dreams!</span></p>
    </div>
</div> <?php
}  else if (has_term('talent-platform','portfolio-category')) {?>
<div class="tpf_quote-box tpf_flex-center tpf_space-eighty">
    <img class="tpf_quote-icon" src="http://www.teampulpfactory.net/wp-content/uploads/2020/07/quotation.png" alt="quote marks icon">
    <div class="tpf_quote-textbox">
        <h3>Want to be part of the Team Pulp Family?</h3>
        <p><span class="tpf_tiny-text">Don't be shy, </span><a href="#">Apply Here</a> <span class="tpf_tiny-text tpf_padding-left-six">to become our talent.</span></p>
        <p class="tpf_tiny-line-height">_</p>
        <p class="tpf_tiny-text">Let's join our forces and create together!</p>
    </div>
</div>
	<?php
		} ?>

<div class="tpf_memberbox tpf_space-fourty"> 
  	<div class="tpf_member-titlebox">
        <h3 class="tpf_member-title">We are members of:</h3> 
		<span class="tpf_member-title-line-container"><span class="tpf_member-hr"></span></span>
    </div> 

    <div class="tpf_member-flex">
        <a href="https://www.businessoffashion.com/" target="_blank"><img class="tpf_member-icon" src="http://www.teampulpfactory.net/wp-content/uploads/2020/07/DEV-member-logo.png" alt="Business of Fashion logo"></a>
        <a href="https://fafi.fi/" target="_blank"><img class="tpf_member-icon" src="http://www.teampulpfactory.net/wp-content/uploads/2020/07/DEV-member-logo.png" alt="Fashion Finland Logo"></a>
        <a href="https://www.agma.fi/" target="_blank"><img class="tpf_member-icon" src="http://www.teampulpfactory.net/wp-content/uploads/2020/07/DEV-member-logo.png" alt="Agma Logo"></a>
        <a href="https://www.spot.fi/" target="_blank"><img class="tpf_member-icon" src="http://www.teampulpfactory.net/wp-content/uploads/2020/07/DEV-member-logo.png" alt="Sopt logo"></a>
        <a href="https://www.yrittajat.fi/helsingin-yrittajat/" target="_blank"><img class="tpf_member-icon" src="http://www.teampulpfactory.net/wp-content/uploads/2020/07/DEV-member-logo.png" alt="Helsingin Yrittäjät logo"></a>
	</div>
</div>
</section>