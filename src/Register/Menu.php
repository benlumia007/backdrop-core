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
namespace Benlumia007\Backdrop\Register;

/**
 * Regiser Menu Class
 */
class Menu {
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
	public function __construct( $menu_id = array() ) {
		$this->menu_id = array_merge(
			$menu_id,
			$this->default_menus()
		);
		$this->register_nav_menus_init();
	}

	/**
	 * Default Menus
	 */
	public function default_menus() {
		return array(
			'primary' => esc_html__( 'Primary Navigation', 'backdrop' ),
			'social'  => esc_html__( 'Social Navigation', 'backdrop' ),
		);
	}

	/**
	 * Register Custom Menus Initialize
	 */
	public function register_nav_menus_init() {
		add_action( 'after_setup_theme', array( $this, 'register_nav_menus' ) );
	}

	/**
	 * Register Custom Menus
	 */
	public function register_nav_menus() {
		foreach ( $this->menu_id as $key => $value ) {
			$this->create_menus( $value, $key );
		}
	}

	/**
	 * Create Menus
	 *
	 * @param string $name outputs name.
	 * @param string $id output id.
	 */
	public function create_menus( $name, $id ) {
		$args = array(
			$id => $name,
		);
		register_nav_menus( $args );
	}
}
