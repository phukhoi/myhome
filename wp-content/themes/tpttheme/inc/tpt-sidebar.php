<?php 
global $maxthemes;
$post_id = get_the_ID();
$currentLang = qtranxf_getLanguage();
$title_home = ($currentLang == 'en') ? 'Home': 'Trang Chủ';
$title_cate = ($currentLang == 'en') ? 'Categories': 'Danh mục';
$host_name = "http://".$_SERVER['SERVER_NAME'];
if (isset($post_id) && $post_id == '10'){
    $style = '';
    $_title = $title_cate;
}else{
    $style = 'style="display: none;"';
    $_title = "<a href='".$host_name."'>".$title_home."</a>";
}
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
?>
<div class="col-md-3 hidden-sm col-xs-10">
    <div class="wrap-cat-icon wrap-cat-icon8">
        <h2 class="title14 title-cat-icon"><span><?php echo $_title; ?></span></h2>
        <?php if(isset($cats_parent)){ ?>
        <div class="wrap-list-cat-icon" <?php echo $style; ?>>
            <ul class="list-cat-icon">
                <?php foreach($cats_parent as $category) : ?>
                <li class="has-cat-mega">
                    <a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>">
                        <span>
                            <?php echo $category->name;?>
                        </span>
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
                        <div class="cat-mega-menu cat-mega-style1">
                            <div class="row">
                                <div class="col-md-4 col-sm-3">
                                    <div class="list-cat-mega-menu">
                                        <ul>
                                            <?php foreach($subsubcats as $item_sub) : ?>
                                                <li>
                                                    <a href="<?php echo get_term_link( $item_sub->slug, 'product_cat' ); ?>">
                                                    <?php echo $item_sub->name;?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    <?php }?>
                </li> 
                <?php endforeach; ?>
            </ul>
        </div>
        <?php } ?>
    </div>
</div>