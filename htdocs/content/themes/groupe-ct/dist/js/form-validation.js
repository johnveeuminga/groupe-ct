/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: FR (French; français)
 */
(function($) {
    $(document).ready(function() {


        /**** JQUERY VALIDATION *****/

        $( "#contact-us-form" ).validate({

            rules: {
                first_name: {
                    required: true,
                },
                name: {
                    required: true,
                },
                town: {
                    required: true,
                },
                compagny_name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                extension: {
                    required: true,
                },
                msg: {
                    required: true,
                }
            },
            messages: {},
            errorLabelContainer: '.error-msg-container',

            highlight: function(element) {
                $(element).addClass("field-error");
            },
            unhighlight: function(element) {
                $(element).removeClass("field-error");
            },
        });



    });
}(jQuery));