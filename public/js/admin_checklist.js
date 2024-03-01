$(document).ready(function () {
    $("#office-select-form").click(function () {
        $("#office-select-form").submit();
    });

    $("#office-select-form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: '/admin/getChecklist',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                if(res.status == 'unauthorize') {
                    toastr['info']('You do not have access to this page.', 'Info');
                    $('.list-group').html('');
                    $('.price-button-section').addClass('d-none');
                    return;
                }
                let html = '';
                html += '';
                for(const element of res) {
                    const title = element.title;
                    const description = element.description;
                    let descriptionHtml = '';
                    for(const ele of description.split('<br/>')) {
                        if(!ele) continue;
                        if(ele.includes("div")) {
                            descriptionHtml += ele;
                        } else {
                            descriptionHtml += '<div>' + ele + '</div>'
                        }
                    }
                    html += '<form class="edit-form mt-35px" id="edit-form' + element.id + '">';
                    html += '<input type="hidden" name="_token" class="token" />';
                    html += '<input type="hidden" class="edit-id" name="edit-id" value="' + element.id + '">';
                    html += '<div class="card-custom">';
                    html += '<div class="card-header-custom editable" contenteditable="true">' + title + '</div>';
                    html += '<div class="card-body-section">'
                    html += '<div class="card-body-custom collapse show editable" contenteditable="true">' + descriptionHtml + '</div>';
                    html += '<div class="price-button-section info-button mt-19px"><button>PUBLISH CHECKLIST</button></div>';
                    html += '<div class="price-button-section info-button mt-19px"><button type="button" class="delete-but" officeId="' + element.id + '">DELETE CHECKLIST</button></div>';
                    html += '</div>'
                    html += '</div>';
                    html += '</form>';
                }

                $('.editor-panel').removeClass('show');
                $('.list-group').html(html);
                $(".card-body-custom > div").attr("tabindex", 0);
                $('.edit-form input.token').val($('#office-select-form input:first-child()').val());
                $('.price-button-section').removeClass('d-none');
            }
        });
    });


    $(document).on('focus', '.card-body-custom div', function() {
        $(".editor-panel").addClass("show");
    })

    $(document).on("focus", ".card-body-custom div", function () {
        setTimeout(() => {
            $(".card-body-custom div").removeClass("focused");
            $(this).addClass("focused");
            $('.editor-but').removeClass('focused');

            if($(this).hasClass('custom-sub-title')) {
                $('.subtitle-but').addClass('focused');
            }
            if($(this).hasClass('custom-content')) {
                $('.content-but').addClass('focused');
            }
            if($(this).hasClass('mt-10px')) {
                $('.mt10-but').addClass('focused');
            }
            if($(this).hasClass('mt-20px')) {
                $('.mt20-but').addClass('focused');
            }
            if($(this).hasClass('mt-30px')) {
                $('.mt30-but').addClass('focused');
            }
            if($(this).hasClass('mb-10px')) {
                $('.mb10-but').addClass('focused');
            }
            if($(this).hasClass('mb-20px')) {
                $('.mb20-but').addClass('focused');
            }
            if($(this).hasClass('mb-30px')) {
                $('.mb30-but').addClass('focused');
            }
        }, 300);
    });

    $(document).on('blur', ".card-body-custom div", function() {
        $('.editor-but').removeClass('focused');
    })

    $(".subtitle-but").click(function () {
        let focusedDiv = $(".card-body-custom div.focused");
        if (focusedDiv.length) {
            focusedDiv.addClass("custom-sub-title");
            focusedDiv.removeClass("custom-content");
            $(this).addClass('focused');
            $('.content-but').removeClass('focused');
        }
    });

    $(".content-but").click(function () {
        let focusedDiv = $(".card-body-custom div.focused");
        if (focusedDiv.length) {
            focusedDiv.addClass("custom-content");
            focusedDiv.removeClass("custom-sub-title");
            $(this).addClass('focused');
            $('.subtitle-but').removeClass('focused');
        }
    });

    $('.mt10-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            focusDiv.addClass('mt-10px');
            focusDiv.removeClass('mt-20px');
            focusDiv.removeClass('mt-30px');
            $(this).addClass('focused');
            $('.mt20-but').removeClass('focused');
            $('.mt30-but').removeClass('focused');
        }
    })

    $('.mt20-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            focusDiv.addClass('mt-20px');
            focusDiv.removeClass('mt-10px');
            focusDiv.removeClass('mt-30px');
            $(this).addClass('focused');
            $('.mt10-but').removeClass('focused');
            $('.mt30-but').removeClass('focused');
        }
    })

    $('.mt30-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            focusDiv.addClass('mt-30px');
            focusDiv.removeClass('mt-10px');
            focusDiv.removeClass('mt-20px');
            $(this).addClass('focused');
            $('.mt20-but').removeClass('focused');
            $('.mt10-but').removeClass('focused');
        }
    });


    $('.mb10-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            focusDiv.addClass('mb-10px');
            focusDiv.removeClass('mb-20px');
            focusDiv.removeClass('mb-30px');
            $(this).addClass('focused');
            $('.mb20-but').removeClass('focused');
            $('.mb30-but').removeClass('focused');
        }
    })

    $('.mb20-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            focusDiv.addClass('mb-20px');
            focusDiv.removeClass('mb-10px');
            focusDiv.removeClass('mb-30px');
            $(this).addClass('focused');
            $('.mb10-but').removeClass('focused');
            $('.mb30-but').removeClass('focused');
        }
    })

    $('.mb30-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            focusDiv.addClass('mb-30px');
            focusDiv.removeClass('mb-10px');
            focusDiv.removeClass('mb-20px');
            $(this).addClass('focused');
            $('.mb20-but').removeClass('focused');
            $('.mb10-but').removeClass('focused');
        }
    });


    $('.reset-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            focusDiv.removeClass('custom-sub-title');
            focusDiv.removeClass('custom-content');
            focusDiv.removeClass('mt-10px');
            focusDiv.removeClass('mt-20px');
            focusDiv.removeClass('mt-30px');
            focusDiv.removeClass('mb-10px');
            focusDiv.removeClass('mb-20px');
            focusDiv.removeClass('mb-30px');
            $('.editor-but').removeClass('focused');
        }
    });

    $('.add-table-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            let newElement = '';
            newElement += `
                <table class="custom-edit-table">
                    <thead>
                        <tr>
                            <th>
                                <div tabindex="0">No</div>
                            </th>
                            <th>
                                <div tabindex="0">Requirements</div>
                            </th>
                            <th>
                                <div tabindex="0">Description</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div tabindex="0">[no]</div>
                            </td>
                            <td>
                                <div tabindex="0">[requirements]</div>
                            </td>
                            <td>
                                <div tabindex="0">[description]</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            `;
            $(focusDiv).after(newElement);
        }
    });

    $('.add-row-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            let table = focusDiv.closest('table');
            let len = $(table).find('thead tr th').length;
            let tr = '<tr>';
            while(len) {
                tr += '<td><div tabindex="0">[New]</div></td>';
                len --;
            }
            tr += '</tr>';
            $(table).find('tbody').append(tr)
        }
    });

    $('.add-column-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            const table = focusDiv.closest('table');
            $(table).find('thead tr').append('<th>[new]</th>');
            $(table).find('tbody tr').append('<td>[new]</td>');
        }
    });

    $('.remove-table-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            const table = focusDiv.closest('table');
            $(table).remove();
        }
    });

    $(document).on('focus', '.card-custom div.editable', function() {
        $(this).addClass("outline");
    });

    $(document).on('blur', '.card-custom div.editable', function() {
        $(this).removeClass("outline");
    });

    $(document).on('submit', '.edit-form', function(e) {
        e.preventDefault();
        $(this).find(".card-body-custom div").removeAttr("tabindex");
        $(this).find(".card-body-custom div").removeClass("focused");
        const title = $(this).find('.card-header-custom').text();
        const description = $(this).find('.card-body-custom').html();
        const id = $(this).find('.edit-id').val();
        let formData = new FormData(this);
        formData.append('officeId', $('#office-select').val());
        formData.append('visaType', $('#type-select').val());
        formData.append('title', title);
        formData.append('description', description);
        if(!id && (!$("#office-select").val() || $("#office-select").val() == 0 || !$("#type-select").val() || $("#type-select").val() == 0)) {
            toastr['info']('Please select Center and Passport type', 'Info');
            return;
        }
        $.ajax({
            url: '/admin/updateChecklist',
            type: 'POST',
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if(res.status == 'success') {
                    toastr['success']('Updated successfully', 'Success');
                    $(".card-body-custom div").attr("tabindex", 0);
                    $('.editor-panel').removeClass('show');
                } else {
                    toastr['error']('500 Error!', 'error');
                }
            }
        });
    });

    $('#create-button-part').click(function() {
        const center = $('#office-select').val();
        const passport = $('#type-select').val();
        console.log(center)
        console.log(passport)
        if(!center || !passport || center == 0 || passport == 0) {
            toastr['info']('Please select Center and Passport Type options');
            $('.list-group').html('');
            return;
        }
        let html = '';
        const title = 'TITLE';
        const description = '<div>DESCRIPTION</div>';
        html += '<form class="edit-form mt-35px">';
        html += '<input type="hidden" name="_token" class="token" />';
        html += '<input type="hidden" class="edit-id" name="edit-id" value="">';
        html += '<div class="card-custom">';
        html += '<div class="card-header-custom editable" contenteditable="true">' + title + '</div>';
        html += '<div class="card-body-section">'
        html += '<div class="card-body-custom collapse show editable" contenteditable="true">' + description + '</div>';
        html += '<div class="price-button-section info-button mt-19px"><button>PUBLISH CHECKLIST</button></div>';
        html += '</div>'
        html += '</div>';
        html += '</form>';

        $('.list-group').prepend(html);
        $(".list-group .card-body-custom > div:first-child()").attr("tabindex", 0);
        $('.edit-form input.token').val($('#office-select-form input:first-child()').val());
    });

    $(document).on('click', '.delete-but', function() {
        const id = $(this).attr('officeId');
        console.log(id);
    })

    const officeSelectDom = document.getElementById("office-select-div");
    drawSelectForm(officeSelectDom);
    const typeSelectDom = document.getElementById("type-select-div");
    drawSelectForm(typeSelectDom);
});
