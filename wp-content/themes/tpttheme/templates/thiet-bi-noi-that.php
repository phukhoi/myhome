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
$args_partner = array (
    'post_type' => 'partner',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
    'posts_per_page' => -1
);
$partner = get_posts($args_partner);
// echo ('<pre>');
// print_r($all_left);
// echo ('</pre>');
?> 
<div id="furniture">
    <?php get_template_part('inc/tpt', 'header-products'); ?> 
    <section id="content-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 <?php   if ( $loop->posts ) { ?>
                    <?php foreach($loop->posts as $item_posts) { ?>
                        <div class="col-md-4 col-xs-12">
                            <div class="item-pro">
                                <div class="item-title-pro text-center">
                                    <h4>
                                        <?php echo $item_posts->post_title ?>
                                    </h4>
                                </div>
                                <div class="item-pro-image">
                                    <img src="<?php echo get_the_post_thumbnail_url($item_posts->ID); ?>" class="img-responsive" />
                                </div>
                                <div class="item-pro-link">
                                    <a href="<?php echo get_permalink($item_posts->ID); ?>" class="a-link">Xem them</a>
                                </div>
                            </div>
                        </div> 
                    <?php }}  ?>
                </div> 
            </div>
            <?php if($ads){?>
                <?php foreach($ads as $item_ads){?>
                    <div class="col-md-12">
                        <img src="<?php echo get_the_post_thumbnail_url($item_ads->ID); ?>" class="img-responsive"/>
                    </div>
                <?php }?>
            <?php }?>
            <div class="row">
                <div class="partner">
                    <?php if($partner){?>
                        <?php foreach($partner as $item_partner){?>
                            <div class="item">
                              <img src="<?php echo get_the_post_thumbnail_url($item_partner->ID); ?>" class="img-responsive"/>
                          </div>
                      <?php }?>
                  <?php }?>

              </div>
          </div>
      </div>
  </section>   
</div>

<?php get_footer(); ?>