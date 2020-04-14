<?php
    $logo = get_field('logo', 'options');
?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8;">
        <meta http-equiv="X-UA-Compatible" content="IE=10;IE=Edge,chrome=1"/>
        <title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<?php wp_head(); ?>
	</head>
        <body <?php body_class(); ?>>
        <div class="wrapper">      
            <header class="header">
                <div class="container">
                    <div class="header__container">
                        <a class="header__logo" href="/">
                            <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" />
                        </a>
                        <nav class="header__nav">
                        <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'primary_nav',
                                    'container' => ''
                                ) );
                            ?>
                        </nav>
                        <div>
                            <!-- <div>Language</div> -->
                            <a href="/login" class="btn header__btn">LOGIN</a>
                        </div>
                        <div class="burger">
                            <div class="burger__line"></div>
                            <div class="burger__line"></div>
                            <div class="burger__line"></div>
                        </div>
                    </div>
                </div>
            </header>