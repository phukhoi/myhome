<?php
	/*
		* Template Name:Giới thiệu
       * */
   get_header();
   global $maxthemes;
   $post_id = get_the_ID();
   $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), "single-post-thumbnail" );
   ?>
  <section class="pad-t80">
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
                        <!-- <i class="flaticon-drawing"></i> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pencil-icon.png" title="">
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
                        <!-- <i class="flaticon-construction"></i> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crane-icon.png" title="">
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
                        <!-- <i class="flaticon-house"></i> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/washtand-icon.png" title="">
                      </div>
                    </div>
                    <div class="media-body">
                      <a href="#">
                        <h3 class="media-heading">Cung cấp khóa, thiết bị bếp &amp; phòng tắm nhập khẩu từ USA</h3>
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
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-8 control-label text-left-tpt">
                  <label for="">
                    DIỆN XÂY DỰNG ( tầng trệt )
                  </label>
                </div>
                <div class="col-sm-4 control-input">
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
              </div>

              <div class="form-group ">
                <div class="col-sm-8 control-label text-left-tpt">
                  <label for="">
                    SỐ TẦNG ( bao gồm tầng trệt )
                  </label>
                </div>
                <div class="col-sm-4 control-input">
                  <input type="text" class="form-control" id="" placeholder="">
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
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                </tr>
                <tr>
                  <td class="text-center">Phần thô</td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                </tr>
                <tr>
                  <td class="text-center">Phần hoàn thiện</td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                </tr>
                <tr>
                  <td class="text-center">Phần nội thất</td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                </tr>
                <tr>
                  <td class="text-center">Dự phòng phí</td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                </tr>
                <tr>
                  <td class="text-center bold">TỔNG CỘNG</td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                </tr>
              </tbody>
            </table>
            <h4 class="text-center">Lựa chọn gói thiết kế</h4>
            <div class="btn-type-design">
              <a href="#" class="btn btn-primary--cus">Thiết kế trọn gọi</a>
              <a href="#" class="btn btn-primary--cus">Thiết kế kiến trúc</a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <h3>HÌNH ẢNH MINH HOẠ</h3>
          <div class="image-demo">
            <img src="assets/images/others/interior-img.jpg" class="img-responsive" title="" alt="">
          </div>
        </div>
        <div class="col-md-12 gt-description">
          <p>CHÚ Ý: Phần báo giá này chỉ áp dụng cho địa bàn TP. HCM, nếu quý khách thuộc Tỉnh Thành khác, xin vui lòng liên hệ
            qua email.</br>
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