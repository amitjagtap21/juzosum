jQuery(document).ready(function ($) {

    $('.sp-testimonial-free-section').each(function (index) {

        var tfree_custom_slider_id = $(this).attr('id');
        var tfree_config = $.parseJSON($(this).closest('.sp-testimonial-free-wrapper').find('.sp-tfree-config').text());


        if ( tfree_custom_slider_id != '') {

            jQuery('#' + tfree_custom_slider_id).slick({
                pauseOnFocus: false,
                infinite: (tfree_config.infinite_loop) == "true" ? true : false,
                slidesToShow: parseInt(tfree_config.number_of_column),
                slidesToScroll: 1,
                autoplay: (tfree_config.auto_play) == "true" ? true : false,
                autoplaySpeed: parseInt(tfree_config.auto_play_speed),
                speed: parseInt(tfree_config.scroll_speed),
                pauseOnHover: (tfree_config.pause_on_hover) == "true" ? true : false,
                swipe: (tfree_config.swipe_on) == "true" ? true : false,
                draggable: (tfree_config.mouse_draggable) == "true" ? true : false,
                arrows: (tfree_config.navigation) == "true" ? true : false,
                prevArrow: "<div class='slick-prev'><i class='fa fa-angle-left'></i></div>",
                nextArrow: "<div class='slick-next'><i class='fa fa-angle-right'></i></div>",
                dots: (tfree_config.pagination) == "true" ? true : false,
                rtl: (tfree_config.rtl_mode) == "true" ? true : false,
                responsive: [
                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: parseInt(tfree_config.number_of_column_desktop)
                        }
                    },
                    {
                        breakpoint: 980,
                        settings: {
                            slidesToShow: parseInt(tfree_config.number_of_column_small_desktop)
                        }
                    },
                    {
                        breakpoint: 736,
                        settings: {
                            slidesToShow: parseInt(tfree_config.number_of_column_tablet)
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: parseInt(tfree_config.number_of_column_mobile)
                        }
                    }
                ]
            });
        }
    });
});