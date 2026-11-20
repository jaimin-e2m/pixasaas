<?php
/**
 * Homepage Header
 *
 * @package pixasaas
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'homepage-template' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pixasaas' ); ?></a>

	<header id="masthead" class="pixasaas-header">
		<div class="pixasaas-header__container">
			<div class="pixasaas-header__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="pixasaas-header__logo-link" rel="home">
					<span class="pixasaas-header__logo-icon">
						<svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="41" height="41" rx="20.5" fill="#000000"/>
						</svg>
					</span>
					<span class="pixasaas-header__logo-text"><?php bloginfo( 'name' ); ?></span>
				</a>
			</div>

			<nav class="pixasaas-header__nav" id="site-navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'pixasaas' ); ?>">
				<button class="pixasaas-header__menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="pixasaas-header__hamburger"></span>
					<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'pixasaas' ); ?></span>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'menu_class'     => 'pixasaas-header__menu',
						'fallback_cb'    => function() {
							echo '<ul class="pixasaas-header__menu">';
							echo '<li><a href="#">Home</a></li>';
							echo '<li><a href="#">Services</a></li>';
							echo '<li><a href="#">Pricing</a></li>';
							echo '<li><a href="#">Career</a></li>';
							echo '</ul>';
						},
					)
				);
				?>
			</nav>

			<div class="pixasaas-header__actions">
				<a href="#" class="pixasaas-header__login">Login</a>
				<a href="#" class="pixasaas-btn pixasaas-btn--primary pixasaas-header__cta">Get started</a>
			</div>
		</div>
	</header>
