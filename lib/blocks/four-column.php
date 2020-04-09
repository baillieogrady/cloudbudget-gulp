<?php

/**
 * Four column Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'four-column-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'four-column';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$heading = get_field('heading') ?: 'heading';
// $text = get_field('text') ?: 'text';
?>

<section id="<?= esc_attr($id); ?>" class="<?= esc_attr($className); ?>">
    <h1><?= $heading; ?></h1>
    <!-- <style type="text/css">
        #<?php $id; ?> {
            background-color: orange;
        }
    </style> -->
</section>