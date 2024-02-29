$(document).ready(function() {
    $('.mail-editor-form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '/admin/updateMail',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                console.log(res);
                if(res.status == 'success') {
                    toastr['success']('Published successfully');
                } else {
                    toastr['error']('Error occurred.', 'Error');
                }
            }
        })
    })
})
