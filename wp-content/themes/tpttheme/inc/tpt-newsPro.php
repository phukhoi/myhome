<?php 
// Get 5 products new
$args_pro_news = array(
    'post_type' => 'product',
    'posts_per_page' => 5,
    'orderby' =>'date',
    'order' => 'DESC' 
);
$loop_pro = new WP_Query($args_pro_news) ; 
?>
<div class="widget widget-recent-post">
    <h4 class="widget-title title14">
        Sản phẩm mới nhất
    </h4>
    <div class="widget-content">
        <ul>
            <?php while ( $loop_pro->have_posts() ) : $loop_pro->the_post(); global $product; ?>
            <li>
                <div class="post-thumb">
                    <?php
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                    if(!$image[0]){
                        $image[0] = 'http://placehold.it/300x300';
                    }
                    ?>
                    <a href="<?php echo get_permalink(); ?>" class="product-thumb-link">
                        <img src="<?php echo $image[0]; ?>?v=1.1" alt="<?php echo esc_html( get_the_title() ); ?>" title="<?php echo esc_html( get_the_title() ); ?>" />
                    </a>
                </div>
                <div class="post-info text-center">
                    <h4 class="post-title">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php echo esc_html( get_the_title() ); ?>
                        </a>
                    </h>
                    <ul class="post-date-comment hidden">
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span><?php echo get_the_date('F'); ?>.<?php echo get_the_date('d'); ?></span>
                        </li>
                    </ul>
                </div>
            </li> 
            <?php endwhile; ?> 
        </ul>
    </div>
</div>