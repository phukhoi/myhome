<?php
namespace max_themes\components;
use max_themes\components\backend\ajax;
use max_themes\components\backend\metabox;
use max_themes\components\backend\posts;
use max_themes\components\backend\support;
use max_themes\components\frontend\enqueue;
use max_themes\components\backend\menu;

/*
 * Themes Options
 */
require 'backend/options.php';

/**
 * Class init
 * @package max_themes\components
 */
class init
{
    public function __construct()
    {
        $this->init_frontend();
        $this->init_backend();
    }

    public function init_frontend()
    {
        /**
         * Style
         */
        new enqueue();
    }

    public function init_backend()
    {
        /**
         * Bắt buộc cài đặt mới các gói cài đặt
         */
        add_action('tgmpa_register', array($this, 'register_required_plugins'));
        /*
         * menu
         */
        new menu();
        new metabox();
        new support();
        new posts();
        new ajax();
    }

    /**
     * Use class TGM plugin
     */
    public function register_required_plugins()
    {
        $plugins = array(
            array(
                'name' => 'Meta Box',
                'slug' => 'meta-box',
                'required' => true,
                'force_activation' => false,
                'force_deactivation' => false,
            ),
            array(
                'name' => 'Redux Framework',
                'slug' => 'redux-framework',
                'required' => true
            )
        );

        $config = array(
            'domain' => 'maxthemes',
            'default_path' => '',
            'parent_menu_slug' => 'themes.php',
            'parent_url_slug' => 'themes.php',
            'menu' => 'install-required-plugins',
            'has_notices' => true,
            'is_automatic' => false,
            'message' => '',
            'strings' => array(
                'page_title' => __('Install Required Plugins', 'maxthemes'),
                'menu_title' => __('Install Plugins', 'maxthemes'),
                'installing' => __('Installing Plugin: %s', 'maxthemes'),
                'oops' => __('Something went wrong with the plugin API.', 'maxthemes'),
                'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.'),
                'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.'),
                'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.'),
                'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.'),
                'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.'),
                'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.'),
                'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'),
                'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.'),
                'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins'),
                'activate_link' => _n_noop('Activate installed plugin', 'Activate installed plugins'),
                'return' => __('Return to Required Plugins Installer', 'maxthemes'),
                'plugin_activated' => __('Plugin activated successfully.', 'maxthemes'),
                'complete' => __('All plugins installed and activated successfully. %s', 'maxthemes'),
                'nag_type' => 'updated',
            )
        );
        tgmpa($plugins, $config);
    }
}