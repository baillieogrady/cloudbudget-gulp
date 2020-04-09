<?php

/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$heading = get_field('heading') ?: 'Heading';
$text = get_field('text') ?: 'text';
$button = get_field('button') ?: 'button';
$background_image = get_field('background_image') ?: 'background_image';

?>

<section id="<?= esc_attr($id); ?>" class="<?= esc_attr($className); ?>" 

style="background: linear-gradient(90deg, rgba(213, 32, 71, 0.8) 0%, rgba(238, 61, 27, 0.8) 100%), url('<?= $background_image['sizes']['hero'] ?>');"
>
    <h1><?= $heading; ?></h1>
    <div>
        <?= $text; ?>
    </div>
    <a href="<?= $button['link']; ?>"><?= $button['text']; ?></a>

    <!-- <style type="text/css">
        #<?php $id; ?> {
            background-color: orange;
        }
    </style> -->
</section>