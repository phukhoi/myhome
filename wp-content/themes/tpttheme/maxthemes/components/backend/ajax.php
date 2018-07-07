<?php
namespace max_themes\components\backend;


class ajax
{
    public $_table = 'ecogreenform';
    public $_tablePrefix;
    public $_error;
    public $_wpdb;

    public function __construct()
    {
        global $wpdb;
        $this->_wpdb = $wpdb;
        $this->_tablePrefix = $this->_wpdb->prefix . $this->_table;

        add_action('wp_head', array($this, 'pluginname_ajaxurl'));
        //saveData
        add_action('wp_ajax_saveData', array($this, 'saveData'));
        add_action('wp_ajax_nopriv_saveData', array($this, 'saveData'));
    }
    /**
     * Thêm biến Ajax URL dành cho hoạt động Ajax
     */
    public function pluginname_ajaxurl()
    {
        ?>
        <script type="text/javascript">
            var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
        </script>
        <?php
    }
    public function saveData(){
        $success = false;
        $msg = 'Đã có lỗi xảy ra. Vui lòng thử lại sau !';
        $param['name'] = isset($_POST['name']) && !empty($_POST['name']) ? $_POST['name'] :'';
        $param['phone'] = isset($_POST['phone']) && !empty($_POST['phone']) ? $_POST['phone'] :'';
        $param['email'] = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] :'';
        $param['service'] = isset($_POST['service']) && !empty($_POST['service']) ? $_POST['service'] :'';
        $param['note'] = isset($_POST['note']) && !empty($_POST['note']) ? $_POST['note'] :'';
        $result = $this->_wpdb->insert($this->_tablePrefix, $param);
        if ($result) {
            $success = true;
            $msg = "Cám ơn quý khách đã liên hệ với chúng tôi. Chúng tôi sẽ liên lạc lại bạn nhanh nhất khi có thể !";
        }  
        $return = array(
            'success'  => $success,
            'msg' => $msg,
        );
        echo json_encode($return);
        die();
    }

}