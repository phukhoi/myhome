<?php

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "maxthemes";

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name' => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name' => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version' => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type' => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu' => true,
    // Show the sections below the admin menu item or not
    'menu_title' => __('Cài đặt giao diện', 'maxthemes'),
    'page_title' => __('Cài đặt giao diện', 'maxthemes'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key' => 'AIzaSyCmODj6mWP35VcfQ3Gwtg_ztMve0Ya6bLg',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => true,
    // Must be defined to add google fonts to the typography module
    'async_typography' => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar' => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon' => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority' => 50,
    // Choose an priority for the admin bar menu
    'global_variable' => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode' => false,
    // Show the time the page took to load, etc
    'update_notice' => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer' => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority' => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent' => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions' => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon' => '',
    // Specify a custom URL to an icon
    'last_tab' => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon' => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug' => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults' => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show' => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark' => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export' => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time' => 60 * MINUTE_IN_SECONDS,
    'output' => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag' => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database' => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn' => true,
    // If you prefer not to use the CDN for select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'red',
            'shadow' => true,
            'rounded' => false,
            'style' => '',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave',
            ),
        ),
    )
);

Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */


/*
 *
 * ---> START SECTIONS
 *
 */

/*

    As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


 */

// --> START home
    Redux::setSection($opt_name, array(
        'title' => __('Cài đặt chung', 'maxthemes'),
        'id' => 'home',
        'desc' => __('Cài đặt tất cả các phần liên quan trang web', 'maxthemes'),
        'customizer_width' => '400px',
        'icon' => 'el el-home'
    ));
    Redux::setSection($opt_name, array(
        'title' => __('Cài đặt trang chủ', 'maxthemes'),
        'id' => 'home-about',
        'subsection' => true,
        'customizer_width' => '450px',
        'fields' => array(
            array(
                'id' => 'home-about-content',
                'title' => __('Các bài viết giới thiệu công ty:', 'maxthemes'),
                'desc' => __('Chọn từ 4 sẽ hiển thị danh sách dạng slide ', 'maxthemes'),
                'type' => 'select',
                'multi' => true,
            //Must provide key => value pairs for radio options
                'data' => 'post',
                'args' => [
                    'posts_per_page'=>100,
                ],
            ),
            array(
                'id' => 'home-about-image',
                'title' => __('Sản phẩm nổi bật', 'maxthemes'),
                'desc' => __('Chọn 2 sản phẩm nổi bật', 'maxthemes'),
                'type' => 'select',
                'multi' => true,
                'data' => 'categories',
                'args' => [
                    'taxonomy' => [
                        'loai-san-pham'
                    ]
                ],
            ),
            array(
                'id' => 'home-about-new',
                'title' => __('Sản phẩm mới', 'maxthemes'),
                'desc' => __('Chọn 2 sản phẩm nổi bật', 'maxthemes'),
                'type' => 'select',
                'data' => 'categories',
                'args' => [
                    'taxonomy' => [
                        'loai-san-pham'
                    ]
                ],
            ),
            array(
                'id' => 'home-about-news',
                'title' => __('Bài viết giới truyền thông khuyến mãi:', 'maxthemes'),
                'desc' => __('Nội dung phần : Truyền thông khuyến mãi', 'maxthemes'),
                'type' => 'select',
            //Must provide key => value pairs for radio options
                'data' => 'post',
            ),
            array(
                'id' => 'home-about-culinary',
                'title' => __('Bài viết góc ẩm thực:', 'maxthemes'),
                'desc' => __('Nội dung phần : góc ẩm thực', 'maxthemes'),
                'type' => 'select',
            //Must provide key => value pairs for radio options
                'data' => 'post',
            ),

            array(
                'id' => 'home-about-clients',
                'type' => 'gallery',
                'title' => __('Logo đối tác:', 'maxthemes'),
                'desc' => __('Chọn ảnh logo đối tác', 'maxthemes'),
            ),
        )
    ));

    Redux::setSection($opt_name, array(
        'title' => __('Các trang sản phẩm', 'maxthemes'),
        'id' => 'home-total',
        'subsection' => true,
        'customizer_width' => '450px',
        'fields' => array(
            array(
                'id' => 'home-total-slide',
                'type' => 'gallery',
                'title' => __('Slide giới thiệu sản phẩm', 'maxthemes'),
                'desc' => __('Slide giới thiệu sản phẩm', 'maxthemes'),
            ),
        )
    ));


    Redux::setSection($opt_name, array(
        'title' => __('Giới thiệu', 'maxthemes'),
        'id' => 'home-abouts',
        'subsection' => true,
        'customizer_width' => '450px',
        'fields' => array(
            array(
                'id' => 'home-abouts-slide',
                'title' => __('Slide trang giới thiệu', 'maxthemes'),
                'desc' => __('Hình ảnh kích thước 600x350', 'maxthemes'),
                'type' => 'gallery',
            ),
            array(
                'id' => 'home-abouts-tamnhin',
                'title' => __('Bài viết tầm nhìn xứ mệnh', 'maxthemes'),
                'type' => 'editor',
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 10
                )
            ),
        )
    ));


    Redux::setSection($opt_name, array(
        'title' => __('Xuất nhập khẩu', 'maxthemes'),
        'id' => 'home-export',
        'subsection' => true,
        'customizer_width' => '450px',
        'fields' => array(
            array(
                'id' => 'home-export-page',
                'title' => __('Trang xuất nhập khẩu:', 'maxthemes'),
                'desc' => __('Chọn trang hiển thị thông tin xuất nhập khẩu', 'maxthemes'),
                'type' => 'select',
            //Must provide key => value pairs for radio options
                'data' => 'page',
            ),
            array(
                'id' => 'home-export-slide',
                'title' => __('Slide trang xuất khẩu', 'maxthemes'),
                'desc' => __('Hình ảnh kích thước 600x350', 'maxthemes'),
                'type' => 'gallery',
            ),

        )
    ));


    Redux::setSection($opt_name, array(
        'title' => __('Sự kiện', 'maxthemes'),
        'id' => 'home-event',
        'subsection' => true,
        'customizer_width' => '450px',
        'fields' => array(
            array(
                'id' => 'home-event-slide',
                'title' => __('Slide trang sự kiện', 'maxthemes'),
                'desc' => __('Hình ảnh kích thước 1000x550', 'maxthemes'),
                'type' => 'gallery',
            ),

        )
    ));

    Redux::setSection($opt_name, array(
        'title' => __('Khuyến mãi', 'maxthemes'),
        'id' => 'home-ads',
        'subsection' => true,
        'customizer_width' => '450px',
        'fields' => array(
            array(
                'id' => 'home-ads-slide',
                'title' => __('Slide trang khuyến mãi', 'maxthemes'),
                'desc' => __('Hình ảnh kích thước 1000x550', 'maxthemes'),
                'type' => 'gallery',
            ),

        )
    ));

    Redux::setSection($opt_name, array(
        'title' => __('Góc ẩm thực', 'maxthemes'),
        'id' => 'home-amthuc',
        'subsection' => true,
        'customizer_width' => '450px',
        'fields' => array(
            array(
                'id' => 'home-amthuc-slide',
                'title' => __('Slide trang góc ẩm thực', 'maxthemes'),
                'desc' => __('Hình ảnh kích thước 600x350', 'maxthemes'),
                'type' => 'gallery',
            ),

        )
    ));
    Redux::setSection($opt_name, array(
        'title' => __('Truyền thông khuyến mãi', 'maxthemes'),
        'id' => 'home-truyenthong-khuyenmai',
        'subsection' => true,
        'customizer_width' => '450px',
        'fields' => array(
            array(
                'id' => 'home-truyenthong-khuyenmai-slide',
                'title' => __('Slide truyền thông khuyến mãi', 'maxthemes'),
                'desc' => __('Hình ảnh kích thước 1000x550', 'maxthemes'),
                'type' => 'gallery',
            ),

        )
    ));
    if (file_exists(dirname(__FILE__) . '/../README.md')) {
        $section = array(
            'icon' => 'el el-list-alt',
            'title' => __('Documentation', 'maxthemes'),
            'fields' => array(
                array(
                    'id' => '17',
                    'type' => 'raw',
                    'markdown' => true,
                'content_path' => dirname(__FILE__) . '/../README.md', // FULL PATH, not relative please
                //'content' => 'Raw content here',
            ),
            ),
        );
        Redux::setSection($opt_name, $section);
    }
/*
 * <--- END SECTIONS
 */


/*
 *
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
 *
 */

/*
*
* --> Action hook examples
*
*/

// If Redux is running as a plugin, this will remove the demo notice and links
//add_action( 'redux/loaded', 'remove_demo' );

// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
//add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

// Change the arguments after they've been declared, but before the panel is created
//add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

// Change the default value of a field after it's been set, but before it's been useds
//add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

// Dynamically add a section. Can be also used to modify sections/fields
//add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

/**
 * This is a test function that will let you see when the compiler hook occurs.
 * It only runs if a field    set with compiler=>true is changed.
 * */
if (!function_exists('compiler_action')) {
    function compiler_action($options, $css, $changed_values)
    {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r($changed_values); // Values that have changed since the last save
        echo "</pre>";
        //print_r($options); //Option values
        //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }
}

/**
 * Custom function for the callback validation referenced above
 * */
if (!function_exists('redux_validate_callback_function')) {
    function redux_validate_callback_function($field, $value, $existing_value)
    {
        $error = false;
        $warning = false;

        //do your validation
        if ($value == 1) {
            $error = true;
            $value = $existing_value;
        } elseif ($value == 2) {
            $warning = true;
            $value = $existing_value;
        }

        $return['value'] = $value;

        if ($error == true) {
            $return['error'] = $field;
            $field['msg'] = 'your custom error message';
        }

        if ($warning == true) {
            $return['warning'] = $field;
            $field['msg'] = 'your custom warning message';
        }

        return $return;
    }
}

/**
 * Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')) {
    function redux_my_custom_field($field, $value)
    {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }
}

/**
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 * */
if (!function_exists('dynamic_section')) {
    function dynamic_section($sections)
    {
        //$sections = array();
        $sections[] = array(
            'title' => __('Section via hook', 'maxthemes'),
            'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'maxthemes'),
            'icon' => 'el el-paper-clip',
            // Leave this as a blank section, no options just some intro text set above.
            'fields' => array()
        );

        return $sections;
    }
}

/**
 * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in
 * other functions.
 * */
if (!function_exists('change_arguments')) {
    function change_arguments($args)
    {
        //$args['dev_mode'] = true;

        return $args;
    }
}

/**
 * Filter hook for filtering the default value of any given field. Very useful in development mode.
 * */
if (!function_exists('change_defaults')) {
    function change_defaults($defaults)
    {
        $defaults['str_replace'] = 'Testing filter hook!';

        return $defaults;
    }
}

/**
 * Removes the demo link and the notice of integrated demo from the redux-framework plugin
 */
if (!function_exists('remove_demo')) {
    function remove_demo()
    {
        // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
        if (class_exists('ReduxFrameworkPlugin')) {
            remove_filter('plugin_row_meta', array(
                ReduxFrameworkPlugin::instance(),
                'plugin_metalinks'
            ), null, 2);

            // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
            remove_action('admin_notices', array(ReduxFrameworkPlugin::instance(), 'admin_notices'));
        }
    }
}

