(function($) {
    $(document).ready(function() {



        /***** MENU *******/
        $('.nav-bottom .nav-link').on('click',function(){
            var $navIndex = $(this).attr('class').split(' ')[1];
            $('.sub-menu-container '+ $navIndex).removeClass('hideMe').siblings().addClass('hideMe');
        });

        $( ".nav-bottom .nav-link" ).hover(
            function() {
                var $navIndex = $(this).attr('class').split(' ')[1];
                $('.sub-menu-main-container').find('.'+ $navIndex).removeClass('hide-from-screen');
                $(this).siblings('.menu-item-triangle').addClass('show-arrow');
            }, function() {
                var $navIndex = $(this).attr('class').split(' ')[1];
                if ($('.sub-menu-main-container')) {
                    $('.sub-menu-main-container').find('.'+ $navIndex).addClass('hide-from-screen');
                    $(this).siblings('.menu-item-triangle').removeClass('show-arrow');
                }
            }
        );

        $( ".menu-item-triangle" ).hover(
            function() {

                var $navIndex = $(this).siblings('.nav-link').attr('class').split(' ')[1];
                $('.sub-menu-main-container').find('.'+ $navIndex).removeClass('hide-from-screen');
                $(this).addClass('show-arrow');
            }
        );

        $( ".sub-menu-container" ).hover(
            function() {
                var $navIndex = $(this).attr('class').split(' ')[1];
                $(this).removeClass('hide-from-screen');
                console.log($('.nav-link.' + $navIndex));
                $('.nav-link.' + $navIndex).siblings('.menu-item-triangle').addClass('show-arrow');
            }, function() {
                var $navIndex = $(this).attr('class').split(' ')[1];
                $(this).addClass('hide-from-screen');
                $('.nav-link.' + $navIndex).siblings('.menu-item-triangle').removeClass('show-arrow');
            }
        );


        /**** CONTACT FORM ****/


        $(".open-contact-form").on('click', function (e) {
            e.preventDefault();
            $('.contact-form-container').hasClass('slide-in') ? $('.contact-form-container').removeClass('slide-in') : $('.contact-form-container').addClass('slide-in');
        });

        $(".close-contact-form").on('click', function (e) {
            e.preventDefault();
            $('.contact-form-container').removeClass('slide-in');
        });

        var distance = $('.hero-content-container').offset().top,
            $window = $(window);

        $window.scroll(function() {
            if ( $window.scrollTop() >= distance ) {
                $('.contact-form-container').addClass('sticky')
            } else {
                $('.contact-form-container').removeClass('sticky')
            }
        });



        /**** ECHELLE NUMERIQUE ********/

        $('.hover-zone').hover(function () {
           $($(this).data('target')).addClass('slide-in');
        }, function () {
            $($(this).data('target')).removeClass('slide-in');
        });



        /***** Sliders with dots *******/

        $('body').on('click', '.slider-dot', function (e) {
            var $slideNumber = $(this).attr('class').split(' ')[1] ;
            e.preventDefault();
            if($(this).hasClass('blue-dot')){
                $(this).addClass('active-dot-blue').siblings().removeClass('active-dot-blue');
            }else{
                $(this).addClass('active-dot').siblings().removeClass('active-dot');
            }
            $(this).parent().siblings('.slider-main-container').find('.' + $slideNumber).addClass('active-slide').siblings().removeClass('active-slide');
        });

        /***** Toggle content  *******/

        $('body').on('click', '.open-toggle-content', function (e) {

            e.preventDefault();

            $(this).parent().toggleClass('active-header');
            $(this).parent().siblings('.toggle-content').toggleClass('open-content');
            $(this).siblings('.triangle-blue').toggleClass('toggle-triangle');
            $(this).siblings('.toggle-content-carret').toggleClass('toggle-carret');

        });

        /** Newsletter **/
        $('#form-newsletter').on('submit', function(e) {
            e.preventDefault();

            var validate = true; // RÉMI FAIT LA VALIDATION ICI

            if (validate) {
                submit_form_newsletter($(this));
            } else {
                // SHOW ERROR MESSAGE
            }
        });

        function submit_form_newsletter($form) {
            $form.find('.form-messages').hide(250);
            $.ajax({
                url: groupect.ajaxurl,
                type: 'POST',
                dataType: 'json',
                data: {
                    action: 'newsletter',
                    'newsletter-title': $form.find('#newsletter-title').val(),
                    'newsletter-firstname': $form.find('#newsletter-firstname').val(),
                    'newsletter-lastname': $form.find('#newsletter-lastname').val(),
                    'newsletter-compagny-name': $form.find('#newsletter-compagny-name').val(),
                    'newsletter-phone': $form.find('#newsletter-phone').val(),
                    'newsletter-email': $form.find('#newsletter-email').val()
                }
            }).done(function(data) {
                if (data.status === 'success') {
                    $form.find('.newsletter-desc').hide();
                    $form.find('.contact-field-container').hide(250, function () {
                        $form.find('.newsletter-success').show(250, function() {
                            setTimeout(function () {
                                $('html, body').animate({scrollTop:$('#home-newsletter').position().top}, 'fast');
                            }, 25);
                        });
                    });
                } else {
                    $form.find('.server-error').html(data.error.message).show();
                    $form.find('.form-errors').show(250, function () {
                        setTimeout(function () {
                            $('html, body').animate({scrollTop:$('.form-errors').position().top - 30}, 'fast');
                        }, 50);
                    });
                }
            });
        }

        $('.open-contact').on('click', open_contact);

        function open_contact() {

        }

        /******* TRIGGER COUNT ANIMATION  *******/
/*    var statsContainerTop = $('.stats-number-container .line').offset().top;
        var animDone = false;
        $(window).scroll(function() {

            var scrollBottom = $(window).scrollTop() + $(window).height();


            if(scrollBottom >= statsContainerTop) {

                if(!animDone) {
                    $('.count').each(function () {
                        $(this).prop('Counter',0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function (now) {
                                $(this).text(Math.ceil(now));
                            }
                        });
                    });

                }

                animDone = true;
            }

        });*/


        /*** NAV PRODUCT **/

        $('.nav-type-container a').on('click', function (e) {
            e.preventDefault();
            $(this).parent().addClass('item-type-active').siblings().removeClass('item-type-active');
        });


        $('.nav-cat-container a').on('click', function (e) {

            e.preventDefault();

            //Filter products
            var $catProd = $(this).attr('class').split(' ')[1];
            $('.product-container').fadeOut(300);
            $('.product-container.' + $catProd).fadeIn(300);

            //Add active class to button
            if( $(this).parent().hasClass('item-cat-active') ){
                $(this).parent().removeClass('item-cat-active')
                 $('.product-container').fadeIn(300);
            }else {
                $(this).parent().addClass('item-cat-active').siblings().removeClass('item-cat-active');
            }
        });

        /*** NAV PAGINATION **/

        $('.publication-nav-item.pagination').on('click', function (e) {
            e.preventDefault();
            $(this).addClass('active-pagination').siblings().removeClass('active-pagination');
        });


        $('select').on('change', function() {
            parseInt($(this).selectedIndex) === 1 ? $(this).css('color', 'rgba(255, 255, 255, 0.6)') : $(this).css('color', 'rgba(255, 255, 255, 1)') ;
        })


        /*** BLOCK 9 - STATISTICS **/

        var data = {
            datasets: [
                {
                    data: [60, 40],
                    backgroundColor: [
                        "red",
                        "blue",
                    ],
                }]
        };

        var options = {
            cutoutPercentage: 80
        };

        var inView = false;

        // function isScrolledIntoView(elem) {
        //     var docViewTop = jQuery(window).scrollTop();
        //     var docViewBottom = docViewTop + jQuery(window).height();
        //
        //     var elemTop = jQuery(elem).offset().top;
        //     var elemBottom = elemTop + jQuery(elem).height();
        //
        //     return ((elemTop <= docViewBottom) && (elemBottom >= docViewTop));
        // }


        // if ($('.doughnut-chart').length > 0) {
        //     jQuery(window).scroll(function () {
        //         if (isScrolledIntoView('.doughnut-chart')) {
        //             if (inView) {
        //                 return;
        //             }
        //             inView = true;
        //             console.log(this);
        //             console.log('HERE IS THE DATA');
        //             console.log(data);
        //             console.log(options);
        //             new Chart(jQuery(".doughnut-chart01")[0].getContext("2d"), {type:"doughnut", data:data, options: options});
        //         } else {
        //             inView = false;
        //         }
        //     });
        // }
    });
}(jQuery));

