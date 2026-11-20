<?php
/**
 * Homepage Global Presence Section
 *
 * @package pixasaas
 */

$heading     = get_sub_field( 'heading' ) ?: 'Our presence spans across the globe to fulfill your Requirements.';
$map_image   = get_sub_field( 'map_image' );
$counters    = get_sub_field( 'counters' );
?>

<section class="pixasaas-globe">
	<div class="pixasaas-globe__container">
		<h2 class="pixasaas-globe__heading"><?php echo esc_html( $heading ); ?></h2>

		<div class="pixasaas-globe__map">
			<?php if ( $map_image ) : ?>
				<img src="<?php echo esc_url( $map_image['url'] ); ?>" alt="<?php echo esc_attr( $map_image['alt'] ?: 'World map' ); ?>" class="pixasaas-globe__map-img" loading="lazy">
			<?php else : ?>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/world-map.svg' ); ?>" alt="World map" class="pixasaas-globe__map-img" loading="lazy">
			<?php endif; ?>
		</div>

		<div class="pixasaas-globe__counters">
			<?php if ( $counters ) : ?>
				<?php foreach ( $counters as $counter ) : ?>
					<div class="pixasaas-globe__counter">
						<span class="pixasaas-globe__counter-value" data-count="<?php echo esc_attr( $counter['value'] ); ?>"><?php echo esc_html( $counter['value'] ); ?></span>
						<span class="pixasaas-globe__counter-label"><?php echo esc_html( $counter['label'] ); ?></span>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<div class="pixasaas-globe__counter">
					<span class="pixasaas-globe__counter-value" data-count="500" data-suffix="+">500+</span>
					<span class="pixasaas-globe__counter-label">Outlet Services</span>
				</div>
				<div class="pixasaas-globe__counter">
					<span class="pixasaas-globe__counter-value" data-count="4.8" data-suffix="/5" data-decimals="1">4.8/5</span>
					<span class="pixasaas-globe__counter-label">Customer Review</span>
				</div>
				<div class="pixasaas-globe__counter">
					<span class="pixasaas-globe__counter-value" data-count="75.5" data-suffix="k+" data-decimals="1">75.5k+</span>
					<span class="pixasaas-globe__counter-label">Total Customer</span>
				</div>
				<div class="pixasaas-globe__counter">
					<span class="pixasaas-globe__counter-value" data-count="10" data-suffix="%">10%</span>
					<span class="pixasaas-globe__counter-label">Interest Rates</span>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
