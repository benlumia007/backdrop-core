<?php
/**
 * Backdrop Core ( src/Contracts/Container/Container.php )
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Contracts\Container;
use Closure;

/**
 * Container Interface
 * 
 * @since  2.0.0
 * @access public
 */
interface Container {
    /**
     * Add a binding. The abstract should be a key, abstract class name, or interface name.
     * The concrete should be the concrete implementation of the abstract.
     * 
     * @since  2.0.0
     * @access public
     * @param  string $abstract
     * @param  mixed  $concrete
     * @param  bool   $shared
     * @return void
     */
    public function bind( $abstract, $concrete = null, $shared = false );

    /**
     * Alias for `bind()`
     * 
     * @since  2.0.0
     * @access public
	 * @param  string  $abstract
	 * @param  mixed   $concrete
	 * @param  bool    $shared
	 * @return void
     */
    public function add( $abstract, $concrete = null, $shared = false );

    /**
     * Remove a Binding
     * 
     * @since  2.0.0
	 * @access public
	 * @param  string  $abstract
	 * @return void
     */
    public function remove( $abstract );

	/**
	 * Resolve and return the binding.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  string  $abstract
	 * @param  array   $parameters
	 * @return mixed
	 */
    public function resolve( $abstract, array $parameters = [] );
    
	/**
	 * Alias for `resolve()`.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  string  $abstract
	 * @return object
	 */
	public function get( $abstract );

	/**
	 * Check if a binding exists.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  string  $abstract
	 * @return bool
	 */
	public function has( $abstract );

	/**
	 * Add a shared binding.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  string  $abstract
	 * @param  object  $concrete
	 * @return void
	 */
	public function singleton( $abstract, $concrete = null );

	/**
	 * Add an existing instance.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  string  $abstract
	 * @param  mixed   $instance
	 * @return mixed
	 */
	 public function instance( $abstract, $instance );

	 /**
	  * Extend a binding.
	  *
	  * @since  2.0.0
	  * @access public
	  * @param  string  $abstract
	  * @param  Closure $closure
	  * @return void
	  */
	 public function extend( $abstract, Closure $closure );

	 /**
	  * Create an alias for an abstract type.
	  *
	  * @since  2.0.0
	  * @access public
	  * @param  string  $abstract
	  * @param  string  $alias
	  * @return void
	  */
     public function alias( $abstract, $alias );
}