$(document).ready(function () {

    let range;

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
                    customAlert('We are so sorry', 'You do not have access to this page.', 'error');
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
                    html += '<div class="price-button-section info-button mt-19px"><button type="button" class="delete-but" checklistId="' + element.id + '">DELETE CHECKLIST</button></div>';
                    html += '<div class="price-button-section info-button mt-19px"><button type="button" class="upload-but" checklistId="' + element.id + '">UPLOAD CHECKLIST</button></div>';
                    html += '</div>'
                    html += '</div>';
                    html += '</form>';
                }

                $('.editor-panel').removeClass('show');
                $('.list-group').html(html);
                $(".card-body-custom > div").attr("tabindex", 0);
                $(".card-body-custom > div").addClass("primary");
                $(".card-body-custom table tr td>div").attr("tabindex", 0);
                $(".card-body-custom table tr td>div").addClass("primary");
                $('.edit-form input.token').val($('#office-select-form input:first-child()').val());
                $('.price-button-section').removeClass('d-none');
            }
        });
    });


    $(document).on('focus', '.card-body-custom div', function(e) {
        $(".editor-panel").addClass("show");
    });

    $(document).on("focus", ".card-body-custom div", function () {
        setTimeout(() => {
            $(".card-body-custom div").removeClass("focused");
            $(this).addClass("focused");
            $('.subtitle-but').removeClass('focused');
            $('.content-but').removeClass('focused');

            if($(this).hasClass('custom-sub-title')) {
                $('.subtitle-but').addClass('focused');
            }
            if($(this).hasClass('custom-content')) {
                $('.content-but').addClass('focused');
            }
        }, 300);
    });

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

    const formatTextStyle = () => {
        $('.regular-text-but').removeClass('focused');
        $('.bold-text-but').removeClass('focused');
        $('.underline-text-but').removeClass('focused');
        $('.bold-underline-text-but').removeClass('focused');
    }

    $('.regular-text-but').click(function(e) {
        formatTextStyle();
        if(range.commonAncestorContainer.tagName == 'TBODY' || range.commonAncestorContainer.tagName == 'TR') return;
        const selectText = range.toString();
        if(selectText) {
            const span = document.createElement('span');
            span.style.textDecoration = 'none';
            span.style.fontWeight = 'normal';
            span.textContent = selectText;

            range.deleteContents();
            range.insertNode(span);
        }
        format();
    });

    $('.bold-text-but').click(function() {
        const status = $(this).hasClass('focused');
        formatTextStyle();
        if(range.commonAncestorContainer.tagName == 'TBODY' || range.commonAncestorContainer.tagName == 'TR') return;
        const selectText = range.toString();
        if(selectText) {
            const span = document.createElement('span');
            if(status) {
                span.style.textDecoration = 'none';
                span.style.fontWeight = 'normal';
                $(this).removeClass('focused');
            } else {
                span.style.textDecoration = 'none';
                span.style.fontWeight = 'bold';
                $(this).addClass('focused');
            }
            span.textContent = selectText;

            range.deleteContents();
            range.insertNode(span);
        }
        format();
    });

    $('.underline-text-but').click(function() {
        const status = $(this).hasClass('focused');
        formatTextStyle();
        if(range.commonAncestorContainer.tagName == 'TBODY' || range.commonAncestorContainer.tagName == 'TR') return;
        const selectText = range.toString();
        if(selectText) {
            const span = document.createElement('span');
            if(status) {
                span.style.textDecoration = 'none';
                span.style.fontWeight = 'normal';
                $(this).removeClass('focused');
            } else {
                span.style.textDecoration = 'underline';
                span.style.fontWeight = 'normal';
                $(this).addClass('focused');
            }
            span.textContent = selectText;

            range.deleteContents();
            range.insertNode(span);
        }
        format();
    });

    $('.bold-underline-text-but').click(function() {
        const status = $(this).hasClass('focused');
        formatTextStyle();
        if(range.commonAncestorContainer.tagName == 'TBODY' || range.commonAncestorContainer.tagName == 'TR') return;

        const selectText = range.toString();
        if(selectText) {
            const span = document.createElement('span');
            if(status) {
                span.style.textDecoration = 'none';
                span.style.fontWeight = 'normal';
                $(this).removeClass('focused');
            } else {
                span.style.textDecoration = 'underline';
                span.style.fontWeight = 'bold';
                $(this).addClass('focused');
            }
            span.textContent = selectText;

            range.deleteContents();
            range.insertNode(span);
        }
        format();
    });

    const getSelectedRange = function() {
        try {
            if (window.getSelection) {
                range = window.getSelection().getRangeAt(0);
            } else {
                range = document.getSelection().getRangeAt(0);
            }
        } catch (err) {

        }
    };
    timer = null;
    timer = setInterval(getSelectedRange, 150);

    const format = () => {
        const totElements = document.getElementsByClassName('primary');
        for(const ele of totElements) { //each div
            const spanEles = ele.childNodes;
            const newSpans = [];
            for(const span of spanEles) {

                if(span.nodeType == Node.ELEMENT_NODE) {
                    if(span.tagName.toLowerCase() == 'br') {
                        newSpans.push(span);
                        continue;
                    }
                    // if(span.textContent == '') continue;
                    for(const miniSpan of span.childNodes) {
                        if(miniSpan.nodeType == Node.ELEMENT_NODE) {
                            if(miniSpan.tagName.toLowerCase() == 'br') {
                                newSpans.push(miniSpan);
                                continue;
                            }
                            if(miniSpan.textContent == '') continue;
                            newSpans.push(miniSpan);
                        } else {
                            const tempSpan = document.createElement(span.tagName);
                            tempSpan.style.fontWeight = span.style.fontWeight;
                            tempSpan.style.textDecoration = span.style.textDecoration;
                            tempSpan.textContent = miniSpan.textContent;
                            newSpans.push(tempSpan);
                        }
                    }
                } else {
                    const tempSpan = document.createElement('span');
                    tempSpan.style.fontWeight = ele.style.fontWeight;
                    tempSpan.style.textDecoration = ele.style.textDecoration;
                    tempSpan.textContent = span.textContent;
                    newSpans.push(tempSpan);
                }
            }
            ele.innerHTML = '';
            for(const newSpan of newSpans) {
                ele.appendChild(newSpan);
            }
        }
    }
    let copyTarget;
    let pasteTarget;

    document.addEventListener('copy', function(e) {
        copyTarget = range.commonAncestorContainer;
        console.log(copyTarget)
    })

    document.addEventListener('paste', function(e) {
        pasteTarget = document.querySelectorAll('.card-body-custom div.focused')[0];
        if(copyTarget.nodeType == Node.ELEMENT_NODE) {
            e.preventDefault();
            if(copyTarget.classList.contains('card-body-custom')) {
                let html = '';
                for(const ele of copyTarget.childNodes) {
                    html += ele.outerHTML;
                }
                pasteTarget.insertAdjacentHTML('afterend', html)
            } else if(!copyTarget.classList.contains('primary') && !copyTarget.classList.contains('custom-edit-table')) {
                console.log('hihi')
                pasteTarget.insertAdjacentHTML('afterend', copyTarget.innerHTML);
            } else {
                pasteTarget.insertAdjacentHTML('afterend', copyTarget.innerHTML);
            }
        }


    });

    $('.add-table-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            focusDiv = focusDiv[focusDiv.length - 1];
            let newElement = '';
            newElement += `
                <table class="custom-edit-table">
                    <tbody>
                        <tr>
                            <td>
                                <div tabindex="0" class="primary">No</div>
                            </td>
                            <td>
                                <div tabindex="0" class="primary">Requirements</div>
                            </td>
                            <td>
                                <div tabindex="0" class="primary">Description</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div tabindex="0" class="primary">[no]</div>
                            </td>
                            <td>
                                <div tabindex="0" class="primary">[requirements]</div>
                            </td>
                            <td>
                                <div tabindex="0" class="primary">[description]</div>
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
            let len = $(table).find('tbody tr:first-child td').length;
            let tr = '<tr>';
            while(len) {
                tr += '<td><div tabindex="0" class="primary">[New]</div></td>';
                len --;
            }
            tr += '</tr>';
            $(table).find('tbody').append(tr)
        }
    });

    $('.remove-table-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            const table = focusDiv.closest('table');
            $(table).remove();
        }
    });

    $('.remove-row-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            const row = focusDiv.closest('tr');
            $(row).remove();
        }
    })

    $('.remove-column-but').click(function() {
        let focusDiv = $('.card-body-custom div.focused');
        if(focusDiv.length) {
            const td = focusDiv.closest('td')[0];
            const tr = focusDiv.closest('tr')[0];
            const table = focusDiv.closest('table')[0];
            const index = Array.from(tr.children).indexOf(td);
            console.log(index)
            const removeDom = table.querySelectorAll('tr>th:nth-child(' +  (index + 1) + '), tr>td:nth-child(' +  (index + 1) + ')');
            for(const ele of removeDom) {
                ele.remove();
            }
        }
    })

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
        $(this).find(".card-body-custom div").removeClass("primary");
        const title = $(this).find('.card-header-custom').text();
        const description = $(this).find('.card-body-custom').html();
        const id = $(this).find('.edit-id').val();
        let formData = new FormData(this);
        formData.append('officeId', $('#office-select').val());
        formData.append('visaType', $('#type-select').val());
        formData.append('title', title);
        formData.append('description', description);
        if(!id && (!$("#office-select").val() || $("#office-select").val() == 0 || !$("#type-select").val() || $("#type-select").val() == 0)) {
            customAlert('We are so sorry', 'Please select Center and Passport type.', 'error');
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
                    customAlert('Success', 'Updated successfully.', 'success');
                    $(".card-body-custom div").attr("tabindex", 0);
                    $(".card-body-custom div").addClass("primary");
                    $('.editor-panel').removeClass('show');
                } else {
                    customAlert('We are so sorry', '500 Error!', 'error');
                }
            }
        });
    });

    $('#create-button-part').click(function() {
        const center = $('#office-select').val();
        const passport = $('#type-select').val();
        if(!center || !passport || center == 0 || passport == 0) {
            customAlert('We are so sorry', 'Please select Center and Passport Type options', 'error');
            $('.list-group').html('');
            return;
        }
        let html = '';
        const title = 'TITLE';
        const description = '<div class="primary">DESCRIPTION</div>';
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
        $(".list-group .card-body-custom > div:first-child()").addClass("primary");
        $('.edit-form input.token').val($('#office-select-form input:first-child()').val());
    });

    $(document).on('click', '.delete-but', function() {
        const id = $(this).attr('checklistId');
        const formData = new FormData();
        formData.append('id', id);
        formData.append('_token', $('#office-select-form input:first-child').val());
        $.ajax({
            url: '/admin/deleteChecklist',
            type: 'post',
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            success:function(res) {
                if(res.status == 'success') {
                    customAlert('Success', 'Deleted successfully', 'success');
                    setTimeout(() => {
                        location.href=("");
                    }, 1000);
                } else {
                    customAlert('Error', '500 Error!', 'error');
                }
            }
        })
    });

    $(document).on('click', '.upload-but', function() {
        const checklistId = $(this).attr('checklistId');
        $('#checklist-file').attr("checklistId", checklistId);
        $('#checklist-file').click();
    });

    $('#checklist-file').change(function(event) {
        const checklistId = $(this).attr('checklistId');
        const file = event.target.files[0];
        const reader = new FileReader();
        const formData = new FormData();
        formData.append('_token', $('.select-form input:first-child').val());
        formData.append('checklistId', checklistId);
        formData.append('file', file);

        reader.load = (e) => {

        }
        reader.readAsDataURL(file);
        $.ajax({
            url: '/admin/uploadChecklistFile',
            type: 'POST',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success:function(res) {
                if(res.status == 'success') {
                    customAlert('Success', 'Uploaded successfully', 'success');
                } else if(res.status == 'nofile') {
                    customAlert('Error', 'No file!', 'error');
                } else if(res.status == 'nochecklist') {
                    customAlert('Error', 'No checklist', 'error');
                } else {
                    customAlert('Error', '500 Error!', 'error');
                }
            }
        })
    })

    const officeSelectDom = document.getElementById("office-select-div");
    drawSelectForm(officeSelectDom);
    const typeSelectDom = document.getElementById("type-select-div");
    drawSelectForm(typeSelectDom);
});
