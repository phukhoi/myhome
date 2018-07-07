<?php
/*
* Template Name:Phong Thuỷ
* */
get_header();
global $maxthemes; 
?> 
<style type="text/css">
#exTab1 .nav-pills {

}
.nav-pills li{

}
ul.ul-phongthuy{
	text-align: center;
}
ul.ul-phongthuy li{
	float: none !important;
	display: inline-block !important;
	border: 1px solid #000;
	border-radius: 0px;
}
.ul-phongthuy>li>a{
	text-transform: uppercase;
	color: #000;
}
.ul-phongthuy>li.active{
	border: 1px solid #f6d014;
}
.ul-phongthuy>li.active>a{
	background-color: #f6d014 !important;
	border: 1px solid #f6d014;
	border-radius: 0px;
}
.ul-phongthuy>li:hover{
	border: 1px solid #f6d014;
}
.ul-phongthuy>li:hover>a{
	background-color: #f6d014 !important;
	border: 1px solid #f6d014;
	border-radius: 0px;
}
.tab-content {
	margin-top: 25px;
}
.color-black:hover {
    color: #fbb900 !important;
}
</style>
<section class="header-breadcrumb" style="background-image: url(/wp-content/uploads/2018/05/header-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="page-title">
                    <h1><?php the_title() ; ?></h1>
                </div>
            </div>
            <div class="col-md-7">
            </div>
        </div>
    </div>
</section>
<section class="pad-t35 pad-b50">
	<div class="container">
		<div class="col-md-12 c-phong-thuy">
			<div class="col-md-6 text-center">
				<div class="page-title">
					<a href="/phong-thuy-la-gi/">
						<h1 class="color-black active">Phong thuỷ là gì</h1>
					</a>
				</div>
			</div>
			<div class="col-md-6 text-center">
				<div class="page-title">
					<a href="/phong-thuy/">
						<h1 class="color-black">các loại thước lỗ ban</h1>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<?php the_content(); ?>
	</div>
</section>
<?php get_footer(); ?>