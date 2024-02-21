$(document).ready(function () {
    let accessDetailDoms = document.querySelectorAll(".access-detail");
    accessDetailDoms.forEach(function (element) {
        element.addEventListener("click", function (event) {
            element.classList.toggle("active");
        });
    });

    $("#create-user-button").click(function() {
        $(".button-part").hide();
        $("#create-user-form").removeClass('d-none');
    });

    $("#create-user-form").submit(function(e) {
        e.preventDefault();
        for (let i = 1 ; i <= 10 ; i ++) {
            if (!$("#data" + i).val() || $("#data" + i).val() == 0) {
                toastr['error']('Please input or select the ' + $("#data" + i).attr('text') + ' field.', 'Error');
                return;
            }
        }
        if (!validateEmail($('#data5').val())) {
            toastr['error']('Invalid Email address');
            return;
        }
        $.ajax({
            url: '/admin/createAdmin',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            success: function (res) {
                if(res.status == 'success') {
                    toastr['success']('Updated successfully', 'Success');
                } else if(res.status == 'duplicateEmail') {
                    toastr['info']('Already exist email', 'Info');
                } else if(res.status == 'duplicateUsername') {
                    toastr['info']('Already exist username', 'Info');
                } else {
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
