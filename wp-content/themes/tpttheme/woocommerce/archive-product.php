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

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
get_header('shop'); 
global $product;
global $post;
global $maxthemes;
global $wp_query;
$title_contact = 'Liên hệ';
?>
<section class="header-breadcrumb" style="background-image: url(/wp-content/uploads/2018/05/header-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="page-title">
                    <h1><?php woocommerce_page_title();?></h1>
                </div>
            </div>
            <div class="col-md-7">
            </div>
        </div>
    </div>
</section>
<div class="content-page pad-t50">
    <div class="container">
        <div class="row">            
            <div class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                <div class="content-grid-boxed">
                    <div class="content-grid-boxed">
                        <div class="sort-pagi-bar clearfix pad-b30">
                            <div class="view-type pull-left">
                                <?php
                                $paged    = max( 1, $wp_query->get( 'paged' ) );
                                $per_page = $wp_query->get( 'posts_per_page' );
                                $total    = $wp_query->found_posts;
                                $first    = ( $per_page * $paged ) - $per_page + 1;
                                $last     = min( $total, $wp_query->get( 'posts_per_page' ) * $paged );
                                if ( $total <= $per_page || -1 === $per_page ) {
                                    /* translators: %d: total results */
                                    printf( _n( 'Showing the single result', 'Showing all %d results', $total, 'woocommerce' ), $total );
                                } else {
                                    /* translators: 1: first result 2: last result 3: total results */
                                    printf( _nx( 'Showing the single result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'woocommerce' ), $first, $last, $total );
                                }
                                ?>
                            </div>
                            <div class="sort-paginav pull-right">
                                <?php 
                                if ( 1 === (int) $wp_query->found_posts || ! woocommerce_products_will_display() ) {

                                }else{?>
                                <?php
                                        /**
                                         * woocommerce_before_shop_loop hook.
                                         *
                                         * @hooked wc_print_notices - 10
                                         * @hooked woocommerce_result_count - 20
                                         * @hooked woocommerce_catalog_ordering - 30
                                         */
                                        do_action( 'woocommerce_before_shop_loop' );
                                        ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="grid-pro-color">
                                    <?php if ( have_posts() ) : ?>
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
                                        <div class="row">
                                            <?php woocommerce_product_loop_start(); ?>
                                            <?php woocommerce_product_subcategories(); ?>
                                            <?php while ( have_posts() ) : the_post(); global $product; ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pro-box">
                                                    <div class="portfolio-post custom-product-hover">
                                                        <?php echo woocommerce_get_product_thumbnail();?>
                                                        <div class="hover-box">
                                                            <div class="inner-hover">
                                                                <div class="block-title">
                                                                    <h4><?php echo  wp_trim_words($post->post_title, 15, '...') ; ?></h4>
                                                                </div>
                                                                <div class="block-social-link">
                                                                    <a class="link" href="<?php echo get_permalink(); ?>"><i class="fa fa-search"></i></a>
                                                                    <a class="link" href="<?php echo get_permalink(); ?>"><i class="fa fa-cart-plus"></i></a>
                                                                </div>
                                                            </div>                      
                                                        </div>
                                                    </div>
                                                    <div class="text-center item-price">
                                                        <?php if($product->get_regular_price()) {?>
                                                        <span><?php echo number_format($product->get_regular_price(),'0','.','.').' VNĐ' ;?></span>
                                                        <?php }else{?>
                                                        <a class="btn btn-contact" href="<?php echo get_permalink(); ?>"><?php echo $title_contact; ?></a>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            <?php endwhile; // end of the loop. ?>
                                            <?php woocommerce_product_loop_end(); ?>
                                        </div>
                                        <div class="pagi-bar bottom">
                                            <?php if ( $wp_query->max_num_pages <= 1 ) {

                                            }else{?> 
                                            <?php
                                            echo paginate_links( apply_filters( 'woocommerce_pagination_args', array(
                                                'base'         => esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) ),
                                                'format'       => '',
                                                'add_args'     => false,
                                                'current'      => max( 1, get_query_var( 'paged' ) ),
                                                'total'        => $wp_query->max_num_pages,
                                                'prev_text'    => '&larr;',
                                                'next_text'    => '&rarr;',
                                                'type'         => 'list',
                                                'end_size'     => 3,
                                                'mid_size'     => 3,
                                            ) ) );
                                            ?>
                                            <?php }?>
                                        </div>
                                    <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
                                        <?php
                                    /**
                                     * woocommerce_no_products_found hook.
                                     *
                                     * @hooked wc_no_products_found - 10
                                     */
                                    do_action( 'woocommerce_no_products_found' ); 
                                    ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12 col-sm-pull-9">
                    <?php get_template_part('inc/tpt', 'catePro'); ?>
                    <?php get_template_part('inc/tpt', 'newsPost'); ?>
                </aside>
            </div>
        </div>
    </div>
    <?php get_footer( 'shop' ); ?>
