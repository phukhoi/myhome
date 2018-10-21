<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
get_header('shop');
global $product;
global $post;
global $maxthemes;
global $wp_query;
$title_contact = 'Liên hệ';
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
                <div class="col-md-12 header-text">
                    <h3><?php woocommerce_page_title(); ?></h3>
                </div>
            </div>
<!-- <section class="header-breadcrumb" style="background-image: url(/wp-content/uploads/2018/05/header-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="page-title">
                    <h1><?php woocommerce_page_title(); ?></h1>
                </div>
            </div>
            <div class="col-md-7">
            </div>
        </div>
    </div>
</section> -->
            <div class="content-page pad-b50">
                <div class="container">
                    <div class="row">
                        <div class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                            <div class="content-grid-boxed">
                                <div class="content-grid-boxed">
                                    <div class="sort-pagi-bar clearfix pad-b30">
                                        <div class="view-type pull-left">

                                        </div>
                                        <div class="sort-paginav pull-right">
                                            <?php if ($wp_query->max_num_pages <= 1) {

                                            } else { ?>
                                                <?php
                                                echo paginate_links(apply_filters('woocommerce_pagination_args', array(
                                                    'base' => esc_url_raw(str_replace(999999999, '%#%', remove_query_arg('add-to-cart', get_pagenum_link(999999999, false)))),
                                                    'format' => '',
                                                    'add_args' => false,
                                                    'current' => max(1, get_query_var('paged')),
                                                    'total' => $wp_query->max_num_pages,
                                                    'prev_text' => '&larr;',
                                                    'next_text' => '&rarr;',
                                                    'type' => 'list',
                                                    'end_size' => 3,
                                                    'mid_size' => 3,
                                                )));
                                                ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="grid-pro-color">
                                        <?php if (have_posts()) : ?>
                                            <?php
                                            if (!did_action('woocommerce_init')) {
                                                wc_doing_it_wrong(__FUNCTION__, __('This function should not be called before woocommerce_init.', 'woocommerce'), '2.3');
                                                return;
                                            }
                                            $all_notices = WC()->session->get('wc_notices', array());
                                            $notice_types = apply_filters('woocommerce_notice_types', array('error', 'success', 'notice'));
                                            foreach ($notice_types as $notice_type) {
                                                if (wc_notice_count($notice_type) > 0) {
                                                    wc_get_template("notices/{$notice_type}.php", array(
                                                        'messages' => array_filter($all_notices[$notice_type]),
                                                    ));
                                                }
                                            }
                                            wc_clear_notices();
                                            ?>
                                            <div class="row">
                                                <?php woocommerce_product_loop_start(); ?>
                                                <?php woocommerce_product_subcategories(); ?>
                                                <?php while (have_posts()) : the_post();
                                                    global $product; ?>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pro-box">
                                                        <div class="p-content">
                                                            <div class="pro-title text-center">
                                                                <h5>
                                                                    <a href="<?php echo get_permalink(); ?>"><?php echo wp_trim_words($post->post_title, 15, '...'); ?></a>
                                                                </h5>
                                                            </div>
                                                            <div class="pro-image">
                                                                <a href="<?php echo get_permalink(); ?>">
                                                                    <?php echo woocommerce_get_product_thumbnail(); ?>
                                                                </a>
                                                            </div>
                                                            <div class="pro-price">
                                                                <?php if ($product->get_regular_price()) { ?>
                                                                    <span><?php echo number_format($product->get_regular_price(), '0', '.', '.') . ' VNĐ'; ?></span>
                                                                <?php } else { ?>
                                                                    <a class="btn btn-contact"
                                                                    href="<?php echo get_permalink(); ?>"><?php echo $title_contact; ?></a>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; // end of the loop. ?>
                                                <?php woocommerce_product_loop_end(); ?>
                                            </div>

                                            <?php elseif (!woocommerce_product_subcategories(array('before' => woocommerce_product_loop_start(false), 'after' => woocommerce_product_loop_end(false)))) : ?>
                                            <?php
                                            /**
                                             * woocommerce_no_products_found hook.
                                             *
                                             * @hooked wc_no_products_found - 10
                                             */
                                            do_action('woocommerce_no_products_found');
                                            ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12 col-sm-pull-9" style="padding-left: 0">
                            <label>Lọc theo</label>
                            <?php
                            if (1 === (int)$wp_query->found_posts || !woocommerce_products_will_display()) {

                            } else {
                                ?>
                                <?php
                                /**
                                 * woocommerce_before_shop_loop hook.
                                 *
                                 * @hooked wc_print_notices - 10
                                 * @hooked woocommerce_result_count - 20
                                 * @hooked woocommerce_catalog_ordering - 30
                                 */
                                do_action('woocommerce_before_shop_loop');
                                ?>
                            <?php } ?>
                            <?php if($ads){?>
                                <?php foreach($ads as $item_ads){?>
                                    <div class="row" style="margin-bottom: 10px;">  
                                        <div class="col-sm-12">
                                        <img src="<?php echo get_the_post_thumbnail_url($item_ads->ID); ?>" class="img-responsive"/>
                                        </div> 
                                    </div>
                                <?php }?>
                            <?php }?>
                        </aside>
                    </div>
                </div>
            </div>
            <?php 
            $args_partner = array (
                'post_type' => 'partner',
                'post_status' => 'publish',
                'order' => 'DESC',
                'orderby' => 'ID',
                'posts_per_page' => -1
            );
            $partner = get_posts($args_partner);
            ?>
            <div class="row">
                <div class="col-md-12 partner">
                    <?php if($partner){?>
                        <?php foreach($partner as $item_partner){?>
                            <div class="col-xs-4 col-md-2 item">
                                <img src="<?php echo get_the_post_thumbnail_url($item_partner->ID); ?>" class="img-responsive partner-img"/>
                            </div>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer('shop'); ?>
