<?php 
get_header();
global $maxthemes;
$currentLang = qtranxf_getLanguage();
$title_results = $currentLang == 'vi' ? 'Có <span style="color:red; font-weight:bold">'.$wp_query->post_count.'</span> kết quả phù hợp cho từ khoá <span style="color:red; font-weight:bold">'.$_GET['s'].'</span>': 'Have <span style="color:red; font-weight:bold">'.$wp_query->post_count.'</span> results matches for keyword <span style="color:red; font-weight:bold">'.$_GET['s'].'</span>';
?>

<div class="content-page">
    <div class="container">
        <div class="bread-crumb radius">
            <a href="<?php echo home_url( '/' ); ?>"><?php echo $currentLang == 'en' ? 'Home': 'Trang Chủ'; ?></a> <span>
            	<?php echo ($title_results); ?>
            </span>
        </div>
        <!-- End Bread Crumb -->
        <div class="row">
            <div class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                <div class="content-blog-page border radius">
                    <div class="content-blog-small">
                        <?php if ( have_posts()) : ?>
                            <?php while( have_posts() ): the_post(); ?>
                            <div class="item-post-small">
                                <div class="row">
                                    <?php
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                                    if(!$image[0]){
                                        $image[0] = 'http://stc.local/wp-content/uploads/2018/01/no_image-1.jpg';
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
                            endwhile; 
                        endif;
                        ?> 
                        <!--paginate-->
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
