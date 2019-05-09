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
namespace Benlumia007\Backdrop\Contracts\Menu;

use Benlumia007\Backdrop\Contracts\Bootable;
use Benlumia007\Backdrop\Contracts\Register;

/**
 * Bootable interface.
 */
interface Menu extends Bootable, Register {
	/**
	 * Default
	 */
	public function menus();

	/**
	 * Create
	 */
	public function create();

}
