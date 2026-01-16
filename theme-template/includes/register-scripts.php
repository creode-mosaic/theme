<?php
/**
 * File for registering JavaScript.
 *
 * @package :THEME_LABEL
 * @creode-wordpress-theme-version :THEME_PLUGIN_VERSION
 */

use Creode_Theme\Asset_Enqueue;

/**
 * Get the Asset_Enqueue instance.
 *
 * @var Asset_Enqueue $asset_enqueue
 */
$asset_enqueue = Asset_Enqueue::get_instance();

/**
 * Enqueues front-end scripts.
 */
add_action(
	'wp_enqueue_scripts',
	function () use ( $asset_enqueue ) {
		// @example: Uncomment to register and enqueue a script.
		// $asset_enqueue->register_vite_script( 'example_script', 'js/example-script.js' );
		// wp_enqueue_script( 'example_script' );
	}
);

/**
 * Enqueues admin scripts.
 */
add_action(
	'admin_enqueue_scripts',
	function () use ( $asset_enqueue ) {
		// @example: Uncomment to register and enqueue a script.
		// $asset_enqueue->register_vite_script( 'example_script', 'js/example-script.js' );
		// wp_enqueue_script( 'example_script' );
	}
);
