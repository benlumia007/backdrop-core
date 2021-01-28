<?php
/**
 * Backdrop Core ( src/Contracts/Menu/Menu.php )
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Contracts\Component;
use Benlumia007\Backdrop\Contracts\Bootable;

/**
 * Menu Interface
 *
 * @since  2.0.0
 * @access public
 *
 * @link   ( https://developer.wordpress.org/themes/customize-api )
 */
interface Menu extends Bootable {
	/**
	 * Construct
	 * 
	 * @since  2.0.0
	 * @access public
	 */
	public function __construct( $menu_id = [] );

	/**
	 * Register Menus
	 * 
	 * @since  2.0.0
	 * @access public
	 */
	public function register();
	
	/**
	 * Create Menus
	 * 
	 * @since  2.0.0
	 * @access public
	 */
	public function create( string $name, string $id );
}