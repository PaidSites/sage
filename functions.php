<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/authentication.php',        // Authentication functions
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
  'lib/users.php',
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Crafton 2020-05-08
// Adding a tag in the footer for quick indication of time/build.
// Default style is to hide it so you have to view source, but can be integrated
// into the flow, too, (maybe tiny grey text fixed to a bottom corner?) if desired.
function deployment_stamp() {
	if ( defined('ABSPATH') ) {
		$stampfile = ABSPATH . '/wp-content/deployment.stamp';
		if ( file_exists($stampfile) ) {
			$content = trim(file_get_contents($stampfile));
			echo '<p class="deployment-stamp" id="deployment_stamp">' . $content . '</p>';
		}
	}
}
add_action( 'wp_footer', 'deployment_stamp' );
