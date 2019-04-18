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
	 * @var $this Controller.
	 */
	public $sidebar_id;

	public function __construct() {
		$this->register_custom_sidebar_init();
	}

	public function register_custom_sidebar_init() {
		add_action( 'widgets_init', array( $this, 'register_custom_sidebar' ) );
	}

	public function register_custom_sidebar() {
		foreach ( $this->sidebar_id as $key => $value ) {
			$this->create_sidebar( $key );
		}
	}

	public function create_sidebar( $name, $id ) {
		$args = array(
			'name'          => $name,
			'id'            => $id,
			'description'   => __( 'Widgets placed in this area will appear on all posts and pages with a sidebar.', 'pattonwebz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside><hr class="hr-row-divider">',
			'before_title'  => '<h3 class="widget-title h4">',
			'after_title'   => '</h3>',
		);
		register_sidebar( $args );
	}
}
