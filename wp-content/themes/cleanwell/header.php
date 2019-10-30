<!DOCTYPE html>
<html>
<head>
    <title>Cleanwell</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="box">
        <a href="#"><?php the_custom_logo(); ?></a>
    </div>
    <div class="container">
        <div class="box">
            <?php
                wp_nav_menu(array(
                        'theme_location' => 'main',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => 'nav navbar-nav',
                        'menu_id' => '',
                        'depth' => 1
                ));
            ?>
        </div>
    </div>


    <?php
        get_template_part('template-parts/breadcrumbs');
    ?>
</header>

