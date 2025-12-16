# Mosaic Theme

A WordPress theme installation and development framework by Creode.

## Overview

Mosaic Theme is a WordPress MU plugin that provides a standardised framework for theme development. It handles asset compilation, provides reusable PHP and JavaScript libraries, and offers WP-CLI commands for theme scaffolding and building.

## Installation

### Composer (Recommended)

```bash
composer require creode-mosaic/theme
```

This will automatically install the plugin into your `mu-plugins` directory.

## Features

### WP-CLI Commands

The plugin provides two WP-CLI commands for theme management:

| Command | Description |
|---------|-------------|
| `wp creode-theme:install` | Installs framework files into your active theme (or a specified theme) |
| `wp creode-theme:build` | Compiles assets (SCSS/JS) for all active themes |


### Asset Compilation

The framework uses **Vite** for modern asset bundling with the following features:

- Automatic SCSS compilation
- JavaScript bundling and minification
- Manifest-based asset versioning
- Support for parent/child theme structures
- Automatic stylesheet enqueueing for frontend, admin, and editor

### PHP Libraries

#### Custom Post Types

Extend the `Base_Post_Type` abstract class to register custom post types with a clean, consistent API:

```php
class My_Post_Type extends \Creode_Theme\Base_Post_Type {
    protected function name(): string { return 'my-post-type'; }
    protected function label(): string { return 'My Posts'; }
    protected function singular_label(): string { return 'My Post'; }
    protected function public(): bool { return true; }
}

My_Post_Type::init();
```

#### Post Fields (ACF Integration)

Extend the `Base_Post_Fields` abstract class to register ACF field groups that attach to post types based on custom supports:

```php
class Logo_Post_Fields extends \Creode_Theme\Base_Post_Fields {
    protected function group_name(): string { return 'logo'; }
    protected function group_title(): string { return 'Logo'; }
    protected function support(): string { return 'logo'; }
    protected function fields(): array {
        return array(
            array(
                'key'   => 'field_logo',
                'name'  => 'logo',
                'label' => 'Logo',
                'type'  => 'image',
            ),
        );
    }
}

Logo_Post_Fields::init();
```

### JavaScript Libraries

#### Block Style Modifier

A utility class for managing WordPress block styles without dependency or timing issues:

```js
const blockStyleModifier = new Block_Style_Modifier();

// Add a custom style to a block
blockStyleModifier.addStyle('core/button', 'arrow', 'Arrow');

// Remove an existing style from a block
blockStyleModifier.removeStyle('core/button', 'outline');
```

### Theme Template

When running `wp creode-theme:install`, a basic theme structure is scaffolded within the active theme.

## Requirements

- WordPress 6.0+
- PHP 8.0+
- Composer
- Node.js & npm (for asset compilation)
- ACF Pro

## Documentation

Full documentation is available at [theme-framework.creode.dev](https://theme-framework.creode.dev)

## License

Proprietary - Creode Limited
