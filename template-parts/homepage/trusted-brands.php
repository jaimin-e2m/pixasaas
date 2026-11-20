<?php
/**
 * Homepage Trusted Brands Section
 *
 * @package pixasaas
 */

$heading = get_sub_field( 'heading' ) ?: 'Trusted by 2200+ digital brands.';
$brands  = get_sub_field( 'brands' );
?>

<section class="pixasaas-brands">
	<div class="pixasaas-brands__container">
		<h2 class="pixasaas-brands__heading"><?php echo esc_html( $heading ); ?></h2>

		<div class="pixasaas-brands__grid">
			<?php if ( $brands ) : ?>
				<?php foreach ( $brands as $brand ) : ?>
					<div class="pixasaas-brands__item">
						<?php if ( ! empty( $brand['logo'] ) ) : ?>
							<img src="<?php echo esc_url( $brand['logo']['url'] ); ?>" alt="<?php echo esc_attr( $brand['logo']['alt'] ?: 'Brand logo' ); ?>" loading="lazy">
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<?php for ( $i = 1; $i <= 8; $i++ ) : ?>
					<div class="pixasaas-brands__item">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand-' . $i . '.png' ); ?>" alt="Brand partner" loading="lazy">
					</div>
				<?php endfor; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
