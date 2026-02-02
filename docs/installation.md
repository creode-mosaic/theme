---
outline: deep
---

# Installation

## Setup Custom Repository
You need to add the Creode packagist repository to the site as the packages are not publicly accessible through packagist.org. Add the following lines just above the "require" statement within your projects `composer.json` file.

```
    "repositories": [
        {
            "type": "composer",
            "url": "https://packages.creode.dev"
        }
    ],
```

::: tip
If you need assistance or further details about the repositories settings within composer you can find additional information in their documentation [here](https://getcomposer.org/doc/05-repositories.md)
:::

## Package Installation
Installing the plugin via composer will automatically create the loader for you and add to the mu-plugins directory of your WordPress installation. Requiring this package should place it inside "wp-content/mu-plugins/" folder with the required loader file.


```bash
composer require creode-mosaic/theme
```

::: tip
You can find more details and overrides for loader paths [here](https://getcomposer.org/doc/faqs/how-do-i-install-a-package-to-a-custom-path-for-my-framework.md).
:::
