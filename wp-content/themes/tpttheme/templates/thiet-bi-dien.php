<?php
/*
* Template Name:Thiết Bị Điện
* */
get_header();
global $maxthemes; 
$args_featured = array(
    'post_type' => 'product',
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
            'taxonomy' => 'product_visibility',
            'field'    => 'name',
            'terms'    => 'featured',
        ),
    ),
);
$loop = new WP_Query( $args_featured );
//
$args_ads = array (
    'post_type' => 'adsleft',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
    'posts_per_page' => -1
);
$ads = get_posts($args_ads); 
?> 
<div id="furniture">
    <?php get_template_part('inc/tpt', 'header-products'); ?> 
    <section id="content-products" class="grey-bg">
        <div class="container grey-bg">
            <div class="row">
                <div class="col-md-3 col-xs-12 pad-t30">
                    <?php if($ads){?>
                        <?php foreach($ads as $item_ads){?>
                            <div style="margin-bottom: 10px;">
                                <img src="<?php echo get_the_post_thumbnail_url($item_ads->ID); ?>" class="img-responsive"/>
                            </div>
                        <?php }?>
                    <?php }?>
                </div>
                <div class="col-md-9 col-xs-12 header-text">
                    <h3>Tải bảng giá thiết bị điện</h3>
                    <hr style="border-top: 1px solid #000; width: 100%">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>   
</div>

<?php get_footer(); ?>