<?php 
get_header();
?>
<?php if (have_posts()): the_post(); ?>
    <?php 
    $post_type = get_post_type();
    $post_id = get_the_ID();
    $args_related = array (
        'post_type' => $post_type,
        'post_status' => 'publish',
        'order' => 'DESC',
        'orderby' => 'ID',
        'posts_per_page' => 6
    );
    $post_related = get_posts($args_related);
    ?>
    <?php
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), "single-post-thumbnail" );
    $tag = get_the_tags ($post_id);
    $gallery = get_field('gallery_fields');
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
    <section class="pad-t50">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-blog-post">
                        <div class="blog-img">
                            <img src="<?php echo $image[0]; ?>" class="img-responsive" alt="<?php the_title() ; ?>">
                            <div class="img-overlay hidden">
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="left-part">
                                <div class="blog-date">
                                    <div class="clr"></div>
                                    <span class="blog_icon">
                                        <i class="icon-pencil" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="right-part">
                                <div class="post-title">
                                    <h3><a href="#"><?php the_title() ; ?></a></h3>
                                    <input type="hidden" name="_post_name" id="_post_name" value="<?php the_title() ; ?>">
                                </div>
                                <div class="post-text">
                                    <?php the_content(); ?>
                                </div>
                                <?php if( $gallery ): ?>
                                    <div class="post-text">
                                        <h3>Hình ảnh thực tế của dự án</h3>
                                        <hr>
                                        <div class="row portfolio-box">
                                            <?php foreach( $gallery as $image ): ?>
                                                <div class="col-md-6 col-sm-6 bedroom">
                                                    <div class="portfolio-post mb30">
                                                        <img src="<?php echo $image['sizes']['large']; ?>?v=1.1" alt="<?php echo esc_html( get_the_title() ); ?>">
                                                        <div class="hover-box">
                                                            <div class="inner-hover">
                                                                <a class="zoom" href="<?php echo $image['sizes']['large']; ?>?v=1.1" data-lightbox="portfolio-1">
                                                                    <img class="project-hover-icon" src="<?php echo get_template_directory_uri().'/assets/images/icon/gallery-icon.png' ?>" alt="Xem">
                                                                </a>
                                                            </div>                      
                                                        </div>
                                                    </div>
                                                </div> 
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="div-post-related">
                        <div class="text-left ptb-10">
                            <h3>Các bài khác</h3>
                        </div>
                        <?php if ( $post_related) : ?>
                            <ul class="related-posts">
                                <?php foreach ( $post_related as $post ) : setup_postdata( $post ); ?>
                                    <li>
                                        <a href="<?php echo get_permalink(); ?>">
                                            <?php echo esc_html( get_the_title() ); ?>
                                        </a>
                                    </li>
                                    <?php 
                                endforeach; 
                                wp_reset_postdata();
                                ?>
                            </ul>
                        <?php endif;?>
                    </div>
                </div>
                <div class="col-md-4 single-blog-post">
                    <div class="comment-section margin-top-0">
                        <div class="comment-form">
                            <h2>Ý kiến</h2>
                            <div class="row">
                                <?php 
                                echo do_shortcode("[contact-form-7 id='455' title='Form Sidebar']");
                                ?>
                            </div>
                        </div> 
                    </div>
                    <div class="related_topics">
                        <h2>Chủ đề liên quan</h2>
                        <?php if($tag){?>
                        <p>
                            <?php foreach($tag as $item){?>
                            <a href="/tag/<?php echo $item->slug; ?>">
                                <span><?php echo $item->name; ?></span>
                            </a>
                            <?php } ?>  
                        </p>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<script type="text/javascript">
    $( document ).ready(function() {
        var _post_name = $("#_post_name").val();
        $("[name=post_name]").val(_post_name);
    });
</script>
<?php get_footer(); ?>
