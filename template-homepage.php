<?php
/**
 * Template Name: Homepage
 *
 * @package pixasaas
 */

get_header( 'homepage' );
?>

<main id="primary" class="site-main homepage">
	<?php
	if ( have_rows( 'homepage_sections' ) ) :
		while ( have_rows( 'homepage_sections' ) ) :
			the_row();
			$layout = get_row_layout();

			switch ( $layout ) {
				case 'hero_section':
					get_template_part( 'template-parts/homepage/hero' );
					break;
				case 'finance_platform_section':
					get_template_part( 'template-parts/homepage/finance-platform' );
					break;
				case 'custom_reports_section':
					get_template_part( 'template-parts/homepage/custom-reports' );
					break;
				case 'global_presence_section':
					get_template_part( 'template-parts/homepage/global-presence' );
					break;
				case 'simple_steps_section':
					get_template_part( 'template-parts/homepage/simple-steps' );
					break;
				case 'pricing_section':
					get_template_part( 'template-parts/homepage/pricing' );
					break;
				case 'testimonials_section':
					get_template_part( 'template-parts/homepage/testimonials' );
					break;
				case 'trusted_brands_section':
					get_template_part( 'template-parts/homepage/trusted-brands' );
					break;
				case 'free_trial_section':
					get_template_part( 'template-parts/homepage/free-trial' );
					break;
				case 'resources_section':
					get_template_part( 'template-parts/homepage/resources' );
					break;
			}
		endwhile;
	endif;
	?>
</main>

<?php
get_footer( 'homepage' );
