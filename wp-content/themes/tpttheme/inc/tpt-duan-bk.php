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
                    <?php 
                    $gallery = get_field('gallery_fields'); 
                    $img_first = isset($gallery[0]['url']) && !empty($gallery[0]['url']) ? $gallery[0]['url'] : get_the_post_thumbnail_url($post->ID);
                    ?>
                    <?php if ( has_post_thumbnail() ) { ?>
                        <div class="col-md-12">
                            <div class="running-project-2">
                                <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo esc_html( get_the_title() ); ?>">
                                <div class="project-details">
                                    <h4><?php echo esc_html( get_the_title() ); ?></h4> 
                                    <a class="fancybox zoom img" href="<?php echo $img_first; ?>?v=1.1" title="<?php echo ( $post->post_title ); ?>" data-fancybox="gallery-<?php echo ( $post->ID ); ?>" href="<?php echo $img_first; ?>">
                                        <img class="gallery-hover-icon project-hover-icon" src="<?php echo get_template_directory_uri().'/assets/images/icon/gallery-icon.png' ?>" alt="<?php echo esc_html( $post->post_title ); ?>">   
                                    </a>
                                </div>
                                <?php if(isset($gallery) && !empty($gallery)) {?>
                                    <div class="hidden">
                                       <?php for($i = 1 ; $i<count($gallery); $i++){?>
                                        <a class="fancybox"  data-fancybox="gallery-<?php echo ( $post->ID ); ?>" href="<?php echo $gallery[$i]['url'];?>"><img src="<?php echo $gallery[$i]['url'];?>" alt="<?php echo $item['title'];?>"/></a>
                                    <?php }?> 
                                </div>
                            <?php }?>
                        </div>
                    </div> 
                <?php } ?>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
</section>
<?php endif; ?>
