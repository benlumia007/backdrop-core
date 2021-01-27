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
namespace Benlumia007\Backdrop\Assets;
use Benlumia007\Backdrop\Tools\ServiceProvider;
use Benlumia007\Backdrop\Assets\GoogleFonts;

/**
 * Attr provider class.
 *
 * @since  5.0.0
 * @access public
 */
class GoogleFontsServiceProvider extends ServiceProvider {

	/**
	 * Binds the implementation of the attributes contract to the container.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function register() {

		$this->app->bind( GoogleFonts::class );

		$this->app->alias( GoogleFonts::class, 'googlefonts' );
    }
    
    public function boot() {
        $this->app->resolve( 'googlefonts' )->boot();
    }
}