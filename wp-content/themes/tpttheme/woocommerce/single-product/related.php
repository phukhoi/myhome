<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( $related_products ) : wp_reset_postdata();
$title_contact = 'Liên hệ';
?>
<div class="product-related border radius">
    <h2 class="title18">
        <?php esc_html_e( 'Related products', 'woocommerce' ); ?>
    </h2>
    <div class="product-related-slider">
        <div class="wrap-item" data-itemscustom="[[0,1],[480,2],[1024,3],[1200,4]]" data-pagination="false" data-navigation="true">
        	<?php foreach ( $related_products as $related_product ) : ?>
        	 <div class="item-product-order8">
                <div class="item-product">
                    <div class="product-thumb">
                        <a href="<?php echo get_permalink( $related_product->get_id() ); ?>" class="product-thumb-link">
                            <?php
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id($related_product->get_id()), "single-post-thumbnail" );
                            if(empty($image[0])){
                                $image[0] = 'http://ttppower.com.vn/wp-content/uploads/2017/12/thumb.png';
                            }
                            ?>
                            <img src="<?php echo $image[0]; ?>?v=1.1" title="<?php echo get_the_title($related_product->get_id()); ?>" alt="<?php echo get_the_title($related_product->get_id()); ?>" class="img-responsive" /> 
                        </a>
                        <div class="product-extra-link">
                            <a href="<?php echo get_permalink( $related_product->get_id() ); ?>" class="addcart-link"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">
                            <a href="<?php echo get_permalink( $related_product->get_id() ); ?>">
                                <?php echo get_the_title($related_product->get_id()); ?>
                            </a>
                        </h3> 
                        <div class="product-price text-center">
                            <?php if($related_product->get_regular_price()) {?>
                            <ins><span><?php echo $related_product->get_regular_price().' VNĐ' ;?></span></ins>
                            <?php }else{?>
                            <a class="btn btn-contact" href="<?php echo get_permalink(); ?>"><?php echo $title_contact; ?></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>


             
        	<?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif;
wp_reset_postdata();
