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
namespace Benlumia007\Backdrop\Register;

/**
 * Register Sidebar
 */
class Sidebar {
	/**
	 * $post post.
	 *
	 * @var string
	 */
	public $sidebar_id;

	/**
	 * Construct
	 */
	public function __construct( $sidebar_id = array() ) {
		$this->sidebar_id = apply_filters(
			'backdrop_default_sidebar',
			array_merge(
				$sidebar_id,
				$this->default_sidebars()
			)
		);
		$this->register_custom_sidebar_init();
	}

	/**
	 * Default Sidebar
	 */
	public function default_sidebars() {
		return array(
			'primary' => 'Primary Sidebar',
			'custom'  => 'Custom Sidebar',
		);
	}

	/**
	 * Register Custom Sidebar Initialize
	 */
	public function register_custom_sidebar_init() {
		add_action( 'widgets_init', array( $this, 'register_custom_sidebar' ) );
	}
	/**
	 * Register Custom Sidebar
	 */
	public function register_custom_sidebar() {
		foreach ( $this->sidebar_id as $key => $value ) {
			$this->create_sidebar( $value, $key );
		}
	}

	/**
	 * Create Sidebar
	 *
	 * @param string $name outputs name.
	 * @param string $id displays id for sidebar.
	 */
	public function create_sidebar( $name, $id ) {
		$args = array(
			'name'          => $name,
			'id'            => $id,
			'description'   => __( 'Widgets placed in this area will appear on all posts and pages with a sidebar.', 'backdrop' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		);
		register_sidebar( $args );
	}
}
