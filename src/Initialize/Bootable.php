<?php
/**
 * Backdrop Core ( Bootable.php )
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Initialize;

/**
 * Bootable class
 */
interface Bootable {
	/**
	 * This should be using or running add_action(); or add_filter() calls.
	 */
	public function boot();
}
