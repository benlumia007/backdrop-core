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
namespace Benlumia007\Backdrop\View;

use Benlumia007\Backdrop\Contracts\View\View as Displayable;
/**
 * Site extends SiteContract
 */
class View extends Displayable {
	/**
	 * Display menu, loop and sidebar.
	 */
	public static function display( $type, $items = [] ) {
		foreach ( $items as $item ) {
			switch ( $type ) {
				case 'sidebar':
					dynamic_sidebar( $item );
					break;
				case 'menu':
					menu_display();
					break;
				case 'loop':
					loop_display( $item );
					break;
				default:
					break;
			}
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
				<button class="menu-toggle" aria-conrol="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'backdrop-core' ); ?></button>
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

function loop_display( $item ) {
	if ( 'content-post-format' === $item ) {
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
					get_template_part( 'views/content/content', get_post_format() );
		endwhile;
			the_posts_pagination();
		else :
			get_template_part( 'views/content/content', 'none' );
	endif;
	} elseif ( 'content-single' === $item ) {
		while ( have_posts() ) :
			the_post();
				get_template_part( 'views/content/content', 'single' );
		endwhile;
			the_post_navigation(
				array(
					'next_text' => '<span class="post-next" aria-hiddent="true">' . esc_html__( 'Next', 'backdrop' ) . '</span><span class="post-title">%title</span>',
					'prev_text' => '<span class="post-previous" aria-hidden="true">' . esc_html__( 'Previous', 'backdrop' ) . '</span><span class="post-title">%title</span>',
				)
			);
		comments_template();
	} elseif ( 'content-page' === $item ) {
		while ( have_posts() ) :
			the_post();
				get_template_part( 'views/content/content', 'page' );
		endwhile;
		comments_template();
	} elseif ( 'content-archive' === $item ) {
		if ( have_posts() ) : ?>
		<header class="archive-header">
			<h1 class="archive-title"><?php the_archive_title(); ?></h1>
		</header>
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'views/content/content', get_post_format() );
		endwhile;
			the_posts_pagination();
		else :
			get_template_part( 'views/content/content', 'none' );
		endif;
	}
}
