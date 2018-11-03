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
            <div class="owl-scroll">
                <?php while ( $wpb_duan->have_posts() ) : $wpb_duan->the_post(); ?>
                    <?php 
                    $gallery = get_field('gallery_fields'); 
                    $img_first = isset($gallery[0]['url']) && !empty($gallery[0]['url']) ? $gallery[0]['url'] : get_the_post_thumbnail_url($post->ID);
                    ?>
                    <?php if ( has_post_thumbnail() ) { ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="running-project-2 item-slider box<?php echo $post->ID ?>">
                                    <h4 class="title-main"><?php echo esc_html( get_the_title() ); ?></h4> 
                                    <a class="fancybox zoom img" href="<?php echo $img_first; ?>?v=1.1" title="<?php echo ( $post->post_title ); ?>" data-fancybox="gallery-<?php echo ( $post->ID ); ?>" href="<?php echo $img_first; ?>">
                                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo esc_html( get_the_title() ); ?>">
                                    </a>
                                    <!-- <div class="project-details">
                                        <a class="fancybox zoom img" href="<?php echo $img_first; ?>?v=1.1" title="<?php echo ( $post->post_title ); ?>" data-fancybox="gallery-<?php echo ( $post->ID ); ?>" href="<?php echo $img_first; ?>">
                                            <img class="gallery-hover-icon project-hover-icon" src="<?php echo get_template_directory_uri().'/assets/images/icon/gallery-icon.png' ?>" alt="<?php echo esc_html( $post->post_title ); ?>">   
                                        </a>
                                    </div> -->
                                    <?php if(isset($gallery) && !empty($gallery)) {?>
                                        <div class="hidden">
                                           <?php for($i = 1 ; $i<count($gallery); $i++){?>
                                            <a class="fancybox"  data-fancybox="gallery-<?php echo ( $post->ID ); ?>" href="<?php echo $gallery[$i]['url'];?>"><img src="<?php echo $gallery[$i]['url'];?>" alt="<?php echo $item['title'];?>"/></a>
                                        <?php }?> 
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div> 
                <?php } ?>
                <script type="text/javascript">
                $( document ).ready(function() {
                    $("[data-fancybox]").fancybox({
                        afterShow: function( instance, current ) {
                            console.log('current', current);
                            if ( current.$content ) {
                                arrowLeft = '<button data-fancybox-prev class="data-fancybox-custom fancybox-button fancybox-button--arrow_style-left"  title="Prev"></button>';
                                arrowRight = '<button data-fancybox-next class="data-fancybox-custom  fancybox-button fancybox-button--arrow_style-right"  title="Next"></button>';

                                current.$content.append(arrowLeft + arrowRight);

                                current.$content.on('click.fb-prev touchend.fb-prev', '[data-fancybox-prev]', function(e) {
                                    e.stopPropagation();
                                    e.preventDefault();
                                    $('.fancybox-button--arrow_left').trigger('click');
                                }).on( 'click.fb-next touchend.fb-next', '[data-fancybox-next]', function(e) {
                                    e.stopPropagation();
                                    e.preventDefault();
                                    $('.fancybox-button--arrow_right').trigger('click');
                                });
                            }
                        },
                    }); 
                    $('.box<?php echo $post->ID ?>').on('click', function(){
                        $(".fancybox-image-wrap").each(function(){
                            $(this).prepend("<div style='position:relative;top:-30px;color:white;font-weight: bold; text-align: center' class='popup-title'></div>"); 
                            $('.popup-title').html('');
                            $('.popup-title').html('<?php echo get_the_title(); ?>'.toUpperCase());
                            
                        })
                    })        
                });
                </script>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
</section>
<?php endif; ?>
