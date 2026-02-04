<?php
/**
 * Handles the preprocessing of file contents.
 *
 * @package Mosaic Theme
 */

namespace Creode_Theme;

/**
 * Handles the preprocessing of file contents.
 */
class File_Pre_Processor {

	/**
	 * Singleton instance.
	 *
	 * @var File_Pre_Processor|null
	 */
	private static $instance = null;

	/**
	 * Returns the singleton instance.
	 *
	 * @return File_Pre_Processor The singleton instance.
	 */
	public static function get_instance(): File_Pre_Processor {
		if ( is_null( static::$instance ) ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Constructor.
	 */
	private function __construct() {}

	/**
	 * Checks if a file contains a specific string.
	 *
	 * @param string $file_path The path to the file.
	 * @param string $comment The string to check for in the comment block.
	 */
	public function file_contains_string( string $file_path, string $comment ): bool {
		// Get the file contents.
		$contents = file_get_contents( $file_path );

		// Return true if the file contents contain the comment string, false otherwise.
		if ( strpos( $contents, $comment ) !== false ) {
			return true;
		}

		return false;
	}
}
