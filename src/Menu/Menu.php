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
namespace Backdrop\Menu;

use Benlumia007\Backdrop\Contracts\Menu\Menu as MenuContracts;

/**
 * Regiser Menu Class
 */
class Menu extends MenuContracts {
	/**
	 * Menu
	 *
	 * @var string
	 */
	public $menu_id;

	/**
	 * Construct
	 *
	 * @param string $menu_id string.
	 */
	public function __construct( $menu_id = [] ) {
		$this->menu_id = array_merge( $menu_id );

		add_action( 'after_setup_theme', [ $this, 'register' ] );
	}

	/**
	 * Register Custom Menus
	 */
	public function register() {
		foreach ( $this->menu_id as $key => $value ) {
			$this->create( $value, $key );
		}
	}

	/**
	 * Create Menus
	 *
	 * @param string $name outputs name.
	 * @param string $id output id.
	 */
	public function create( $name, $id ) {
		$args = [
			$id => $name,
		];
		register_nav_menus( $args );
	}
}
