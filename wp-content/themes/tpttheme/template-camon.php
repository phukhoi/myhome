<?php
	/*
		* Template Name:Cảm ơn
	* */
	get_header();
?>
<!-- Google Code for Nha Khoa Louis Conversion Page -->
<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 834157535;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "77EqCK6skXUQ3_fgjQM";
	var google_remarketing_only = false;
	/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/834157535/?label=77EqCK6skXUQ3_fgjQM&amp;guid=ON&amp;script=0"/>
	</div>
</noscript>


<div id="home" class="clearfix">
	<div class="container">
		<div class="row valign-center">
			<div class="col-xs-12 col-sm-12 col-lg-6 video-xs">
				<div id="slider-home">
					<?php
						for($i=1;$i<=6;$i++)
						{
						?>
						<div class="item">
							<img src="<?php echo MAXTHEMES_URI_ASSET; ?>website/images/bf<?php echo $i; ?>.jpg">
						</div>
						
						<?php
						}
					?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-lg-6 ctud">
				<h1 class="title">
					chương trình ưu đãi
				</h1>
				<div class="text-justify">
					<p>
						- Tặng ngay <strong>5 răng sứ cao cấp</strong> khi khách hàng làm trên 20 răng.
					</p>
					<p>
						- Trả góp <strong>lãi suất 0%</strong> trong vòng 3,6,8,12 tháng tùy theo khách lựa chọn.
					</p>
					<p>
						- Bao trọn gói đi lại, ăn uống, ngủ nghỉ cho khách ở tỉnh xa.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="icodown clearfix visible-xs">
	<div class="text-center">
		<a role="button" onclick="scrollToDiv('#tv');">
			<img src="<?php echo MAXTHEMES_URI_ASSET; ?>website/images/icodown.png">
		</a>
	</div>
</div>
<div id="tv" class="clearfix thanks">
	<div class="container" style="margin-top:0;text-align:center">
		<h3>
			Cảm ơn bạn quan tâm đến chương trình này, chúng tôi sẽ liên lạc trong thời gian sớm nhất.
		</h3>
		<p>
			Mọi thắc mắc vui lòng liên hệ <i class="fa fa-phone"></i> 0981.783.283
		</p>
	</div>
</div>
<?php
	include 'inc/content.php';
?>
<?php get_footer(); ?>