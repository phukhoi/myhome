<?php
namespace max_themes\components\backend;

class metabox
{
    public function __construct()
    {
        /*
         * Kiểm tra nếu đã cài đặt metabox thì gọi đến hàm sử dụng metabox
         */
        if (!function_exists('rwmb_meta_boxes')) {
            add_filter('rwmb_meta_boxes', array($this, 'init_meta_box'));
        }
    }

    public function init_meta_box()
    {
        /**
         * Thông tin trang tìm hiểu
         */
       // $meta_boxes[] = array(
            //code metabox

        //);

       // return $meta_boxes;
    }
}