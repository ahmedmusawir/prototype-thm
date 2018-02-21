<?php
/**
 * Template Name: Prototype Page
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

<?php 
/**
 *
 * ACF GLOBAL VARIABLES
 *
 */


$location = "_mfw-modules/";

/**
 *
 * ACF VARIABLES SECTION 1
 *
 */

$section_1_block_type = get_field('section_1_block_type');
$section_1_block_number = get_field('section_1_block_number');


$section_1_full_module = $location . $section_1_block_type . $section_1_block_number;





?>

<?php if ($block_type != "none") : ?>

<section id="SECTION-1">
					
	<?php get_template_part( "_mfw-modules/hero-story-block-mfw-004" ); ?>


	<h1>
		<?php 

		echo $section_1_full_module . "<br>";
		echo $section_1_block_type . "<br>";
		echo $section_1_block_number;

		?>
	</h1>
	
</section>

<?php endif; ?>


<section id="SECTION-2">

	<?php get_template_part( '_mfw-modules/hero-story-block-mfw-003' ); ?>
	
</section>


<section id="SECTION-3">

	<?php get_template_part( '_mfw-modules/info-block-mfw-002' ); ?>
	
</section>


<section id="SECTION-4">

	<?php get_template_part( '_mfw-modules/roadmap-block-mfw-001' ); ?>
	
</section>

<section id="SECTION-5">

	<?php get_template_part( '_mfw-modules/optin-block-mfw-001' ); ?>
	
</section>

<?php
get_footer();
























