<?php // phpcs:ignore
/**
 * Backdrop Core ( Displayable.php )
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2018-2019. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

namespace Benlumia007\Backdrop\Contracts\Site;

use Benlumia007\Backdrop\Contracts\Displayable;
use Benlumia007\Backdrop\Contracts\Renderable;

/**
 * Loads Site implements Displayable and Renderable.
 */
class Site implements Displayable, Renderable {
	/**
	 * Displayable
	 *
	 * @since 1.0.0
	 * @access public
	 * @param string $args displays.
	 */
	public static function display( $args = '' ) {}

	/**
	 * Displayable
	 *
	 * @since 1.0.0
	 * @access public
	 * @param string $args renders.
	 */
	public static function render( $args = '' ) {}
}
