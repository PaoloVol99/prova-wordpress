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
		<section class="ms_hero">
			<div class="container">
				<div class="d-flex flex-column align-items-start ms_hero-wrapper">
					<h2><?php the_field('company_name') ?></h2>
					<h1 class="ms_hero-title"><?php the_field('services') ?></h1>
					<div class="ms_blue-button"><?php the_field('discover_button') ?></div>
				</div>
			</div>
		</section>

		<section class="ms_first-section">
			<div class="container">
				<h3><?php the_field('first_section_name') ?></h3>
				<h1><?php the_field('first_section_summary') ?></h1>
				<div class="d-flex align-items-center">
					<img src="<?php the_field('first_section_image') ?>" alt="<?php echo $logo["alt"] ?>">
					<div>
						<p><?php the_field('first_section_paragraph') ?></p>
						<button class="ms_blue-button"><?php the_field('first_section_button') ?></button>
					</div>
				</div>
			</div>
		</section>
		<section class="ms_second-section">
			<div class="container">
				<h3><?php the_field('second_section_name') ?></h3>
				<h1><?php the_field('second_section_summary') ?></h1>
				<div class="row">
					<div class="col-4">
						<div class="card d-flex flex-column align-items-start">
							<img src="<?php the_field('second_section_card_1_image') ?>" alt="">
							<h4><?php the_field('second_section_card_1_title') ?></h4>
							<p><?php the_field('second_section_card_1_paragraph')?> </p>
							<button class="ms_blue-button"><?php the_field('second_section_card_1_button')?></button>
						</div>
					</div>
					<div class="col-4">
						<div class="card d-flex flex-column align-items-start">
							<img src="<?php the_field('second_section_card_2_image') ?>" alt="">
							<h4><?php the_field('second_section_card_2_title') ?></h4>
							<p><?php the_field('second_section_card_2_paragraph')?> </p>
							<button class="ms_blue-button"><?php the_field('second_section_card_2_button')?></button>
						</div>
					</div>
					<div class="col-4">
						<div class="card d-flex flex-column align-items-start">
							<img src="<?php the_field('second_section_card_3_image') ?>" alt="">
							<h4><?php the_field('second_section_card_3_title') ?></h4>
							<p><?php the_field('second_section_card_3_paragraph')?> </p>
							<button class="ms_blue-button"><?php the_field('second_section_card_3_button')?></button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ms_third-section">
			<div class="container">
				<div class="d-flex align-items-center">
					<div class="col-6">
						<h3><?php the_field('third_section_name') ?></h3>
						<h1><?php the_field('third_section_summary') ?></h1>
						<p><?php the_field('third_section_paragraph') ?></p>
						<button class="ms_white-button"><?php the_field('third_section_button') ?></button>
					</div>
					<div class="col-6">
						<img src="<?php the_field('third_section_image') ?>" alt="mani con fiore">
					</div>
				</div>
			</div>
		</section>
	</main>

	

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
