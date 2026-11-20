<?php
/**
 * ACF Field Registration for Homepage Flexible Content
 *
 * @package pixasaas
 */

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	return;
}

add_action( 'acf/init', 'pixasaas_register_homepage_fields' );

function pixasaas_register_homepage_fields() {
	acf_add_local_field_group( array(
		'key'      => 'group_homepage_sections',
		'title'    => 'Homepage Sections',
		'fields'   => array(
			array(
				'key'        => 'field_homepage_sections',
				'label'      => 'Homepage Sections',
				'name'       => 'homepage_sections',
				'type'       => 'flexible_content',
				'layouts'    => array(

					// Hero Section
					'layout_hero' => array(
						'key'        => 'layout_hero_section',
						'name'       => 'hero_section',
						'label'      => 'Hero Section',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'   => 'field_hero_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
								'default_value' => 'Ensure the Well-being of Your Financial Planning',
								'instructions'  => 'Main hero heading text.',
							),
							array(
								'key'   => 'field_hero_description',
								'label' => 'Description',
								'name'  => 'description',
								'type'  => 'textarea',
								'rows'  => 3,
								'default_value' => 'PixeSaaS offers an intelligent solution that aids in your financial planning, ensuring a secure and stable financial future.',
							),
							array(
								'key'   => 'field_hero_primary_btn_text',
								'label' => 'Primary Button Text',
								'name'  => 'primary_button_text',
								'type'  => 'text',
								'default_value' => 'Book your card',
							),
							array(
								'key'   => 'field_hero_primary_btn_url',
								'label' => 'Primary Button URL',
								'name'  => 'primary_button_url',
								'type'  => 'url',
							),
							array(
								'key'   => 'field_hero_secondary_btn_text',
								'label' => 'Secondary Button Text',
								'name'  => 'secondary_button_text',
								'type'  => 'text',
								'default_value' => 'Our Features',
							),
							array(
								'key'   => 'field_hero_secondary_btn_url',
								'label' => 'Secondary Button URL',
								'name'  => 'secondary_button_url',
								'type'  => 'url',
							),
							array(
								'key'           => 'field_hero_image',
								'label'         => 'Hero Background Image',
								'name'          => 'hero_image',
								'type'          => 'image',
								'return_format' => 'array',
								'preview_size'  => 'medium',
								'instructions'  => 'Upload the main hero background image.',
							),
							array(
								'key'   => 'field_hero_overlay_text',
								'label' => 'Hero Overlay Text',
								'name'  => 'hero_overlay_text',
								'type'  => 'text',
								'default_value' => 'Initial Moves Toward Achieving Financial Freedom',
							),
							array(
								'key'   => 'field_hero_counter_value',
								'label' => 'Counter Value',
								'name'  => 'counter_value',
								'type'  => 'text',
								'default_value' => '525k+',
							),
							array(
								'key'   => 'field_hero_counter_label',
								'label' => 'Counter Label',
								'name'  => 'counter_label',
								'type'  => 'text',
								'default_value' => 'Happy Customers',
							),
							array(
								'key'   => 'field_hero_earnings_amount',
								'label' => 'Earnings Amount',
								'name'  => 'earnings_amount',
								'type'  => 'text',
								'default_value' => '$60.47K',
							),
						),
					),

					// Finance Platform Section
					'layout_finance' => array(
						'key'        => 'layout_finance_platform_section',
						'name'       => 'finance_platform_section',
						'label'      => 'Finance Platform Section',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'   => 'field_finance_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
								'default_value' => 'Finance with a Simple platform',
							),
							array(
								'key'           => 'field_finance_card_image',
								'label'         => 'Card Image',
								'name'          => 'card_image',
								'type'          => 'image',
								'return_format' => 'array',
								'preview_size'  => 'medium',
								'instructions'  => 'Optional: Upload a custom card image. Leave empty for the default layout.',
							),
							array(
								'key'        => 'field_finance_features',
								'label'      => 'Features',
								'name'       => 'features',
								'type'       => 'repeater',
								'layout'     => 'block',
								'min'        => 0,
								'max'        => 5,
								'sub_fields' => array(
									array(
										'key'           => 'field_finance_feature_icon',
										'label'         => 'Icon',
										'name'          => 'icon',
										'type'          => 'image',
										'return_format' => 'array',
										'preview_size'  => 'thumbnail',
									),
									array(
										'key'   => 'field_finance_feature_title',
										'label' => 'Title',
										'name'  => 'title',
										'type'  => 'text',
									),
									array(
										'key'   => 'field_finance_feature_desc',
										'label' => 'Description',
										'name'  => 'description',
										'type'  => 'textarea',
										'rows'  => 2,
									),
								),
							),
							array(
								'key'   => 'field_finance_cta_text',
								'label' => 'CTA Text',
								'name'  => 'cta_text',
								'type'  => 'text',
								'default_value' => 'Learn more',
							),
							array(
								'key'   => 'field_finance_cta_url',
								'label' => 'CTA URL',
								'name'  => 'cta_url',
								'type'  => 'url',
							),
						),
					),

					// Custom Reports Section
					'layout_reports' => array(
						'key'        => 'layout_custom_reports_section',
						'name'       => 'custom_reports_section',
						'label'      => 'Custom Reports Section',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'   => 'field_reports_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
								'default_value' => 'Custom-made reports to make great decisions',
							),
							array(
								'key'   => 'field_reports_description',
								'label' => 'Description',
								'name'  => 'description',
								'type'  => 'textarea',
								'rows'  => 3,
							),
							array(
								'key'   => 'field_reports_cta_text',
								'label' => 'CTA Text',
								'name'  => 'cta_text',
								'type'  => 'text',
								'default_value' => 'Get started now',
							),
							array(
								'key'   => 'field_reports_cta_url',
								'label' => 'CTA URL',
								'name'  => 'cta_url',
								'type'  => 'url',
							),
							array(
								'key'           => 'field_reports_dashboard_image',
								'label'         => 'Dashboard Image',
								'name'          => 'dashboard_image',
								'type'          => 'image',
								'return_format' => 'array',
								'preview_size'  => 'medium',
							),
							array(
								'key'   => 'field_reports_stat_1_value',
								'label' => 'Stat 1 Value',
								'name'  => 'stat_1_value',
								'type'  => 'text',
								'default_value' => '20%',
							),
							array(
								'key'   => 'field_reports_stat_1_label',
								'label' => 'Stat 1 Label',
								'name'  => 'stat_1_label',
								'type'  => 'text',
								'default_value' => 'Increase in retention',
							),
							array(
								'key'   => 'field_reports_stat_2_value',
								'label' => 'Stat 2 Value',
								'name'  => 'stat_2_value',
								'type'  => 'text',
								'default_value' => '1.5X',
							),
							array(
								'key'   => 'field_reports_stat_2_label',
								'label' => 'Stat 2 Label',
								'name'  => 'stat_2_label',
								'type'  => 'text',
								'default_value' => 'User base growth',
							),
						),
					),

					// Global Presence Section
					'layout_globe' => array(
						'key'        => 'layout_global_presence_section',
						'name'       => 'global_presence_section',
						'label'      => 'Global Presence Section',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'   => 'field_globe_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
								'default_value' => 'Our presence spans across the globe to fulfill your Requirements.',
							),
							array(
								'key'           => 'field_globe_map_image',
								'label'         => 'World Map Image',
								'name'          => 'map_image',
								'type'          => 'image',
								'return_format' => 'array',
								'preview_size'  => 'medium',
							),
							array(
								'key'        => 'field_globe_counters',
								'label'      => 'Counters',
								'name'       => 'counters',
								'type'       => 'repeater',
								'layout'     => 'table',
								'min'        => 0,
								'max'        => 6,
								'sub_fields' => array(
									array(
										'key'   => 'field_globe_counter_value',
										'label' => 'Value',
										'name'  => 'value',
										'type'  => 'text',
									),
									array(
										'key'   => 'field_globe_counter_label',
										'label' => 'Label',
										'name'  => 'label',
										'type'  => 'text',
									),
								),
							),
						),
					),

					// Simple Steps Section
					'layout_steps' => array(
						'key'        => 'layout_simple_steps_section',
						'name'       => 'simple_steps_section',
						'label'      => 'Simple Steps Section',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'   => 'field_steps_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
								'default_value' => 'Join Us in Four Simple Steps',
							),
							array(
								'key'   => 'field_steps_description',
								'label' => 'Description',
								'name'  => 'description',
								'type'  => 'textarea',
								'rows'  => 3,
							),
							array(
								'key'        => 'field_steps_items',
								'label'      => 'Steps',
								'name'       => 'steps',
								'type'       => 'repeater',
								'layout'     => 'block',
								'min'        => 0,
								'max'        => 4,
								'sub_fields' => array(
									array(
										'key'   => 'field_step_title',
										'label' => 'Title',
										'name'  => 'title',
										'type'  => 'text',
									),
									array(
										'key'   => 'field_step_description',
										'label' => 'Description',
										'name'  => 'description',
										'type'  => 'textarea',
										'rows'  => 2,
									),
									array(
										'key'   => 'field_step_link_text',
										'label' => 'Link Text',
										'name'  => 'link_text',
										'type'  => 'text',
									),
									array(
										'key'   => 'field_step_link_url',
										'label' => 'Link URL',
										'name'  => 'link_url',
										'type'  => 'url',
									),
									array(
										'key'           => 'field_step_image',
										'label'         => 'Image',
										'name'          => 'image',
										'type'          => 'image',
										'return_format' => 'array',
										'preview_size'  => 'medium',
									),
								),
							),
						),
					),

					// Pricing Section
					'layout_pricing' => array(
						'key'        => 'layout_pricing_section',
						'name'       => 'pricing_section',
						'label'      => 'Pricing Section',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'   => 'field_pricing_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
								'default_value' => 'Our Range of Service Level Options',
							),
							array(
								'key'        => 'field_pricing_plans',
								'label'      => 'Pricing Plans',
								'name'       => 'plans',
								'type'       => 'repeater',
								'layout'     => 'block',
								'min'        => 0,
								'max'        => 4,
								'sub_fields' => array(
									array(
										'key'   => 'field_plan_name',
										'label' => 'Plan Name',
										'name'  => 'name',
										'type'  => 'text',
									),
									array(
										'key'           => 'field_plan_card_image',
										'label'         => 'Card Image',
										'name'          => 'card_image',
										'type'          => 'image',
										'return_format' => 'array',
										'preview_size'  => 'medium',
										'instructions'  => 'The card illustration shown above the pricing box.',
									),
									array(
										'key'   => 'field_plan_price',
										'label' => 'Price',
										'name'  => 'price',
										'type'  => 'text',
									),
									array(
										'key'        => 'field_plan_features',
										'label'      => 'Features',
										'name'       => 'features',
										'type'       => 'repeater',
										'layout'     => 'table',
										'min'        => 0,
										'max'        => 10,
										'sub_fields' => array(
											array(
												'key'   => 'field_plan_feature_text',
												'label' => 'Feature',
												'name'  => 'text',
												'type'  => 'text',
											),
										),
									),
									array(
										'key'   => 'field_plan_cta_text',
										'label' => 'CTA Text',
										'name'  => 'cta_text',
										'type'  => 'text',
										'default_value' => 'Subscribe',
									),
									array(
										'key'   => 'field_plan_cta_url',
										'label' => 'CTA URL',
										'name'  => 'cta_url',
										'type'  => 'url',
									),
								),
							),
						),
					),

					// Testimonials Section
					'layout_testimonials' => array(
						'key'        => 'layout_testimonials_section',
						'name'       => 'testimonials_section',
						'label'      => 'Testimonials Section',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'   => 'field_testimonials_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
								'default_value' => 'What Our Delighted Customer Shares',
							),
							array(
								'key'        => 'field_testimonials_items',
								'label'      => 'Testimonials',
								'name'       => 'testimonials',
								'type'       => 'repeater',
								'layout'     => 'block',
								'min'        => 0,
								'max'        => 6,
								'sub_fields' => array(
									array(
										'key'   => 'field_testimonial_text',
										'label' => 'Testimonial Text',
										'name'  => 'text',
										'type'  => 'textarea',
										'rows'  => 3,
									),
									array(
										'key'   => 'field_testimonial_name',
										'label' => 'Customer Name',
										'name'  => 'name',
										'type'  => 'text',
									),
									array(
										'key'   => 'field_testimonial_designation',
										'label' => 'Designation',
										'name'  => 'designation',
										'type'  => 'text',
									),
									array(
										'key'           => 'field_testimonial_image',
										'label'         => 'Customer Image',
										'name'          => 'image',
										'type'          => 'image',
										'return_format' => 'array',
										'preview_size'  => 'thumbnail',
									),
								),
							),
						),
					),

					// Trusted Brands Section
					'layout_brands' => array(
						'key'        => 'layout_trusted_brands_section',
						'name'       => 'trusted_brands_section',
						'label'      => 'Trusted Brands Section',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'   => 'field_brands_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
								'default_value' => 'Trusted by 2200+ digital brands.',
							),
							array(
								'key'        => 'field_brands_logos',
								'label'      => 'Brand Logos',
								'name'       => 'brands',
								'type'       => 'repeater',
								'layout'     => 'table',
								'min'        => 0,
								'max'        => 12,
								'sub_fields' => array(
									array(
										'key'           => 'field_brand_logo',
										'label'         => 'Logo',
										'name'          => 'logo',
										'type'          => 'image',
										'return_format' => 'array',
										'preview_size'  => 'thumbnail',
									),
								),
							),
						),
					),

					// Free Trial Section
					'layout_trial' => array(
						'key'        => 'layout_free_trial_section',
						'name'       => 'free_trial_section',
						'label'      => 'Free Trial Section',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'   => 'field_trial_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
								'default_value' => 'Start your 14-days Free trial',
							),
							array(
								'key'   => 'field_trial_description',
								'label' => 'Description',
								'name'  => 'description',
								'type'  => 'textarea',
								'rows'  => 2,
							),
							array(
								'key'           => 'field_trial_person_image',
								'label'         => 'Person Image',
								'name'          => 'person_image',
								'type'          => 'image',
								'return_format' => 'array',
								'preview_size'  => 'medium',
							),
							array(
								'key'          => 'field_trial_gravity_form_id',
								'label'        => 'Gravity Form ID',
								'name'         => 'gravity_form_id',
								'type'         => 'number',
								'instructions' => 'Enter the Gravity Forms form ID for the email signup form.',
							),
							array(
								'key'        => 'field_trial_checklist',
								'label'      => 'Checklist Items',
								'name'       => 'checklist',
								'type'       => 'repeater',
								'layout'     => 'table',
								'min'        => 0,
								'max'        => 5,
								'sub_fields' => array(
									array(
										'key'   => 'field_trial_check_text',
										'label' => 'Text',
										'name'  => 'text',
										'type'  => 'text',
									),
								),
							),
						),
					),

					// Resources Section
					'layout_resources' => array(
						'key'        => 'layout_resources_section',
						'name'       => 'resources_section',
						'label'      => 'Resources Section',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'   => 'field_resources_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
								'default_value' => 'Browse our Resources & Updates',
							),
							array(
								'key'        => 'field_resources_posts',
								'label'      => 'Resource Posts',
								'name'       => 'posts',
								'type'       => 'repeater',
								'layout'     => 'block',
								'min'        => 0,
								'max'        => 6,
								'sub_fields' => array(
									array(
										'key'           => 'field_resource_image',
										'label'         => 'Featured Image',
										'name'          => 'image',
										'type'          => 'image',
										'return_format' => 'array',
										'preview_size'  => 'medium',
									),
									array(
										'key'   => 'field_resource_category',
										'label' => 'Category Tag',
										'name'  => 'category',
										'type'  => 'text',
									),
									array(
										'key'   => 'field_resource_title',
										'label' => 'Title',
										'name'  => 'title',
										'type'  => 'text',
									),
									array(
										'key'   => 'field_resource_date',
										'label' => 'Date',
										'name'  => 'date',
										'type'  => 'text',
									),
									array(
										'key'   => 'field_resource_link',
										'label' => 'Link',
										'name'  => 'link',
										'type'  => 'url',
									),
								),
							),
						),
					),

				),
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'template-homepage.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	) );
}
