<?php //phpcs:ignore
/**
 * Backdrop Core ( framework.php )
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */
/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Register;

use Benlumia007\Backdrop\Customize\CustomizeAbstract;
use Benlumia007\Backdrop\Customize\Control\ImageRadio;

/**
 * Regiser class ThemeLayout
 */
class ThemeLayout extends CustomizeAbstract {
	/**
	 * Loads register_panels
	 *
	 * @since  1.0.0
	 * @access public
	 * @param object $manager object.
	 */
	public function register_panels( $manager ) {
		$manager->add_panel(
			'theme_options',
			[
				'title'    => esc_html__( 'Theme Options', 'backdrop' ),
				'priority' => 5,
			]
		);
	}

	/**
	 * Loads register_sections
	 *
	 * @since  1.0.0
	 * @access public
	 * @param object $manager object.
	 */
	public function register_sections( $manager ) {
		$manager->add_section(
			'global_layout',
			[
				'title'    => esc_html__( 'General Layout', 'backdrop' ),
				'panel'    => 'theme_options',
				'priority' => 5,
			]
		);
	}

	/**
	 * Register register_settings();
	 *
	 * @since  1.0.0
	 * @access public
	 * @param object $manager object.
	 */
	public function register_settings( $manager ) {
		$manager->add_setting(
			'global_layout',
			[
				'default'           => 'no-sidebar',
				'sanitize_callback' => 'Benlumia007\Backdrop\Helpers\Sanitize::layouts',
			]
		);
	}

	/**
	 * Register register_controls();
	 *
	 * @since  1.0.0
	 * @access public
	 * @param object $manager object.
	 */
	public function register_controls( $manager ) {
		$manager->add_control(
			new ImageRadio(
				$manager,
				'global_layout',
				[
					'label'       => esc_html__( 'General Layout', 'backdrop' ),
					'description' => esc_html__( 'General Layout applies to all layouts that supports in this theme.', 'backdrop' ),
					'section'     => 'global_layout',
					'settings'    => 'global_layout',
					'type'        => 'radio-image',
					'choices'     =>
						[
							'no-sidebar'    => get_theme_file_uri( '/vendor/benlumia007/backdrop-core/assets/images/1col.png' ),
							'left-sidebar'  => get_theme_file_uri( '/vendor/benlumia007/backdrop-core/assets/images/2cl.png' ),
							'right-sidebar' => get_theme_file_uri( '/vendor/benlumia007/backdrop-core/assets/images/2cr.png' ),
						],
				]
			)
		);
	}
}
