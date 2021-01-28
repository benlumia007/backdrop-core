<?php
/**
 * Backdrop Core ( Admin.php )
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2020. Benjamin Lu
 * @license   GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Contracts\Component;
use Benlumia007\Backdrop\Constracts\Bootable;

/**
 * Admin
 */
interface Admin {
	/**
	 * Construct
	 */
	public function __construct();

	/**
	 * menu()
	 */
	public function menu();

	/**
	 * callback()
	 */
	public function callback();

	/**
	 * tabs()
	 */
	public function tabs();

	/**
	 * pages()
	 */
	public function pages();
}
