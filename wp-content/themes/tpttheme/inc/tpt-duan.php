<?php
$wpb_duan = new WP_Query(array('post_type'=>'duan', 'post_status'=>'publish'));
?>
<?php if ( $wpb_duan->have_posts() ) : ?>
    <section class="pad-t80 pad-b50">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>thiết kế & thi công</h3>
                </div>
            </div>
            <div class="row owl-scroll">
                <?php while ( $wpb_duan->have_posts() ) : $wpb_duan->the_post(); ?>
                    <?php if ( has_post_thumbnail() ) { ?>
                    <?php
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                    ?>
                    <div class="col-md-12">
                        <div class="running-project-2">
                            <img class="img-responsive" src="<?php echo $image[0]; ?>?v=1.1" alt="<?php echo esc_html( get_the_title() ); ?>">
                            <div class="project-details">
                                <h4><?php echo esc_html( get_the_title() ); ?></h4> 
                                <a class="link" href="<?php echo get_permalink( $post->ID ); ?>">
                                <!-- <i class="fa fa-picture-o"></i> -->
                                <img class="project-hover-icon" src="<?php echo get_template_directory_uri().'/assets/images/icon/gallery-icon.png' ?>" alt="Xem thêm">
                                <p>Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div> 
                    <?php } ?>
                <?php endwhile; wp_reset_postdata();?>
            </div>
        </div>
    </section>
<?php endif; ?>
