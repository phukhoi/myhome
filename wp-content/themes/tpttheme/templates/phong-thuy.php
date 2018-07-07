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
						<h1 class="color-black">Phong thuỷ là gì</h1>
					</a>
				</div>
			</div>
			<div class="col-md-6 text-center">
				<div class="page-title">
					<a href="/phong-thuy/">
						<h1 class="color-black active">các loại thước lỗ ban</h1>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-md-12">
			<div id="exTab1">	
				<ul  class="nav nav-pills ul-phongthuy">
					<li class="active">
						<a  href="#1a" data-toggle="tab">Thước lỗ ban 52.2 cm</a>
					</li>
					<li><a href="#2a" data-toggle="tab">Thước lỗ ban 42.9 cm</a>
					</li>
					<li><a href="#3a" data-toggle="tab">Thước lỗ ban 38.8 cm</a>
					</li> 
				</ul>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="1a">
						<p>Chiều dài chính xác của thước Lỗ ban này là 52.2 cm.</p>
						<p>Được chia ra làm 8 cung lớn : Theo thứ tự từ cung QUÝ NHÂN, HIỂM HỌA, THIÊN TAI, THIÊN TÀI, NHÂN LỘC, CÔ ĐỘC, THIÊN TẶC, TỂ TƯỚNG. Mỗi cung lớn dài 65mm. Mỗi cung lớn lại được chia ra làm 5 cung nhỏ. Mỗi cung nhỏ dài 13mm. </p>
					</div>
					<div class="tab-pane" id="2a">
						<p>Chiều dài chính xác của thước Lỗ ban này là 42.9 cm.</p>
						<p>Được chia ra làm 8 cung lớn : Theo thứ tự từ cung TÀI, BỆNH, LY, NGHĨA, QUAN, NẠN, HẠI, MẠNG. Mỗi cung lớn dài 53,625mm. Mỗi cung lớn lại được chia ra làm 4 cung nhỏ. Mỗi cung nhỏ dài 13,4mm.</p>
					</div>
					<div class="tab-pane" id="3a">
						<p>Chiều dài chính xác của thước Lỗ ban này là 38.8 cm.</p>
						<p>Được chia ra làm 10 cung lớn : Theo thứ tự từ cung ĐINH, HẠI, VƯỢNG, KHỔ, NGHĨA, QUAN, TỬ, HƯNG, THẤT, TÀI. Mỗi cung lớn dài 39mm. Mỗi cung lớn lại được chia ra làm 4 cung nhỏ. Mỗi cung nhỏ dài 9,75mm.</p>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<?php echo do_shortcode('[shimi_thuocloban]'); ?>
	</div>
</section>
<?php get_footer(); ?>