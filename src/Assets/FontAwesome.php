<?php
/**
 * Backdrop Core ( src/Contracts/Assets/FontAwesome.php )
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2020. Benjamin Lu
 * @license   GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Assets;
use Benlumia007\Backdrop\Contracts\Bootable;

/**
 * Regiser Menu Class
 */
class FontAwesome implements Bootable {
	/**
	 * Loads theme_enqueue();
	 *
	 * The theme_enqueue(); is used to define any scripts and styles that's going to be used part of a theme.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		if ( true === apply_filters( 'backdrop_filter_fontawesome', true ) ) {
			wp_enqueue_style( 'backdrop-fontawesome', get_theme_file_uri( '/vendor/benlumia007/backdrop-core/assets/font-awesome/css/all.css' ), array(), '1.0.0' );
		}
    }

    public function boot() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
    }
}