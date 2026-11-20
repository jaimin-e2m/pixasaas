<?php
/**
 * Homepage Finance Platform Section
 *
 * @package pixasaas
 */

$heading     = get_sub_field( 'heading' ) ?: 'Finance with a Simple platform';
$features    = get_sub_field( 'features' );
$cta_text    = get_sub_field( 'cta_text' ) ?: 'Learn more';
$cta_url     = get_sub_field( 'cta_url' ) ?: '#';
$card_image  = get_sub_field( 'card_image' );
?>

<section class="pixasaas-finance">
	<div class="pixasaas-finance__container">
		<div class="pixasaas-finance__card">
			<?php if ( $card_image ) : ?>
				<img src="<?php echo esc_url( $card_image['url'] ); ?>" alt="<?php echo esc_attr( $card_image['alt'] ?: 'Finance platform' ); ?>" class="pixasaas-finance__card-img">
			<?php else : ?>
				<div class="pixasaas-finance__card-content">
					<div class="pixasaas-finance__chat">
						<div class="pixasaas-finance__chat-header">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/feature-image.png' ); ?>" alt="Antonio L. Williams" class="pixasaas-finance__chat-avatar">
							<div class="pixasaas-finance__chat-info">
								<span class="pixasaas-finance__chat-name">Antonio L. Williams</span>
								<span class="pixasaas-finance__chat-time">3h ago</span>
							</div>
						</div>
						<p class="pixasaas-finance__chat-message">Developing a banking experience that offers greater satisfaction.</p>
					</div>

					<div class="pixasaas-finance__transactions">
						<div class="pixasaas-finance__transaction">
							<div class="pixasaas-finance__transaction-icon pixasaas-finance__transaction-icon--spotify">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
							</div>
							<div class="pixasaas-finance__transaction-info">
								<span class="pixasaas-finance__transaction-name">Spotify Subscription</span>
								<span class="pixasaas-finance__transaction-amount pixasaas-finance__transaction-amount--negative">-$150.00</span>
							</div>
						</div>
						<div class="pixasaas-finance__transaction">
							<div class="pixasaas-finance__transaction-icon pixasaas-finance__transaction-icon--atm">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="white"><rect x="2" y="4" width="20" height="16" rx="2" stroke="white" stroke-width="2" fill="none"/><line x1="2" y1="10" x2="22" y2="10" stroke="white" stroke-width="2"/></svg>
							</div>
							<div class="pixasaas-finance__transaction-info">
								<span class="pixasaas-finance__transaction-name">ATM Withdrawal</span>
								<span class="pixasaas-finance__transaction-amount pixasaas-finance__transaction-amount--positive">+$233.00</span>
							</div>
						</div>
						<div class="pixasaas-finance__transaction">
							<div class="pixasaas-finance__transaction-icon pixasaas-finance__transaction-icon--kfc">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="white" stroke-width="2" fill="none"/></svg>
							</div>
							<div class="pixasaas-finance__transaction-info">
								<span class="pixasaas-finance__transaction-name">KFC Restaurant</span>
								<span class="pixasaas-finance__transaction-amount pixasaas-finance__transaction-amount--negative">-$88.00</span>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>

		<div class="pixasaas-finance__content">
			<h2 class="pixasaas-finance__heading"><?php echo esc_html( $heading ); ?></h2>

			<?php if ( $features ) : ?>
				<div class="pixasaas-finance__features">
					<?php foreach ( $features as $feature ) : ?>
						<div class="pixasaas-finance__feature">
							<div class="pixasaas-finance__feature-icon">
								<?php if ( ! empty( $feature['icon'] ) ) : ?>
									<img src="<?php echo esc_url( $feature['icon']['url'] ); ?>" alt="">
								<?php else : ?>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
								<?php endif; ?>
							</div>
							<div class="pixasaas-finance__feature-text">
								<h3 class="pixasaas-finance__feature-title"><?php echo esc_html( $feature['title'] ); ?></h3>
								<?php if ( ! empty( $feature['description'] ) ) : ?>
									<p class="pixasaas-finance__feature-desc"><?php echo esc_html( $feature['description'] ); ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php else : ?>
				<div class="pixasaas-finance__features">
					<div class="pixasaas-finance__feature">
						<div class="pixasaas-finance__feature-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14l-4-4 1.41-1.41L11 13.17l5.59-5.59L18 9l-7 7z" fill="#000"/></svg>
						</div>
						<div class="pixasaas-finance__feature-text">
							<h3 class="pixasaas-finance__feature-title">Manage your spending and save</h3>
							<p class="pixasaas-finance__feature-desc">Manage your spending and save Stay on top of your spending by tracking what's left after the bills are paid.</p>
						</div>
					</div>
					<div class="pixasaas-finance__feature">
						<div class="pixasaas-finance__feature-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm-1 9h-2v2H9v-2H7v-2h2V7h2v2h2v2zm3 6H8v-2h8v2zm0-4h-3V9h3v4z" fill="#000"/></svg>
						</div>
						<div class="pixasaas-finance__feature-text">
							<h3 class="pixasaas-finance__feature-title">Easily view and manage your bills</h3>
							<p class="pixasaas-finance__feature-desc">See where money is coming in and how much is going out from your accounts.</p>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<a href="<?php echo esc_url( $cta_url ); ?>" class="pixasaas-btn pixasaas-btn--primary"><?php echo esc_html( $cta_text ); ?></a>
		</div>
	</div>
</section>
