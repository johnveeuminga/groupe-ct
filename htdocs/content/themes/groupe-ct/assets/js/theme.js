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
                $('.s'+ $navIndex).removeClass('hideMe');
                $(this).parent().addClass('show-arrow');
            }, function() {
               var $navIndex = $(this).attr('class').split(' ')[1];
                $('.s'+ $navIndex).addClass('hideMe');
                $(this).parent().removeClass('show-arrow');
            }
        );

        $( ".sub-menu-container" ).hover(
            function() {
                //var $navIndex = $(this).attr('class').split(' ')[1];
                $(this).removeClass('hideMe');
            }, function() {
               // var $navIndex = $(this).attr('class').split(' ')[1];
                $(this).addClass('hideMe');
            }
        );


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

      /*  $( ".contact-form-container" ).hover(
            function() {

                $(this).removeClass('hideMe');
            }, function() {

                $(this).addClass('hideMe');
            }
        );

        */

        $('.contact-us-link').on('click', function () {
            $(this).siblings('.contact-form-container').toggleClass('hideMe');
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






    });
}(jQuery));

