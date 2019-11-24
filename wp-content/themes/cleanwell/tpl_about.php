<?php
/*
Template Name: About template
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

       // get_template_part('template-parts/content-page', 'page');
       the_content();
    wp_reset_query();

    endwhile; ?>
    <div class="slide_fuck">
        <div class="section">
            <section class="container is-fluid">
                <div class="container video_reviews">
                    <?php
                        echo (do_shortcode('[video_reviews]'));
                    ?>
                </div>
                <div class="level">
                    <div>controls-left</div>
                    <div>controls-right</div>
                </div>
            </section>
        </div>
    </div>

    <?php get_footer(); ?>

