const contentPanel = document.getElementsByClassName('content-panel');

for(const ele of contentPanel) {
    ele.addEventListener('click', function(e) {
        const contentId = $(this).attr('contentId');
        if(contentId) {
            $("#contentId").val(contentId);
            $("#title-form").submit();
        }

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
                    result += '<div class="editableContent" contenteditable="true">';
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
            } else {
                toastr['info']('There is no result', 'Info');
            }
        }
    });
});
