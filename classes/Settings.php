<?php


namespace kobzar;


class Settings
{
    public function __construct()
    {
        $this->themeSupport();
        $this->initializeACFPage();
        $this->postThumbnail();
    }

    public function themeSupport()
    {
        add_theme_support('custom-logo');
        add_theme_support('menus');
    }

    public function initializeACFPage()
    {
        return acf_add_options_page(array(
            'page_title' => 'Настройки темы',
            'menu_title' => 'Настройки темы',
            'menu_slug' => 'options',
            'capability' => 'edit_posts',
            'redirect' => false
        ));
    }
    public function postThumbnail()
    {
        add_theme_support( 'post-thumbnails' );
    }
}
