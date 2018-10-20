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
?>
<section id ="header_products">
    <div class="container header_products">
        <div class="row">
            <?php if(isset($cats_parent)){ ?>
                <div class="col-md-12">
                    <ul class="cate-products">
                        <?php foreach($cats_parent as $id => $category) : ?>
                            <li>
                                <a href="<?php echo get_term_link( $category->cat_ID ,'product_cat') ?>"><?php echo $category->name;?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php } ?>
            <div class="col-md-6 col-xs-12">
                <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div>
                        <input type="search" id="mySearch" name="s">
                        <button>Search</button>
                        <input type="hidden" value="product" name="post_type" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> 
