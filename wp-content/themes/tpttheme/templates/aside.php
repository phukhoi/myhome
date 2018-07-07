<aside class="sidebar"> 
    <?php  if($post_type == 'dichvu') { ?>
    <div class="sidebar-title">
        <h2>
        <?php echo $currentLang == 'en' ? 'Other services': 'Dịch vụ khác'; ?></h2>
    </div>
    <div class="widget sidebar-widget styled-nav">
        <nav class="nav-outer">
            <ul> 
            <?php
            $wpb_all_query = new WP_Query(array('post_type'=>'dichvu', 'post_status'=>'publish'));
            ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <li>
                    <a class="hvr-shutter-in-horizontal" href="<?php echo get_permalink(); ?>">
                        <i class="fa fa-link" aria-hidden="true"></i>
                    <?php echo esc_html( get_the_title()); ?>
                </a>
                </li>
                <?php endwhile; ?>
            <?php endif; ?>
            </ul>
        </nav>
    </div>
    <?php } ?>
    <div class="sidebar-widget popular-posts">
        <div class="sidebar-title">
            <h2>
                <?php echo $currentLang == 'en' ? 'News': 'Tin tức '; ?></h2>
            </h2>
        </div>
        <?php
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish'));
        ?>
        <?php if ( $wpb_all_query->have_posts() ) : ?>
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <?php if ( has_post_thumbnail() ) { ?>
        <article class="post">
            <figure class="post-thumb">
                <a href="<?php echo get_permalink(); ?>">
                    <?php
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                    ?>
                    <img src="<?php echo $image[0]; ?>?v=1.1" title="<?php echo esc_html( get_the_title() ); ?>" alt="<?php echo esc_html( get_the_title() ); ?>" />
                </a>
            </figure>
            <h4><a href="<?php echo get_permalink(); ?>"><?php echo esc_html( get_the_title() ); ?></a></h4>
            <div class="post-info"><?php get_date('F j Y')?></div>
        </article>
            <?php } ?>
            <?php endwhile; ?>
        <?php endif; ?> 
    </div>
    <div class="sidebar-widget popular-tags">
        <div class="sidebar-title">
            <h2>Popular tags</h2>
        </div>
        
        <a href="#">
            tags
        </a>
        
    </div>
</aside>