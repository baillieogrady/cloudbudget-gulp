<?php

/*
Images
- this theme supports Images
*/
add_theme_support( 'post-thumbnails' );
add_action( 'after_setup_theme', 'images_setup' );

function images_setup() {
    add_image_size( 'hero', 1440, 782, true );
}