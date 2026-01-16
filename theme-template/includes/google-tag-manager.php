<?php
/**
 * Google Tag Manager integration.
 *
 * @package :THEME_LABEL
 * @creode-wordpress-theme-version :THEME_PLUGIN_VERSION
 */

add_action(
	'wp_head',
	function () {
		?>
		<!-- @example: Uncomment to add Google Tag Manager. -->
		<!--
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-123456789');</script>
		-->
		<?php
	}
);

add_action(
	'wp_body_open',
	function () {
		?>
		<!-- @example: Uncomment to add Google Tag Manager (noscript). -->
		<!--
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-123456789"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		-->
		<?php
	}
);
