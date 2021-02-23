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
use Benlumia007\Backdrop\Contracts\Component\Customize as CustomizeContract;

class Customize implements CustomizeContract {
    /**
	 * Register panels
	 */
	public function panels( $manager ) {}
	
	/**
	 * Register sections
	 */
	public function sections( $manager ) {}

	/**
	 * Register settings
	 */
	public function settings( $manager ) {}

	/**
	 * Register controls
	 */
	public function controls( $manager ) {}

    public function boot() {
        add_action( 'customize_register', [ $this, 'panels' ] );
		add_action( 'customize_register', [ $this, 'sections' ] );
		add_action( 'customize_register', [ $this, 'settings' ] );
		add_action( 'customize_register', [ $this, 'controls' ] );
    }
}