<?php
/*
Template Name: Service template
*/
?>


<?php get_header(); ?>
<section class="container">
    <?php
    wp_reset_query();
    $wp_query = new WP_Query(array('post_type'=>'add_banner'));


    ob_start();
    if($wp_query->have_posts())
    {
        while($wp_query->have_posts())
        {
            $wp_query->the_post();
            the_content();
        }
    }
    wp_reset_query();

    ?>
</section>
<?php while(have_posts()) : the_post();

    get_template_part('template-parts/content-page', 'page');

endwhile; ?>
<?php get_footer(); ?>


