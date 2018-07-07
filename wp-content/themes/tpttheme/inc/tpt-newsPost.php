<?php 
// get 5 post news 
$args_news_post = array (
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
    'posts_per_page' => 5
);
$news_post = get_posts($args_news_post);
?>
<?php if ($news_post) : ?>
    <div class="widget widget-recent-post">
        <h3 class="widget-title title14">
            Bài viết mới nhất
        </h3>
        <div class="widget-content">
            <?php foreach ( $news_post as $post ) : setup_postdata( $post ); ?>
                <div class="latest-news">
                    <div class="latest-news-img">
                        <?php
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                        if(empty($image)){
                            $image[0] = 'http://myhome.local/wp-content/uploads/2018/05/home-slider-img.png?v=1.1';
                        }
                        ?>
                        <img src="<?php echo $image[0]; ?>?v=1.1" class="img-responsive" alt="<?php echo esc_html( $item->post_title ); ?>"> 
                    </div>
                    <h4 class="text-center"><a href="<?php echo get_permalink(); ?>" alt="<?php echo esc_html( get_the_title() ); ?>" title="<?php echo esc_html( get_the_title() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h4>
                </div> 
            <?php endforeach; ?> 
        </div>
    </div>
<?php endif; ?>