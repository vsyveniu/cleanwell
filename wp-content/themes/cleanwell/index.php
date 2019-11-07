<?php get_header(); ?>
<main>

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