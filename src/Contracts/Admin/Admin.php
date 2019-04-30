<?php // phpcs:ignore
/**
 * Backdrop Core ( Admin.php )
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

namespace Benlumia007\Backdrop\Contracts\Admin;

use Benlumia007\Backdrop\Contracts\Interfaces\Admin as AdminInterface;

/**
 * Implements Displayable
 */
class Admin implements AdminInterface {
	/**
	 * Construct
	 */
	public function __construct() {}
	/**
	 * Register Menu
	 */
	public function menu() {}

	/**
	 * Render Menu
	 */
	public function callback() {}

	public function tabs() {}
}
