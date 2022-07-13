<?php

/**
 * Plugin Name:     Gutenberg Multi-block Example Plugin
 * Description:     A Template for multi-block Gutenberg plugin
 * Author:          Lu Ji (Jason)
 * Author URI:      https://github.com/jjpro
 * Text Domain:     multi-block
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         multi-block
 */

// prevent direct access
defined('ABSPATH') || exit;

/**
 * Helper function for prettying up errors
 *
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$jjpro_error = function ($message, $subtitle = '', $title = '') {
  $title   = $title ?: 'Error';
  $footer  = '<a href="https://www.github.com/jjpro">github.com/jjpro</a>';
  $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
  wp_die($message, $title);
};


/**
 * Ensure dependencies are loaded
 */
if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
  $jjpro_error(
    'You must run <code>composer install</code> from the theme directory.',
    'Autoloader not found.'
  );
}
require_once $composer;

/**
 * Setup actions and filters
 * Add or remove files to the array as needed.
 */
array_map(function ($file) use ($jjpro_error) {
  $file = "app/{$file}.php";
  require_once($file);
}, ['constants', 'utils', 'bootstrap']);
