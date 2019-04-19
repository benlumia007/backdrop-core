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
	 */
	public function register_panels( $wp_customize ) {
		$wp_customize->add_panel(
			'theme_options',
			array(
				'title'    => esc_html__( 'Theme Options', 'backdrop' ),
				'priority' => 10,
			)
		);
	}

	/**
	 * Register register_sections
	 */
	public function register_sections( $wp_customize ) {
		// Move the color section to our theme options panel.
		$wp_customize->get_section( 'colors' )->panel = 'theme_options';
	}

	/**
	 * Register register_settings
	 */
	public function register_settings( $wp_customize ) {

	}

	/**
	 * Register register_controls
	 */
	public function register_controls( $wp_customize ) {
		
	}
}
