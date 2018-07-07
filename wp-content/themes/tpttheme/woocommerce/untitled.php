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
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
global $maxthemes;
global $post;
$currentLang = qtranxf_getLanguage();
?>
<section class="page-title" style="background-image:url(images/background/page-title-3.jpg);">
    <div class="auto-container">
        <h1><?php woocommerce_page_title(); ?></h1>
    </div>
</section>
<section class="page-info">
	<div class="auto-container clearfix">
	    <div class="pull-left">
	        <h3><?php woocommerce_page_title(); ?></h3>
	    </div>
	    <div class="pull-right">
	        <ul class="bread-crumb clearfix">
	            <li><a href="<?php echo "http://".$_SERVER['SERVER_NAME'] ; ?>"><?php echo $currentLang == 'en' ? 'Home': 'Trang Chủ'; ?></a></li>
	            <li><?php woocommerce_page_title(); ?></li>
	        </ul>
	    </div>
	</div>
</section> 
<section class="shop-page-sec">
<div class="shop-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div class="sidebar">
                    <div class="categories">
                        <div class="sidebar-title">
                            <h2>
                            	<?php echo $currentLang == 'en' ? 'Product Categories': 'Product Categories'; ?>
                        	</h2>
                        </div>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Meterial Engineering</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Mechanical Engineering</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Power and Energy</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Agricultural Processing</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Chemical Research</a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget popular-tags">
                        <div class="sidebar-title">
                            <h2>Popular tags</h2>
                        </div>

                        <a href="#">Business</a>
                        <a href="#">Engineering</a>
                        <a href="#">Lubricant</a>
                        <a href="#">Chemical</a>
                        <a href="#">Power</a>
                        <a href="#">Meterial </a>
                        <a href="#">Agricultural</a>
                        <a href="#">Servicess</a>
                    </div>
                    <div class="product-add">
                        <img src="images/shop/add3.jpg" alt="add" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            	<?php if ( have_posts() ) : ?> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                        <div class="inner-shop-top-left">
                            <p>Showing 13-24 of 50 results</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                        <div class="inner-shop-top-right">
                            <ul>
                                <li>
                                    <div class="dropdown">
                                        <button data-toggle="dropdown" type="button" class="btn sorting-btn dropdown-toggle" aria-expanded="false">Default Sorting<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Date</a></li>
                                            <li><a href="#">Best Sale</a></li>
                                            <li><a href="#">Rating</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="active">
                                    <a aria-expanded="true" data-toggle="tab" href="#gried-view">
                                        <i class="fa fa-th-large"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a aria-expanded="false" data-toggle="tab" href="#list-view">
                                        <i class="fa fa-list"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="gried-view">
                        	<?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div class="product-box1">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <a href="<?php echo get_permalink(); ?>">
                                        	<?php
						                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
						                    ?>
						                    <img src="<?php echo $image[0]; ?>?v=1.1" title="<?php echo esc_html( get_the_title() ); ?>" alt="<?php echo esc_html( get_the_title() ); ?>" class="img-responsive"/>
                                        </a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3><a href="<?php echo get_permalink(); ?>"><?php echo esc_html( get_the_title() ); ?></a></h3>
                                        <span>$110.00</span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        <!-- List Style -->
                        <div role="tabpanel" class="tab-pane" id="list-view">
                        	<?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-lg-12 col-md-12 col-sm-4 col-xs-6">
                                <div class="product-box2">
                                    <div class="media">
                                        <a class="pull-left" href="<?php echo get_permalink(); ?>">
                                            <?php
						                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
						                    ?>
						                    <img src="<?php echo $image[0]; ?>?v=1.1" title="<?php echo esc_html( get_the_title() ); ?>" alt="<?php echo esc_html( get_the_title() ); ?>" class="img-responsive"/>
                                        </a>
                                        <div class="media-body">
                                            <div class="product-box2-content">
                                                <h3><a href="<?php echo get_permalink(); ?>"><?php echo esc_html( get_the_title() ); ?></a></h3>
                                                <span>$110.00</span>
                                                <p><?php the_excerpt(); ?></p>
                                            </div>
                                            <ul class="product-box2-cart">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pagination-design padd-top-40 text-center">
                            <ul>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="next" href="#"><span class="fa fa-long-arrow-right"></span></a></li>
                            </ul>
                        </div>
                    </div>
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
</section>
<?php get_footer(); ?>
