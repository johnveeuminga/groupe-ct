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

        /***** TESTIMONIALS *******/

        $('body').on('click', '.slider-dot', function (e) {
            var $slideNumber = $(this).attr('class').split(' ')[1] ;
            e.preventDefault();
            $(this).addClass('active-dot').siblings().removeClass('active-dot');
            $('.slider-main-container .' + $slideNumber).addClass('active-slide').siblings().removeClass('active-slide');
        });


    });
}(jQuery));

