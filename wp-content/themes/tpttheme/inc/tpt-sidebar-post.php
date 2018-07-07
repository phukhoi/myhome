<?php 
global $maxthemes;
$currentLang = qtranxf_getLanguage(); 
$title_cate = ($currentLang == 'en') ? 'Categories': 'Danh mục';
$title_advisory = ($currentLang == 'en') ? 'Advisory 24/7': 'Tư vấn 24/7';
$title_news = ($currentLang == 'en') ? 'News Post': 'Tin mới nhất';
$title_products = ($currentLang == 'en') ? 'News Products': 'Sản phẩm mới nhất';
$args_parent = array(
    'type'                     => 'product',
    'child_of'                 => 0,
    'parent'                   => '0',
    'hide_empty'               => false,
    'hierarchical'             => 1,
    'exclude'                  => '',
    'include'                  => '',
    'number'                   => '',
    'taxonomy'                 => 'product_cat',
    'pad_counts'               => false,
    'order'                    => 'DESC',
    'orderby'                  => 'ID',
);
$cats_parent = get_categories($args_parent);
// get 5 post news 
$args_news_post = array (
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
    'posts_per_page' => 5
);
$news_post = get_posts($args_news_post);
// Get 5 products new
$args_pro_news = array(
    'post_type' => 'product',
    'posts_per_page' => 5,
    'orderby' =>'date',
    'order' => 'DESC' 
);
$loop_pro = new WP_Query($args_pro_news) ;
// 
$email1 = ($currentLang == 'vi') ? $maxthemes['vi-basic-email-1'] : $maxthemes['en-basic-email-1'];
$email2 = ($currentLang == 'vi') ? $maxthemes['vi-basic-email-2'] : $maxthemes['en-basic-email-2'];
$email3 = ($currentLang == 'vi') ? $maxthemes['vi-basic-email-3'] : $maxthemes['en-basic-email-3'];
$email4 = ($currentLang == 'vi') ? $maxthemes['vi-basic-email-4'] : $maxthemes['en-basic-email-4'];
$hotline = ($currentLang == 'vi') ? $maxthemes['vi-basic-hotline'] : $maxthemes['en-basic-hotline'];
?>
<div class="widget widget-seller">
	<h2 class="widget-title title14">
		<?php echo ($title_advisory); ?>
	</h2>
	<div class="widget-content">
		<div class="item-pro-seller advisory">
			<div class="product-info">
				<?php if($email1){?>
			    <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<span><?php echo $email1;?></span><br>
			    <?php }?>
			    <?php if($email2){?>
			    <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<span><?php echo $email2;?></span><br>
			    <?php }?>
			    <?php if($email3){?>
			    <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<span><?php echo $email3;?></span><br>
			    <?php }?>
			    <?php if($email4){?>
			    <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<span><?php echo $email4;?></span><br>
			    <?php }?>
				<i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;<span><?php echo $hotline;?></span>
			</div>
		</div>	
	</div>
</div>
<div class="widget widget-recent-post">
    <h2 class="widget-title title14">
        <?php echo ($title_products); ?>
    </h2>
    <div class="widget-content">
        <ul>
            <?php while ( $loop_pro->have_posts() ) : $loop_pro->the_post(); global $product; ?>
            <li>
                <div class="post-thumb">
                    <?php
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                    if(!$image[0]){
                        $image[0] = 'http://stc.local/wp-content/uploads/2018/01/no_image-1.jpg';
                    }
                    ?>
                    <a href="<?php echo get_permalink(); ?>" class="product-thumb-link">
                        <img src="<?php echo $image[0]; ?>?v=1.1" alt="<?php echo esc_html( get_the_title() ); ?>" title="<?php echo esc_html( get_the_title() ); ?>" />
                    </a>
                </div>
                <div class="post-info">
                    <h3 class="post-title">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php echo esc_html( get_the_title() ); ?>
                        </a>
                    </h3>
                    <ul class="post-date-comment">
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span><?php echo get_the_date('F'); ?>.<?php echo get_the_date('d'); ?></span>
                        </li>
                    </ul>
                </div>
            </li> 
            <?php endwhile; ?> 
        </ul>
    </div>
</div>
<?php if ($news_post) : ?>
<div class="widget widget-recent-post">
    <h2 class="widget-title title14">
        <?php echo ($title_news); ?>
    </h2>
    <div class="widget-content">
        <ul>
            <?php foreach ( $news_post as $post ) : setup_postdata( $post ); ?>
            <li>
                <div class="post-thumb">
                    <?php
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
                    if(!$image[0]){
                        $image[0] = 'http://stc.local/wp-content/uploads/2018/01/no_image-1.jpg';
                    }
                    ?>
                    <a href="<?php echo get_permalink(); ?>" class="product-thumb-link">
                        <img src="<?php echo $image[0]; ?>?v=1.1" alt="<?php echo esc_html( get_the_title() ); ?>" title="<?php echo esc_html( get_the_title() ); ?>" />
                    </a>
                </div>
                <div class="post-info">
                    <h3 class="post-title">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php echo esc_html( get_the_title() ); ?>
                        </a>
                    </h3>
                    <ul class="post-date-comment">
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span><?php echo get_the_date('F'); ?>.<?php echo get_the_date('d'); ?></span>
                        </li>
                    </ul>
                </div>
            </li> 
            <?php endforeach; ?> 
        </ul>
    </div>
</div>
<?php endif; ?>
<div class="sidebar sidebar-left hidden">
	<div class="widget widget-product-cat">
		<h2 class="widget-title title14">
			<?php echo $title_cate; ?>
		</h2>
		<?php if(isset($cats_parent)){ ?>
		<div class="widget-content">
			<ul>
				<?php foreach($cats_parent as $id => $category) : ?>
				<li class="has-sub-cat <?php if($id == 0){?> active <?php }?>">
					<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>">
						<?php echo $category->name;?>
					</a>
					<?php 
                    $args_sub = array(
                        'type'                     => 'product',
                        'child_of'                 => 0,
                        'parent'                   => $category->term_id,
                        'hide_empty'               => false,
                        'hierarchical'             => 1,
                        'exclude'                  => '',
                        'include'                  => '',
                        'number'                   => '',
                        'taxonomy'                 => 'product_cat',
                        'pad_counts'               => false,
                        'order'                    => 'DESC',
                        'orderby'                  => 'ID',
                    );
                    $subsubcats = get_categories($args_sub);
                    ?>
                    <?php if(isset($subsubcats) && !empty($subsubcats)){?>
					<ul>
						<?php foreach($subsubcats as $item_sub) : ?>
						<li><a href="<?php echo get_term_link( $item_sub->slug, 'product_cat' ); ?>"><?php echo $item_sub->name;?></a></li> 
						<?php endforeach;?>
					</ul>
					<?php }?>
				</li> 
			<?php endforeach;?>
			</ul>
		</div>
		<?php }?>
	</div>  
</div>
<div class="widget widget-seller">
    <h2 class="widget-title title14">
        Visitor Counter
    </h2>
    <div class="widget-content">
        <div class="item-pro-seller advisory">
            <?php if(is_dynamic_sidebar('visitor_counter')){
                dynamic_sidebar('visitor_counter');
            }?>
        </div>  
    </div>
</div> 
