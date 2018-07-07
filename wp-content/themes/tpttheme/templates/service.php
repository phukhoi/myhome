<?php
	/*
		* Template Name: Service
	* */
	get_header();
	global $maxthemes;
	$currentLang = qtranxf_getLanguage();
	$posts_per_page = 8;
	if ( get_query_var( 'page' ) ) { 
		$page = get_query_var( 'page' ); 
	}
	elseif ( get_query_var( 'page' ) ) { 
		$page = get_query_var( 'page' ); 
	}
	else { 
		$page = 1; 
	} 
	$args_all = array(
		'post_type' => 'dichvu',
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
	//echo $num_pages .'--'. $page; 
	$args = array (
        'post_type' => 'dichvu',
        'post_status' => 'publish',
        'posts_per_page' => $posts_per_page,
        'paged' => $page,
        'order' => 'DESC',
        'orderby' => 'ID',
    );
	$wpb_all_query = get_posts($args);
?>  
<div class="content-page">
    <div class="container">
        <div class="bread-crumb radius">
            <a href="<?php echo "http://".$_SERVER['SERVER_NAME'] ; ?>"><?php echo $currentLang == 'en' ? 'Home': 'Trang Chủ'; ?></a> <span><?php the_title(); ?></span>
        </div>
        <!-- End Bread Crumb -->
        <div class="row">
            <div class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                <div class="content-blog-page border radius">
                    <div class="content-blog-small">
                        <?php if ( $wpb_all_query) : ?>
                            <?php foreach ( $wpb_all_query as $post ) : setup_postdata( $post ); ?>
                            <div class="item-post-small">
                                <div class="row">
                                    <?php
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                                    if(!$image[0]){
                                        $image[0] = 'http://ttppower.com.vn/wp-content/uploads/2017/12/thumb.png';
                                    }
                                    ?>
                                    <div class="col-md-5 col-sm-6 col-xs-12">
                                        <div class="post-thumb">
                                            <a href="<?php echo get_permalink(); ?>" class="post-thumb-link">
                                                <img src="<?php echo $image[0]; ?>?v=1.1" title="<?php echo esc_html( get_the_title() ); ?>" alt="<?php echo esc_html( get_the_title() ); ?>" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-6 col-xs-12">
                                        <div class="post-info">
                                            <ul class="post-date-comment">
                                                <li><i class="fa fa-calendar-o" aria-hidden="true"></i><span><?php echo get_the_date('F'); ?>.<?php echo get_the_date('d'); ?></span></li>
                                            </ul>
                                            <h3 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php echo esc_html( get_the_title() ); ?></a></h3>
                                            <p class="desc">
                                            <?php the_excerpt(); ?> 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <?php 
                            endforeach; 
                            wp_reset_postdata();
                        endif;
                        ?> 
                        <?php if($post_count > $posts_per_page ){?>
                            <div class="pagi-bar bottom">
                            	<?php for($i=1;$i<=$post_count;$i++) {?>
	                                <?php if($i==$page){ ?>
	                                    <a href="?page=<?php echo $i; ?>" class="current-page">1</a>
	                                <?php }else { ?> 
	                                    <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
	                                <?php }?> 
	                            <?php }?> 
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12 col-sm-pull-9">
                <?php get_template_part('inc/tpt', 'sidebarchild'); ?>
            </aside>
            
        </div>
    </div>
</div>
<?php
    get_footer();
?>
	