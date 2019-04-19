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

/**
 * Regiser Menu Class
 */
class Customizer extends CustomizeAbstract {
	/**
	 * Register register_panels
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $manager customizer object.
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

	public function register_sections( $manager ) {
		$manager->get_section( 'colors' )->panel = 'theme_options';
	}
}