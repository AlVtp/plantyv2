	<?php
	/**
	 * The Header for our theme.
	 *
	 * @package OceanWP WordPress theme
	 */

	?>
	<!DOCTYPE html>
	<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

		<?php wp_body_open(); ?>

		<?php do_action( 'ocean_before_outer_wrap' ); ?>

		<div id="outer-wrap" class="site clr">

			<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html( oceanwp_theme_strings( 'owp-string-header-skip-link', false ) ); ?></a>

			<?php do_action( 'ocean_before_wrap' ); ?>

			<div id="wrap" class="clr">


				<header>


	<div class="site-branding">


		<a href="<?php echo home_url(); ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Site Logo">
		</a>


		<div class="menu">
		<?php 
			wp_nav_menu(array(
			'menu' => 'menu-1',
			'theme_location' => 'primary',
			'container' => false,
			'menu_class' => 'navbar-nav mr-auto',
			'walker' => new My_Walker_Nav_Menu()
			));  
		?>
		</div>

	</div>

	</header>

				<?php do_action( 'ocean_before_main' ); ?>

				<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

					<?php do_action( 'ocean_page_header' ); ?>
