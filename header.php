<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>

<body <?php body_class("test") ?>>

    <header>
        <div class="container">
            <a href='<?php echo get_bloginfo('url') ?>'>
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    if (has_custom_logo()) {

                        echo '<img class="logo" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                }
                ?>
            </a>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary_menu'
                )
            );
            ?>
        </div>
    </header>