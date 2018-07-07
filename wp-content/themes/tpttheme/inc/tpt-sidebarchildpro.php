<?php 
global $maxthemes;
$currentLang = qtranxf_getLanguage(); 
$title_cate = ($currentLang == 'en') ? 'Categories': 'Danh mục';
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
//
$args_news_post = array (
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
    'posts_per_page' => 4
);
$news_post = get_posts($args_news_post);
//
?>
<div class="sidebar sidebar-left">
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
<?php if ($news_post) : ?>
<div class="widget widget-seller">
	<h2 class="widget-title title14">Tin tức mới nhất</h2>
	<div class="widget-content">
		<?php foreach ( $news_post as $post ) : setup_postdata( $post ); ?>
			<div class="item-pro-seller">
				<div class="product-thumb">
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
				<div class="product-info">
					<h3 class="product-title">
						<a href="<?php echo get_permalink(); ?>">
							<?php echo esc_html( get_the_title() ); ?>
						</a>
					</h3>
				</div>
			</div> 
		<?php endforeach; ?> 
	</div>
</div>
<?php endif; ?>