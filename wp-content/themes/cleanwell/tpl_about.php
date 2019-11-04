<?php
/*
Template Name: About template
*/
?>

    <?php get_header(); ?>
    <?php while(have_posts()) : the_post();

       // get_template_part('template-parts/content-page', 'page');
       the_content();

    endwhile; ?>
    <?php get_footer(); ?>

