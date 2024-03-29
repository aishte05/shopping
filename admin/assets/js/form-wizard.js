var FormWizard = function () {
    var wizardContent = $('#wizard');
    var wizardForm = $('#form');
    var initWizard = function () {
        
        wizardContent.smartWizard({
            selected: 0,
            keyNavigation: false,
            onLeaveStep: leaveAStepCallback,
            onShowStep: onShowStep,
        });
        var numberOfSteps = 0;
        animateBar();
        initValidator();
    };
    var animateBar = function (val) {
        if ((typeof val == 'undefined') || val == "") {
            val = 1;
        };
        numberOfSteps = $('.swMain > ul > li').length;
        var valueNow = Math.floor(100 / numberOfSteps * val);
        $('.step-bar').css('width', valueNow + '%');
    };
    var initValidator = function () {
        $.validator.addMethod("cardExpiry", function () {
            
            if ($("#card_expiry_mm").val() != "" && $("#card_expiry_yyyy").val() != "") {
                return true;
            } else {
                return false;
            }
        }, 'Please select a month and year');
        $.validator.setDefaults({
            errorElement: "span", 
            errorClass: 'help-block',
            errorPlacement: function (error, element) { 
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { 
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "card_expiry_mm" || element.attr("name") == "card_expiry_yyyy") {
                    error.appendTo($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    
                }
            },
            ignore: ':hidden',
            rules: {
                username: {
                    minlength: 2,
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    minlength: 6,
                    required: true
                },
                password_again: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                full_name: {
                    required: true,
                    minlength: 2,
                },
                phone: {
                    required: true
                },
                gender: {
                    required: true
                },
                address: {
                    required: true
                },
                city: {
                    required: true
                },
                country: {
                    required: true
                },
                card_name: {
                    required: true
                },
                card_number: {
                    minlength: 16,
                    maxlength: 16,
                    required: true
                },
                card_cvc: {
                    digits: true,
                    required: true,
                    minlength: 3,
                    maxlength: 4
                },
                card_expiry_yyyy: "cardExpiry",
                payment: {
                    required: true,
                    minlength: 1
                }
            },
            messages: {
                firstname: "Please specify your first name"
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                
            },
            unhighlight: function (element) { 
                $(element).closest('.form-group').removeClass('has-error');
                
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            }
        });
    };
    var displayConfirm = function () {
        $('.display-value', form).each(function () {
            var input = $('[name="' + $(this).attr("data-display") + '"]', form);
            if (input.attr("type") == "text" || input.attr("type") == "email" || input.is("textarea")) {
                $(this).html(input.val());
            } else if (input.is("select")) {
                $(this).html(input.find('option:selected').text());
            } else if (input.is(":radio") || input.is(":checkbox")) {

                $(this).html(input.filter(":checked").closest('label').text());
            } else if ($(this).attr("data-display") == 'card_expiry') {
                $(this).html($('[name="card_expiry_mm"]', form).val() + '/' + $('[name="card_expiry_yyyy"]', form).val());
            }
        });
    };
    var onShowStep = function (obj, context) {
        $(".next-step").unbind("click").click(function (e) {
            e.preventDefault();
            wizardContent.smartWizard("goForward");
        });
        $(".back-step").unbind("click").click(function (e) {
            e.preventDefault();
            wizardContent.smartWizard("goBackward");
        });
        $(".finish-step").unbind("click").click(function (e) {
            e.preventDefault();
            onFinish(obj, context);
        });
    };
    var leaveAStepCallback = function (obj, context) {
        return validateSteps(context.fromStep, context.toStep);
        
    };
    var onFinish = function (obj, context) {
        if (validateAllSteps()) {
            alert('form submit function');
            $('.anchor').children("li").last().children("a").removeClass('wait').removeClass('selected').addClass('done');
            
        }
    };
    var validateSteps = function (stepnumber, nextstep) {
        var isStepValid = false;
        if (numberOfSteps > nextstep && nextstep > stepnumber) {
            
            if (wizardForm.valid()) { 
                wizardForm.validate().focusInvalid();
                $('.anchor').children("li:nth-child(" + stepnumber + ")").children("a").removeClass('wait');
                
                animateBar(nextstep);
                isStepValid = true;
                return true;
            };
        } else if (nextstep < stepnumber) {
            $('.anchor').children("li:nth-child(" + stepnumber + ")").children("a").addClass('wait');
            animateBar(nextstep);
            return true;
        } else {
            $('.anchor').children("li:nth-child(" + stepnumber + ")").children("a").removeClass('wait');
            displayConfirm();
            animateBar(nextstep);
            return true;
        };
    };
    var validateAllSteps = function () {
        var isStepValid = true;
        
        return isStepValid;
    };
    return {
        init: function () {
            initWizard();
        }
    };
}();