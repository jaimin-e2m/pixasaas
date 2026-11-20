<?php
/**
 * Homepage Testimonials Section
 *
 * @package pixasaas
 */

$heading      = get_sub_field( 'heading' ) ?: 'What Our Delighted Customer Shares';
$testimonials = get_sub_field( 'testimonials' );
?>

<section class="pixasaas-testimonials">
	<div class="pixasaas-testimonials__container">
		<h2 class="pixasaas-testimonials__heading"><?php echo esc_html( $heading ); ?></h2>

		<div class="pixasaas-testimonials__grid">
			<?php if ( $testimonials ) : ?>
				<?php foreach ( $testimonials as $testimonial ) : ?>
					<div class="pixasaas-testimonials__card">
						<div class="pixasaas-testimonials__quote-icon">
							<svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="35" cy="35" r="35" fill="#000"/>
								<path d="M28 30H20C20 25.6 23.6 22 28 22V18C21.4 18 16 23.4 16 30V42H28V30ZM44 30V42H56V30H48C48 25.6 51.6 22 56 22V18C49.4 18 44 23.4 44 30Z" fill="white"/>
							</svg>
						</div>
						<p class="pixasaas-testimonials__text"><?php echo esc_html( $testimonial['text'] ); ?></p>
						<div class="pixasaas-testimonials__author">
							<?php if ( ! empty( $testimonial['image'] ) ) : ?>
								<img src="<?php echo esc_url( $testimonial['image']['url'] ); ?>" alt="<?php echo esc_attr( $testimonial['name'] ); ?>" class="pixasaas-testimonials__author-img" loading="lazy">
							<?php else : ?>
								<div class="pixasaas-testimonials__author-img pixasaas-testimonials__author-img--placeholder"></div>
							<?php endif; ?>
							<div class="pixasaas-testimonials__author-info">
								<span class="pixasaas-testimonials__author-name"><?php echo esc_html( $testimonial['name'] ); ?></span>
								<span class="pixasaas-testimonials__author-role"><?php echo esc_html( $testimonial['designation'] ); ?></span>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<div class="pixasaas-testimonials__card">
					<div class="pixasaas-testimonials__quote-icon">
						<svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="35" cy="35" r="35" fill="#000"/>
							<path d="M28 30H20C20 25.6 23.6 22 28 22V18C21.4 18 16 23.4 16 30V42H28V30ZM44 30V42H56V30H48C48 25.6 51.6 22 56 22V18C49.4 18 44 23.4 44 30Z" fill="white"/>
						</svg>
					</div>
					<p class="pixasaas-testimonials__text">"We seamlessly integrated PixeSaaS into our financial operations, and the results speak volumes."</p>
					<div class="pixasaas-testimonials__author">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/testimonial-1.png' ); ?>" alt="Dean M. Nazario" class="pixasaas-testimonials__author-img" loading="lazy">
						<div class="pixasaas-testimonials__author-info">
							<span class="pixasaas-testimonials__author-name">Dean M. Nazario</span>
							<span class="pixasaas-testimonials__author-role">Fitness Trainer</span>
						</div>
					</div>
				</div>
				<div class="pixasaas-testimonials__card">
					<div class="pixasaas-testimonials__quote-icon">
						<svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="35" cy="35" r="35" fill="#000"/>
							<path d="M28 30H20C20 25.6 23.6 22 28 22V18C21.4 18 16 23.4 16 30V42H28V30ZM44 30V42H56V30H48C48 25.6 51.6 22 56 22V18C49.4 18 44 23.4 44 30Z" fill="white"/>
						</svg>
					</div>
					<p class="pixasaas-testimonials__text">"PixeSaaS transformed our approach to financial management with their intuitive platform."</p>
					<div class="pixasaas-testimonials__author">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/testimonial-2.png' ); ?>" alt="Dean M. Nazario" class="pixasaas-testimonials__author-img" loading="lazy">
						<div class="pixasaas-testimonials__author-info">
							<span class="pixasaas-testimonials__author-name">Dean M. Nazario</span>
							<span class="pixasaas-testimonials__author-role">Fitness Trainer</span>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
