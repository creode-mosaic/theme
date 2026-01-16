<?php
/**
 * File for registering stylesheet dependencies. For example third-party font provider integrations.
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

// @example: Uncomment to add a stylesheet dependency.
// $asset_enqueue->add_stylesheet_dependency( 'typekit', 'https://use.typekit.net/example.css' );
