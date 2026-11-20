<?php
/**
 * Homepage Footer
 *
 * @package pixasaas
 */

$footer_heading   = get_field( 'footer_heading', 'option' ) ?: "Let's collect your card now.";
$footer_btn_text  = get_field( 'footer_button_text', 'option' ) ?: 'Apply now';
$footer_btn_url   = get_field( 'footer_button_url', 'option' ) ?: '#';
$footer_email     = get_field( 'footer_email', 'option' ) ?: 'hello@pixesaas.com';
?>

	<footer id="colophon" class="pixasaas-footer">
		<div class="pixasaas-footer__container">
			<div class="pixasaas-footer__col pixasaas-footer__col--main">
				<h3 class="pixasaas-footer__heading"><?php echo esc_html( $footer_heading ); ?></h3>
				<a href="<?php echo esc_url( $footer_btn_url ); ?>" class="pixasaas-btn pixasaas-btn--primary"><?php echo esc_html( $footer_btn_text ); ?></a>
			</div>

			<div class="pixasaas-footer__col">
				<h4 class="pixasaas-footer__col-title">Company</h4>
				<ul class="pixasaas-footer__links">
					<li><a href="#">Home</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Pricing</a></li>
					<li><a href="#">Career</a></li>
				</ul>
			</div>

			<div class="pixasaas-footer__col">
				<h4 class="pixasaas-footer__col-title">Resources</h4>
				<ul class="pixasaas-footer__links">
					<li><a href="#">Team</a></li>
					<li><a href="#">Team Details</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>

			<div class="pixasaas-footer__col">
				<h4 class="pixasaas-footer__col-title">Contact Us</h4>
				<a href="mailto:<?php echo esc_attr( $footer_email ); ?>" class="pixasaas-footer__email"><?php echo esc_html( $footer_email ); ?></a>
				<div class="pixasaas-footer__social">
					<a href="#" aria-label="Facebook">
						<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
					</a>
					<a href="#" aria-label="Twitter">
						<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
					</a>
					<a href="#" aria-label="Instagram">
						<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
					</a>
					<a href="#" aria-label="LinkedIn">
						<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
					</a>
				</div>
			</div>
		</div>
	</footer>

	<div class="pixasaas-copyright">
		<div class="pixasaas-copyright__container">
			<p class="pixasaas-copyright__text">Copyright @ <?php echo esc_html( date( 'Y' ) ); ?> PixeSaaS, All right reserved.</p>
			<div class="pixasaas-copyright__links">
				<a href="#">Customer Service</a>
				<a href="#">Terms & Conditions</a>
				<a href="#">Privacy Policy</a>
			</div>
		</div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
