$(document).ready(function() {
    $("#regForm").validate({
        rules: {
            family: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minlength: 11
            },
            address: {
                required: true
            },
            password: {
                required: true
            },
            confirm_password: {
                required: true
            }
        },
        validClass: 'is-valid',
        errorClass: 'is-invalid',
        submitHandler: function(form) {
            console.log(form);
        },
        debug: true
    });

    $("#regForm").submit(function(e) {
       e.preventDefault();


    });
});