
function studentsLogin() {
    var sid = $('#sid').val();
    var password = $('#password').val();
    if (sid != "" && password != '') {
        $.ajax({
            url: 'studentsloginAuth',
            type: 'post',
            data: {
                sid: sid, password: password
            },
            beforeSend: function () {
                $('.stuLoginLoader').removeClass('d-none');
                $('.stuLoginBtn').addClass('d-none');

            },
            success: function (result) {
                // $('.stuLoginLoader').addClass('d-none');
                // $('.stuLoginBtn').removeClass('d-none');
                // $('.loginSuccess').html(result);
                if (result == '1') {
                    window.location = "../Students";
                } else {
                    $('#studentsloginMassage').html('Incorrect Student Id And Password.');

                }
            }
        });
    } else {
        $('#studentsloginMassage').html('Fill Student Id And Password.');
    }

}

function adminLogin() {
    var email = $('#email').val();
    var password = $('#password').val();
    if (email != "" && password != '') {
        $.ajax({
            url: 'adminloginAuth',
            type: 'post',
            data: {
                email: email, password: password
            },
            beforeSend: function () {
                $('.adminLoginLoader').removeClass('d-none');
                $('.adminLoginBtn').addClass('d-none');

            },
            success: function (result) {
                // $('.adminLoginLoader').addClass('d-none');
                // $('.adminLoginBtn').removeClass('d-none');
                // $('.adminLoginSuccess').html(result);
                if (result == '1') {
                    window.location = "../Admin";
                } else {
                    $('#adminloginMassage').html('Incorrect Email And Password.');
                }
            }
        });
    } else {
        $('#adminloginMassage').html('Fill Email And Password.');
    }

}
function techLogin() {
    var email = $('#email').val();
    var password = $('#password').val();
    if (email != "" && password != '') {
        $.ajax({
            url: 'techloginAuth',
            type: 'post',
            data: {
                email: email, password: password
            },
            beforeSend: function () {
                $('.techLoginLoader').removeClass('d-none');
                $('.techLoginBtn').addClass('d-none');

            },
            success: function (result) {
                // $('.techLoginLoader').addClass('d-none');
                // $('.techLoginBtn').removeClass('d-none');
                // $('.techLoginSuccess').html(result);
                if (result == '1') {
                    window.location = "../Technician";
                } else {
                    $('#techLoginMassage').html('Incorrect Email And Password.');
                }
            }
        });
    } else {
        $('#techLoginMassage').html('Fill Student Id And Password.');
    }

}
