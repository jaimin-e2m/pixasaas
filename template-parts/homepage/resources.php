<?php
/**
 * Homepage Resources/Blog Section
 *
 * @package pixasaas
 */

$heading = get_sub_field( 'heading' ) ?: 'Browse our Resources & Updates';
$posts   = get_sub_field( 'posts' );
?>

<section class="pixasaas-resources">
	<div class="pixasaas-resources__container">
		<h2 class="pixasaas-resources__heading"><?php echo esc_html( $heading ); ?></h2>

		<div class="pixasaas-resources__grid">
			<?php if ( $posts ) : ?>
				<?php foreach ( $posts as $item ) : ?>
					<article class="pixasaas-resources__card">
						<div class="pixasaas-resources__card-image">
							<?php if ( ! empty( $item['image'] ) ) : ?>
								<img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" loading="lazy">
							<?php endif; ?>
							<?php if ( ! empty( $item['category'] ) ) : ?>
								<span class="pixasaas-resources__card-tag"><?php echo esc_html( $item['category'] ); ?></span>
							<?php endif; ?>
						</div>
						<div class="pixasaas-resources__card-content">
							<h3 class="pixasaas-resources__card-title">
								<a href="<?php echo esc_url( $item['link'] ?? '#' ); ?>"><?php echo esc_html( $item['title'] ); ?></a>
							</h3>
							<div class="pixasaas-resources__card-meta">
								<span class="pixasaas-resources__card-date"><?php echo esc_html( $item['date'] ); ?></span>
								<a href="<?php echo esc_url( $item['link'] ?? '#' ); ?>" class="pixasaas-resources__card-arrow" aria-label="Read more">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
								</a>
							</div>
						</div>
					</article>
				<?php endforeach; ?>
			<?php else : ?>
				<?php
				$default_posts = array(
					array( 'title' => 'Choosing the Right Payment Solution for Your Business', 'category' => 'Cash', 'date' => 'Sep 4, 2023', 'img' => 'blog-1.png' ),
					array( 'title' => 'Secure Payment Solutions: Protecting Your Financial', 'category' => 'Cards', 'date' => 'March 8, 2023', 'img' => 'blog-2.png' ),
					array( 'title' => 'Mobile Payment Solutions: The Future of Transactions', 'category' => 'Transfers', 'date' => 'March 25, 2023', 'img' => 'blog-3.png' ),
				);
				foreach ( $default_posts as $post_item ) :
				?>
					<article class="pixasaas-resources__card">
						<div class="pixasaas-resources__card-image">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $post_item['img'] ); ?>" alt="<?php echo esc_attr( $post_item['title'] ); ?>" loading="lazy">
							<span class="pixasaas-resources__card-tag"><?php echo esc_html( $post_item['category'] ); ?></span>
						</div>
						<div class="pixasaas-resources__card-content">
							<h3 class="pixasaas-resources__card-title">
								<a href="#"><?php echo esc_html( $post_item['title'] ); ?></a>
							</h3>
							<div class="pixasaas-resources__card-meta">
								<span class="pixasaas-resources__card-date"><?php echo esc_html( $post_item['date'] ); ?></span>
								<a href="#" class="pixasaas-resources__card-arrow" aria-label="Read more">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
								</a>
							</div>
						</div>
					</article>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
