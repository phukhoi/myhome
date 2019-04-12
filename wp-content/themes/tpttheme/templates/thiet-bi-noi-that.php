<?php
/*
* Template Name:Thiết Bị Nội Thất
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
    'post_type' => 'adspage',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
    'posts_per_page' => -1
);
$ads = get_posts($args_ads);
//
// echo ('<pre>');
// print_r($all_left);
// echo ('</pre>');
?> 
<div id="furniture">
    <?php get_template_part('inc/tpt', 'header-products'); ?> 
    <section id="content-products" class="grey-bg">
        <div class="container grey-bg">
            <div class="row">
                <div class="col-md-12 header-text">
                    <h3>Sản phẩm nổi bật</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 no-padding">
                 <?php   if ( $loop->posts ) { ?>
                    <?php foreach($loop->posts as $item_posts) { ?>
                        <div class="col-md-4 col-xs-12 item-pro-wrapper">
                            <div class="item-pro">
                                <div class="item-title-pro text-center">
                                    <h4>
                                        <a href="<?php echo get_permalink($item_posts->ID); ?>" class="a-link">
                                            <?php echo $item_posts->post_title ?>
                                        </a>
                                    </h4>
                                </div>
                                <div class="item-pro-image">
                                    <a href="<?php echo get_permalink($item_posts->ID); ?>" class="a-link">
                                        <img src="<?php echo get_the_post_thumbnail_url($item_posts->ID); ?>" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="item-pro-link text-right">
                                    <a href="<?php echo get_permalink($item_posts->ID); ?>" class="a-link read-more">Xem thêm</a>
                                </div>
                            </div>
                        </div> 
                    <?php }}  ?>
                </div> 
            </div>
            <?php if($ads){?>
                <?php foreach($ads as $item_ads){?>
                    <div class="col-md-12 ads-container">
                        <img src="<?php echo get_the_post_thumbnail_url($item_ads->ID); ?>" class="img-responsive"/>
                    </div>
                <?php }?>
            <?php }?>
            <hr>
            
        </div>
        
  </section>   
</div>

<?php get_footer(); ?>