<?php
/**
 * Backdrop Core ( display-sidebars.php )
 *
 * @package      Backdrop Core
 * @copyright    Copyright (C) 2018-2019. Benjamin Lu
 * @license      GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author       Benjamin Lu  ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Sidebar;

use Benlumia007\Backdrop\Framework;

/**
 * Table of Content
 *
 * 1.0 - Sidebar ( Display Sidebars ( Sidebars ) )
 */

/**
 * 1.0 - Sidebar ( Display Sidebars ( Sidebars ) )
 *
 * @param array $sidebar test.
 */
function display( $slug = '', $items = [] ) {
	foreach( $items as $item ) {
		switch ( $slug ) {
			case 'sidebar':
				dynamic_sidebar( $item );
				break;
			case 'menu':
				echo 'fat';
				break;
			case 'global-layouts':
				echo 'stupid';
				break; 	
			default:
				break;
		}
	}
}



