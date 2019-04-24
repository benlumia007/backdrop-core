<?php
/**
 * Backdrop Core ( functions-entry.php )
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2018-2019. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\View;

/**
 * Displays Information of items.
 *
 * @since        1.0.0
 * @access       public
 * @param string $type a type of slug in such.
 * @param array  $items an array of item that's in slug.
 */
function display( $type, $items = [] ) {
	foreach ( $items as $item ) {
		switch ( $type ) {
			case 'sidebar':
				dynamic_sidebar( $item );
				break;
			case 'menu':
				menu_display();
				break;
			default:
				break;
		}
	}
}

/**
 * The menu_display();
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function menu_display() {
	if ( has_nav_menu( 'primary' ) ) { ?>
		<div class="main-navigation">
			<nav id="site-navigation" class="primary-navigation">
				<button class="menu-toggle" aria-conrol="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'backdrop' ); ?></button>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'nav-menu',
						)
					);
				?>
			</nav>
		</div>
	<?php } elseif ( has_nav_menu( 'social' ) ) { ?>
		<nav id="site-social" class="site-social">
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'social',
							'container'       => 'nav',
							'container_id'    => 'menu-social',
							'container_class' => 'menu-social',
							'menu_id'         => 'menu-social-items',
							'menu_class'      => 'menu-items',
							'depth'           => 1,
							'link_before'     => '<span class="screen-reader-text">',
							'link_after'      => '</span>',
							'fallback_cb'     => '',
						)
					);
				?>
			</nav>
		<?php
	}
}
