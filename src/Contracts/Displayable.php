<?php
/**
 * Backdrop Core ( src/Contracts/Displayable.php )
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Contracts;

/**
 * Displayable interface
 * 
 * @since  2.0.0
 * @access public
 */
interface Displayable {
    /**
	 * Boots the class by running `add_action()` and `add_filter()` calls.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function display();
}