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

?>

<section id="<?php echo esc_attr($id); ?>" class="<?= esc_attr($className); ?>">
    <h2 class="four-column__heading"><?= $heading; ?></h2>
    <?php if( have_rows('columns') ): 
            $count = 1;
        ?>
        <div class="container">
            <div class="row">
                <?php while( have_rows('columns') ): the_row(); 
                    $image = get_sub_field('image');
                    $columns_heading = get_sub_field('heading');
                    $text = get_sub_field('text');
                ?>
                <div class="col-lg-3">
                    <div class="four-column__box">
                        <p class="four-column__number">0<?= $count ?></p>
                        <?php if($image): ?>
                            <img src="<?= $image['sizes']['feature']; ?>" alt="<?= $image['alt']; ?>" class="four-column__image">
                        <?php endif; ?>
                        <?php if($columns_heading): ?>
                            <h3><?= $columns_heading; ?></h3>
                        <?php endif; ?>
                        <?php if($text): ?>
                            <div><?= $text; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $count += 1; ?>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
</section>