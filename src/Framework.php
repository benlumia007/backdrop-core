<?php //phpcs:ignore
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

use Benlumia007\Backdrop\Register;

/**
 * Regiser Menu Class
 */
class Framework {
	/**
	 * Loads Constructor
	 */
	public function __construct() {
		$this->theme_setup();
		$this->load_default_menu();
		$this->load_default_sidebar();
	}

	/**
	 * Loads theme_setup();
	 *
	 * The theme_setup() should be used to add action for theme_support and theme_enqueue.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return void
	 */
	public function theme_setup() {
		add_action( 'after_setup_theme', array( $this, 'theme_support' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'theme_enqueue' ) );
	}

	/**
	 * Loads theme_support();
	 *
	 * The theme_support(); is used to define any theme_support that's going to be used part of a theme.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function theme_support() {
		/**
		 * By adding add_theme_support( 'title-tag' );, this will let WordPress manage all document titles and should be use instead of wp_title();.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * By adding add_theme_support( 'automatic-feed-links' );, this feature when enabled allows feed links for post and comments
		 * in the head of the theme. This feature should be used in place of of the deprecated function automatic_feed_links();.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * By adding add_theme_support( 'html5', arrayy() );, this feature when enabled allows the user use of HTML5 markup for
		 * comment list, comment forms, search forms, galleries, and captions.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-list',
				'comment-form',
				'search-form',
				'gallery',
				'caption',
			)
		);
	}

	/**
	 * Loads theme_enqueue();
	 *
	 * The theme_enqueue(); is used to define any scripts and styles that's going to be used part of a theme.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function theme_enqueue() {
		/**
		 * This will load local Google Fonts as part of the theme. Fira Sans and Merriweather. For more information regarding
		 * this feature, please go to the following url. ( https://google-webfonts-helper.herokuapp.com/fonts ). This also will
		 * load font awesome 5.0 into one css file.
		 */
		wp_enqueue_style( 'backdrop-custom-fonts-css', get_theme_file_uri( '/vendor/benlumia007/backdrop-core/assets/css/custom-fonts.css' ), array(), '1.0.0' );

		/**
		 * This allows users to comment by clicking on reply so that it gets nested.
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	/**
	 * Loads and Register Navigation Menus.
	 *
	 * When this is registered, Primary Navigation and Social Navigation is set as default.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function load_default_menu() {
		$default = new Register\Menu();
	}

	/**
	 * Loads and Register Sidebar.
	 *
	 * When this is registered, Primary Sidebar is set as default.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function load_default_sidebar() {
		$default = new Register\Sidebar();
	}
}
