        <?php 
        global $maxthemes;
        $address = $maxthemes['basic-address'];
        $hotline =$maxthemes['basic-hotline'];
        $email = $maxthemes['basic-email']; 
        $phone = $maxthemes['basic-phone']; 
        $title = $maxthemes['basic-title']; 
        ?>
        <section class="footer-section pad-t80 pad-b30 parallax" style="background-color: #222;">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="footer-text">
                            <p class="text-uppercase">  <?php echo $title; ?></p>
                            <p><span class="text-brand-color">Địa chỉ: </span> <?php echo $address; ?></p>
                            <p><span class="text-brand-color">Điện thoại: </span> <?php echo $phone; ?></p>
                            <p><span class="text-brand-color">Email: </span> <?php echo $email; ?></p>
                            <p><span class="text-brand-color">Hotline: </span> <?php echo $hotline; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="social-top">
                            <ul class="top-social">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
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