<?php
$wpb_slider = new WP_Query(array('post_type'=>'slider', 'post_status'=>'publish'));
?>
<?php if ( $wpb_slider->have_posts() ) : ?>
    <div class="rev_slider_wrapper fullscreen-container" style="margin-top: 160px;">
        <div id="rev_slider_1" class="rev_slider fullscreenbanner" style="display: none;">
            <ul>
                <?php while ( $wpb_slider->have_posts() ) : $wpb_slider->the_post(); ?>
                    <?php if ( has_post_thumbnail() ) { ?>
                    <?php
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                    ?>
                    <li data-transition="parallaxtoright">
                        <img src="<?php echo $image[0]; ?>?v=1.1" alt="<?php echo esc_html( get_the_title() ); ?>" class="rev-slidebg"> 
                        <div class="tp-caption tp-resizeme" id="slide-1-layer-1" 
                        data-x="['left','left','center','center']" 
                        data-y="['middle','middle','middle','middle']" 
                        data-hoffset="['0','0','0','0']" 
                        data-voffset="['-100','-100','-110','-90']" 
                        data-fontsize="['70','70','45','40']" 
                        data-lineheight="['70','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-transform_idle="o:1;" 
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="chars" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-elementdelay="0.05" 
                        style="z-index: 5; white-space: nowrap; color: #f6d014; font-weight: 700; text-transform: uppercase;"> <!-- Construction Business -->
                    </div>
                </li> 
                <?php } ?>
            <?php endwhile; wp_reset_postdata();?>
        </ul>
    </div>
</div>
<?php endif; ?>
