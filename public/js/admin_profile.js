$(document).ready(function () {
    $('#profile-edit-form').submit(function (e) {
        e.preventDefault();
        for (let i = 1; i <= 9; i++) {
            if (!$("#data" + i).val()) {
                toastr['error']('Please input or select the ' + $("#data" + i).attr('text') + ' field.', 'Error');
                return;
            }
        }
        if (!validateEmail($('#data5').val())) {
            toastr['error']('Invalid Email address');
            return;
        }
        $.ajax({
            url: '/admin/profile',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            success: function (res) {
                if(res.status == 'success') {
                    toastr['success']('Updated successfully', 'Success');
                    $("#data10").val('');
                } else if(res.status == 'error' && res.msg == 'duplicateUsername') {
                    toastr['info']('Already exist username', 'Info');
                } else {
                    console.log(res);
                    toastr['error']('500 Error!', 'Error');
                }
            },
            error: function (xhr, status, error) {
                console.log(error);
                toastr['error']('500 Error!', 'Error');
            }
        });
    });
});

const phoneSelDom = document.getElementById('phone-code-select');
drawSelectForm(phoneSelDom)

const countrySelDom = document.getElementById('country-select');
drawSelectForm(countrySelDom);
