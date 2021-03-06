<?php

/**
 * Three column Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'three-column-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'three-column';
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

<section id="<?php echo esc_attr($id); ?>" class="<?= esc_attr($className); ?>">
    <h2 class="three-column__heading"><?= $heading; ?></h2>
    <?php if( have_rows('columns') ): ?>
        <div class="container">
            <div class="row justify-content-between">
                <?php while( have_rows('columns') ): the_row(); 
                        $image = get_sub_field('image');
                        $columns_heading = get_sub_field('heading');
                        $text = get_sub_field('text');
                        $link = get_sub_field('link');
                    ?>

                    <div class="col-lg-4">
                        <?php if($image): ?>
                            <img src="<?= $image['sizes']['feature']; ?>" alt="<?= $image['alt']; ?>">
                        <?php endif; ?>
                        <div class="three-column__box">
                            <?php if($columns_heading): ?>
                                <h3><?= $columns_heading; ?></h3>
                            <?php endif; ?>
                            <?php if($text): ?>
                                <div><?= $text; ?></div>
                            <?php endif; ?>
                            <?php if($link): ?>
                                <a href="<?= $link['link'] ?>" class="link"><?= $link['text'] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</section>