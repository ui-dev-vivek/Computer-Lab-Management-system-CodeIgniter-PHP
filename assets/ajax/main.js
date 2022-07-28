function attendanceWork() {
    $('.workBach').addClass('d-none')
    $('.complaintWork').addClass('d-none')
    $('.searchWork').addClass('d-none')
    $('.attendanceWork').removeClass('d-none')
    $(".attendanceWork").fadeIn("slow");
}
function complaintWork() {
    $('.workBach').addClass('d-none')
    $('.searchWork').addClass('d-none')
    $('.attendanceWork').addClass('d-none')
    $('.complaintWork').removeClass('d-none')
}
function searchWork() {
    $('.workBach').addClass('d-none')
    $('.complaintWork').addClass('d-none')
    $('.attendanceWork').addClass('d-none')
    $('.searchWork').removeClass('d-none')
}

function submitAttendance() {
    var sid = $('#sid').val();
    var lab = $('#lab').val();
    var system = $('#system').val();
    var inTime = $('#inTime').val();
    var outTime = $('#outTime').val();
    var password = $('#password').val();
    if (sid != "" && password != '') {
        $.ajax({
            url: 'Attendance/submitAttendance',
            type: 'post',
            data: {
                sid: sid, password: password, lab: lab,
                system: system, inTime: inTime, outTime: outTime
            },
            beforeSend: function () {
                $('.sumbitAttensanceLoader').removeClass('d-none');
                $('.submitattendancebtn').addClass('d-none');

            },
            success: function (result) {
                $('.sumbitAttensanceLoader').addClass('d-none');
                $('.submitattendancebtn').removeClass('d-none');
                $('.submitAttendanceMassage').html(result);
                getAttendance();
                if (result === '1') {
                    $('#fillAttendence').modal('hide');
                    sweetAlert("Submitted.", "Attendance Added Successfuly", "success");
                    $('#sid').val('');
                    $('#lab').val('');
                    $('#system').val('');
                    $('#inTime').val('');
                    $('#outTime').val('');
                    $('#password').val('');
                    $('.submitAttendanceMassage').html('');
                }
            }
        });
    } else {
        $('.submitAttendanceMassage').html('Fill Student Id And Password.');

    }

}


function submitComplaint() {
    var sid = $('#sidx').val();
    var lab = $('#labx').val();
    var system = $('#systemx').val();
    var cType = $('#cType').val();
    var descx = $('#descx').val();
    var password = $('#passwordx').val();
    if (sid != "" && password != '') {
        $.ajax({
            url: 'Complaint/submitComplaint',
            type: 'post',
            data: {
                sid: sid, password: password, lab: lab,
                system: system, cType: cType, descx: descx
            },
            beforeSend: function () {
                $('.sumbitComplaintLoader').removeClass('d-none');
                $('.submitComplaintbtn').addClass('d-none');

            },
            success: function (result) {
                $('.sumbitComplaintLoader').addClass('d-none');
                $('.submitComplaintbtn').removeClass('d-none');
                $('.submitComplaintMassage').html(result);
                getComplaint();
                if (result === '1') {
                    $('#complaint').modal('hide');
                    sweetAlert("Submitted.", "Complaint Added Successfuly", "success");
                    $('#sidx').val("");
                    $('#labx').val("");
                    $('#systemx').val("");
                    $('#cType').val("");
                    $('#descx').val("");
                    $('#passwordx').val("");
                    $('.submitComplaintMassage').html('');
                }
            }
        });
    } else {
        $('.submitComplaintMassage').html('Fill Student Id And Password.');

    }

}


function studentsRegistration() {
    var name = $('#name').val();
    var cid = $('#cid').val();
    var branch = $('#branch').val();
    var year = $('#year').val();
    var email = $('#email').val();
    var pass = $('#pass').val();
    var rpass = $('#rpass').val();
    if (pass == rpass) {
        $.ajax({
            url: 'Registration',
            type: 'post',
            data: {
                name: name, cid: cid, branch: branch,
                year: year, email: email, pass: pass
            },
            beforeSend: function () {
                $('.stuRegLoader').removeClass('d-none');
                $('.stuRegBtn').addClass('d-none');
            },
            success: function (result) {
                $('.stuRegLoader').addClass('d-none');
                $('.stuRegBtn').removeClass('d-none');
                $('#studentsRegMassage').html(result);
                if (result === '1') {
                    sweetAlert("Success.", "Registration Success. Go To Login'", "success");
                    $('#sidx').val("");
                    $('#labx').val("");
                    $('#systemx').val("");
                    $('#cType').val("");
                    $('#descx').val("");
                    $('#passwordx').val("");
                    $('.submitComplaintMassage').html('');
                }
            }
        });
    } else {
        $('#studentsRegMassage').html("Password Not Matched!.");
        $('#rpass').val('');
        $('#pass').val('');

    }
}