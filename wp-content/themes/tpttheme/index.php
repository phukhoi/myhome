<?php
	/*
		* Template Name: Index
	* */
	get_header();
	global $maxthemes;
	$currentLang = qtranxf_getLanguage();
?> 
<div id="content">
	<?php get_template_part('inc/tpt', 'slider'); ?>
	<div class="container">
		<div class="row">
			<div class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
				<div class="title-product-order8">
					<h2 class="title18">
						Danh mục 
					</h2>
					<a href="#" class="seeall wobble-top">See All</a>
				</div>
				<div class="content-product-order8">
					<div class="wrap-item" data-pagination="false" data-navigation="false" data-itemscustom="[[0,1],[480,2],[768,3],[1024,4],[1200,4]]">
						<?php for($i=0; $i<10;$i++) {?>
						<div class="item-product-order8">
							<div class="item-product">
								<div class="product-thumb">
									<a href="detail.html" class="product-thumb-link">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/photos/sport/1.jpg" alt="">
									</a>
									<a href="quick-view.html" class="quickview-link plus fancybox.iframe">quick view</a>
									<div class="product-extra-link">
										<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="detail.html">new favorite</a></h3>
									<div class="product-price">
										<ins><span>$360.00</span></ins>
										<del><span>$400.00</span></del>
									</div>
									<div class="product-order">
										<span>34 Orders</span>
									</div>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
			<aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12 col-sm-pull-9">
				<div class="widget widget-seller">
					<h2 class="widget-title title14">Tin Tức mới nhất</h2>
					<div class="widget-content">
						<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[480,2],[768,1]]">
							<div class="list-pro-seller">
								<div class="item-pro-seller">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/photos/homeware/8.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<h3 class="product-title"><a href="detail.html">new favorite</a></h3>
										<div class="product-price">
											<ins><span>$360.00</span></ins>
											<del><span>$400.00</span></del>
										</div>
										<div class="product-rate">
											<div style="width:90%" class="product-rating"></div>
										</div>
									</div>
								</div>	
								<div class="item-pro-seller">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/photos/homeware/2.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<h3 class="product-title"><a href="detail.html">new favorite</a></h3>
										<div class="product-price">
											<ins><span>$360.00</span></ins>
											<del><span>$400.00</span></del>
										</div>
										<div class="product-rate">
											<div style="width:90%" class="product-rating"></div>
										</div>
									</div>
								</div>	
								<div class="item-pro-seller">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/photos/homeware/9.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<h3 class="product-title"><a href="detail.html">new favorite</a></h3>
										<div class="product-price">
											<ins><span>$360.00</span></ins>
											<del><span>$400.00</span></del>
										</div>
										<div class="product-rate">
											<div style="width:90%" class="product-rating"></div>
										</div>
									</div>
								</div>	
								<div class="item-pro-seller">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/photos/homeware/5.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<h3 class="product-title"><a href="detail.html">new favorite</a></h3>
										<div class="product-price">
											<ins><span>$360.00</span></ins>
											<del><span>$400.00</span></del>
										</div>
										<div class="product-rate">
											<div style="width:90%" class="product-rating"></div>
										</div>
									</div>
								</div>		
							</div>	
						</div>
					</div>
				</div>
			</aside>
		</div>
	</div>
</div>
<?php
    get_footer();
?>
	