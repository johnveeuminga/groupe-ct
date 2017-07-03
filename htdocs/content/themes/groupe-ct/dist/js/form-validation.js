/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: FR (French; français)
 */
(function($) {
    $(document).ready(function() {

        function isElementInViewport (el) {

            //special bonus for those using jQuery
            if (typeof jQuery === "function" && el instanceof jQuery) {
                el = el[0];
            }

            var rect = el.getBoundingClientRect();

            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
                rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
            );
        }

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
                $form.find('.error-msg-container').hide();
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

        var $form_assistance = $( "#form-assistance" );

        $form_assistance.validate({
            groups: {
                required_fields: 'assistance-title assistance-firstname assistance-lastname assistance-compagny-name assistance-city assistance-email assistance-phone assistance-msg assistance-serial assistance-office'
            },
            invalidHandler: function(event, validator) {
                $('html, body').animate({scrollTop: $form_assistance.position().top}, 'fast');

                var errors = validator.numberOfInvalids();

                if (errors) {
                    $form_assistance.find('.error-msg-container').show();

                    if (validator.errorMap.hasOwnProperty('assistance-title') ||
                        validator.errorMap.hasOwnProperty("assistance-firstname") ||
                        validator.errorMap.hasOwnProperty("assistance-lastname") ||
                        validator.errorMap.hasOwnProperty("assistance-compagny-name") ||
                        validator.errorMap.hasOwnProperty("assistance-city") ||
                        validator.errorMap.hasOwnProperty("assistance-email") ||
                        validator.errorMap.hasOwnProperty("assistance-phone") ||
                        validator.errorMap.hasOwnProperty("assistance-email") ||
                        validator.errorMap.hasOwnProperty("assistance-msg") ||
                        validator.errorMap.hasOwnProperty("assistance-office") ||
                        validator.errorMap.hasOwnProperty("assistance-serial")
                    ) {
                        $form_assistance.find('.error-required').show();
                    }

                    if (validator.errorMap.hasOwnProperty("assistance-email")) {
                        $form_assistance.find('.error-email').show();
                    }
                }
            },
            errorPlacement: function(error, element) {

            },
            rules: {
                'assistance-title': {
                    required: true
                },
                'assistance-firstname': {
                    required: true
                },
                'assistance-lastname': {
                    required: true
                },
                'assistance-compagny-name': {
                    required: true
                },
                'assistance-city': {
                    required: true
                },
                'assistance-email': {
                    required: true,
                    email: true
                },
                'assistance-phone': {
                    required: true
                },
                'assistance-msg': {
                    required: true
                },
                'assistance-serial': {
                    required: true
                },
                'assistance-office': {
                    required: true
                },
                'assistance-message': {
                    required: true
                }
            },
            submitHandler: function(form) {
                $form_assistance.find('.error-msg-container').hide();
                $form_assistance.find('.assistance-field-container').hide(250, function () {
                    $form_assistance.find('.assistance-success-message').show(250);
                });

                $.ajax({
                    url: groupect.ajaxurl,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'assistance',
                        'assistance-title': $form_assistance.find('#assistance-title').val(),
                        'assistance-firstname': $form_assistance.find('#assistance-firstname').val(),
                        'assistance-lastname': $form_assistance.find('#assistance-lastname').val(),
                        'assistance-email': $form_assistance.find('#assistance-email').val(),
                        'assistance-phone': $form_assistance.find('#assistance-phone').val(),
                        'assistance-ext': $form_assistance.find('#assistance-ext').val(),
                        'assistance-compagny-name': $form_assistance.find('#assistance-compagny-name').val(),
                        'assistance-office': $form_assistance.find('#assistance-compagny-name').val(),
                        'assistance-serial': $form_assistance.find('#assistance-serial').val(),
                        'assistance-opening01': $form_assistance.find('#assistance-opening01').val(),
                        'assistance-opening02': $form_assistance.find('#assistance-opening02').val(),
                        'assistance-opening03': $form_assistance.find('#assistance-opening03').val(),
                        'assistance-opening04': $form_assistance.find('#assistance-opening04').val(),
                        'assistance-msg': $form_assistance.find('#assistance-msg').val(),
                        'assistance-file': $form_assistance.find('#file-path').attr('href'),
                        'assistance-closed': $form_assistance.find('#assistance-closed').val()
                    }
                }).done(function (data) {
                    is_submitting = false;
                    $form_assistance.find('.submit-btn > i').remove();
                    $form_assistance.find('.content-container').hide(250);
                    if (data.status === 'success') {
                        $form_assistance.find('#assistance-success').show(250, function() {
                            console.log(isElementInViewport($('#assistance-success')));
                            if (false === isElementInViewport($('#assistance-success'))) {
                                setTimeout(function () {
                                    $('html, body').animate({scrollTop:$('#assistance-success').position().top}, 'fast');
                                }, 25);
                            }
                        });
                    } else {
                        $form_assistance.find('.server-error').html(data.error.message).show();
                        $form_assistance.find('.form-errors').show(250, function () {
                            setTimeout(function () {
                                $('html, body').animate({scrollTop:$('.form-errors').position().top - 30}, 'fast');
                            }, 50);
                        });
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