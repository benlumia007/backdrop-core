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
namespace Benlumia007\Backdrop\Menu;

use Benlumia007\Backdrop\Contracts\Menu\Menu as InterfaceMenu;

/**
 * Bootable interface.
 */
class Menu extends InterfaceMenu {
	/**
	 * Variable
	 */
	public $menu_id;

	/**
	 * Constructor
	 */
	public function __construct( $menu_id = array() ) {
		$this->menu_id = array_merge(
			$menu_id,
			$this->menus()
		);
		$this->boot();
	}

	/**
	 * Default
	 */
	public function menus() {
		return array(
			'primary' => esc_html__( 'Primary Navigation', 'backdrop-core' ),
			'social'  => esc_html__( 'Social Navigation', 'backdrop-core' ),
		);
	}

	/**
	 * Boot
	 */
	public function boot() {
		add_action( 'after_setup_theme', array( $this, 'register' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'script' ) );
	}

	/**
	 * Register
	 */
	public function register() {
		foreach ( $this->menu_id as $key => $value ) {
			$this->create( $value, $key );
		}
	}

	/**
	 * Create
	 */
	public function create() {
		$args = array(
			$id => $name,
		);
		register_nav_menus( $args );
	}

	/**
	 * Loads Navigation.js
	 */
	public function script() {
		/**
		 *  This mainly for the primary navigation. THis allows to use click the dropdown for multiple depths.
		 */
		wp_enqueue_script( 'backdrop-navigation', get_theme_file_uri( '/vendor/benlumia007/backdrop-core/assets/js/navigation.js' ), array( 'jquery' ), '1.0.0', true );
		wp_localize_script(
			'backdrop-navigation',
			'backdropScreenReaderText',
			array(
				'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'backdrop-core' ) . '</span>',
				'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'backdrop-core' ) . '</span>',
			)
		);
	}
}
