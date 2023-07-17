<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<main>
		<section class="ms_hero position-relative">
			<div class="container ms_container">
				<img class="w-100 d-none ms_hero-image" src="<?php the_field('hero_image') ?>" alt="">
				<div class="d-flex flex-column align-items-start ms_hero-wrapper">
					<h2><?php the_field('company_name'); ?></h2>
					<h1 class="ms_hero-title"><?php the_field('services'); ?></h1>
					<button class="ms_blue-button"><?php the_field('discover_button'); ?></button>
				</div>
			</div>
			<img class="position-absolute ms_arrow-left" src="http://localhost:3000/wp-content/uploads/2023/07/Vector-3.svg" alt="">
			<img class="position-absolute ms_arrow-right" src="http://localhost:3000/wp-content/uploads/2023/07/Vector-4.svg" alt="">
		</section>

		<section class="ms_first-section">
			<div class="container ms_container">
				<h3><?php the_field('first_section_name'); ?></h3>
				<div><?php the_field('first_section_summary'); ?></div>
				<div class="ms_first-section-content row flex-wrap align-items-center">
					<div class="col-md-12 col-lg-7 order-2 order-sm-2 order-lg-1">
						<img src="<?php the_field('first_section_image'); ?>" alt="<?php echo $logo["alt"] ?>">
					</div>
					<div class="col-md-12 col-lg-5 order-1 order-sm-1 order-lg-2">
						<p><?php the_field('first_section_paragraph'); ?></p>
						<button class="ms_blue-button"><?php the_field('first_section_button'); ?></button>
					</div>
				</div>
			</div>
		</section>
		<section class="ms_second-section">
			<div class="container ms_container position-relative ms_second-section-container">
				<h3><?php the_field('second_section_name'); ?></h3>
				<h1><?php the_field('second_section_summary'); ?></h1>
				<div class="row gy-4">
					<div class="col-md-6 col-lg-4">
						<div class="card d-flex flex-column align-items-start">
							<img src="<?php the_field('second_section_card_1_image'); ?>" alt="">
							<h4><?php the_field('second_section_card_1_title'); ?></h4>
							<p><?php the_field('second_section_card_1_paragraph')?> </p>
							<button class="ms_blue-button"><?php the_field('second_section_card_1_button')?></button>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="card d-flex flex-column align-items-start">
							<img src="<?php the_field('second_section_card_2_image'); ?>" alt="">
							<h4><?php the_field('second_section_card_2_title'); ?></h4>
							<p><?php the_field('second_section_card_2_paragraph')?> </p>
							<button class="ms_blue-button"><?php the_field('second_section_card_2_button')?></button>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="card d-flex flex-column align-items-start">
							<img src="<?php the_field('second_section_card_3_image'); ?>" alt="">
							<h4><?php the_field('second_section_card_3_title'); ?></h4>
							<p><?php the_field('second_section_card_3_paragraph')?> </p>
							<button class="ms_blue-button"><?php the_field('second_section_card_3_button')?></button>
						</div>
					</div>
				</div>
				<!-- <div class="container ms_container position-relative ms_dots-container"> -->
					<div class="ms_dots d-flex container ms_container">
						<img class="ms_bg-dots" src="<?php the_field('second_section_background_image'); ?>" alt="">
						<img class="ms_bg-dots-2" src="<?php the_field('second_section_background_image'); ?>" alt="">
					</div>
				<!-- </div> -->
			</div>
		</section>
		<section class="ms_third-section">
			<div class="container ms_container">
				<div class="d-flex g-4 flex-wrap align-items-center">
					<div class="col-md-12 col-lg-6">
						<h3><?php the_field('third_section_name'); ?></h3>
						<h1><?php the_field('third_section_summary'); ?></h1>
						<p><?php the_field('third_section_paragraph'); ?></p>
						<button class="ms_white-button"><?php the_field('third_section_button'); ?></button>
					</div>
					<div class="col-md-12 col-lg-6 ms_image-wrapper">
						<img src="<?php the_field('third_section_image'); ?>" alt="mani con fiore">
					</div>
				</div>
			</div>
		</section>
	</main>

	

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
