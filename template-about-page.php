<?php
/**
 * Template Name: About Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<section id="BLOCK1">
					
	<?php get_template_part( '_mfw-modules/hero-block-mfw-002' ); ?>
	
</section>


<section id="BLOCK2">

	<?php get_template_part( '_mfw-modules/roadmap-block-mfw-001' ); ?>
	
</section>


<section id="BLOCK3">

	<?php get_template_part( '_mfw-modules/info-block-mfw-002' ); ?>
	
</section>


<section id="BLOCK4">

	<?php get_template_part( '_mfw-modules/info-block-mfw-003' ); ?>
	
</section>

<?php
get_footer();
























