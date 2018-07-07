<?php

namespace max_themes\components\backend;


class menu
{
    public function __construct()
    {
        /** menu chinh **/
        add_theme_support('menus');
        register_nav_menus(
            array(
                'header-menu' => 'Menu chính',
            )
        );
    }
}