<!DOCTYPE html>
<html>
<head>
    <title>Cleanwell</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="hero">
    <section class="header_top">
        <section class="container">
            <div class="level-left level-item">
                <a href="#"><?php the_custom_logo(); ?></a>
            </div>
            <div class="level-item">

                <div class=" level level-item has-text-centered">
                    <?php
                        wp_nav_menu(array(
                                'theme_location' => 'main',
                                'items_wrap' => '<div id="%1$s" class="%2$s">%3$s</div>',
                                'menu_class' => 'navbar',
                                'menu_id' => 'top_menu',
                                'depth' => 1
                        ));
                    ?>
                </div>
                <div class="level-right has-text-centered">
                    <button class="button is-primary popmake-192">Form</button>
                </div>
            </div>
        </section>
    </section>
    <section class="container is-fluid">
        <div class="">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'service',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'menu_class' => 'navbar',
                'menu_id' => 'service_menu',
                'depth' => 1
            ));
            ?>
        </div>
    </section>
    <section class="container is-fluid">
        <?php
            get_template_part('template-parts/breadcrumbs');
        ?>
    </section>


  <!-- <div class="box">

        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_email"></a>
        </div>
        <script async src="https://static.addtoany.com/menu/page.js"></script>

    </div>-->

</header>

