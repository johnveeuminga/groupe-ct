(function($) {
    $(document).ready(function() {

        // $window =  $(window);


        /***** MENU *******/
        $('.nav-bottom .nav-link').on('click',function(){
            var $navIndex = $(this).attr('class').split(' ')[1];
            console.log($navIndex);

            //$('.s'+ $navIndex).toggleClass('hideMe');
            $('.s'+ $navIndex).removeClass('hideMe').siblings().addClass('hideMe');

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
            $(this).parent().siblings('.content').toggleClass('open-content');
            $(this).siblings('.triangle-blue').toggleClass('toggle-triangle');
            $(this).siblings('.toggle-content-carret').toggleClass('toggle-carret');

        });


    });
}(jQuery));

