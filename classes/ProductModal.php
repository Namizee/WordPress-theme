<?php


namespace kobzar;


class ProductModal
{
    public function __construct()
    {
        add_action('wp_ajax_modal_product', array($this, 'modal_product'));
        add_action('wp_ajax_nopriv_modal_product', array($this, 'modal_product'));
    }

    public function modal_product()
    {

        $category = $_POST['product'];

        $query = new \WP_Query('p= '. $category . '');

        if ($query->have_posts()) :$query->the_post();
            ob_start();
                get_template_part('template-parts/modal');
            $post_html = ob_get_contents();
            ob_end_clean();
            wp_send_json_success($post_html);
        endif;
        wp_reset_postdata();
        die();
    }


}
