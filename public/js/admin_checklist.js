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
                    html += '<form class="edit-form">';
                    html += '<input type="hidden" id="edit-id" name="edit-id" value="' + element.id + '">';
                    html += '<div class="card-custom">';
                    html += '<div class="card-header-custom editable" contenteditable="true">' + title + '</div>';
                    html += '<div class="card-body-section">'
                    html += '<div class="card-body-custom collapse show editable" contenteditable="true">' + descriptionHtml + '</div>';
                    html += '<div class="price-button-section info-button mt-19px"><button>PUBLISH CHECKLIST</button></div>';
                    html += '<div class="price-button-section info-button mt-19px"><button>DELETE CHECKLIST</button></div>';
                    html += '</div>'
                    html += '</div>';
                    html += '</form>';
                }

                $('.list-group').html(html);
                $(".card-body-custom > div").attr("tabindex", 0);
            }
        });
    });


    $(document).on('focus', '.card-body-custom > div', function() {
        $(".editor-panel").addClass("show");
    })

    $(document).on("focus", ".card-body-custom > div", function () {
        $(".card-body-custom > div").removeClass("focused");
        $(this).addClass("focused");
    });

    $(".subtitle-but").click(function () {
        let focusedDiv = $(".card-body-custom > div.focused");
        if (focusedDiv.length) {
            focusedDiv.addClass("custom-sub-title");
            focusedDiv.removeClass("custom-content");
        }
    });

    $(".content-but").click(function () {
        let focusedDiv = $(".card-body-custom > div.focused");
        if (focusedDiv.length) {
            focusedDiv.addClass("custom-content");
            focusedDiv.removeClass("custom-sub-title");
        }
    });

    $(document).on('focus', '.card-custom div.editable', function() {
        $(this).addClass("outline");
    });

    $(document).on('blur', '.card-custom div.editable', function() {
        $(this).removeClass("outline");
    });

    const officeSelectDom = document.getElementById("office-select-div");
    drawSelectForm(officeSelectDom);
    const typeSelectDom = document.getElementById("type-select-div");
    drawSelectForm(typeSelectDom);
});
