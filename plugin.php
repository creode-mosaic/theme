<?php
/**
 * Mosaic Theme MU plugin.
 *
 * @package Mosaic Theme
 */

namespace Creode_Theme;

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

// Require dependencies manged by composer.
require_once ABSPATH . 'vendor/autoload.php';

// Require includes.
require_once __DIR__ . '/includes/data-transfer-objects/all.php';
require_once __DIR__ . '/includes/interfaces/all.php';
require_once __DIR__ . '/includes/abstracts/all.php';
require_once __DIR__ . '/includes/class-helpers.php';
require_once __DIR__ . '/includes/class-file-string-replacer.php';
require_once __DIR__ . '/includes/class-file-pre-processor.php';
require_once __DIR__ . '/includes/class-theme-modifier-base.php';
require_once __DIR__ . '/includes/theme-modifiers/all.php';
require_once __DIR__ . '/includes/class-installer.php';
require_once __DIR__ . '/includes/class-command-base.php';
require_once __DIR__ . '/includes/commands/all.php';
require_once __DIR__ . '/includes/class-asset-enqueue.php';
require_once __DIR__ . '/includes/register-js-libraries.php';
require_once __DIR__ . '/includes/bug-fixes/all.php';
require_once __DIR__ . '/includes/class-initial-post-content.php';

// Register commands.
Install_Theme_Command::register();
Build_Command::register();

// Enqueue assets from parent and child themes.
Asset_Enqueue::init();

// Initialize the process of providing initial content.
Initial_Post_Content::init();
