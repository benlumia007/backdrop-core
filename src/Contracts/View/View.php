<?php
/**
 * View contract.
 *
 * View classes represent a template partial, generally speaking. Their purpose
 * should be to find a template file and render or display the output.
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

namespace Benlumia007\Backdrop\Contracts\View;

use Benlumia007\Backdrop\Contracts\Renderable;
use Benlumia007\Backdrop\Contracts\Displayable;

/**
 * View interface.
 *
 * @since  5.0.0
 * @access public
 */
interface View extends Renderable, Displayable {

	/**
	 * Returns the array of slugs.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return array
	 */
	public function slugs();

	/**
	 * Returns the absolute path to the template file.
	 *
	 * @since  5.0.0
	 * @access public
	 * @return string
	 */
	public function template();
}