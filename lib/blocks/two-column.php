<?php

/**
 * Two column Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// change id if block spits out form\

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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" 
    <?php if($background_color && $text_color): ?>
        style="background-color: <?= $background_color; ?>; color: <?= $text_color; ?>;"
    <?php elseif($background_color && !$text_color): ?>
        style="background-color: <?= $background_color; ?>;"
    <?php elseif($text_color && !$background_color): ?>
        style="color: <?= $text_color; ?>;"
    <?php endif; ?>
>
    <?php if( have_rows('columns') ): ?>
        <div class="container">
            <div class="row">
                <?php while( have_rows('columns') ): the_row(); 
                    $type = get_sub_field('type');
                    ?>
                    <?php if($type === 'Default'):  
                            $heading = get_sub_field('heading');
                            $text = get_sub_field('text');
                            $link = get_sub_field('link');
                            $icons = get_sub_field('icons');
                            ?>
                        <div class="col-lg-5">
                            <?php if($heading): ?>
                                <h2><?= $heading ?></h2>
                            <?php endif; ?>

                            <?php if($text): ?>
                                <div>
                                    <?= $text ?>
                                </div>
                            <?php endif; ?>

                            
                            <?php if( $icons ): ?>
                                <img src="<?= $icons['url'] ?>" alt="<?= $image['alt'] ?>" class="two-column__icons" />
                            <?php endif; ?>

                            <?php if($link): ?>
                                <a href="<?= $link['link'] ?>" class="link"><?= $link['text'] ?></a>
                            <?php endif; ?>
                            </div>
                    <?php elseif($type === 'Video'):
                            $video = get_sub_field('video');
                        ?>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="two-column__video">
                                <img src="<?= $video['image']['sizes']['video']; ?>" alt="<?= $video['image']['alt']; ?>">
                                <a href="https://www.youtube.com/watch?v=<?= $video['youtube_id'] ?>" class="two-column__play" data-fancybox>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66" fill="none">
                                        <circle cx="33" cy="33" r="33" fill="#ED4C5C"/>
                                        <path d="M39.75 33L28.5 40.875V25.125L39.75 33Z" fill="white"/>
                                    </svg>
                                </a>
                            <div>
                        </div>
                    <?php elseif($type === 'Images'):
                            $image = get_sub_field('image');  
                        ?>
                        <div class="col-lg-6 offset-lg-1">
                            <img src="<?php echo esc_url($image['sizes']['slider']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="two-column__images" />
                        </div>
                    <?php elseif($type === 'Form'):
                            $form = get_sub_field('form');
                            $toggle_id = true;
                        ?>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="two-column__form">
                                <?= $form; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</section>