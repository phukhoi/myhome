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
                        <div class="col-md-12">
                            <div class="running-project-2">
                                <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo esc_html( get_the_title() ); ?>">
                                <div class="project-details">
                                    <h4><?php echo esc_html( get_the_title() ); ?></h4> 
                                    <a class="zoom img <?php echo 'zoom'.$post->ID ?>" href="<?php echo $image[0]; ?>?v=1.1" data-lightbox="portfolio-1" data-title="<?php echo ( $post->post_title ); ?>">
                                        <img class="gallery-hover-icon project-hover-icon" src="<?php echo get_template_directory_uri().'/assets/images/icon/gallery-icon.png' ?>" alt="<?php echo esc_html( $post->post_title ); ?>">   
                                    </a>
                                    <a class="zoom title <?php echo 'zoom'.$post->ID ?>" href="<?php echo $image[0]; ?>?v=1.1" data-lightbox="portfolio-1" data-title="<?php echo ( $post->post_title ); ?>" data-title="<?php echo ( $post->post_title ); ?>">
                                        <p>Xem thêm</p> 
                                    </a>
                                </div>
                            </div>
                        </div> 
                        <script type="text/javascript">
                            $( document ).ready(function() {
                                $('.zoom<?php echo $post->ID ?>').on('click', function(){
                                    $(".lb-outerContainer").prepend("<div style='position:relative;top:-15px;color:white;font-weight: bold' class='popup-title'></div>"); 
                                    $('.popup-title').html('');
                                    $('.lb-caption').html('');
                                    $('.popup-title').html('<?php echo get_the_title(); ?>'.toUpperCase());
                                })        
                            });
                        </script>
                    <?php } ?>
                <?php endwhile; wp_reset_postdata();?>
            </div>
        </div>
    </section>
<?php endif; ?>
