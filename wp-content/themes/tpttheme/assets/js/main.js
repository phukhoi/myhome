(function($) {
    "use strict";

    //when dom is ready
    $(document).ready(function() {
        

        // on scroll Navbar Fixed and back to top show
        $(window).on('scroll', function() {
            if($(window).width() > 600){
                if ($(window).scrollTop() > 600) {
                    $('#header').addClass('navbar-fixed-top');
                    $('#back-to-top').addClass('reveal');
                } else {
                    $('#header').removeClass('navbar-fixed-top');
                    $('#back-to-top').removeClass('reveal');
                }
            }
        });


        // Start Back to Top
        $('#back-to-top').on('click', function() {
            $("html, body").animate({scrollTop: 0}, 1000);
            return false;
        });



        // revolution slider start
        $("#rev_slider_1").show().revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 9000,
            spinner: "spinner4",
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    enable: true,
                    style: 'uranus',
                    tmp: '',
                    rtl: false,
                    hide_onleave: true,
                    hide_onmobile: true,
                    hide_under: 0,
                    hide_over: 9999,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 20,
                        v_offset: 0
                    },
                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 20,
                        v_offset: 0
                    }
                },
            },
            responsiveLevels: [1240, 1024, 767, 480],
            gridwidth: [1170, 1170, 767, 480],
            gridheight: [550, 550, 400, 400],
            lazyType: "none",
            shadow: 0,
            shuffle: "off",
            autoHeight: "off",
        });
        // revolution slider end


        //Owl Carousel-- Team Member
        $(".owl-scroll").owlCarousel({
            pagination: true,
            navigation: false,
            items : 3,
            itemsDesktop : [1000,3],
            itemsDesktopSmall : [920,2],
            itemsTablet: [767,2],
            slideSpeed: 2500,
            stopOnHover: true,
            autoPlay: false,
            singleItem: false,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
        });


        // Start Animated Number
        $('.animated-counter').appear(function() {
            $('.animated-number').countTo({
                speed: 4000,
                refreshInterval: 60,
                formatter: function(value, options) {
                    return value.toFixed(options.decimals);
                }
            });
        });


        //Progress Bar
        $('.progress-bar').each(function(){
            var width = $(this).data('percentage');
            $(this).css({'transition': 'width 3s'});
            $(this).appear(function () {
                $(this).css('width', width + '%');
                $(this).find('.count').countTo({
                    from: 0,
                    to: width,
                    speed: 3000,
                    refreshInterval: 50,
                });
            });
        });

        // Start Easy Pie Chart
        $('.progress-chart-feature').appear(function() {
            $('.chart').easyPieChart({
                animate: 2000,
                barColor: '#f6d014',
                trackColor: '#f6f6f6',
                scaleColor: '',
                lineCap: 'round',
                lineWidth: 10,
                size: 130
            });
        });

        //Tooltip
        $('[data-toggle="tooltip"]').tooltip()

        //video background
        try {
            jQuery(".player").mb_YTPlayer();
        } catch (err) {}


        // $("[data-fancybox]").fancybox({
        //     afterShow: function( instance, current ) {
        //         if ( current.$content ) {
        //             arrowLeft = '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left1" title="Prev">&lt;</button>';
        //             arrowRight = '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right1" title="Next">&gt;</button>';

        //             current.$content.append(arrowLeft + arrowRight);

        //             current.$content.on('click.fb-prev touchend.fb-prev', '[data-fancybox-prev]', function(e) {
        //                 e.stopPropagation();
        //                 e.preventDefault();
        //                 alert('Go To Prev');
        //             }).on( 'click.fb-next touchend.fb-next', '[data-fancybox-next]', function(e) {
        //                 e.stopPropagation();
        //                 e.preventDefault();
        //                 alert('Go To Next');
        //             });
        //         }
        //     },
        // }); 
        setTimeout(function(){

            $('.partner').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 6,
                slidesToScroll: 2,
                // responsive: [
                //     {
                //         breakpoint: 1024,
                //         settings: {
                //             slidesToShow: 4,
                //             slidesToScroll: 2,
                //         }
                //     },
                //     {
                //         breakpoint: 600,
                //         settings: {
                //             slidesToShow: 4
                //         }
                //     },
                //     {
                //         breakpoint: 480,
                //         settings: {
                //             slidesToShow: 3
                //         }
                //     }
                // ]
            });
        }, 500)
       
    });
    //dom ready end

})(jQuery);