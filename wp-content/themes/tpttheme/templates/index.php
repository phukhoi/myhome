<?php
/*
* Template Name: Index
* */
get_header();
global $maxthemes; 
$args_post = array (
	'post_status' => 'publish',
	'posts_per_page' => 6,
	'order' => 'DESC',
	'orderby' => 'ID',
);
$wpb_post = get_posts($args_post);
?>  
<?php get_template_part('inc/tpt', 'slider'); ?> 
<?php get_template_part('inc/tpt', 'duan'); ?> 
<section class="pad-b50">
	<div class="container">
		<div class="row">
			<div class="section-title text-center">
				<h3>My Home Blog</h3>
			</div>
		</div>
		<?php if ( $wpb_post) : ?>
			<div class="row owl-scroll">
				<?php foreach($wpb_post as $item):?>
					<div class="col-md-12">
						<div class="latest-news">
							<div class="latest-news-img">
								<a href="<?php echo get_permalink( $item->ID ); ?>">
								<?php
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $item->ID ), "single-post-thumbnail" );
								if(empty($image)){
									$image[0] = 'http://ttppower.com.vn/wp-content/uploads/2017/12/thumb.png';
								}
								?>
								<img src="<?php echo $image[0]; ?>?v=1.1" class="img-responsive" alt="<?php echo esc_html( $item->post_title ); ?>"> 
								</a>
							</div>
							<h4><a href="<?php echo get_permalink( $item->ID ); ?>"><?php echo esc_html( $item->post_title ); ?></a></h4>
							<a href="<?php echo get_permalink( $item->ID ); ?>" class="a-text"><p><?php echo esc_html( wp_trim_words($item->post_excerpt, 30, '...') ); ?></p></a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
?>
