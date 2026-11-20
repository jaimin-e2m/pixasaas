<?php
/**
 * Homepage Simple Steps Section
 *
 * @package pixasaas
 */

$heading     = get_sub_field( 'heading' ) ?: 'Join Us in Four Simple Steps';
$description = get_sub_field( 'description' ) ?: 'Trust plays a paramount role in establishing and maintaining strong relationships with customers.';
$steps       = get_sub_field( 'steps' );
?>

<section class="pixasaas-steps">
	<div class="pixasaas-steps__container">
		<div class="pixasaas-steps__header">
			<h2 class="pixasaas-steps__heading"><?php echo esc_html( $heading ); ?></h2>
			<p class="pixasaas-steps__description"><?php echo esc_html( $description ); ?></p>
		</div>

		<?php if ( $steps ) : ?>
			<div class="pixasaas-steps__grid">
				<?php foreach ( $steps as $index => $step ) : ?>
					<div class="pixasaas-steps__card pixasaas-steps__card--<?php echo esc_attr( $index + 1 ); ?>">
						<div class="pixasaas-steps__card-content">
							<h3 class="pixasaas-steps__card-title"><?php echo esc_html( $step['title'] ); ?></h3>
							<?php if ( ! empty( $step['description'] ) ) : ?>
								<p class="pixasaas-steps__card-desc"><?php echo esc_html( $step['description'] ); ?></p>
							<?php endif; ?>
							<?php if ( ! empty( $step['link_text'] ) ) : ?>
								<a href="<?php echo esc_url( $step['link_url'] ?? '#' ); ?>" class="pixasaas-steps__card-link">
									<?php echo esc_html( $step['link_text'] ); ?>
									<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
								</a>
							<?php endif; ?>
						</div>
						<?php if ( ! empty( $step['image'] ) ) : ?>
							<div class="pixasaas-steps__card-image">
								<img src="<?php echo esc_url( $step['image']['url'] ); ?>" alt="<?php echo esc_attr( $step['image']['alt'] ?: $step['title'] ); ?>" loading="lazy">
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php else : ?>
			<div class="pixasaas-steps__grid">
				<div class="pixasaas-steps__card pixasaas-steps__card--1 pixasaas-steps__card--green">
					<div class="pixasaas-steps__card-content">
						<span class="pixasaas-steps__card-number">01</span>
						<h3 class="pixasaas-steps__card-title">Prepare Document</h3>
						<p class="pixasaas-steps__card-desc">Financial services trust is paramount, and PixeSaaS builds it into every transaction.</p>
					</div>
					<div class="pixasaas-steps__card-image">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/step-1.png' ); ?>" alt="Prepare Document" loading="lazy">
					</div>
				</div>
				<div class="pixasaas-steps__card pixasaas-steps__card--2 pixasaas-steps__card--cyan">
					<div class="pixasaas-steps__card-content">
						<span class="pixasaas-steps__card-number">02</span>
						<h3 class="pixasaas-steps__card-title">Make Account</h3>
						<p class="pixasaas-steps__card-desc">Financial trust is key, and PixeSaaS prioritizes it in every interaction.</p>
						<a href="#" class="pixasaas-steps__card-link">
							Learn more
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
						</a>
					</div>
				</div>
				<div class="pixasaas-steps__card pixasaas-steps__card--3 pixasaas-steps__card--pink">
					<div class="pixasaas-steps__card-content">
						<span class="pixasaas-steps__card-number">03</span>
						<h3 class="pixasaas-steps__card-title">Card Activation</h3>
						<p class="pixasaas-steps__card-desc">Trust in financial services is crucial; PixeSaaS embeds it in all it does.</p>
						<a href="#" class="pixasaas-steps__card-link">
							Learn more
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
						</a>
					</div>
				</div>
				<div class="pixasaas-steps__card pixasaas-steps__card--4 pixasaas-steps__card--yellow">
					<div class="pixasaas-steps__card-content">
						<span class="pixasaas-steps__card-number">04</span>
						<h3 class="pixasaas-steps__card-title">Enjoy!</h3>
						<p class="pixasaas-steps__card-desc">PixeSaaS places trust at the heart of financial services, every time.</p>
						<a href="#" class="pixasaas-steps__card-link">
							Learn more
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
						</a>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
