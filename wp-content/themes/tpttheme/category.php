<?php 
get_header();
global $maxthemes;
$title_read_more = 'Xem Thêm';
?>
<?php 
$cat = get_query_var('cat');
$categories = get_category($cat);
$cat_ID = $categories->cat_ID;
$posts_per_page = 5;
if ( get_query_var( 'page' ) ) { 
  $page = get_query_var( 'page' ); 
}
elseif ( get_query_var( 'page' ) ) { 
  $page = get_query_var( 'page' ); 
}
else { 
  $page = 1; 
}
$args_all = array (
    'category' => $cat_ID,
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
    'posts_per_page' => -1
);
$all_posts = get_posts($args_all);
    //how many total posts are there?
$post_count = count($all_posts);
	//echo $post_count;
	//how many pages do we need to display all those posts?
$num_pages = ceil($post_count / $posts_per_page);
	//let's make sure we don't have a page number that is higher than we have posts for
if($page > $num_pages || $page < 1){
   $page = $num_pages;
}
	//now we get the posts we want to display
	//echo $post_count.'---'.$num_pages .'--'. $page.'--'.$posts_per_page; 
$args = array (
    'category' => $cat_ID,
    'post_status' => 'publish',
    'posts_per_page' => $posts_per_page,
    'paged' => $page,
    'order' => 'DESC',
    'orderby' => 'ID',
);
$wpb_all_query = get_posts($args);
$count_all = count($wpb_all_query);
//echo $count_all;
?>
<section class="header-breadcrumb" style="background-image: url(/wp-content/uploads/2018/05/header-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="page-title">
                    <h1><?php echo ($categories->name) ?></h1>
                </div>
            </div>
            <div class="col-md-7">
            </div>
        </div>
    </div>
</section>
<section class="pad80">
    <div class="container">
        <?php if ( $wpb_all_query) : ?>
            <?php foreach ( $wpb_all_query as $post ) : setup_postdata( $post ); ?>
                <div class="row">
                    <div class="blog-post">
                        <div class="col-md-6 col-xs-12">
                            <div class="blog-img">
                                <?php
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                                if(empty($image[0])){
                                    $image[0] = 'http://ttppower.com.vn/wp-content/uploads/2017/12/thumb.png';
                                }
                                ?>
                                <img src="<?php echo $image[0]; ?>?v=1.1" class="img-responsive" alt="<?php echo esc_html( $post->post_title ); ?>">
                                <div class="img-overlay">
                                    <a href="<?php echo get_permalink( $post->ID ); ?>"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo esc_html( $post->post_title ); ?></a></h3>
                                </div>
                                <div class="post-text">
                                    <p>
                                        <?php echo esc_html( $post->post_excerpt ); ?> 
                                    </p>
                                </div>
                                <div class="post-footer">
                                    <div class="post-meta">
                                    </div>
                                    <div class="read-more">
                                        <a href="<?php echo get_permalink( $post->ID ); ?>" class="btn-read-more">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <?php 
            endforeach; 
            wp_reset_postdata(); 
            ?> 
            <?php ?>
            <?php if ($post_count> $posts_per_page){?>
            <div class="row text-right">
                <div class="col-md-12">
                    <ul class="pagination">
                        <?php if($page > 1){?>
                        <li>
                            <a href="?page=<?php echo ($page - 1); ?>">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        <?php }?>
                        <?php for($i=1;$i<=$num_pages;$i++) {?> 
                        <?php if($i==$page){ ?>
                        <li class="active"><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li> 
                        <?php }else { ?> 
                        <li ><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li> 
                        <?php }?>
                        <?php }?>
                        <?php if($page < $num_pages){?>
                        <li>
                            <a href="?page=<?php echo ($page + 1); ?>">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <?php }?>
        <?php endif;?>
    </div>
</section>
<?php 
get_footer(); 
?>
