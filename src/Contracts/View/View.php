<?php // phpcs:ignore
/**
 * Backdrop Core ( Displayable.php )
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2018-2019. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

namespace Benlumia007\Backdrop\Contracts\View;

use Benlumia007\Backdrop\Contracts\Displayable;

/**
 * Implements Displayable
 */
class Entry implements Displayable {
	/**
	 * Displayable
	 *
	 * @since 1.0.0
	 * @access public
	 * @param string $type outputs type.
	 * @param array  $items array of items.
	 */
	public static function display( $type, $items = [] ) {}
}
