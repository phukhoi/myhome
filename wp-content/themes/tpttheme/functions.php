<?php
    /*
        * Maxthemes function loader
        *
        * @author: Maxgroup
    */
    #active plugin metabox
    require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';
    
    if (!defined('MAXTHEMES_VER')):
        define('MAXTHEMES_VER', '1.0.0');
    endif;
    if (!defined('MAXTHEMES_DIR')):
        define('MAXTHEMES_DIR', dirname(__FILE__));
    endif;
    if (!defined('MAXTHEMES_PATH')):
        define('MAXTHEMES_PATH', __FILE__);
    endif;
    if (!defined('MAXTHEMES_URI')):
    define('MAXTHEMES_URI', get_template_directory_uri());//get url theme active
endif;
if (!defined('MAXTHEMES_URI_ASSET')):
    define('MAXTHEMES_URI_ASSET', MAXTHEMES_URI . '/assets/');//get url folder
endif;
if (!defined('MAXTHEMES_URI')):
    define('MAXTHEMES_URI', MAXTHEMES_URI);//get url folder
endif;
if (!defined('TIME_ZONE')) :
    define('TIME_ZONE', 'Asia/Ho_Chi_Minh');
endif;
if (!defined('MAXTHEMES_LAN')):
    define('MAXTHEMES_LAN', get_locale());
endif;
if (!defined('MAXTHEMES_PREFIX')) :
    define('MAXTHEMES_PREFIX', 'mt_prefix_');
endif;

require_once 'maxthemes/bootstrap.php';
use max_themes\components\init;
new init();
    /**
        * Function
    */
    
    /**
        * the excert max char
        * @param type $charlength
    */
    
    /**
        * Max lenght Text
    */
    /*
    //add excerpt in page */
    function tpt_remove_hook(){
        remove_action( 'wc_print_notices', 'wc_print_notices', 10 );
        remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    }
    add_action('init','tpt_remove_hook', 30);
    //
    function insert_og_image_in_head() {
        global $post;
        $post_type = get_post_type();
        if(isset($post_type) && !empty($post_type)) {
            if(!has_post_thumbnail($post->ID)) { 
                $default_image=WP_HOME."/wp-content/uploads/2018/05/home-slider-img.png?v=1.1";
            }else{
                $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
                if(isset($thumbnail_src[0]) && !empty($thumbnail_src[0])){
                    $default_image = $thumbnail_src[0];
                }else{
                    $default_image=WP_HOME."/wp-content/uploads/2018/05/home-slider-img.png?v=1.1";
                }
            }
            echo '<meta property="og:image" content="' . esc_attr($default_image) . '"/>';
        }
    }
    add_action( 'wp_head', 'insert_og_image_in_head', 5 );
    //
    add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
    function new_loop_shop_per_page( $cols ) {
      // Return the number of products you wanna show per page.
      $cols = 12;
      return $cols;
  }
    //Remove jquery in front end
  function crunchify_stop_loading_wp_embed_and_jquery() {
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
            wp_deregister_script('jquery');  // Bonus: remove jquery too if it's not required
        }
    }
    //add_action('init', 'crunchify_stop_loading_wp_embed_and_jquery');
    function remove_cssjs_ver( $src ) {
        if( strpos( $src, '?ver=' ) )
            $src = remove_query_arg( 'ver', $src );
        return $src;
    }
    add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
    add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
    