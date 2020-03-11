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
namespace Backdrop\Site;

/**
 * Outputs the site title HTML.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return void
 */
function display_site_title( array $args = [] ) {
	echo render_site_title( $args ); // phpcs:ignore
}

/**
 * Returns the site title HTML.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return void
 */
function render_site_title( array $args = [] ) {
	$args = wp_parse_args( $args, [
		'tag'       => 'h1',
		'class'      => 'site-title',
	] );

	$html = '';
	$title = get_bloginfo( 'name', 'display' );

	if ( $title ) {
		$link = render_home_link( [
			'text' => $title,
		] );

		$html = sprintf(
			'<%1$s class="%2$s">%3$s</%1$s>',
			tag_escape( $args['tag'] ),
			esc_attr( $args['class'] ),
			$link // phpcs:ignore
		);
	}
	return apply_filters( 'backdrop_display_site_title', $html );
}

/**
 * Outputs the site description HTML.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return void
 */
function display_site_description( array $args = [] ) {
	echo render_site_description( $args ); // phpcs:ignore
}

/**
 * Returns the site description HTML.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return void
 */
function render_site_description( array $args = [] ) {
	$args = wp_parse_args( $args, [
		'tag'       => 'h3',
		'class'      => 'site-description',
	] );

	$html = '';
	$title = get_bloginfo( 'description', 'display' );

	if ( $title ) {
		$html = sprintf(
			'<%1$s class="%2$s">%3$s</%1$s>',
			tag_escape( $args['tag'] ),
			esc_attr( $args['class'] ),
			$title
		);	
	}
	return apply_filters( 'backdrop_site_description', $html );
}

/**
 * Outputs the site link HTML.
 *
 * @since  5.0.0
 * @access public
 * @param  array  $args
 * @return void
 */
function display_home_link( array $args = [] ) {

	echo render_home_link( $args ); // phpcs:ignore
}

/**
 * Returns the site link HTML.
 *
 * @since  5.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function render_home_link( array $args = [] ) {

	$args = wp_parse_args( $args, [
		'text'   => '%s',
		'class'  => 'home-link',
		'before' => '',
		'after'  => ''
	] );

	$html = sprintf(
		'<a class="%s" href="%s" rel="home">%s</a>',
		esc_attr( $args['class'] ),
		esc_url( home_url() ),
		sprintf( $args['text'], get_bloginfo( 'name', 'display' ) )
	);
	return apply_filters( 'display_home_link', $args['before'] . $html . $args['after'] );
}