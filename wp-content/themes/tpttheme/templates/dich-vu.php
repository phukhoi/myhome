<?php
	/*
		* Template Name:Dịch Vụ
	* */
	get_header();
	global $maxthemes; 
?> 
<?php
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
?>
<section class="page-title" style="background-image:url(<?php echo $image[0]; ?>?v=1.1);">
    <div class="auto-container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>
<section class="page-info">
    <div class="auto-container clearfix">
        <div class="pull-left">
            <h3><?php the_title(); ?></h3>
        </div>
        <div class="pull-right">
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo "http://".$_SERVER['SERVER_NAME'] ; ?>"><?php echo $currentLang == 'en' ? 'Home': 'Trang Chủ'; ?></a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</section>  
<section class="gallery-section page-galery">
    <div class="auto-container">
        <div class="mixitup-gallery">  
            <div class="filter-list row clearfix"> 
            	<?php
			    $terms_per_page = 9; 
				$paged = isset($_GET['pages']) ? $_GET['pages'] : 1;
				if(!is_numeric($paged)){
					$paged = 1;
				} 
				$offset       = ( $paged - 1 ) * $terms_per_page;
				$args = array(
				'post_type' => 'dichvu',
				'posts_per_page' => $terms_per_page,
				'post_status'=>'publish',
				'paged'=>$paged,
				'order' => 'DESC',
				'offset'     => $offset,
				
				);
				$args2 = array(
				'post_type' => 'dichvu',
				'post_status'=>'publish',
				'posts_per_page' => -1,
				'order' => 'DESC',
				);
				$results = get_posts($args2);
				//echo count($results); 
				$max_num_pages = ceil( count($results)/$terms_per_page );
				$wpb_all_query = new WP_Query($args);
			    ?>
			    <?php if ( $wpb_all_query->have_posts() ) : ?>
        		<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            	<?php if ( has_post_thumbnail() ) { ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project-item mix mix_all all meterial" style="display: inline-block !important;">
                    <div class="switem">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php
		                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "single-post-thumbnail" );
		                    ?>
		                    <img src="<?php echo $image[0]; ?>?v=1.1" title="<?php echo esc_html( get_the_title() ); ?>" alt="<?php echo esc_html( get_the_title() ); ?>" class="img-responsive"/>
                            <div class="swhoverbox">
                                <div class="projinrtext">
                                    <h3><?php echo esc_html( get_the_title() ); ?></h3>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="servicebox-content">
                        <h3>
                        	<a href="<?php echo get_permalink(); ?>"><?php echo esc_html( get_the_title() ); ?></a>
                        </h3>
                    </div>
                </div> 
                <?php } ?>
        		<?php endwhile; ?>
    			<?php endif; ?>
            </div> 
            <div class="pagination-design padd-top-40 text-center">
                <ul>
                	<?php
						if($max_num_pages>1) {
							for($i=1;$i<=$max_num_pages;$i++)
							{
							?>
							<li><a href="?pages=<?php echo $i; ?>" class="<?php if($i==$paged){ echo 'active'; } ?>"><?php echo $i; ?></a></li> 
							<?php
							}
						}
					?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php 
get_template_part('inc/ttp', 'parterer');
?>
<?php get_footer(); ?>