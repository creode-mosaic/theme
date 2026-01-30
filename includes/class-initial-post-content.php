<?php
/**
 * Provides initial content on creation of new posts.
 *
 * @package Mosaic Theme
 */

namespace Creode_Theme;

use WP_Post;

/**
 * Provides initial content on creation of new posts.
 */
final class Initial_Post_Content {

	/**
	 * The singleton instance.
	 *
	 * @var Initial_Post_Content
	 */
	private static $instance = null;

	/**
	 * Initializes the process of providing initial content.
	 */
	public static function init() {
		if ( null !== self::$instance ) {
			return;
		}

		self::$instance = new self();
	}

	/**
	 * Constructs the instance.
	 */
	private function __construct() {
		$this->assign_initial_content();
	}

	/**
	 * Assigns initial content to new posts.
	 */
	private function assign_initial_content() {
		// Listen for a post being saved.
		add_action(
			'save_post',
			function ( int $post_id, WP_Post $post, bool $update ) {
				// If the post is being update (not new), do nothing.
				if ( $update ) {
					return;
				}

				// Get the post as an array.
				$post_array = $post->to_array();

				// If the post already has content, do nothing.
				if ( ! empty( $post_array['post_content'] ) ) {
					return;
				}

				// Get the initial content for the post type.
				$post_array['post_content'] = $this->get_initial_post_content( $post_array['post_type'] );

				// Insert the post with the initial content.
				wp_insert_post( $post_array );
			},
			10,
			3
		);
	}

	/**
	 * Gets the initial content for a post type.
	 *
	 * @param string $post_type The post type.
	 * @return string The initial content as block markup.
	 */
	private function get_initial_post_content( string $post_type ): string {
		$path = '/initial-post-content/' . $post_type . '.html';

		if ( file_exists( get_template_directory() . $path ) ) {
			$path = get_template_directory() . $path;
		}

		if ( file_exists( get_stylesheet_directory() . $path ) ) {
			$path = get_stylesheet_directory() . $path;
		}

		if ( ! file_exists( $path ) ) {
			return '';
		}

		// phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
		return file_get_contents( $path );
	}
}
