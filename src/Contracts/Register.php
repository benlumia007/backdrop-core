<?php
/**
 * Backdrop Core ( Register.php )
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Contracts;

/**
 * Bootable interface.
 */
interface Register {
	/**
	 * Boots the class by running add_action() and add_filter() calls.
	 */
	public function register();
}


