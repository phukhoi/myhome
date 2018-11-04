<?php
/*
* Template Name:Dự Án
* */
get_header();
global $maxthemes;
$posts_per_page = 6;
if ( get_query_var( 'page' ) ) { 
  $page = get_query_var( 'page' ); 
}
elseif ( get_query_var( 'page' ) ) { 
  $page = get_query_var( 'page' ); 
}
else { 
  $page = 1; 
}
$wpb_all_duan = new WP_Query(array('post_type'=>'duan', 'post_status'=>'publish','posts_per_page' => -1));
$args_all = array (
    'post_type' => 'duan',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
    'posts_per_page' => -1
);
$all_posts = get_posts($args_all);
$post_count = count($all_posts);

$num_pages = ceil($post_count / $posts_per_page);
if($page > $num_pages || $page < 1){
 $page = $num_pages;
}
$args = array (
    'post_type' => 'duan',
    'post_status' => 'publish',
    'posts_per_page' => $posts_per_page,
    'paged' => $page,
    'order' => 'DESC',
    'orderby' => 'ID',
);
$wpb_all_query = get_posts($args);
$count_all = count($wpb_all_query);
?> 
<section class="header-breadcrumb" style="background-image: url(/wp-content/uploads/2018/05/header-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="page-title">
                    <h1>THIẾT KẾ & THI CÔNG</h1> 
                    <!-- <h1><?php the_title() ; ?></h1> -->
                </div>
            </div>
            <div class="col-md-7">
            </div>
        </div>
    </div>
</section>
<section class="pad-t50 pad-b50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Dự án của My Home</h3>
                </div>
            </div>
        </div>
        <?php if ( $wpb_all_query) : ?> 
            <div class="row">
                <div class="portfolio-box du-an-box  box<?php echo $post->ID ?>">
                    <?php foreach ( $wpb_all_query as $post ) : setup_postdata( $post ); ?>
                        <?php 
                        $gallery = get_field('gallery_fields'); 
                        $img_first = isset($gallery[0]['url']) && !empty($gallery[0]['url']) ? $gallery[0]['url'] : get_the_post_thumbnail_url($post->ID);
                        ?>
                        <?php if ( has_post_thumbnail() ) { ?>
                            <div class="bedroom">
                                <div class="portfolio-post mb30">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo esc_html( $post->post_title ); ?>">
                                    <div class="hover-box fancybox" data-title-id="title-<?php echo $post->ID ?>"  role="button" title="<?php echo ( $post->post_title ); ?>"  data-fancybox="gallery-<?php echo ( $post->ID ); ?>" href="<?php echo $img_first; ?>" title="<?php echo esc_html( $post->post_title ); ?>">
                                        <div class="inner-hover">
                                            <h4><?php echo esc_html( $post->post_title ); ?></h4>
                                            <a data-title-id="title-<?php echo $post->ID ?>"  role="button" class="zoom img fancybox" title="<?php echo ( $post->post_title ); ?>"  data-fancybox="gallery-<?php echo ( $post->ID ); ?>" href="<?php echo $img_first; ?>" title="<?php echo esc_html( $post->post_title ); ?>">
                                                <img class="gallery-hover-icon" src="<?php echo get_template_directory_uri().'/assets/images/icon/gallery-icon.png' ?>" alt="<?php echo esc_html( $post->post_title ); ?>">   
                                            </a>
                                            <div id="title-<?php echo $post->ID ?>" class="hidden">
                                                This is 1st title. <a href="http://google.com">Some link</a>
                                            </div>
                                            <a role="button" class="hidden zoom title fancybox" title="<?php echo ( $post->post_title ); ?>">
                                                <p>Xem thêm</p> 
                                            </a>
                                        </div>   
                                        <?php if(isset($gallery) && !empty($gallery)) {?>
                                            <div class="hidden">
                                             <?php for($i = 1 ; $i<count($gallery); $i++){?>
                                                <a class="fancybox"  data-fancybox="gallery-<?php echo ( $post->ID ); ?>" href="<?php echo $gallery[$i]['url'];?>"><img src="<?php echo $gallery[$i]['url'];?>"  title="<?php echo esc_html( $post->post_title ); ?>"/></a>
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
                            beforeLoad: function() {
                                var el, id = $(this.element).data('title-id');

                                if (id) {
                                    el = $('#' + id);
                                
                                    if (el.length) {
                                        this.title = el.html();
                                    }
                                }
                            }
                        }); 
                        $('.box<?php echo $post->ID ?>').on('click', function(){
                            $(".fancybox-image-wrap").each(function(){
                                $(this).prepend("<div style='position:relative;top:-30px;color:white;font-weight: bold; text-align: center' class='popup-title'></div>"); 
                                $('.popup-title').html('');
                                $('.popup-title').html('<?php echo get_the_title($post->ID); ?>'.toUpperCase());
                                
                            })
                        })        
                    });
                </script>
                <?php endforeach; wp_reset_postdata();?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($post_count> $posts_per_page){?>
        <div class="row text-right">
            <div class="col-md-12">
                <ul class="pagination">
                    <?php if($page > 1){?>
                        <li>
                            <a href="?page=<?php echo ($page - 1); ?>">
                                <i class="fa fa-angle-double-left"></i>
                            </a>
                        </li>
                    <?php }?>
                    <?php for($i=1;$i<=$num_pages;$i++) {?> 
                        <?php if($i==$page){ ?>
                            <li class="active"><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li> 
                        <?php }else { ?> 
                            <li ><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li> 
                        <?php }?>
                    <?php }?>
                    <?php if($page < $num_pages){?>
                        <li>
                            <a href="?page=<?php echo ($page + 1); ?>">
                                <i class="fa fa-angle-double-right"></i>
                            </a>
                        </li>
                    <?php }?> 
                </ul>
            </div>
        </div>
    <?php }?>
</div>
</section>
<?php get_footer(); ?>