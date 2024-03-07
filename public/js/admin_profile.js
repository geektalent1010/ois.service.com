$(document).ready(function () {
    $('#profile-edit-form').submit(function (e) {
        e.preventDefault();
        for (let i = 1; i <= 8; i++) {
            if (!$("#data" + i).val()) {
                customAlert('We are so sorry', 'Please input or select the ' + $("#data" + i).attr('text') + ' field.', 'error');
                return;
            }
        }
        if (!validateEmail($('#data5').val())) {
            customAlert('We are so sorry', 'Invalid Email address', 'error');
            return;
        }
        if($("#data6").val() == 0 && !$("#data6").val()) {
            customAlert('We are so sorry', 'Please select the center', 'error');
            return;
        }
        let formData = new FormData(this);
        $.ajax({
            url: '/admin/profile',
            type: 'POST',
            dataType: 'json',
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
                if(res.status == 'success') {
                    customAlert('Success', 'Updated successfully', 'success');
                    $("#data10").val('');
                } else if(res.status == 'error' && res.msg == 'duplicateUsername') {
                    customAlert('We are so sorry', 'Already exist username', 'error');
                } else {
                    customAlert('We are so sorry', '500 Error!', 'error');
                }
            },
            error: function (xhr, status, error) {
                customAlert('We are so sorry', '500 Error!', 'error');
            }
        });
    });
});

const phoneSelDom = document.getElementById('phone-code-select');
drawSelectForm(phoneSelDom);

const centerSelDom = document.getElementById('center-select');
drawSelectForm(centerSelDom);
