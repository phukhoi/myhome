<?php
	/*
		* Template Name:Giới thiệu
       * */
   get_header();
   global $maxthemes;
   $post_id = get_the_ID();
   $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), "single-post-thumbnail" );
   ?>
  <section class="pad-t160">
    <div class="grey-bg-row"></div>
    <div class="container">
      <div class="row mb60">
        <div class="col-md-6 col-sm-6">
          <img src="<?php echo $image[0]; ?>?v=1.1" class="img-responsive" title="<?php the_title();?>" alt="<?php the_title();?>">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="section-title style-2 left">
            <h3>
              <?php the_title();?>
            </h3>
          </div>
          <div class="section-detail">
            <!-- <?php the_content(); ?> -->
            <div class="">
              <p>
                MY HOME là công ty chuyên thiết kế và thi công nội – ngoại thất nhà ở, căn hộ, văn phòng và showroom. Chúng tôi luôn đem
                lại cho khách hàng những ý tưởng độc đáo với phong cách mới lạ, thẩm mỹ và sang trọng.
              </p>
              <p>
                Với đội ngũ kiến trúc sư và kỹ sư chuyên nghiệp của MY HOME sẽ giám sát và hoàn thành các công trình bằng phương pháp thi
                công hiện đại nhất, đồng thời luôn đảm bảo mang lại giải pháp hiệu quả, tiết kiệm cao và an toàn.
              </p>
            </div>
            <br><br>
            <h4>MY HOME – GIẢI PHÁP CHUYÊN NGHIỆP VỀ NHÀ Ở</h4>
            <div class="feature-list">
                <div class="feature-2">
                  <div class="media">
                    <div class="media-left">
                      <div class="feature-icon text-center">
                        <i class="flaticon-drawing"></i>
                        <img class="hidden" src="<?php echo get_template_directory_uri(); ?>/assets/images/pencil-icon.png" title="">
                      </div>
                    </div>
                    <div class="media-body">
                      <a href="#">
                        <h3 class="media-heading">Thiết kế nội – ngoại thất nhà ở, căn hộ, văn phòng, showroom</h3>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="feature-2">
                  <div class="media">
                    <div class="media-left">
                      <div class="feature-icon text-center">
                        <i class="flaticon-construction"></i>
                        <img class="hidden" src="<?php echo get_template_directory_uri(); ?>/assets/images/crane-icon.png" title="">
                      </div>
                    </div>
                    <div class="media-body">
                      <a href="#">
                        <h3 class="media-heading">Thi công nội ngoại thất nhà ở, căn hộ, văn phòng, showroom</h3>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="feature-2">
                  <div class="media">
                    <div class="media-left">
                      <div class="feature-icon text-center">
                        <i class="flaticon-house"></i>
                        <img class="hidden" src="<?php echo get_template_directory_uri(); ?>/assets/images/washtand-icon.png" title="">
                      </div>
                    </div>
                    <div class="media-body">
                      <a href="#">
                        <h3 class="media-heading">CUNG CẤP KHÓA, THIẾT BỊ BẾP &amp; PHÒNG TẮM, THIẾT BỊ CHIẾU SÁNG NHẬP KHẨU</h3>
                      </a>
                    </div>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb30">
          <div class="section-title style-2 left">
            <h3>Bảng giá</h3>
          </div>
        </div>
        <div class="col-md-7">
          <h3>NHẬP THÔNG TIN</h3>
          <form class="about-infor-form form-horizontal">
            <div class="row">
              <div class="form-group">
                <div class="col-sm-8 control-label text-left-tpt">
                  <label for="">
                    DIỆN TÍCH ĐẤT (m2)
                  </label>
                </div>
                <div class="col-sm-4 control-input">
                  <input type="text" class="form-control gia_input" id="dt" name="dt" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-8 control-label text-left-tpt">
                  <label for="">
                    DIỆN XÂY DỰNG (tầng trệt)
                  </label>
                </div>
                <div class="col-sm-4 control-input">
                  <input type="text" class="form-control gia_input" name="dttt" id="dttt" placeholder="">
                </div>
              </div>

              <div class="form-group ">
                <div class="col-sm-8 control-label text-left-tpt">
                  <label for="">
                    SỐ TẦNG (bao gồm tầng trệt)
                  </label>
                </div>
                <div class="col-sm-4 control-input">
                  <input type="text" class="form-control gia_input" name="st" id="st" placeholder="">
                </div>
              </div>
            </div>
          </form>
          <h3 style="margin-top: 20px;">dự toán sơ bộ mức đầu tư</h3>
          <div class="box-dutoan cus">
            <table class="table table-tpt">
              <thead>
                <tr>
                  <th>hạng mục</th>
                  <th>tạm tính (VNĐ)</th>
                  <th>Tỉ lệ (%)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">Thiết kế trọn gói</td>
                  <td class="text-center" id="thietke_ketqua"></td>
                  <td class="text-center" id="thietke_phantram"></td>
                </tr>
                <tr>
                  <td class="text-center">Phần thô</td>
                  <td class="text-center" id="phantho_ketqua"></td>
                  <td class="text-center" id="phantho_phantram"></td>
                </tr>
                <tr id="tr-hoanthien">
                  <td class="text-center">Phần hoàn thiện</td>
                  <td class="text-center" id = "hoanthien_ketqua"></td>
                  <td class="text-center" id = "hoanthien_phantram"></td>
                </tr>
                <tr id="tr-phanmoc">
                  <td class="text-center">Phần mộc</td>
                  <td class="text-center" id="noithat_ketqua"></td>
                  <td class="text-center" id="noithat_phantram"></td>
                </tr>
                <tr>
                  <td class="text-center">Dự phòng phí</td>
                  <td class="text-center" id="duphong_ketqua"></td>
                  <td class="text-center" id="duphong_phantram"></td>
                </tr>
                <tr>
                  <td class="text-center bold">TỔNG CỘNG</td>
                  <td class="text-center" id="tongcong"></td>
                  <td class="text-center" id = "tongcong_phantram"></td>
                </tr>
              </tbody>
            </table>
            <h4 class="text-center">Lựa chọn gói thiết kế</h4>
            <div class="btn-type-design">
              <a  id="btnThiCongPhanTho" onclick="handleButtonClick('btnThiCongPhanTho')" class="btn btn-primary--cus">Thi công phần thô</a>
              <a  id="btnThiCongHoanThien" onclick="handleButtonClick('btnThiCongHoanThien')" class="btn btn-primary--cus active">Thi công hoàn thiện</a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <h3>HÌNH ẢNH MINH HOẠ</h3>
          <div class="image-demo"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/others/lo-gioi.jpg" class="img-responsive" title="" alt="">
          </div>
        </div>
        <div class="col-md-12 gt-description">
          <p>CHÚ Ý: Phần báo giá này chỉ áp dụng cho địa bàn TP. HCM, nếu quý khách thuộc Tỉnh Thành khác, xin vui lòng liên hệ
            qua email: <a href="mailto:info.myhomevn@gmail.com"></a></br>
            Đơn giá thiết kế này áp dụng cho thể loại công trình nhà ở xây mới. Dự toán phần thô được áp dụng trong khu đất nằm trong
            khu vực dễ thi công (lộ giới đường trên 4m) và phần hoàn thiện được áp dụng mức giá vật tư thiết bị đạt mức trung
            bình của thị trường.</br>
            Đây là báo giá ước tính tạm thời dựa trên thông tin sơ bộ khách hàng cung cấp phía trên. Vui lòng liên hệ để biết thêm chi
            tiết.</p>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>

   <script language="javascript">
		$(document).keyup(function(e) {
      var dtd = document.getElementById('dt').value;
			var dttt = document.getElementById('dttt').value;
			var st = document.getElementById('st').value;
      
		  // if (e.keyCode == 13 ) { 
		  	// $("#tktg").click();
          if( !isNaN(dtd) && dtd !="" && !isNaN(dttt) && dttt !="" && !isNaN(st) && st !=""){
              // $("#tktg").click();
              thiconghoanthien();
        }
		  //  }     // enter
		});
    $(".gia_input").on('change', function(){
      console.log('change');
      // var dtd = document.getElementById('dt').value;
			// var dttt = document.getElementById('dttt').value;
			// var st = document.getElementById('st').value;
      // if( !isNaN(dtd) && dtd !="" && !isNaN(dttt) && dttt !="" && !isNaN(st) && st !=""){
      //     	// $("#tktg").click();
      //       tktg();
      // }
    })

    function handleButtonClick(id){
      
      $(".btn-primary--cus").each(function() {
          $(this).removeClass('active');
      });

      $('#'+id).addClass('active');

      if( $('#btnThiCongPhanTho').hasClass('active') ){
        thicongphantho();
      }
      if( $('#btnThiCongHoanThien').hasClass('active') ){
        thiconghoanthien();
      }
      
    }

		function formatCurrency(num) 
		 {
			num = num.toString().replace(/\$|\,/g,'');
			if(isNaN(num))
			num = "0";
			sign = (num == (num = Math.abs(num)));
			num = Math.floor(num*100+0.50000000001);
			num = Math.floor(num/100).toString();
			for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
			num = num.substring(0,num.length-(4*i+3))+'.'+
			num.substring(num.length-(4*i+3));
			return (((sign)?'':'-') + num);
		}
		
		function thicongphantho()
		{
      if(!$('#tr-hoanthien').hasClass('hidden')){
        $('#tr-hoanthien').addClass('hidden');
      }
      if(!$('#tr-phanmoc').hasClass('hidden')){
        $('#tr-phanmoc').addClass('hidden');
      }
      console.log('onkey');
			var dtd = document.getElementById('dt').value;
			var dttt = document.getElementById('dttt').value;
			var st = document.getElementById('st').value;
			var tdts = dttt * st;
			var thietke_ketqua = tdts *250000;
			//var phantho_ketqua = tdts * 2850000;
			if(tdts<= 100){
				var phantho_ketqua = tdts * 3300000 *1.5;
			} else if(tdts<= 200){
				var phantho_ketqua = tdts * 3300000 *1.25;
			} else if(tdts<= 300){
				var phantho_ketqua = tdts * 3300000 *1.15;
			} else{
				var phantho_ketqua = tdts * 3300000;
			}
			
      /* backup */
			// var hoanthien_ketqua = tdts * 1800000;
			// var noithat_ketqua = (phantho_ketqua +hoanthien_ketqua)* 0.25;
			// var duphong_ketqua = (phantho_ketqua +hoanthien_ketqua)* 0.05;
			// var tongcong = thietke_ketqua + phantho_ketqua + hoanthien_ketqua + noithat_ketqua + duphong_ketqua;
      /* backup */
      var hoanthien_ketqua = tdts * 2000000;
        hoanthien_ketqua = 0;
      var noithat_ketqua = tdts * 1500000;
        noithat_ketqua = 0;
			var tongcong_temp = thietke_ketqua + phantho_ketqua + hoanthien_ketqua + noithat_ketqua;
			var duphong_ketqua = tongcong_temp*0.03;
      var tongcong = tongcong_temp + duphong_ketqua;
			if(isNaN(dtd) || dtd =="" ){
				alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại! ");
				document.getElementById('dt').focus();
				return false;
			}
			//if(dtd <= dttt){
//				alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại! ");
//				document.getElementById('dttt').focus();
//				return false;
//			}
			if(isNaN(dttt) || dttt ==""){
				alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại! ");
				document.getElementById('dttt').focus();
				return false;
			}
			if(isNaN(st) || st ==""){
				alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại! ");
				document.getElementById('st').focus();
				return false;
			}
			

			document.getElementById("thietke_ketqua").innerHTML = formatCurrency(thietke_ketqua);
			document.getElementById("thietke_phantram").innerHTML =Math.round(((thietke_ketqua/tongcong) * 100)*1000)/1000;
			document.getElementById("phantho_ketqua").innerHTML = formatCurrency(phantho_ketqua);
			document.getElementById("phantho_phantram").innerHTML =Math.round(((phantho_ketqua/tongcong) * 100)*1000)/1000;
			document.getElementById("hoanthien_ketqua").innerHTML = formatCurrency(hoanthien_ketqua);
			document.getElementById("hoanthien_phantram").innerHTML =Math.round(((hoanthien_ketqua/tongcong) * 100)*1000)/1000;
			document.getElementById("noithat_ketqua").innerHTML = formatCurrency(noithat_ketqua);
			document.getElementById("noithat_phantram").innerHTML =Math.round(((noithat_ketqua/tongcong) * 100)*1000)/1000;
			document.getElementById("duphong_ketqua").innerHTML = formatCurrency(duphong_ketqua);
			document.getElementById("duphong_phantram").innerHTML = 3;
			// document.getElementById("duphong_phantram").innerHTML =Math.round(((duphong_ketqua/tongcong) * 100)*1000)/1000;
			document.getElementById("tongcong").innerHTML = formatCurrency(tongcong);
			document.getElementById("tongcong_phantram").innerHTML =Math.round(((tongcong/tongcong) * 100)*1000)/1000;

  		}
		function thiconghoanthien()
		{
      if($('#tr-hoanthien').hasClass('hidden')){
        $('#tr-hoanthien').removeClass('hidden');
      }
      if($('#tr-phanmoc').hasClass('hidden')){
        $('#tr-phanmoc').removeClass('hidden');
      }
			var dtd = document.getElementById('dt').value;
			var dttt = document.getElementById('dttt').value;
			var st = document.getElementById('st').value;
			if(isNaN(dtd) || dtd ==""){
				alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại! ");
				document.getElementById('dt').value="";
				document.getElementById('dttt').value="";
				document.getElementById('dt').focus();
				return false;
			} else if ( dttt*1 > dtd*1){
				//alert(dttt);
				document.getElementById('dttt').value="";
				alert(" Diện tích xây dựng phải nhỏ hơn diện tích đất! ");
				document.getElementById('dttt').focus();
				return false;
			}else{
			
				if(st==""){
					var tdts = dttt * 1;
				}else{
					var tdts = dttt * st;
				}
			if(tdts<= 100){
				var phantho_ketqua = tdts * 3300000 *1.5;
			} else if(tdts<= 200){
				var phantho_ketqua = tdts * 3300000 *1.25;
			} else if(tdts<= 300){
				var phantho_ketqua = tdts * 3300000 *1.15;
			} else{
				var phantho_ketqua = tdts * 3300000;
			}
			var thietke_ketqua = tdts *200000;
			/* backup */
			// var hoanthien_ketqua = tdts * 1800000;
			// var noithat_ketqua = (phantho_ketqua +hoanthien_ketqua)* 0.25;
			// var duphong_ketqua = (phantho_ketqua +hoanthien_ketqua)* 0.05;
			// var tongcong = thietke_ketqua + phantho_ketqua + hoanthien_ketqua + noithat_ketqua + duphong_ketqua;
      /* backup */
      var hoanthien_ketqua = tdts * 2000000;
			var noithat_ketqua = tdts * 1500000;
			var tongcong_temp = thietke_ketqua + phantho_ketqua + hoanthien_ketqua + noithat_ketqua;
			var duphong_ketqua = tongcong_temp*0.03;
      var tongcong = tongcong_temp + duphong_ketqua;

			if(isNaN(dtd) || dtd ==""){
				alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại!");
				document.getElementById('dt').focus();
				return false;
			}
			if(isNaN(dttt) || dttt ==""){
				
				document.getElementById('dttt').value="";
				document.getElementById('dttt').focus();
				//alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại! ");
				return false;
			}
			//if(isNaN(st) || st ==""){
			if(isNaN(st)){
				alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại! ");
				document.getElementById('st').value="";
				document.getElementById('st').focus();
				return false;
			}
			
			document.getElementById("thietke_ketqua").innerHTML = formatCurrency(thietke_ketqua);
			document.getElementById("thietke_phantram").innerHTML =Math.round(((thietke_ketqua/tongcong) * 100)*1000)/1000;
			document.getElementById("phantho_ketqua").innerHTML = formatCurrency(phantho_ketqua);
			document.getElementById("phantho_phantram").innerHTML =Math.round(((phantho_ketqua/tongcong) * 100)*1000)/1000;
			document.getElementById("hoanthien_ketqua").innerHTML = formatCurrency(hoanthien_ketqua);
			document.getElementById("hoanthien_phantram").innerHTML =Math.round(((hoanthien_ketqua/tongcong) * 100)*1000)/1000;
			document.getElementById("noithat_ketqua").innerHTML = formatCurrency(noithat_ketqua);
			document.getElementById("noithat_phantram").innerHTML =Math.round(((noithat_ketqua/tongcong) * 100)*1000)/1000;
			document.getElementById("duphong_ketqua").innerHTML = formatCurrency(duphong_ketqua);
			document.getElementById("duphong_phantram").innerHTML = 3;
			// document.getElementById("duphong_phantram").innerHTML =Math.round(((duphong_ketqua/tongcong) * 100)*1000)/1000;
			document.getElementById("tongcong").innerHTML = formatCurrency(tongcong);
			document.getElementById("tongcong_phantram").innerHTML =Math.round(((tongcong/tongcong) * 100)*1000)/1000;
	
  		}
		}
		// function tknt()
		// {
		// 	var dtd = document.getElementById('dt').value;
		// 	var dttt = document.getElementById('dttt').value;
		// 	var st = document.getElementById('st').value;
		// 	var tdts = dttt * st;
		// 	var thietke_ketqua = tdts *150000;
		// 	//var phantho_ketqua = tdts * 2850000;
		// 	if(tdts<= 100){
		// 		var phantho_ketqua = tdts * 3000000 *1.5;
		// 	} else if(tdts<= 200){
		// 		var phantho_ketqua = tdts * 3000000 *1.25;
		// 	} else if(tdts<= 300){
		// 		var phantho_ketqua = tdts * 3000000 *1.15;
		// 	} else{
		// 		var phantho_ketqua = tdts * 3000000;
		// 	}
		// 	var hoanthien_ketqua = tdts * 1800000;
		// 	var noithat_ketqua = (phantho_ketqua +hoanthien_ketqua)* 0.25;
		// 	var duphong_ketqua = (phantho_ketqua +hoanthien_ketqua)* 0.05;
		// 	var tongcong = thietke_ketqua + phantho_ketqua + hoanthien_ketqua + noithat_ketqua + duphong_ketqua;
						
		// 	if(isNaN(dtd) || dtd ==""){
		// 		alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại! ");
		// 		document.getElementById('dt').focus();
		// 		return false;
		// 	}
		// 	if(isNaN(dttt) || dttt ==""){
		// 		alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại! ");
		// 		document.getElementById('dttt').focus();
		// 		return false;
		// 	}
		// 	if(isNaN(st) || st ==""){
		// 		alert(" Dữ liệu chưa đúng, xin quý khách vui lòng nhập lại! ");
		// 		document.getElementById('st').focus();
		// 		return false;
		// 	}
			
		// 	document.getElementById("thietke_ketqua").innerHTML = formatCurrency(thietke_ketqua);
		// 	document.getElementById("thietke_phantram").innerHTML =Math.round(((thietke_ketqua/tongcong) * 100)*1000)/1000;
		// 	document.getElementById("phantho_ketqua").innerHTML = formatCurrency(phantho_ketqua);
		// 	document.getElementById("phantho_phantram").innerHTML =Math.round(((phantho_ketqua/tongcong) * 100)*1000)/1000;
		// 	document.getElementById("hoanthien_ketqua").innerHTML = formatCurrency(hoanthien_ketqua);
		// 	document.getElementById("hoanthien_phantram").innerHTML =Math.round(((hoanthien_ketqua/tongcong) * 100)*1000)/1000;
		// 	document.getElementById("noithat_ketqua").innerHTML = formatCurrency(noithat_ketqua);
		// 	document.getElementById("noithat_phantram").innerHTML =Math.round(((noithat_ketqua/tongcong) * 100)*1000)/1000;
		// 	document.getElementById("duphong_ketqua").innerHTML = formatCurrency(duphong_ketqua);
		// 	document.getElementById("duphong_phantram").innerHTML =Math.round(((duphong_ketqua/tongcong) * 100)*1000)/1000;
		// 	document.getElementById("tongcong").innerHTML = formatCurrency(tongcong);
		// 	document.getElementById("tongcong_phantram").innerHTML =Math.round(((tongcong/tongcong) * 100)*1000)/1000;
			
  	// 	}
</script>
    