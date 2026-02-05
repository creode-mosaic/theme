<?php
/**
 * Handles the filtering of file merges.
 *
 * @package Mosaic Theme
 */

namespace Creode_Theme;

/**
 * Handles the filtering of file merges.
 */
class File_Merge_Filter {

	/**
	 * Singleton instance.
	 *
	 * @var File_Merge_Filter|null
	 */
	private static $instance = null;

	/**
	 * Returns the singleton instance.
	 *
	 * @return File_Merge_Filter The singleton instance.
	 */
	public static function get_instance(): File_Merge_Filter {
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
	 * Checks if a file should be merged.
	 *
	 * @param bool   $force Whether the file should be overridden.
	 * @param string $destination_file_path The path to the destination file.
	 */
	public function should_merge( bool $force, string $destination_file_path ): bool {
		if ( $force ) {
			return false;
		}

		// If the destination file does not contain the comment string, return true. This means the file will be skipped and not be overridden.
		if ( ! $this->file_contains_string( $destination_file_path, '#mosaic-theme-generated' ) ) {
			return true;
		}

		return false;
	}

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
