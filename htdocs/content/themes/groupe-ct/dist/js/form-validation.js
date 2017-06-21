/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: FR (French; français)
 */
(function($) {
    $(document).ready(function() {


        /**** JQUERY VALIDATION *****/
        var $form = $( "#contact-us-form" );

        $form.validate({
            groups: {
                required_fields: 'contact-title contact-firstname contact-lastname contact-compagny-name contact-city contact-email contact-phone contact-message'
            },
            invalidHandler: function(event, validator) {
                $('html, body').animate({scrollTop:$('#contact-us-form').position().top}, 'fast');

                var errors = validator.numberOfInvalids();

                if (errors) {
                    $form.find('.error-msg-container').show();

                    if (validator.errorMap.hasOwnProperty('contact-title') ||
                        validator.errorMap.hasOwnProperty("contact-firstname") ||
                        validator.errorMap.hasOwnProperty("contact-lastname") ||
                        validator.errorMap.hasOwnProperty("contact-compagny-name") ||
                        validator.errorMap.hasOwnProperty("contact-contact-city") ||
                        validator.errorMap.hasOwnProperty("contact-email") ||
                        validator.errorMap.hasOwnProperty("contact-phone") ||
                        validator.errorMap.hasOwnProperty("contact-message")
                    ) {
                        $form.find('.error-required').show();
                    }

                    if (validator.errorMap.hasOwnProperty("contact-email")) {
                        $form.find('.error-email').show();
                    }
                }
            },
            errorPlacement: function(error, element) {

            },
            rules: {
                'contact-title': {
                    required: true
                },
                'contact-firstname': {
                    required: true
                },
                'contact-lastname': {
                    required: true
                },
                'contact-compagny-name': {
                    required: true
                },
                'contact-city': {
                    required: true
                },
                'contact-email': {
                    required: true,
                    email: true
                },
                'contact-phone': {
                    required: true
                },
                'contact-message': {
                    required: true
                }
            },
            submitHandler: function(form) {
                $form.find('.error-msg-container').show();
                $form.find('.contact-field-container').hide(250, function () {
                    $form.find('.contact-success-message').show(250);
                });

                $.ajax({
                    url: groupect.ajaxurl,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'contact',
                        'contact-title': $form.find('#contact-title').val(),
                        'contact-firstname': $form.find('#contact-firstname').val(),
                        'contact-lastname': $form.find('#contact-lastname').val(),
                        'contact-compagny-name': $form.find('#contact-compagny-name').val(),
                        'contact-city': $form.find('#contact-city').val(),
                        'contact-departement': $form.find('#contact-departement').val(),
                        'contact-phone': $form.find('#contact-phone').val(),
                        'contact-ext': $form.find('#contact-ext').val(),
                        'contact-email': $form.find('#contact-email').val(),
                        'contact-message': $form.find('#contact-message').val(),
                        'contact-accept': $form.find('#contact-accept').val()
                    }
                });

                return false;
            },

            highlight: function(element) {
                $(element).addClass("field-error");
            },
            unhighlight: function(element) {
                $(element).removeClass("field-error");
            }
        });




    });
}(jQuery));