<?php
/**
 * Index Template
 *
 * @author    Theme
 * @copyright 2019 Theme
 * @version   1.0.0
 */
get_header();
    echo '<main>';
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            echo the_content();
        endwhile; 
    endif; 
    echo '</main>';
get_footer();
?>
