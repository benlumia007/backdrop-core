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
	 * @var string
	 */
	public $theme_dir = '';

	/**
	 * Define Theme's URI
	 *
	 * @var string
	 */
	public $theme_uri = '';

	/**
	 * Define Backdrop Famework's Directory
	 *
	 * @var string
	 */
	public $backdrop_path = 'vendor/benlumia007/backdrop-framework/src';
}
