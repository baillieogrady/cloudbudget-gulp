<?php

/**
 * Two column Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'two-column-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'two-column';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$background_color = get_field('background_color') ?: 'background_color';
$text_color = get_field('text_color') ?: 'text_color';

?>

<section id="<?= esc_attr($id); ?>" class="<?= esc_attr($className); ?>">
    <?php if( have_rows('columns') ): ?>
    <div>

        <?php while( have_rows('columns') ): the_row(); 

            // vars
            $type = get_sub_field('type');
            
            ?>

            <?php if($type === 'Default'): 
                $heading = get_sub_field('heading');
                $text = get_sub_field('text');
                $link = get_sub_field('link');
            ?>
            <?php if($heading): ?>
                <h2><?= $heading ?></h2>
            <?php endif; ?>
            <?php if($text): ?>
            <div>
                <?= $text ?>
            </div>
            <?php endif; ?>

            <?php elseif($type === 'Video'):?>

            Video

            <?php endif; ?>

        <?php endwhile; ?>

    </div>

    <?php endif; ?>
    <!-- <style type="text/css">
        #<?php $id; ?> {
            background-color: orange;
        }
    </style> -->
</section>