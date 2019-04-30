<?php // phpcs:ignore
/**
 * Backdrop Core ( Admin.php )
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

namespace Benlumia007\Backdrop\Contracts\Interfaces;

/**
 * Implements Displayable
 */
interface Admin {
	/**
	 * Register Menu
	 */
	public function menu();

	/**
	 * Render Menu
	 */
	public function callback();
}
