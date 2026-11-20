<?php
/**
 * Homepage Custom Reports Section
 *
 * @package pixasaas
 */

$heading     = get_sub_field( 'heading' ) ?: 'Custom-made reports to make great decisions';
$description = get_sub_field( 'description' ) ?: 'We have considered our solutions to support every stage of your growth. We are the fastest and easiest way to launch SaaS.';
$cta_text    = get_sub_field( 'cta_text' ) ?: 'Get started now';
$cta_url     = get_sub_field( 'cta_url' ) ?: '#';
$dashboard_image = get_sub_field( 'dashboard_image' );
$stat_1_value = get_sub_field( 'stat_1_value' ) ?: '20%';
$stat_1_label = get_sub_field( 'stat_1_label' ) ?: 'Increase in retention';
$stat_2_value = get_sub_field( 'stat_2_value' ) ?: '1.5X';
$stat_2_label = get_sub_field( 'stat_2_label' ) ?: 'User base growth';
?>

<section class="pixasaas-reports">
	<div class="pixasaas-reports__container">
		<div class="pixasaas-reports__content">
			<h2 class="pixasaas-reports__heading"><?php echo esc_html( $heading ); ?></h2>
			<p class="pixasaas-reports__description"><?php echo esc_html( $description ); ?></p>
			<a href="<?php echo esc_url( $cta_url ); ?>" class="pixasaas-btn pixasaas-btn--primary"><?php echo esc_html( $cta_text ); ?></a>
		</div>

		<div class="pixasaas-reports__dashboard">
			<?php if ( $dashboard_image ) : ?>
				<img src="<?php echo esc_url( $dashboard_image['url'] ); ?>" alt="<?php echo esc_attr( $dashboard_image['alt'] ?: 'Dashboard' ); ?>" class="pixasaas-reports__dashboard-img" loading="lazy">
			<?php else : ?>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/dashboard.png' ); ?>" alt="Dashboard" class="pixasaas-reports__dashboard-img" loading="lazy">
			<?php endif; ?>

			<div class="pixasaas-reports__stats-bar">
				<div class="pixasaas-reports__stat">
					<span class="pixasaas-reports__stat-value"><?php echo esc_html( $stat_1_value ); ?></span>
					<span class="pixasaas-reports__stat-label"><?php echo esc_html( $stat_1_label ); ?></span>
				</div>
				<div class="pixasaas-reports__stat-divider"></div>
				<div class="pixasaas-reports__stat">
					<span class="pixasaas-reports__stat-value"><?php echo esc_html( $stat_2_value ); ?></span>
					<span class="pixasaas-reports__stat-label"><?php echo esc_html( $stat_2_label ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>
