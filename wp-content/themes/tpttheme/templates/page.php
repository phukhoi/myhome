<?php 
/*
    * Template Name: Page
* */
get_header(); 
global $maxthemes;
$currentLang = qtranxf_getLanguage();
?>
<div class="content-page">
    <div class="container">
        <div class="bread-crumb radius">
            <a href="<?php echo "http://".$_SERVER['SERVER_NAME'] ; ?>"><?php echo $currentLang == 'en' ? 'Home': 'Trang Chủ'; ?></a> <span><?php the_title() ; ?></span>
        </div>
        <div class="row">
            <div class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                <div class="content-single single-with-sidebar">
                    <div class="main-single">
                        <div class="post-format-date">
                            <i aria-hidden="true" class="fa fa-calendar-o"></i>
                            <span><?php echo get_the_date('F'); ?>.<?php echo get_the_date('d'); ?></span>
                        </div>
                        <h2 class="title-single">
                            <?php the_title() ; ?>
                        </h2>
                        <p class="desc post-intro">
                            &nbsp;
                        </p>
                    </div>
                    <div class="desc">
                        <?php the_content(); ?>
                    </div> 
                    <div class="leave-comment">
                        <h2>Leave a Reply</h2>

                    </div>
                </div>
            </div>
            <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12 col-sm-pull-9">
                <?php get_template_part('inc/tpt', 'sidebarchild'); ?>
            </aside>
            
        </div>
    </div>
    </div>
<?php get_footer(); ?>
