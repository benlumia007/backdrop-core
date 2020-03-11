<?php
/**
 * Backdrop Core ( src/Contracts/Menu/Menu.php )
 *
 * This file ( src/Contracts/Customize/Customize.php ) shows some basics on how to setup a WordPress
 * Customization API. This will place all of your theme options for the customizer.
 *
 * @package      Backdrop Core
 * @copyright    Copyright (C) 2019. Benjamin Lu
 * @license      GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author       Benjamin Lu ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Contracts\Menu;

/**
 * Customize
 *
 * @since  1.0.0
 * @access public
 *
 * @link   ( https://developer.wordpress.org/themes/customize-api )
 */
abstract class Menu {
	/**
	 * 
	 */
	public $menu_id;

	/**
	 * Construct
	 */
	public function __construct( $menu_id = [] ) {}

	/**
	 * Register register_panels
	 */
	public function register() {}
	
	/**
	 * Register register_sections
	 */
	public function create( $name, $id ) {}
}