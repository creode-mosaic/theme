---
outline: [1, 2]
---
# Changelog

All notable changes to this project will be documented in this file.

## 1.10.0 (2026-01-16)

### Added
- JavaScript library registration system to register default JavaScript libraries
- Google Tag Manager integration file in theme template
- Skip to main content accessibility feature (wraps index template in main tag for accessibility hooks)
- Theme template screenshot

### Fixed
- Package name correction in version number loading functionality

## 1.9.4 (2025-12-17)

### Fixed
- Removed unnecessary Vite compiled JavaScript file hash generation (file names already suffixed with hashes for cache busting)

## 1.9.3 (2025-12-16)

### Changed
- Updated block library path within vite.config.js

## 1.9.2 (2025-12-16)

_No code changes - documentation only_

## 1.9.1 (2025-12-16)

_No code changes - documentation only_

## 1.9.0 (2025-12-16)

_No code changes - documentation only_

## 1.8.0 (2025-12-16)

### Changed
- Package name updates across all files
- Plugin name and internal entry point path updates
- Composer.json name updates

## 1.7.1 (2025-12-16)

### Fixed
- Removed unnecessary Vite compiled JavaScript file hash generation functionality

## 1.7.0 (2025-11-13)

### Added
- Match height JavaScript library to theme boilerplate
- PHPCS standard for WordPress coding standards enforcement

## 1.6.0 (2025-11-06)

### Added
- SASS alias for block library path (for use in @use statements when extending library blocks)

## 1.5.4 (2025-10-14)

### Added
- Block pattern registration framework and functionality
- Initial content support for block patterns to ensure patterns referenced by slug in template files are replicated across all environments

## 1.5.3 (2025-09-09)

### Fixed
- WordPress core bug fix: font-size presets not loading correctly from theme.json

## 1.5.2 (2025-08-28)

### Fixed
- Stylesheet dependencies now available within the admin area

## 1.5.1 (2025-08-27)

### Fixed
- Stylesheet dependencies now available within the admin area

## 1.5.0 (2025-08-27)

### Added
- Stylesheet dependency functionality to provide stylesheets that main theme stylesheets depend on

## 1.4.0 (2025-08-13)

### Added
- Block style modifier JavaScript library
- Example implementation of block style modifier library
- Force option to install command
- Plugin URI to mu-plugin.php

## 1.3.0 (2025-08-12)

_No code changes - documentation only_

## 1.2.0 (2025-08-11)

### Changed
- Vite config template configured not to minify identifiers

## 1.1.2 (2025-08-11)

### Added
- Vite-compiled script registration functionality

## 1.1.1 (2025-08-08)

### Added
- Plugin author information to theme mu-plugin page

## 1.1.0 (2025-08-04)

### Added
- Container SASS extender file
- SCSS file syntax consistency improvements

## 1.0.1 (2025-08-04)

_No code changes - documentation only_

## 1.0.0 (2025-08-01)

Initial release of the theme framework.
