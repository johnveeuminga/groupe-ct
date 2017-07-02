(function($) {
    $(document).ready(function() {

        // Scroll to content if hashtag in url
        var $elem = $('#_' + window.location.hash.replace('#', ''));
        if($elem.position()) {
            $('html, body').animate({scrollTop: $elem.position().top}, 'slow');
        }

        $('.hero-arrow').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: $('main').position().top - 120}, 'slow');
        });

        $('.scroll-to').on('click', function (e) {
            e.preventDefault();
            var target = $(this).data().target;
            if ($('.menu-mobile-active').length > 0) {
                $('.close-menu-btn').trigger('click');
                $('html, body').animate({scrollTop: $(target).position().top - 15}, 'slow');
            } else {
                $('html, body').animate({scrollTop: $(target).position().top - 15}, 'slow');
            }
        });



        /***** MENU MOBILE **/

        $('#menu-btn').on('click', function () {
            $('.main-nav-mobile-container').addClass('menu-mobile-active');
            $('#global-container').addClass('move-global');
            $('body').addClass('body-no-scroll');
        });


        $('.close-menu-btn').on('click', function () {
            $('.main-nav-mobile-container').removeClass('menu-mobile-active');
            $('#global-container').removeClass('move-global');
            $('body').removeClass('body-no-scroll');
        });

        // TOGGLE SUB MENU FIRST LEVEL
        $('#menu-mobile .sub-menu-trigger').on('click', function (e) {
            e.preventDefault();
            $(this).siblings('.sub-menu-container-mobile').toggleClass('open-sub-menu-mobile');
            $(this).toggleClass('hideMe').siblings().removeClass('hideMe');

        });

        // TOGGLE SUB MENU SECOND LEVEL
        $('.sub-sub-menu-trigger').on('click', function (e) {
            e.preventDefault();
            $(this).parent().siblings('.nav-link-container').toggleClass('open-sub-menu-mobile');
        });


        /***** MENU DESKTOP *******/
        $('.nav-bottom .nav-link').on('click',function(){
            var $navIndex = $(this).attr('class').split(' ')[1];
            $('.sub-menu-container '+ $navIndex).removeClass('hideMe').siblings().addClass('hideMe');
        });

        $( ".nav-content-container.desktop .nav-bottom .nav-link" ).hover(
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

        $('.slider-hero-dot').on('click', function (e) {
            e.preventDefault();
            console.log('this');
            $('.active-hero-slide').removeClass('active-hero-slide');
            $(this).addClass('active-hero-slide');
            var slide = $(this).data().target;
            $('.active-slide').removeClass('active-slide');
            console.log($('.hero-content[data-hero-slide="' + slide  +'"]').addClass('active-slide'));

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
        $('.nav-cat-container a:not(".publication-category")').on('click', function (e) {
            e.preventDefault();
            var target = $(this).data().target;
            $('.product-container').fadeOut(300);
            $('.' + target).fadeIn(300);

            if( $(this).parent().hasClass('item-cat-active') ){
                $(this).parent().removeClass('item-cat-active')
                 $('.product-container').fadeIn(300);
            }else {
                $(this).parent().addClass('item-cat-active').siblings().removeClass('item-cat-active');
            }
        });

        $('select').on('change', function() {
            parseInt($(this).selectedIndex) === 1 ? $(this).css('color', 'rgba(255, 255, 255, 0.6)') : $(this).css('color', 'rgba(255, 255, 255, 1)') ;
        });

        $('select.select-support').on('change', function() {
           parseInt($(this).selectedIndex) === 1 ? $(this).css('color', 'rgba(34, 34, 34, 0.6)') : $(this).css('color', 'rgba(34, 34, 34, 1)') ;
        });


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
        //
        // $('#form-assistance').on('submit', function() {
        //     $.ajax({
        //         url: groupect.ajaxurl,
        //         type: 'POST',
        //         dataType: 'json',
        //         data: {
        //             action: 'assistance',
        //             'assistance-title': $form.find('#assistance-title').val(),
        //             'assistance-firstname': $form.find('#newsletter-firstname').val(),
        //             'assistance-lastname': $form.find('#newsletter-lastname').val(),
        //             'assistance-email-name': $form.find('#assistance-email').val(),
        //             'assistance-phone': $form.find('#assistance-phone').val(),
        //             'assistance-ext': $form.find('#assistance-ext').val(),
        //             'assistance-compagny-name': $form.find('#assistance-compagny-name').val()
        //             'assistance-office': $form.find('#assistance-compagny-name').val(),
        //             'assistance-serial': $form.find('#assistance-serial').val(),
        //             'assistance-opening01': $form.find('#assistance-opening01').val(),
        //             'assistance-opening02': $form.find('#assistance-opening02').val(),
        //             'assistance-opening03': $form.find('#assistance-opening03').val(),
        //             'assistance-opening04': $form.find('#assistance-opening04').val(),
        //             'assistance-closed': $form.find('#assistance-closed').val()
        //         }
        //     }).done(function (data) {
        //         if (data.status === 'success') {
        //             // $form.find('.newsletter-desc').hide();
        //             // $form.find('.contact-field-container').hide(250, function () {
        //             //     $form.find('.newsletter-success').show(250, function() {
        //             //         setTimeout(function () {
        //             //             $('html, body').animate({scrollTop:$('#home-newsletter').position().top}, 'fast');
        //             //         }, 25);
        //             //     });
        //             // });
        //         } else {
        //             // $form.find('.server-error').html(data.error.message).show();
        //             // $form.find('.form-errors').show(250, function () {
        //             //     setTimeout(function () {
        //             //         $('html, body').animate({scrollTop:$('.form-errors').position().top - 30}, 'fast');
        //             //     }, 50);
        //             // });
        //         }
        //     });
        // });
    });
}(jQuery));

