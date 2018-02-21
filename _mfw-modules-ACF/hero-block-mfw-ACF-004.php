<?php 
/**
 *
 * MODULE: Hero Block 004
 *
 */
?>

<main id="hero-block-mfw-004" class="">
	<style type="text/css">
		#hero-block-mfw-004 {
			background: url("<?php the_field('hero-block-mfw-004-background_image'); ?>") no-repeat center center fixed;

			  -webkit-background-size: cover;

			  -moz-background-size: cover;

			  -o-background-size: cover;

			  background-size: cover;				
		}
	</style>
	<article id="hero-content" class="d-flex align-items-center mx-auto">
		<section class="container">
			<div class="col-sm-12 col-md-12 co-lg-12">
				<div class="item  wow fadeIn">
					<article class="hero-info-box text-center">
						<h1 class="hero-title"><?php the_field('hero-block-mfw-004-hero_title'); ?></h1>
						<p class="lead">
							<?php the_field('hero-block-mfw-004-hero_subtitle'); ?>
						</p>
						<aside class="hero-btn-holder">
							<a class="btn btn-secondary btn-lg" href="<?php the_field('hero-block-mfw-004-hero_button_link') ?>">
								<?php the_field('hero-block-mfw-004-hero_button_text') ?>
							</a>
						</aside>
					</article> <!-- END HERO INFO BOX -->
				</div>
			</div>
		</section> <!-- END CONTAINER -->
	</article>
</main>