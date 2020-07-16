<?php

/**
 * Plugin Name: My Test
 * Author: Brad
 * Version: 1.0.0
 */

function loadMyTestFiles() {
  wp_enqueue_script(
    'my-test-handle',
    plugin_dir_url(__FILE__) . 'my-block.js',
    array('wp-blocks', 'wp-i18n', 'wp-editor'),
    true
  );
}
 
add_action('enqueue_block_editor_assets', 'loadMyTestFiles');
