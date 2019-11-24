<?php get_header(); ?>
<main>

    <section>
        <?php
        wp_reset_query();
        $wp_query = new WP_Query(array('post_type'=>'index_page_slider'));


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

    <section class="container columns  index_gallery">
        <?php
        wp_reset_query();
        $wp_query = new WP_Query(array('post_type'=>'index_page_gallery'));


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

    <?php
    $query = new WP_Query('post_type=index_page');

    if($query->have_posts())
    {
        while($query->have_posts())
        {
            $query->the_post();
            the_content();

        }
    }

    while(have_posts()) : the_post();

    get_template_part('template-parts/content', get_post_format());


    endwhile;
    ?>




</main>
<?php get_footer(); ?>
