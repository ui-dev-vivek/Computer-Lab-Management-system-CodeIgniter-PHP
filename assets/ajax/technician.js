function delComplaint(id, url) {
    $.ajax({
        url: url + 'Complaint/delComplaint',
        type: 'post',
        data: { id: id },
        beforeSend: function () {
            $('.delComplaintLoader' + id).removeClass('d-none');
            $('.delConplaintBtn' + id).addClass('d-none');
            $('.delComplaintTr' + id).addClass('text-danger');
        },
        success: function (result) {

            $('.delConplainttrx' + id).addClass('d-none');

        }
    });

}

function delNotice(id, url) {
    $.ajax({
        url: url + 'Technician/delNotice',
        type: 'post',
        data: { id: id },
        beforeSend: function () {
            $('.delNoticeLoader' + id).removeClass('d-none');
            $('.delNoticeBtn' + id).addClass('d-none');
            $('.delNoticeTr' + id).addClass('text-danger');
        },
        success: function (result) {

            $('.delNoticetrx' + id).addClass('d-none');

        }
    });

}
function complaintSolved(id, url) {
    $.ajax({
        url: url + 'Complaint/complaintSolved',
        type: 'post',
        data: { id: id },
        beforeSend: function () {
            $('.solveComplaintLoader' + id).removeClass('d-none');
        },
        success: function (result) {
            $('#exampleModalLong' + id).modal('hide');
            sweetAlert("Solved.", "Complaint Marked Solved.", "success");
            $('.solvedx' + id).removeClass('text-dark');
            $('.solvedx' + id).addClass('text-success');



        }
    });

}
function getComplaint(url) {
    var sid = $('#sid').val();
    var lab = $('#lab').val();
    var status = $('#status').val();
    var byDate = $('#byDate').val();

    $.ajax({
        url: url + 'Complaint/getComplaint',
        type: 'post',
        data: { sid: sid, lab: lab, status: status, byDate: byDate },
        beforeSend: function () {

        },
        success: function (result) {
            $('.getComplaint').html(result);
        }
    });
}

function getAttendance(url) {

}


