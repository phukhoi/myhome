<?php
	/*
		* Template Name:Giới thiệu
       * */
   get_header();
   global $maxthemes;
   $post_id = get_the_ID();
   $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), "single-post-thumbnail" );
   ?> 
   <section class="pad-t80" style="background-color: #f9f9f9; position: relative;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <img src="<?php echo $image[0]; ?>?v=1.1" class="img-responsive" title="<?php the_title();?>" alt="<?php the_title();?>">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="section-title left">
            <h3>
              <?php the_title();?>
            </h3>
          </div>
          <?php the_content(); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="section-title left">
            <h3>Bảng giá</h3>
          </div>
        </div>
        <div class="col-md-7">
          <h3>NHẬP THÔNG TIN</h3>
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-7 control-label text-left-tpt">
                Diện tích đất (m2)
              </label>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div> 
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-7 control-label text-left-tpt">
                Diện xây dựng ( tầng trệt )
              </label>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div> 
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-7 control-label text-left-tpt">
                Số tầng ( bao gồm tầng trệt )
              </label>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div> 
          </form>
          <h3 style="margin-top: 35px;">dự toán sơ bộ múc đầu tư</h3>
          <div class="box-dutoan">
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
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="text-center">Phần thô</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="text-center">Phần hoàn thiện</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="text-center">Phần nội thất</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="text-center">Dự phòng phí</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="text-center bold">TỔNG CỘNG</td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <h4 class="text-center">Lựa chọn gói thiết kế</h4>
            <div class="btn-type-design">
              <a href="#" class="btn btn-primary">Thiết kế trọn gọi</a>&nbsp;&nbsp;&nbsp;
              <a href="#" class="btn btn-primary">Thiết kế kiến trúc</a>
            </div>
          </div>

          <p style="margin-top: 20px;">CHÚ Ý: Phần báo giá này chỉ áp dụng cho địa bàn TP. HCM, nếu quý khách thuộc Tỉnh Thành khác, xin vui lòng liên hệ qua email.</br>
          Đơn giá thiết kế này áp dụng cho thể loại công trình nhà ở xây mới. Dự toán phần thô được áp dụng trong khu đất nằm trong khu vực dễ thi công (lộ giới đường trên 4m) và phần hoàn thiện được áp dụng mức giá vật tư thiết bị đạt mức trung bình của thị trường.</br>
        Đây là báo giá ước tính tạm thời dựa trên thông tin sơ bộ khách hàng cung cấp phía trên. Vui lòng liên hệ để biết thêm chi tiết.</p>

      </div>
      <div class="col-md-5">
        <h3>HÌNH ẢNH MINH HOẠ</h3>
        <img src="assets/images/others/interior-img.jpg" class="img-responsive" title="" alt="">
      </div>
    </div>
  </div> 
</section>
<?php get_footer(); ?>