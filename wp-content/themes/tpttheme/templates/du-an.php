<?php
/*
* Template Name:Dự Án
* */
get_header();
global $maxthemes;
$posts_per_page = 6;
if ( get_query_var( 'page' ) ) { 
  $page = get_query_var( 'page' ); 
}
elseif ( get_query_var( 'page' ) ) { 
  $page = get_query_var( 'page' ); 
}
else { 
  $page = 1; 
}
$wpb_all_duan = new WP_Query(array('post_type'=>'duan', 'post_status'=>'publish','posts_per_page' => -1));
$args_all = array (
    'post_type' => 'duan',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
    'posts_per_page' => -1
);
$all_posts = get_posts($args_all);
$post_count = count($all_posts);

$num_pages = ceil($post_count / $posts_per_page);
if($page > $num_pages || $page < 1){
 $page = $num_pages;
}
$args = array (
    'post_type' => 'duan',
    'post_status' => 'publish',
    'posts_per_page' => $posts_per_page,
    'paged' => $page,
    'order' => 'DESC',
    'orderby' => 'ID',
);
$wpb_all_query = get_posts($args);
$count_all = count($wpb_all_query);
?> 
<section class="header-breadcrumb" style="background-image: url(/wp-content/uploads/2018/05/header-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="page-title">
                    <h1><?php the_title() ; ?></h1>
                </div>
            </div>
            <div class="col-md-7">
            </div>
        </div>
    </div>
</section>
<section class="pad-t50 pad-b50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Dự án của My Home</h3>
                </div>
            </div>
        </div>
        <?php if ( $wpb_all_query) : ?> 
            <div class="row">
                <div class="portfolio-box">
                    <?php foreach ( $wpb_all_query as $post ) : setup_postdata( $post ); ?>
                        <?php
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                        if(empty($image[0])){
                            $image[0] = 'http://ttppower.com.vn/wp-content/uploads/2017/12/thumb.png';
                        }
                        ?>
                        <div class="col-md-6 col-sm-6 bedroom">
                            <div class="portfolio-post mb30">
                                <img src="<?php echo $image[0]; ?>?v=1.1" alt="<?php echo esc_html( $post->post_title ); ?>">
                                <div class="hover-box">
                                    <div class="inner-hover">
                                        <h4><?php echo esc_html( $post->post_title ); ?></h4>
                                        <!-- <a class="link" href="<?php echo get_permalink( $post->ID ); ?>"><i class="fa fa-search"></i></a> -->
                                        <a class="zoom img" href="<?php echo $image[0]; ?>?v=1.1" data-lightbox="portfolio-1">
                                            <img class="gallery-hover-icon" src="<?php echo get_template_directory_uri().'/assets/images/icon/gallery-icon.png' ?>" alt="Xem thêm">   
                                        </a>
                                        <a class="zoom title" href="<?php echo get_permalink( $post->ID ); ?>">
                                            <p>Xem thêm</p> 
                                        </a>
                                        
                                    </div>                      
                                </div>
                            </div>
                        </div> 
                    <?php endforeach; wp_reset_postdata();?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($post_count> $posts_per_page){?>
        <div class="row text-right">
            <div class="col-md-12">
                <ul class="pagination">
                    <?php if($page > 1){?>
                        <li>
                            <a href="?page=<?php echo ($page - 1); ?>">
                                <i class="fa fa-angle-double-left"></i>
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
                                <i class="fa fa-angle-double-right"></i>
                            </a>
                        </li>
                        <?php }?> 
                </ul>
            </div>
        </div>
        <?php }?>
    </div>
</section>
<?php get_footer(); ?>