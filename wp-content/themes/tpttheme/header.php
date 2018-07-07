<?php 
    session_start();
    global $maxthemes;
    $logo = $maxthemes['basic-logo'];
?>
<!DOCTYPE html>
<html lang="vi"> 
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            <?php wp_title('|', true, 'right'); ?>
        </title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/favicon/favicon.ico">
        <link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/tpttheme/assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/tpttheme/assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/tpttheme/assets/favicon/apple-icon-144x144.png">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <script type='text/javascript' src='/wp-content/themes/tpttheme/assets/js/jquery-3.1.1.min.js'></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="clearfix" id="header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img alt="<?php bloginfo("name"); ?>" src="<?php echo $logo['url']; ?>"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <?php
                        $args = array(
                            'menu_class' => 'nav navbar-nav navbar-right',
                            'menu_id' => '',
                            'container'=>false, 
                        );
                        wp_nav_menu( $args );
                        ?>
                    </div>
                </div>
            </nav>
        </header>