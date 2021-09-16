<?php


namespace kobzar;


class Filter
{
    public function __construct()
    {
        add_action('wp_ajax_filter_function', array($this, 'filter_function'));
        add_action('wp_ajax_nopriv_filter_function', array($this, 'filter_function'));
    }

    public function filter_function()
    {
        $category = $_POST['category'];

        $args = array(
            'post_type' => 'post',
            'post_per_page' => -1
        );

        if (isset($_POST['category'])) {
            $args['category__in'] = array($category);
        }

        $query = new \WP_Query($args);

        if ($query->have_posts()) :
            ob_start();
            while ($query->have_posts()): $query->the_post();
                get_template_part('template-parts/content', 'trip');
            endwhile;
            $post_html = ob_get_contents();
            ob_end_clean();
            wp_send_json_success($post_html);
        endif;
        wp_reset_postdata();
        die();
    }
}
