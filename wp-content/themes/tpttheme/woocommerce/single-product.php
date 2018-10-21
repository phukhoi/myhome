<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
get_header('shop');
global $product;
global $post;
global $maxthemes;
global $wp_query;
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
                    <h3><?php echo wc_get_product_category_list($product->get_id()); ?></h3>
                </div>
            </div>

                <div id="content" class="detail-products">
                    <div class="content-page pad-b50">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-col-xs-12" style="padding-left: 0">
                                    <?php if($ads){?>
                                        <?php foreach($ads as $item_ads){?>
                                            <div style="margin-bottom: 10px;">
                                                <img src="<?php echo get_the_post_thumbnail_url($item_ads->ID); ?>" class="img-responsive"/>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                </div>
                                <div class="col-md-9 col-sm-8 col-col-xs-12">
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
                                    <div class="product-detail accordion-detail border radius">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="detail-gallery">
                                                    <div class="mid">
                                                        <?php
                                                        echo woocommerce_get_product_thumbnail();
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-12 col-xs-12">
                                                <div class="detail-info">
                                                    <h2 class="title-detail">
                                                        <?php the_title(); ?>
                                                    </h2>
                                                    <div class="product-rate" style="display: none;">
                                                        <div class="product-rating" style="width:90%"></div>
                                                    </div>
                                                    <p class="desc">
                                                        <?php echo apply_filters('woocommerce_short_description', $post->post_excerpt); ?>
                                                    </p>
                                                    <?php if ($product->get_regular_price()) { ?>
                                                        <div class="product-price item-price">
                                                            <span><?php echo number_format($product->get_regular_price(), '0', '.', '.') . ' VNĐ'; ?></span>
                                                        </div>
                                                    <?php } ?>
                                                    <?php do_action('woocommerce_product_meta_start'); ?>
                                                    <div class="attr-detail attr-color">
                                                        <p>
                                                            <!-- <?php echo wc_get_product_category_list($product->get_id(), ', ', '<span class="posted_in">' . _n('Category:', 'Categories:', count($product->get_category_ids()), 'woocommerce') . ' ', '</span>'); ?> -->
                                                        </p>
                                                        <p>
                                                            <?php if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type('variable'))) : ?>
                                                            <span class="sku_wrapper"><?php esc_html_e('SKU:', 'woocommerce'); ?>
                                                            <span class="sku"><?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('N/A', 'woocommerce'); ?></span></span>

                                                        <?php endif; ?>
                                                    </p>
                                                    <p>
                                                        <?php echo wc_get_product_tag_list($product->get_id(), ', ', '<span class="tagged_as">' . _n('Tag:', 'Tags:', count($product->get_tag_ids()), 'woocommerce') . ' ', '</span>'); ?>
                                                    </p>
                                                    </div>
                                                    <?php do_action('woocommerce_product_meta_end'); ?>
                                                    <div class="detail-extralink">
                                                        <?php
                                                        do_action('woocommerce_' . $product->get_type() . '_add_to_cart');
                                                        ?>
                                                    </div>
                                                </div>
                                            <p>&nbsp;</p>
                                            <p>&nbsp;</p>
                                                
                                                <div class="col-sm-12 hotline">
                                                    <h3>HOTLINE</h3>
                                                    <span>0906 988936</span>
                                                    <i class="fa fa-mobile"></i>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tab-detal toggle-tab pro-description">
                                        <div class="item-toggle-tab active">
                                            <h4 class="toggle-tab-title title14 radius border">
                                                Mô tả sản phẩm
                                            </h4>
                                            <br>
                                            <div class="toggle-tab-content">
                                                <div class="content-detail-tab">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $args = array(
                                    'posts_per_page' => 6,
                                    'columns' => 4,
                                    'orderby' => 'rand',
                                );
                                // woocommerce_related_products(apply_filters('woocommerce_output_related_products_args', $args));
                                ?>
                            </div>

                        </div>
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

