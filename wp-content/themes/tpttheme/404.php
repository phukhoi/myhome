<?php
	get_header();
	global $maxthemes; 
?>
<style>
    .back-to-home{
        margin-top: 15px;
        padding: 15px 60px;
        background: #097b1b;
        border-radius: 15px;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
    }
</style>
<div class="content-page">
    <div class="container">
        <div class="bread-crumb radius">
            <a href="<?php echo home_url( '/' ); ?>">Trang chủ</a> <span>404 not found</span>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <img src="/wp-content/themes/tpttheme/404.jpg" alt="image" class="img-responsive" style="margin: 0 auto;">
                <a href="<?php echo home_url( '/' ); ?>" class="btn btn-info">Trang chủ</a>
                <br>
                <br> 
            </div>
        </div>
    </div>
</div> 
<?php get_footer(); ?>
