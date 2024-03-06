$(document).ready(function() {
    $('#save-but').click(function(e) {
        const datas = $('.mail-text-para span');
        const sendData = [];
        for(const data of datas) {
            const obj = {};
            obj.id = $(data).attr('contentId');
            obj.content = $(data).text();
            sendData.push(obj);
        }
        const formData = new FormData();
        formData.append('data', JSON.stringify(sendData));
        formData.append('_token', $('.content-edit-body input:first-child').val());
        $.ajax({
            url: '/admin/updateMail',
            type: 'POST',
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(res) {
                console.log(res);
                if(res.status == 'success') {
                    customAlert('Success', 'Updated successfully.', 'success');
                } else {
                    customAlert('We are so sorry', 'Error occurred.', 'error');
                }
            }
        })
    })
})
