<?php
/**
 * Homepage Free Trial Section
 *
 * @package pixasaas
 */

$heading     = get_sub_field( 'heading' ) ?: 'Start your 14-days Free trial';
$description = get_sub_field( 'description' ) ?: 'Bring your team together. No contracts, no commitments.';
$person_image = get_sub_field( 'person_image' );
$form_id     = get_sub_field( 'gravity_form_id' );
$checklist   = get_sub_field( 'checklist' );
?>

<section class="pixasaas-trial">
	<div class="pixasaas-trial__container">
		<div class="pixasaas-trial__image">
			<?php if ( $person_image ) : ?>
				<img src="<?php echo esc_url( $person_image['url'] ); ?>" alt="<?php echo esc_attr( $person_image['alt'] ?: 'Start free trial' ); ?>" loading="lazy">
			<?php else : ?>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/trial-person.png' ); ?>" alt="Start free trial" loading="lazy">
			<?php endif; ?>
		</div>

		<div class="pixasaas-trial__content">
			<h2 class="pixasaas-trial__heading"><?php echo esc_html( $heading ); ?></h2>
			<p class="pixasaas-trial__description"><?php echo esc_html( $description ); ?></p>

			<?php if ( $form_id && function_exists( 'gravity_form' ) ) : ?>
				<?php gravity_form( intval( $form_id ), false, false, false, null, true ); ?>
			<?php else : ?>
				<div class="pixasaas-trial__form">
					<div class="pixasaas-trial__form-row">
						<input type="email" placeholder="Enter Your Email" class="pixasaas-trial__input">
						<button type="button" class="pixasaas-btn pixasaas-btn--primary pixasaas-trial__submit">Subscribe</button>
					</div>
				</div>
			<?php endif; ?>

			<div class="pixasaas-trial__checklist">
				<?php if ( $checklist ) : ?>
					<?php foreach ( $checklist as $item ) : ?>
						<div class="pixasaas-trial__check-item">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="10" fill="#12c64b"/><path d="M6 10l3 3 5-5" stroke="white" stroke-width="2" fill="none"/></svg>
							<span><?php echo esc_html( $item['text'] ); ?></span>
						</div>
					<?php endforeach; ?>
				<?php else : ?>
					<div class="pixasaas-trial__check-item">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="10" fill="#12c64b"/><path d="M6 10l3 3 5-5" stroke="white" stroke-width="2" fill="none"/></svg>
						<span>No credit card required.</span>
					</div>
					<div class="pixasaas-trial__check-item">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="10" fill="#12c64b"/><path d="M6 10l3 3 5-5" stroke="white" stroke-width="2" fill="none"/></svg>
						<span>Cancel anytime</span>
					</div>
				<?php endif; ?>
			</div>

			<div class="pixasaas-trial__app-badges">
				<a href="#" class="pixasaas-trial__badge">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/app-store.png' ); ?>" alt="Download on the App Store" loading="lazy">
				</a>
				<a href="#" class="pixasaas-trial__badge">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/google-play.png' ); ?>" alt="Get it on Google Play" loading="lazy">
				</a>
			</div>
		</div>
	</div>
</section>
