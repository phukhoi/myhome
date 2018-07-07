<?php 
get_header(); 
global $maxthemes;
?>
<div class="content-page">
    <div class="container">
        <div class="bread-crumb radius">
            <a href="<?php echo "http://".$_SERVER['SERVER_NAME'] ; ?>">Trang chủ</a> <span><?php the_title() ; ?></span>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
