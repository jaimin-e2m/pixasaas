<?php
/**
 * Homepage Hero Section
 *
 * @package pixasaas
 */

$heading          = get_sub_field( 'heading' ) ?: 'Ensure the Well-being of Your Financial Planning';
$description      = get_sub_field( 'description' ) ?: 'PixeSaaS offers an intelligent solution that simplifies transactions while providing an enhanced chance to accumulate points across numerous locations.';
$primary_btn_text = get_sub_field( 'primary_button_text' ) ?: 'Book your card';
$primary_btn_url  = get_sub_field( 'primary_button_url' ) ?: '#';
$secondary_btn_text = get_sub_field( 'secondary_button_text' ) ?: 'Our Features';
$secondary_btn_url  = get_sub_field( 'secondary_button_url' ) ?: '#';
$hero_image       = get_sub_field( 'hero_image' );
$hero_overlay_text = get_sub_field( 'hero_overlay_text' ) ?: 'Initial Moves Toward Achieving Financial Freedom';
$counter_value    = get_sub_field( 'counter_value' ) ?: '525k+';
$counter_label    = get_sub_field( 'counter_label' ) ?: 'Happy Customers';
$earnings_amount  = get_sub_field( 'earnings_amount' ) ?: '$60.47K';
?>

<section class="pixasaas-hero">
	<div class="pixasaas-hero__text-container">
		<h1 class="pixasaas-hero__heading"><?php echo esc_html( $heading ); ?></h1>
		<p class="pixasaas-hero__description"><?php echo esc_html( $description ); ?></p>
		<div class="pixasaas-hero__buttons">
			<a href="<?php echo esc_url( $primary_btn_url ); ?>" class="pixasaas-btn pixasaas-btn--primary"><?php echo esc_html( $primary_btn_text ); ?></a>
			<a href="<?php echo esc_url( $secondary_btn_url ); ?>" class="pixasaas-btn pixasaas-btn--outline"><?php echo esc_html( $secondary_btn_text ); ?></a>
		</div>
	</div>

	<div class="pixasaas-hero__image-container">
		<div class="pixasaas-hero__image-wrapper">
			<?php if ( $hero_image ) : ?>
				<img src="<?php echo esc_url( $hero_image['url'] ); ?>" alt="<?php echo esc_attr( $hero_image['alt'] ?: 'Hero illustration' ); ?>" class="pixasaas-hero__image" loading="eager">
			<?php else : ?>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-bg.png' ); ?>" alt="Hero illustration" class="pixasaas-hero__image" loading="eager">
			<?php endif; ?>

			<div class="pixasaas-hero__overlay-left">
				<p class="pixasaas-hero__overlay-text"><?php echo esc_html( $hero_overlay_text ); ?></p>
				<div class="pixasaas-hero__trusted">
					<span class="pixasaas-hero__trusted-text">Trusted by leading companies</span>
					<div class="pixasaas-hero__trusted-avatars">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/feature-image.png' ); ?>" alt="" class="pixasaas-hero__avatar">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-avatar-2.png' ); ?>" alt="" class="pixasaas-hero__avatar">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-avatar-3.png' ); ?>" alt="" class="pixasaas-hero__avatar">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-avatar-bg.png' ); ?>" alt="" class="pixasaas-hero__avatar">
					</div>
				</div>
			</div>

			<div class="pixasaas-hero__counter-badge">
				<div class="pixasaas-hero__counter-avatars">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/feature-image.png' ); ?>" alt="" class="pixasaas-hero__counter-avatar">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-avatar-2.png' ); ?>" alt="" class="pixasaas-hero__counter-avatar">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-avatar-3.png' ); ?>" alt="" class="pixasaas-hero__counter-avatar">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-avatar-bg.png' ); ?>" alt="" class="pixasaas-hero__counter-avatar">
				</div>
				<div class="pixasaas-hero__counter-info">
					<span class="pixasaas-hero__counter-value"><?php echo esc_html( $counter_value ); ?></span>
					<span class="pixasaas-hero__counter-label"><?php echo esc_html( $counter_label ); ?></span>
				</div>
			</div>

			<div class="pixasaas-hero__earnings-card">
				<div class="pixasaas-hero__earnings-header">
					<span class="pixasaas-hero__earnings-label">My Earnings</span>
					<span class="pixasaas-hero__earnings-amount"><?php echo esc_html( $earnings_amount ); ?></span>
				</div>
				<div class="pixasaas-hero__earnings-row">
					<div class="pixasaas-hero__earnings-detail">
						<span class="pixasaas-hero__earnings-brand">PixeSaaS /week</span>
						<span class="pixasaas-hero__earnings-week">$35.78K /week</span>
					</div>
					<button class="pixasaas-hero__earnings-pay">Pay</button>
				</div>
			</div>
		</div>
	</div>
</section>
