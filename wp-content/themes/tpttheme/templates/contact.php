<?php
	/*
		* Template Name:Contact
	* */
	get_header();
	global $maxthemes;
    $address = $maxthemes['basic-address'];
    $hotline =$maxthemes['basic-hotline'];
    $email = $maxthemes['basic-email'];
?> 
<style type="text/css">
    .btn-file {
        position: relative;
        overflow: hidden;
        padding: 0px 12px;
    }
    #span_file{
        
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
</style>
<section class="header-breadcrumb" style="background-image: url(/wp-content/uploads/2018/05/header-bg-1.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="page-title">
                    <h1><?php the_title() ; ?></h1>
                </div>
            </div>
            <div class="col-md-7">
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Section -->
<!-- Start Contact Info -->
<section class="pad-t50">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info-wrapper">
                    <div class="feature-3 text-center">
                        <div class="feature-icon">
                            <i class="fa fa-map"></i>
                        </div>
                        <h3>ĐỊA CHỈ</h3>
                        <p><?php echo $address; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info-wrapper">
                    <div class="feature-3 text-center">
                        <div class="feature-icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <h3>HOTLINE</h3>
                        <p><?php echo $hotline; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info-wrapper">
                    <div class="feature-3 text-center">
                        <div class="feature-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h3>EMAIL</h3>
                        <p><?php echo $email; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info -->

<!-- Start Contact Form Section -->
<section class="">
    
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h3>Tiếp nhận thông tin</h3>
            </div>
        </div>
        <div class="col-md-12 contact-form">
            <?php 
                echo do_shortcode("[contact-form-7 id='469' title='Form Liên Hệ']");
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>