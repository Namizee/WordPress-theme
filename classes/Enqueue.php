<?php


namespace kobzar;


class Enqueue
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueueScripts'));
    }

    public function enqueueScripts()
    {

        wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/js/jquery.js', array(), null, true);

        wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jQuery'), null, true);

        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);

        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');

        wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');

        wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');

        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css');

        wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css');

        wp_localize_script( 'main-js', 'VARS', array(
            'ajaxurl'   => admin_url('admin-ajax.php?action=filter_function'),
            'ajaxModal'   => admin_url('admin-ajax.php?action=modal_product'),
            'ajaxConsultationForm' => admin_url('admin-ajax.php?action=consultation_form_send')
        ));

    }


}
