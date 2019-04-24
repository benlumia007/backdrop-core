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

use Benlumia007\Backdrop\Contracts\Interfaces\View as ViewInterface;

/**
 * Implements Displayable
 */
class View implements ViewInterface {
	/**
	 * Displayable
	 *
	 * @since        1.0.0
	 * @access       public
	 * @param string $type output type menu, loop, and sidebar.
	 * @param array  $items an array of ids to display.
	 */
	public static function display( $type, $items = [] ) {}
}
