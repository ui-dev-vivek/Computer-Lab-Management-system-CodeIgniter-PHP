
function getComplaint(url) {

    $.ajax({
        url: 'students/getComplaint',
        type: 'post',
        success: function (result) {
            $('#getComplaint').html(result);
        }
    });
}
function getAttendance(url) {

    $.ajax({
        url: 'students/getAttendance',
        type: 'post',
        success: function (result) {
            $('#getAttendance').html(result);
        }
    });
}

function delComplaint(id, url) {
    $.ajax({
        url: url + 'students/delComplaint',
        type: 'post',
        data: { id: id },
        beforeSend: function () {
            $('.delComplaintLoader' + id).removeClass('d-none');
            $('.delConplaintBtn' + id).addClass('d-none');
            $('.delComplaintTr' + id).addClass('text-danger');
        },
        success: function (result) {
            getComplaint();

        }
    });

}