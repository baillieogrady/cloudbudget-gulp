<?php

/*
ACF Custom Gutenberg Blocks
- add custom ACF Gutneberg blocks 
*/

function register_acf_block_types() {

    // register a hero block.
    acf_register_block_type(array(
        'name'              => 'Hero',
        'title'             => __('hero'),
        'description'       => __('Hero block.'),
        'render_template'   => 'lib/blocks/hero.php',
        'category'          => 'formatting',
        'icon'              => 'dashicons-screenoptions',
        'keywords'          => array( 'hero' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}