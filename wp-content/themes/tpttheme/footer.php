        <?php 
        global $maxthemes;
        $address = $maxthemes['basic-address'];
        $hotline =$maxthemes['basic-hotline'];
        $email = $maxthemes['basic-email']; 
        $phone = $maxthemes['basic-phone']; 
        $title = $maxthemes['basic-title']; 
        $fb = $maxthemes['basic-social-facebook']; 
        $twitter = $maxthemes['basic-social-twitter']; 
        $pinterest = $maxthemes['basic-social-pinterest']; 
        $dribbble = $maxthemes['basic-social-dribbble']; 
        $linkedin = $maxthemes['basic-social-linkedin']; 
        ?>
        <section class="footer-section pad-t80 pad-b30 parallax" style="background-color: #222;">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="footer-text">
                            <p class="text-uppercase">  <?php echo $title; ?></p>
                            <p><span class="text-brand-color">Địa chỉ: </span> <?php echo $address; ?></p>
                            <p class="hidden"><span class="text-brand-color">Điện thoại: </span> <?php echo $phone; ?></p>
                            <p><span class="text-brand-color">Email: </span> <?php echo $email; ?></p>
                            <p><span class="text-brand-color">Hotline: </span> <?php echo $hotline; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="social-top">
                            <ul class="top-social">
                                <li><a href="<?php echo $fb; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php echo $pinterest; ?>" target="_blank"><i class="fa fa-google"></i></a></li>
                                <!-- <li><a href="<?php echo $dribbble; ?>" target="_blank"><i class="fa fa-dribbble"></i></a></li> -->
                                <li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <!-- <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li> -->
                            </ul>
                        </div>
                        <br/>
                        <span class="privacy-text">Myhome ⓒ Privacy Policy</span>
                    </div>
                </div>
            </div>
        </section>
        <div id="back-to-top" class="back-to-top reveal">
            <i class="fa fa-angle-up fa-2x"></i>
        </div>
        <?php wp_footer(); ?>
    </div>    
</body> 
</html>