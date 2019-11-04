<?php
/*
Template Name: portfolio template
*/
?>
<?php get_header(); ?>

<article class="fuck">
    <?php
    //global $wp_query;

    $wp_query = new WP_Query(array('post_type'=>'portfolio_page', 'posts_per_page' => '2', 'paged' => get_query_var('paged') ? : 1));

    if(have_posts())
    {
        while(have_posts())
        {
            the_post();
            the_content();

        }
    }

   /* while(have_posts()) : the_post();

        get_template_part('template-parts/content', get_post_format());


    endwhile;*/
   // posts_nav_link('.', 'следующая страница', 'предыдущая страница');
    //wp_reset_query();

    ?>
    <?php if (  $wp_query->max_num_pages > 1 ) : ?>
        <script>
            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
            var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
            var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
        </script>
        <div id="true_loadmore">Загрузить ещё</div>
    <?php endif; ?>
</article>
<?php get_footer(); ?>


