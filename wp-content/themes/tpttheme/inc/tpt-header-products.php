<?php 
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
$s = isset($_GET['s']) && !empty($_GET['s']) ? $_GET['s'] :'';
?>
<section id ="header_products">
    <div class="container header_products">
        <div class="cart-icon-wrapper">
            <a href="/gio-hang">
                <i class="fa fa-shopping-cart"></i>
            </a>
        </div>
        <div class="row">
            <?php if(isset($cats_parent)){ ?>
                <div class="col-md-12">
                    <ul class="cate-products">
                            <li>
                                <a href="/thiet-bi-dien/">Thiết bị điện</a>
                            </li>
                        <?php foreach($cats_parent as $id => $category) : ?>
                            <li>
                                <a href="<?php echo get_term_link( $category->cat_ID ,'product_cat') ?>"><?php echo $category->name;?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php } ?>
            <div class="col-xs-12">
                <div class="col-md-4 col-md-offset-8 col-xs-12 no-padding">
                <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="input-group">
                        <input type="search" class="form-control" id="mySearch" placeholder="" name="s" value="<?php echo $s ?>">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-search" type="submit">Tìm kiếm</button>
                        </span>
                        <input type="hidden" value="product" name="post_type" />
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section> 
