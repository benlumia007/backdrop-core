<?php
/**
 * Backdrop Core ( src/Component/Customize.php )
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Component;
use Benlumia007\Backdrop\Contracts\Component\Admin as AdminContract;

class Admin implements AdminContract {
	/**
	 * menu()
	 * 
	 * @since  2.0.0
	 * @access public
	 */
	public function menu() {}

	/**
	 * callback()
	 * 
	 * @since  2.0.0
	 * @access public
	 */
	public function callback() {}

	/**
	 * tabs()
	 * 
	 * @since  2.0.0
	 * @access public
	 */
	public function tabs() {}

	/**
	 * pages()
	 * 
	 * @since  2.0.0
	 * @access public
	 */
	public function pages() {}

    public function boot() {
		$this->theme_info = wp_get_theme();
		add_action( 'admin_menu', array( $this, 'menu' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ), true, '1.0.0' );
    }
}