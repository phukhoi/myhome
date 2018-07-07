<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
global $args;
// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="product-box1">
	<ul class="product-social">
		<li>
			<?php 
			$defaults = array(
				'quantity' => 1,
				'class'    => implode( ' ', array_filter( array(
					'button',
					'product_type_' . $product->get_type(),
					$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
					$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
				) ) ),
			);
			$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );
			wc_get_template( 'loop/add-to-cart.php', $args );
			?> 
		</li>
	</ul>
	<div class="product-img-holder">
		<a href="<?php echo get_the_permalink() ;?>">
			<?php
			echo woocommerce_get_product_thumbnail();
			?>
		</a>
	</div>
	<div class="product-content-holder">
		<h3>
			<a href="<?php echo get_the_permalink() ;?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<a href="<?php echo get_the_permalink() ;?>" class="blogbtn">
			Liên hệ
		</a>
	</div>
</div>
