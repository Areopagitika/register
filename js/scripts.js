$(document).ready(function() {

    $.validator.addMethod("checkMask", function(value, element) {
        return /^\+7\d{10}/.test(value);
    });

    $("#regForm").validate({
        rules: {
            name: {
                required: true
            },
            family: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                maxlength: 12,
                checkMask: true
            },
            address: {
                required: true
            },
            password: {
                required: true,
                minlength: 8,
            },
            confirm_password: {
                required: true,
                equalTo: "#regInputPassword"
            }
        },
        messages: {
            name: 'Поле Имя обязательно для заполнения',
            family: 'Поле Фамилия обязательно для заполнения',
            email: {
                required: 'Поле E-mail не заполнено',
                email: 'Необходимо ввести e-mail в формате name@domain.com'
            },
            phone: {
                required: 'Поле Телефон обязательно для заполнения',
                maxlength: 'Номер телефона должен достоят из 12 символов',
                checkMask: 'Введите телефон в нужном формате'
            },
            address: 'Поле Адрес обязательно для заполнения',
            password: {
                required: 'Поле Пароль обязательно для заполнения',
                minlength: 'Пароль должен содержать не менее 8 символов'
            },
            confirm_password: {
                required: 'Поле для подтверждения пароля не заполнено',
                equalTo: 'Пароль не совпадает'
            }

        },
        validClass: 'is-valid',
        errorClass: 'is-invalid',
        errorPlacement: function(error, element) {
            error.appendTo(element.parent().find(".invalid-feedback"));
        },
        submitHandler: function(form) {
            $.ajax({
                url: 'users/reg',
                method: 'post',
                data: $(form).serialize(),
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    if(response.error) {
                        var fields = response.fields;
                        for (key in fields) {
                            var formElement = $(form).find('[name="' + key + '"]'),
                                message = '';
                            formElement.addClass("is-invalid");
                            for (var i = 0; i < fields[key].length; i++) {
                                message = message + fields[key][i] + "<br>";
                            }
                            formElement.parent().find('.invalid-feedback').html(message);
                            console.log(key + "-" + fields[key]);
                            console.log(fields[key].length);
                        }
                        console.log($(form));
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            });
        },
        invalidHandler: function() {
            console.log("Invalid");
        }
    });


    $("#authForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: 'Поле E-mail не заполнено',
                email: 'Необходимо ввести e-mail в формате name@domain.com'
            },
            password: 'Поле Пароль обязательно для заполнения'
        },
        validClass: 'is-valid',
        errorClass: 'is-invalid',
        submitHandler: function(form) {
            console.log(form);
        },
        debug: true
    });

});