<?php

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "maxthemes";


/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

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
    'google_api_key' => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
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
    'dev_mode' => true,
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
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

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
    'title' => __('Cài đặt trang chủ', 'maxthemes'),
    'id' => 'home',
    'desc' => __('Cài đặt thông tin trang chủ', 'maxthemes'),
    'customizer_width' => '400px',
    'icon' => 'el el-home'
));
Redux::setSection($opt_name, array(
    'title' => __('Câu truyện Blemil', 'maxthemes'),
    'id' => 'home-story',
    'subsection' => true,
    'customizer_width' => '450px',
    'fields' => array(
        array(
            'id' => 'home-story-page',
            'type' => 'Select',
            'data' => 'pages',
            'title' => __('Chọn trang câu truyện Blemil', 'maxthemes'),
            'desc' => __('Là trang hiển thị thông tin về câu truyện Blemil - nội dung hiển thị tại trang chủ sẽ được lấy từ đây', 'maxthemes'),
        ),
        array(
            'id' => 'home-story-maxlength',
            'type' => 'slider',
            'min' => 50,
            'max' => 700,
            'default' => 500,
            'title' => __('Chiều dài tối đa', 'maxthemes'),
            'desc' => __('Là số ký tự hiển thị tại trang chủ tối đa theo nội dung bài viết', 'maxthemes'),
        )
    )
));
Redux::setSection($opt_name, array(
    'title' => __('Tìm hiểu về Blemil', 'maxthemes'),
    'id' => 'home-research',
    'subsection' => true,
    'customizer_width' => '450px',
    'fields' => array(
        array(
            'id' => 'home-research-product-1',
            'type' => 'Select',
            'data' => 'post',
            'args' => array(
                'post_type' => array(
                    'tim-hieu'
                )
            ),
            'title' => __('Sản phẩm 1', 'maxthemes'),
            'desc' => __('Chọn bài có đường dẫn đến sản phẩm 1', 'maxthemes'),
        ),

        array(
            'id' => 'home-research-product-2',
            'type' => 'Select',
            'data' => 'post',
            'args' => array(
                'post_type' => array(
                    'tim-hieu'
                )
            ),
            'title' => __('Sản phẩm 2', 'maxthemes'),
            'desc' => __('Chọn bài có đường dẫn đến sản phẩm 1', 'maxthemes'),
        ), array(
            'id' => 'home-research-product-3',
            'type' => 'Select',
            'data' => 'post',
            'args' => array(
                'post_type' => array(
                    'tim-hieu'
                )
            ),
            'title' => __('Sản phẩm 3', 'maxthemes'),
            'desc' => __('Chọn bài có đường dẫn đến sản phẩm 1', 'maxthemes'),
        ), array(
            'id' => 'home-research-product-4',
            'type' => 'Select',
            'data' => 'post',
            'args' => array(
                'post_type' => array(
                    'tim-hieu'
                )
            ),
            'title' => __('Sản phẩm 4', 'maxthemes'),
            'desc' => __('Chọn bài có đường dẫn đến sản phẩm 1', 'maxthemes'),
        )
    )
));

Redux::setSection($opt_name, array(
    'title' => __('Quà tặng bé yêu', 'maxthemes'),
    'id' => 'home-gift',
    'subsection' => true,
    'customizer_width' => '450px',
    'fields' => array(
        array(
            'id' => 'home-gift-page',
            'type' => 'Select',
            'data' => 'pages',
            'title' => __('Chọn trang câu quà tặng bé', 'maxthemes'),
            'desc' => __('Là trang hiển thị thông tin về quà tặng bé yêu', 'maxthemes'),
        )
    )
));

// -> START Basic Fields
Redux::setSection($opt_name, array(
    'title' => __('Cài đặt chung', 'maxthemes'),
    'id' => 'basic',
    'desc' => __('Cài đặt chung cho hệ thống', 'maxthemes'),
    'customizer_width' => '400px',
    'icon' => 'el el-cog-alt'
));

Redux::setSection($opt_name, array(
    'title' => __('Giới thiệu', 'maxthemes'),
    'id' => 'basic-about',
    'subsection' => true,
    'customizer_width' => '450px',
    'fields' => array(
        array(
            'id' => 'basic-about-text',
            'type' => 'text',
            'title' => __('Giới thiệu về Blemil Plus', 'maxthemes'),
            'subtitle' => __('Lời giới thiệu của công ty', 'maxthemes'),
            'default' => 'Dòng sữa Bio Premium - Sữa công thức sinh học cao cấp chất lượng vượt trội, được nhập khẩu nguyên hộp từ châu Âu'
        ),
        array(
            'id' => 'basic-about-hotline',
            'type' => 'text',
            'title' => __('Đường dây nóng', 'maxthemes'),
            'subtitle' => __('Hotline', 'maxthemes'),
            'default' => '1800 6698'
        ),
        array(
            'id' => 'basic-about-email',
            'type' => 'text',
            'validate' => 'email',
            'title' => __('Thư điện tử', 'maxthemes'),
            'subtitle' => __('Email', 'maxthemes'),
            'msg' => 'Nhập định dạng Email',
            'default' => 'support@btvietnam.com.vn'
        ),
        array(
            'id' => 'basic-about-address',
            'type' => 'text',
            'title' => __('Địa chỉ', 'maxthemes'),
            'subtitle' => __('address', 'maxthemes'),
            'default' => 'Số nhà 28 ngõ 46 Phạm Ngọc Thạch, Phường Phương Liên, Quận Đống Đa, Hà Nội'
        ),
        array(
            'id' => 'basic-about-website',
            'type' => 'text',
            'title' => __('Trang Web', 'maxthemes'),
            'subtitle' => __('Website', 'maxthemes'),
            'default' => 'www.blemilplus.vn'
        ),
    )
));


Redux::setSection($opt_name, array(
    'title' => __('Mạng xã hội', 'maxthemes'),
    'id' => 'basic-social',
    'subsection' => true,
    'customizer_width' => '450px',
    'fields' => array(
        array(
            'id' => 'basic-social-facebook',
            'type' => 'text',
            'title' => __('Facebook Page', 'maxthemes'),
            'subtitle' => __('Là đường dẫn facebook (Ví dụ: https://www.facebook.com/suablemilplus/ ) ', 'maxthemes'),
            'default' => 'https://www.facebook.com/suablemilplus/'
        ),
        array(
            'id' => 'basic-social-google',
            'type' => 'text',
            'title' => __('Google Page', 'maxthemes'),
            'subtitle' => __('Là đường dẫn facebook (Ví dụ: https://plus.google.com/+laboratoriosordesa ) ', 'maxthemes'),
            'default' => 'https://plus.google.com/+laboratoriosordesa'
        ),
        array(
            'id' => 'basic-social-youtube',
            'type' => 'text',
            'title' => __('Google Page', 'maxthemes'),
            'subtitle' => __('Là đường dẫn facebook (Ví dụ:https://www.youtube.com/channel/UCiI5aWf5_boMJytelLcCwPQ ) ', 'maxthemes'),
            'default' => 'https://www.youtube.com/channel/UCiI5aWf5_boMJytelLcCwPQ'
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
 * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
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

