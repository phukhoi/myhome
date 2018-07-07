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
<?php if(isset($cats_parent)){ ?>
<div class="sidebar sidebar-left">
	<div class="widget widget-product-cat">
		<h4 class="widget-title title14">
			Danh mục sản phẩm
		</h4>
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
  </div>  
</div>  
<?php }?>
