<?php

function cleanwell_setup()
{
    load_theme_textdomain('cleanwell');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array('height' => 100, 'width' => 200, 'flex-height' => true));
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(730, 446);
    add_theme_support('html5', array('search_form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('post-formats', array('image', 'video', 'gallery'));
//    add_theme_support('menus');
    register_nav_menu('main', 'Main menu');
    register_nav_menu('service', 'Service menu');
}
add_action('after_setup_theme', 'cleanwell_setup');




function cleanwell_scripts()
{
    wp_enqueue_style('bulma-css', get_template_directory_uri() . '/css/bulma.min.css' );
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slick.css' );
    wp_enqueue_style('twenty-css', get_template_directory_uri() . '/css/twentytwenty.css' );
    wp_enqueue_style('style-css', get_stylesheet_uri());
    wp_enqueue_style('header-css', get_template_directory_uri() . '/css/header.css' );
    if(is_page_template('index.php'))
    {
        wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css' );
    }
    //wp_enqueue_script('jquery');
    wp_enqueue_style('service-css', get_template_directory_uri() . '/css/service.css' );
    wp_enqueue_style('about-css', get_template_directory_uri() . '/css/about.css' );
    wp_enqueue_style('portfolio-css', get_template_directory_uri() . '/css/portfolio.css' );
    wp_enqueue_style('portfolio-css', get_template_directory_uri() . '/css/portfolio.css' );
    wp_enqueue_style('modules-css', get_template_directory_uri() . '/css/modules.css' );
    wp_enqueue_script( 'true_jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery'), null, true );
    wp_enqueue_script( 'load_slick', get_stylesheet_directory_uri() . '/js/slick.min.js');
    wp_enqueue_script( 'load_sliders_control', get_stylesheet_directory_uri() . '/js/sliders.js');
    wp_enqueue_script( 'load_twenty_move', get_stylesheet_directory_uri() . '/js/jquery.event.move.js');
    wp_enqueue_script( 'load_twenty_jquery', get_stylesheet_directory_uri() . '/js/jquery.twentytwenty.js');
    wp_enqueue_script( 'load_twenty', get_stylesheet_directory_uri() . '/js/twentytwenty.js');

}
add_action('wp_enqueue_scripts', 'cleanwell_scripts');


function true_load_posts(){

    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';


    // обычно лучше использовать WP_Query, но не здесь
    query_posts( $args );
    // если посты есть
    if( have_posts() ) :

        // запускаем цикл
        while( have_posts() ): the_post();

            //get_template_part( 'template-parts/post/content', get_post_format() );
            the_content();

        endwhile;

    endif;
    die();
}

function get_video_reviews()
{
    $content = null;
    wp_reset_query();
    $wp_query = new WP_Query(array('post_type'=>'video_reviews'));


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

    $content = ob_get_contents();

    ob_end_clean();
    return $content;
}
add_shortcode('video_reviews', 'get_video_reviews');







add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

function cleanwell_the_breadcrumb(){
    global $post;
    if(!is_home()){
        echo '<li><a href="'.site_url().'"><i class="fa fa-home" aria-hidden="true"></i>Главная</a></li> <li> / </li> ';
        if(is_single()){ // posts
            the_category(', ');
            echo " <li> / </li> ";
            echo '<li>';
            the_title();
            echo '</li>';
        }
        elseif (is_page()) { // pages
            if ($post->post_parent ) {
                $parent_id  = $post->post_parent;
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                    $parent_id  = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                foreach ($breadcrumbs as $crumb) echo $crumb . '<li> / </li> ';
            }
            echo the_title();
        }
        elseif (is_category()) { // category
            global $wp_query;
            $obj_cat = $wp_query->get_queried_object();
            $current_cat = $obj_cat->term_id;
            $current_cat = get_category($current_cat);
            $parent_cat = get_category($current_cat->parent);
            if ($current_cat->parent != 0)
                echo(get_category_parents($parent_cat, TRUE, ' <li> / </li> '));
            single_cat_title();
        }
        elseif (is_search()) { // search pages
            echo 'Search results "' . get_search_query() . '"';
        }
        elseif (is_tag()) { // tags
            echo single_tag_title('', false);
        }
        elseif (is_day()) { // archive (days)
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> <li> / </li> ';
            echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> <li> / </li> ';
            echo get_the_time('d');
        }
        elseif (is_month()) { // archive (months)
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> <li> / </li>';
            echo get_the_time('F');
        }
        elseif (is_year()) { // archive (years)
            echo get_the_time('Y');
        }
        elseif (is_author()) { // authors
            global $author;
            $userdata = get_userdata($author);
            echo '<li>Posted ' . $userdata->display_name . '</li>';
        } elseif (is_404()) { // if page not found
            echo '<li>Error 404</li>';
        }

        if (get_query_var('paged')) // number of page
            echo ' (' . get_query_var('paged').'- page)';

    } else { // home
        $pageNum=(get_query_var('paged')) ? get_query_var('paged') : 1;
        if($pageNum>1)
            echo '<li><a href="'.site_url().'"><i class="fa fa-home" aria-hidden="true">Главная</a></li> <li> / </li> '.$pageNum.'- page';
        else
            echo '<li><i class="fa fa-home" aria-hidden="true"></i>Главная</li>';
    }
}
