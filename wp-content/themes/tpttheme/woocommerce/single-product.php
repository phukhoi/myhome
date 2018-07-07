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

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
get_header('shop'); 
global $product;
global $post;
global $maxthemes;
global $wp_query;
?>
<section class="breadcrumb-section parallax" style="background-image: url(/wp-content/uploads/2018/05/header-bg.png);background-position: center -90px; margin-bottom: 15px">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="page-title">
                    <h1><?php the_title();?></h1>
                </div>
            </div>
            <div class="col-md-7">
            </div>
        </div>
    </div>
</section>
<div id="content">
    <div class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-col-xs-12">
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
                                        <?php the_title();?>
                                    </h2>
                                    <div class="product-rate" style="display: none;">
                                        <div class="product-rating" style="width:90%"></div>
                                    </div>
                                    <p class="desc">
                                        <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
                                    </p>
                                    <?php if($product->get_regular_price()) {?>
                                    <div class="product-price item-price">
                                        <span><?php echo number_format($product->get_regular_price(),'0','.','.').' VNĐ'; ?></span>
                                    </div>
                                    <?php }?> 
                                    <?php do_action( 'woocommerce_product_meta_start' ); ?>
                                    <div class="attr-detail attr-color">
                                        <p>
                                            <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
                                        </p>
                                        <p>
                                            <?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
                                                <span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

                                            <?php endif; ?>
                                        </p>
                                        <p>
                                            <?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
                                        </p>
                                    </div> 
                                    <?php do_action( 'woocommerce_product_meta_end' ); ?>
                                    <div class="detail-extralink">
                                        <?php 
                                        if ( ! did_action( 'woocommerce_init' ) ) {
                                            wc_doing_it_wrong( __FUNCTION__, __( 'This function should not be called before woocommerce_init.', 'woocommerce' ), '2.3' );
                                            return;
                                        }
                                        $all_notices  = WC()->session->get( 'wc_notices', array() );
                                        $notice_types = apply_filters( 'woocommerce_notice_types', array( 'error', 'success', 'notice' ) );
                                        foreach ( $notice_types as $notice_type ) {
                                            if ( wc_notice_count( $notice_type ) > 0 ) {
                                                wc_get_template( "notices/{$notice_type}.php", array(
                                                    'messages' => array_filter( $all_notices[ $notice_type ] ),
                                                ) );
                                            }
                                        }
                                        wc_clear_notices();
                                        ?>
                                        <?php 
                                        do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );
                                        ?>
                                    </div>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                        <div class="tab-detal toggle-tab pro-description">
                            <div class="item-toggle-tab active">
                                <h2 class="toggle-tab-title title14 radius border">
                                    Mô tả sản phẩm
                                </h2>
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
                        'posts_per_page'    => 6,
                        'columns'           => 4,
                        'orderby'           => 'rand',
                    );
                    woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
                    ?>
                </div>
                <div class="col-md-3 col-sm-4 col-col-xs-12">
                 <?php get_template_part('inc/tpt', 'newsPro'); ?>
             </div>
         </div>
     </div>  
 </div>
</div>
<?php get_footer( 'shop' );
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
