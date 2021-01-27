<?php
/**
 * Backdrop Core ( src/Tools/ServiceProvider.php )
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Tools;
use Benlumia007\Backdrop\Contracts\Core\Framework;

/**
 * Provider
 * 
 * @since  2.0.0
 * @access public
 */
abstract class ServiceProvider {
	/**
	 * Application instance. Sub-classes should use this property to access
	 * the application (container) to add, remove, or resolve bindings.
	 *
	 * @since  2.0.0
	 * @access protected
	 * @var    Framework
	 */
	protected $app;

	/**
	 * Accepts the application and sets it to the `$app` property.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  Application  $app
	 * @return void
	 */
	public function __construct( Framework $app ) {

		$this->app = $app;
	}

	/**
	 * Callback executed when the `Framework` class registers providers.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function register() {}

	/**
	 * Callback executed after all the service providers have been registered.
	 * This is particularly useful for single-instance container objects that
	 * only need to be loaded once per page and need to be resolved early.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function boot() {}
}