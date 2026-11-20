<?php
/**
 * Homepage Pricing Section
 *
 * @package pixasaas
 */

$heading = get_sub_field( 'heading' ) ?: 'Our Range of Service Level Options';
$plans   = get_sub_field( 'plans' );
?>

<section class="pixasaas-pricing">
	<div class="pixasaas-pricing__container">
		<h2 class="pixasaas-pricing__heading"><?php echo esc_html( $heading ); ?></h2>

		<div class="pixasaas-pricing__toggle">
			<span class="pixasaas-pricing__toggle-label pixasaas-pricing__toggle-label--active" data-period="monthly">Monthly</span>
			<button class="pixasaas-pricing__toggle-switch" aria-label="Toggle billing period">
				<span class="pixasaas-pricing__toggle-knob"></span>
			</button>
			<span class="pixasaas-pricing__toggle-label" data-period="annual">Annual</span>
			<span class="pixasaas-pricing__save-badge">Save 20%</span>
		</div>

		<div class="pixasaas-pricing__cards">
			<?php if ( $plans ) : ?>
				<?php foreach ( $plans as $plan ) :
					$annual_price  = floatval( $plan['price'] );
					$monthly_price = round( $annual_price / 12 * 1.25 );
				?>
					<div class="pixasaas-pricing__card" data-monthly-price="<?php echo esc_attr( $monthly_price ); ?>" data-annual-price="<?php echo esc_attr( intval( $annual_price ) ); ?>">
						<div class="pixasaas-pricing__card-body">
							<?php if ( ! empty( $plan['card_image'] ) ) : ?>
								<div class="pixasaas-pricing__card-image">
									<img src="<?php echo esc_url( $plan['card_image']['url'] ); ?>" alt="<?php echo esc_attr( $plan['name'] ); ?>" loading="lazy">
								</div>
							<?php endif; ?>
							<h3 class="pixasaas-pricing__plan-name"><?php echo esc_html( $plan['name'] ); ?></h3>
							<?php if ( ! empty( $plan['features'] ) ) : ?>
								<ul class="pixasaas-pricing__features">
									<?php foreach ( $plan['features'] as $feature ) : ?>
										<li class="pixasaas-pricing__feature">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="10" fill="#12c64b"/><path d="M6 10l3 3 5-5" stroke="white" stroke-width="2" fill="none"/></svg>
											<?php echo esc_html( $feature['text'] ); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
							<div class="pixasaas-pricing__divider"></div>
							<div class="pixasaas-pricing__plan-price">
								<span class="pixasaas-pricing__price-amount">$<?php echo esc_html( $monthly_price ); ?></span>
								<span class="pixasaas-pricing__price-period">/ per month</span>
							</div>
							<p class="pixasaas-pricing__plan-desc">Individuals who earn their own income through employment and require digital financial services.</p>
							<a href="<?php echo esc_url( $plan['cta_url'] ?? '#' ); ?>" class="pixasaas-btn pixasaas-btn--primary pixasaas-pricing__subscribe"><?php echo esc_html( $plan['cta_text'] ?? 'Subscribe' ); ?></a>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<?php
				$default_plans = array(
					array(
						'name'          => 'Basic',
						'monthly_price' => '100',
						'annual_price'  => '960',
						'features'      => array( 'Basic card processing.', 'Online gateway integration.', 'Low transaction charges.' ),
						'image'         => 'pricing-basic',
					),
					array(
						'name'          => 'Exclusive',
						'monthly_price' => '200',
						'annual_price'  => '1920',
						'features'      => array( 'Multi-currency support.', 'Advanced fraud prevention.', 'Integration e-commerce platforms.' ),
						'image'         => 'pricing-exclusive',
					),
					array(
						'name'          => 'Premium',
						'monthly_price' => '300',
						'annual_price'  => '2880',
						'features'      => array( 'Customized solutions.', 'High-level security compliance.', 'API access for integration.' ),
						'image'         => 'pricing-premium',
					),
				);
				foreach ( $default_plans as $plan ) :
				?>
					<div class="pixasaas-pricing__card" data-monthly-price="<?php echo esc_attr( $plan['monthly_price'] ); ?>" data-annual-price="<?php echo esc_attr( $plan['annual_price'] ); ?>">
						<div class="pixasaas-pricing__card-body">
							<div class="pixasaas-pricing__card-image">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $plan['image'] . '.png' ); ?>" alt="<?php echo esc_attr( $plan['name'] ); ?>" loading="lazy">
							</div>
							<h3 class="pixasaas-pricing__plan-name"><?php echo esc_html( $plan['name'] ); ?></h3>
							<ul class="pixasaas-pricing__features">
								<?php foreach ( $plan['features'] as $feature ) : ?>
									<li class="pixasaas-pricing__feature">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="10" fill="#12c64b"/><path d="M6 10l3 3 5-5" stroke="white" stroke-width="2" fill="none"/></svg>
										<?php echo esc_html( $feature ); ?>
									</li>
								<?php endforeach; ?>
							</ul>
							<div class="pixasaas-pricing__divider"></div>
							<div class="pixasaas-pricing__plan-price">
								<span class="pixasaas-pricing__price-amount">$<?php echo esc_html( $plan['monthly_price'] ); ?></span>
								<span class="pixasaas-pricing__price-period">/ per month</span>
							</div>
							<p class="pixasaas-pricing__plan-desc">Individuals who earn their own income through employment and require digital financial services.</p>
							<a href="#" class="pixasaas-btn pixasaas-btn--primary pixasaas-pricing__subscribe">Subscribe</a>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
