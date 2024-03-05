const contentPanel = document.getElementsByClassName('content-panel');

for(const ele of contentPanel) {
    ele.addEventListener('click', function(e) {
        $("#titleId").val($(this).text());
        $('.content-panel').removeClass('active');
        $(this).addClass('active');
        $("#title-form").submit();
    });
}

$("#title-form").submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '/admin/getContent',
        type:'POST',
        dataType:'json',
        data: $(this).serialize(),
        success:function(res) {
            if(res) {
                let result = '';

                for(const r of res) {
                    result += '<form class="content-detail mt-55px">';
                    result += '<input type="hidden" name="contentId" value="' + r.id + '">'
                    result += '<input type="hidden" name="content" />';
                    result += '<input type="hidden" name="_token" id="csrftoken" value="">'; // CSRF token field
                    result += '<div class="editable-content" contenteditable="true">';
                    result += r.content;
                    result += '</div>';
                    result += `
                        <div class="info-button mt-35px">
                            <button id="save-but">PUBLISH</button>
                        </div>
                    `;
                    result += '</form>';
                }
                $('.content-edit-body').html(result);

                let editableContent = document.getElementsByClassName('editable-content');
                for(const element of editableContent) {
                    element.addEventListener('focus', function(e) {
                        element.classList.add('editable-focus');
                    });
                    element.addEventListener('blur', function(){
                        element.classList.remove('editable-focus');
                    });
                }

                let contentForm = document.getElementsByClassName('content-detail');
                for(const element of contentForm) {
                    $(element).submit(function(e) {
                        e.preventDefault();
                        $(element).find('input:nth-child(3)').val($("#title-form input:nth-child(1)").val());
                        $(element).find('input:nth-child(2)').val($(element).find('.editable-content').html());
                        $.ajax({
                            url: '/admin/updateContent',
                            type: 'POST',
                            dataType: 'json',
                            data: $(this).serialize(),
                            success: function(res) {
                                if(res.status == 'success') {
                                    toastr['success']('Updated successfully.', 'Success');
                                } else if(res.status == 'unauthorize') {
                                    toastr['info']('You do not have access to this function.', 'Info')
                                } else {
                                    toastr['error']('500 Error!', 'Error');
                                }
                            }
                        })
                    });
                }
            } else {
                toastr['info']('There is no result', 'Info');
            }
        }
    });
});

