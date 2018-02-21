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

/**
 *
 * ACF VARIABLES SECTION 2
 *
 */

$section_2_block_type = get_field('section_2_block_type');
$section_2_block_number = get_field('section_2_block_number');
$section_2_full_module = $location . $section_2_block_type . $section_1_block_number;

/**
 *
 * ACF VARIABLES SECTION 3
 *
 */

$section_3_block_type = get_field('section_3_block_type');
$section_3_block_number = get_field('section_3_block_number');
$section_3_full_module = $location . $section_3_block_type . $section_3_block_number;

/**
 *
 * ACF VARIABLES SECTION 4
 *
 */

$section_4_block_type = get_field('section_4_block_type');
$section_4_block_number = get_field('section_4_block_number');
$section_4_full_module = $location . $section_4_block_type . $section_4_block_number;

/**
 *
 * ACF VARIABLES SECTION 5
 *
 */

$section_5_block_type = get_field('section_5_block_type');
$section_5_block_number = get_field('section_5_block_number');
$section_5_full_module = $location . $section_5_block_type . $section_5_block_number;

?>

<?php if ($block_type != "none") : ?>

<section id="SECTION-1">
					
	<?php //get_template_part( "_mfw-modules/hero-story-block-mfw-004" ); ?>
	<?php get_template_part( $section_1_full_module ); ?>
	
</section>

<?php endif; ?>

<?php if ($block_type != "none") : ?>

<section id="SECTION-2">

	<?php //get_template_part( '_mfw-modules/hero-story-block-mfw-003' ); ?>
	<?php get_template_part( $section_2_full_module ); ?>

</section>

<?php endif; ?>

<?php if ($block_type != "none") : ?>

<section id="SECTION-3">

	<?php //get_template_part( '_mfw-modules/info-block-mfw-002' ); ?>
	<?php get_template_part( $section_3_full_module ); ?>

</section>

<?php endif; ?>

<?php if ($block_type != "none") : ?>

<section id="SECTION-4">

	<?php //get_template_part( '_mfw-modules/roadmap-block-mfw-001' ); ?>
	<?php get_template_part( $section_4_full_module ); ?>

</section>

<?php endif; ?>

<?php if ($block_type != "none") : ?>

<section id="SECTION-5">

	<?php //get_template_part( '_mfw-modules/optin-block-mfw-001' ); ?>
	<?php get_template_part( $section_5_full_module ); ?>

</section>

<?php endif; ?>

<?php
get_footer();
























