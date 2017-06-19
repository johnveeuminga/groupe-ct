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
                $('.sub-menu-main-container').find('.'+ $navIndex).addClass('hide-from-screen');
                $(this).siblings('.menu-item-triangle').removeClass('show-arrow');
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



        // $( ".contact-us-link" ).hover(
        //     function() {
        //         $('.hero .contact-form-container').removeClass('hideMe');
        //     }, function() {
        //         $('.hero .contact-form-container').addClass('hideMe');
        //     }
        // );
        //
        // $('.hero .contact-form-container').hover(
        //     function() {
        //         $(this).removeClass('hideMe');
        //     }, function() {
        //         $(this).addClass('hideMe');
        //     }
        // );

        $(".sexe").select2({
            placeholder: "Mr/Me",
            allowClear: true
        });






        /**** ECHELLE NUMERIQUE ********/

        $( ".cat" ).hover(
            function() {
                var $catSection = $(this).attr('class').split(' ')[1];
                $('.benefit-bg.' + $catSection).removeClass('hideMe');
            }, function() {
                var $catSection = $(this).attr('class').split(' ')[1];
                $('.benefit-bg.' + $catSection).addClass('hideMe');
            }
        );



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



    });
}(jQuery));

