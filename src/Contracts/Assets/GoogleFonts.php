<?php
/**
 * Backdrop Core ( src/Contracts/Assets/GoogleFonts.php )
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
interface GoogleFonts extends Bootable {
	/**
	 * Loads theme_enqueue();
	 *
	 * The theme_enqueue(); is used to define any scripts and styles that's going to be used part of a theme.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue();
}


