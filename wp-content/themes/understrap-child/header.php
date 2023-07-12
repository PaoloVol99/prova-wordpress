<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		
		<a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
			<?php esc_html_e( 'Skip to content', 'understrap' ); ?>
		</a>
		
		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>
		
		<nav>
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col d-flex align-items-center ms_logo-links">
						<img src="<?php the_field('logo') ?>" alt="logo">
						<div class="ms_nav-items d-flex">
							<div class="d-flex ms_nav-item align-items-center">
								<?php 
								$link_1 = get_field('header_link_1');
								if( $link_1 ): 
									$link_1_url = $link_1['url'];
									$link_1_title = $link_1['title'];
									?>
								<a href=”<?php echo esc_url( $link_1_url ); ?>” ><?php echo 
								esc_html( $link_1_title ); ?></a>
								<?php endif; ?>
								<img src="http://localhost:3000/wp-content/uploads/2023/07/Vector-1.png" alt="">
							</div>
							<div class="d-flex ms_nav-item align-items-center">
								<?php 
								$link_2 = get_field('header_link_2');
								if( $link_2 ): 
									$link_2_url = $link_2['url'];
									$link_2_title = $link_2['title'];
									?>
								<a href=”<?php echo esc_url( $link_2_url ); ?>” ><?php echo 
								esc_html( $link_2_title ); ?></a>
								<?php endif; ?>
								<img src="http://localhost:3000/wp-content/uploads/2023/07/Vector-1.png" alt="">
							</div>
							<div>
								<?php 
								$link_3 = get_field('header_link_3');
								if( $link_3 ): 
									$link_3_url = $link_3['url'];
									$link_3_title = $link_3['title'];
									?>
								<a href=”<?php echo esc_url( $link_3_url ); ?>” ><?php echo 
								esc_html( $link_3_title ); ?></a>
								<?php endif; ?>
							</div>
							<div>
								<?php 
								$link_4 = get_field('header_link_4');
								if( $link_4 ): 
									$link_4_url = $link_4['url'];
									$link_4_title = $link_4['title'];
									?>
								<a href=”<?php echo esc_url( $link_4_url ); ?>” ><?php echo 
								esc_html( $link_4_title ); ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="col-auto">
						<button class="ms_blue-button">
							<?php the_field('button') ?>
						</button>
					</div>
				</div>
			</div>
		</nav>
	</header><!-- #wrapper-navbar -->
	