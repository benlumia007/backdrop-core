<?php
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
namespace Benlumia007\Backdrop;

/**
 * Initialize Backdrop Core
 */
class Framework {
	/**
	 * Define Backdrop Framework's Version
	 *
	 * @var string
	 */
	public static $version = '1.0.0';

	/**
	 * Define Theme's Directory Path
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $theme_dir = '';

	/**
	 * Define Theme's URI
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $theme_uri = '';

	/**
	 * Define Backdrop Famework's Directory
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $backdrop_path = 'vendor/benlumia007/backdrop-core/src';

	/**
	 * Register default features for the framework.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	public function __construct() {
		/**
		 * Directory Path
		 */
		$this->theme_dir = trailingslashit( get_template_directory() );
		$this->theme_uri = trailingslashit( get_template_directory_uri() );

		$this->load_files();
	}

	/**
	 * Load classes
	 *
	 * @since 1.0.0
	 * @access protected
	 * @return void
	 */
	public function load_files() {
		require_once $this->theme_dir . $this->backdrop_path . '/sidebar/functions-sidebar.php';
	}
}
