<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

<footer>
		<div class="ms_yellow-bg">
			<div class="container ms_container">
				<div class="row align-items-start justify-content-center">
					<div class="ms_cta-wrapper col-sm-12 col-md-6 d-flex">
						<div class="ms_cta">
							<?php the_field('footer_subscribe_title') ?>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="position-relative">
							<input class="ms_text-input" type="text" placeholder="La tua email">
							<button class="ms_blue-button"><?php the_field('footer_subscribe_button') ?></button>
						</div>
						<div class="ms_privacy-check d-flex align-items-baseline">
							<input type="checkbox" name="" id="">
							<span><?php the_field('footer_subscribe_privacy') ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container ms_container">
			<div class="ms_footer-content d-flex flex-wrap align-items-end justify-content-between">
				<div>
					<img class="ms_footer-logo" src="<?php the_field('footer-logo'); ?>" alt="logo">
					<div class="ms_footer-links-1 d-flex flex-wrap">
						<?php 
						$link_1 = get_field('footer_link_1');
						if( $link_1 ): 
							$link_1_url = $link_1['url'];
							$link_1_title = $link_1['title'];
							?>
						<a class="ms_footer-link col-xs-12" href=”<?php echo esc_url( $link_1_url ); ?>” ><?php echo 
						esc_html( $link_1_title ); ?></a>
						<?php endif; ?>
						<?php 
						$link_2 = get_field('footer_link_2');
						if( $link_2 ): 
							$link_2_url = $link_2['url'];
							$link_2_title = $link_2['title'];
							?>
						<a class="ms_footer-link" href=”<?php echo esc_url( $link_2_url ); ?>” ><?php echo 
						esc_html( $link_2_title ); ?></a>
						<?php endif; ?>
						<?php 
						$link_3 = get_field('footer_link_3');
						if( $link_3 ): 
							$link_3_url = $link_3['url'];
							$link_3_title = $link_3['title'];
							?>
						<a class="ms_footer-link" href=”<?php echo esc_url( $link_3_url ); ?>” ><?php echo 
						esc_html( $link_3_title ); ?></a>
						<?php endif; ?>
					</div>
					<div class="ms_footer-links-2 d-flex flex-wrap">
						<?php 
						$link_4 = get_field('footer_link_4');
						if( $link_4 ): 
							$link_4_url = $link_4['url'];
							$link_4_title = $link_4['title'];
							?>
						<a class="ms_footer-link" href=”<?php echo esc_url( $link_4_url ); ?>” ><?php echo 
						esc_html( $link_4_title ); ?></a>
						<?php endif; ?>
						<?php 
						$link_5 = get_field('footer_link_5');
						if( $link_5 ): 
							$link_5_url = $link_5['url'];
							$link_5_title = $link_5['title'];
							?>
						<a class="ms_footer-link" href=”<?php echo esc_url( $link_5_url ); ?>” ><?php echo 
						esc_html( $link_5_title ); ?></a>
						<?php endif; ?>
						<?php 
						$link_6 = get_field('footer_link_6');
						if( $link_6 ): 
							$link_6_url = $link_6['url'];
							$link_6_title = $link_6['title'];
							?>
						<a class="ms_footer-link" href=”<?php echo esc_url( $link_6_url ); ?>” ><?php echo 
						esc_html( $link_6_title ); ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="ms_socials d-flex">
					<img src="<?php the_field('footer_social_1') ?>" alt="facebook">
					<img src="<?php the_field('footer_social_2') ?>" alt="instagram">
					<img src="<?php the_field('footer_social_3') ?>" alt="linkedin">
				</div>
			</div>
			<div class="ms_footer-end">
				<div class="d-flex flex-wrap justify-content-between">
					<span class="ms_address"><?php the_field('footer_address') ?></span>
					<span class="ms_privacy"><?php the_field('footer_privacy') ?></span>
				</div>
			</div>
		</div>
	</footer>

	<!-- <div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?> -->

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

