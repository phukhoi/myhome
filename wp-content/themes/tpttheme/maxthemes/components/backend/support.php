<?php
namespace max_themes\components\backend;

/**
 * Class support
 * @package max_themes\components\backend
 */
class support
{
    public function __construct()
    {
        /**
         * Thêm ảnh đại diện cho bài viết
         */
        add_theme_support( 'post-thumbnails' );
        $this->add_thumbnail();
        $this->add_widget();
    }

    /**
     * Cắt ảnh image
     */
    public function add_thumbnail(){

        set_post_thumbnail_size( 1366, 768, array( 'center', 'center' ) );
        add_image_size( 'gallery', 366,366, array( 'center', 'center' ) );
        //  echo get_the_post_thumbnail($post->ID, 'tem', array("class" => 'img-responsive'));
    }

    /**
     * Đăng ký side_bar nếu
     */
    public function add_widget(){
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => 'Đăng ký nhận thông tin',
                'id' => 'email_sidebar',
                'description' => 'These are widgets for the sidebar.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>'
            ));
            register_sidebar(array(
                'name' => 'Ngôn ngữ',
                'id' => 'language_sidebar',
                'description' => 'Sidebar ngôn ngữ.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>'
            ));
            register_sidebar(array(
                'name' => 'Visitor Counter',
                'id' => 'visitor_counter',
                'description' => 'Sidebar Visitor Counter.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>'
            ));
        }
    }
}