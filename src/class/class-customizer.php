<?php
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
namespace Benlumia007\Backdrop\Framework;

/**
 * Regiser Customizer
 */
class Customizer {
	/**
	 * Loads Construct
	 */
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_panels' ) );
		add_action( 'customize_register', array( $this, 'register_sections' ) );
		add_action( 'customize_register', array( $this, 'register_settings' ) );
		add_action( 'customize_register', array( $this, 'register_controls' ) );
	}

	/**
	 * Register register_panels
	 *
	 * @param object $manager customizer object.
	 */
	public function register_panels( $manager ) {
		$manager->add_panel(
			'theme_options',
			[
				'title'    => esc_html__( 'Theme Options', 'backdrop' ),
				'priority' => 10,
			]
		);
	}

	/**
	 * Register register_sections
	 *
	 * @param object $manager customizer object.
	 */
	public function register_sections( $manager ) {}

	/**
	 * Register register_settings
	 *
	 * @param object $manager customizer object.
	 */
	public function register_settings( $manager ) {}

	/**
	 * Register register_controls
	 *
	 * @param object $manager customizer object.
	 */
	public function register_controls( $manager ) {}
}
