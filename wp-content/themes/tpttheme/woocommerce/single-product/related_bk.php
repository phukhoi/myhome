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
if ( $related_products ) : ?>
	<div class="featured-products-area2">
		 <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="sub-title">
                    <?php esc_html_e( 'Related products', 'woocommerce' ); ?>
                </h3>
            </div>
        </div>
        <div class="related-products-carousel2">
			<?php foreach ( $related_products as $related_product ) : ?>
				<?php
					wc_get_template_part( 'content', 'related' ); ?>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif;
wp_reset_postdata();
