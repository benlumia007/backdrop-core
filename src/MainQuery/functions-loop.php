<?php
/**
 * Backdrop Core (main-query.php)
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2018. Benjamin Lu
 * @license     GNU General PUblic License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://getbenonit.com)
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\MainQuery;

/**
 * Table of Content
 *
 *  1.0 - Loop (Content Post Format)
 *  2.0 - Loop (Content Single)
 *  3.0 - Loop (Content Page)
 *  4.0 - Loop (Content Archive)
 */
/**
 *  1.0 - Loop (Content Post Format)
 *
 * @param string $content the feature to display content.
 */
function display( $content = '' ) {
	if ( 'content-post-format' === $content ) {
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
					get_template_part( 'views/content/content', get_post_format() );
		endwhile;
			the_posts_pagination();
		else :
			get_template_part( 'views/content/content', 'none' );
	endif;
	} elseif ( 'content-single' === $content ) {
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
	} elseif ( 'content-page' === $content ) {
		while ( have_posts() ) :
			the_post();
				get_template_part( 'views/content/content', 'page' );
		endwhile;
		comments_template();
	} elseif ( 'content-archive' === $content ) {
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
