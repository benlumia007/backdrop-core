<?php //phpcs:ignore
/**
 * Backdrop Core ( framework.php )
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\View;

use Benlumia007\Backdrop\Contracts\Viewable;


function display( $type, $items = [] ) {
	foreach ( $items as $item ) {
		switch ( $type ) {
			case 'sidebar': ?>
				<div id="aside" class="widget-area">
					<?php dynamic_sidebar( $item ); ?>
				</div>
				<?php
				break;
			default:
				break;
		}
	}
}