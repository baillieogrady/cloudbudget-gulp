<?php

/*
ACF Custom Gutenberg Blocks
- add custom ACF Gutneberg blocks 
*/

function register_acf_block_types() {

    // register a hero block.
    acf_register_block_type(array(
        'name'              => 'Hero',
        'title'             => __('Hero'),
        'description'       => __('Hero block.'),
        'render_template'   => 'lib/blocks/hero.php',
        'category'          => 'formatting',
        'icon'              => 'screenoptions',
        'keywords'          => array( 'hero' ),
    ));

    // register a two column block.
    acf_register_block_type(array(
        'name'              => 'Two column',
        'title'             => __('Two column'),
        'description'       => __('two-column block.'),
        'render_template'   => 'lib/blocks/two-column.php',
        'category'          => 'formatting',
        'icon'              => 'screenoptions',
        'keywords'          => array( 'two-column' ),
    ));

    // register a three column block.
    acf_register_block_type(array(
        'name'              => 'Three column',
        'title'             => __('Three column'),
        'description'       => __('three-column block.'),
        'render_template'   => 'lib/blocks/three-column.php',
        'category'          => 'formatting',
        'icon'              => 'screenoptions',
        'keywords'          => array( 'two-column' ),
    ));

    // register a four column block.
    acf_register_block_type(array(
        'name'              => 'Four column',
        'title'             => __('Four column'),
        'description'       => __('four-column block.'),
        'render_template'   => 'lib/blocks/four-column.php',
        'category'          => 'formatting',
        'icon'              => 'screenoptions',
        'keywords'          => array( 'four-column' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}