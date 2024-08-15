$(document).ready(function () {
    $("#country-select-form").click(function () {
        $(this).submit();
    });

    $(document).on("submit", "#country-select-form", function (e) {
        e.preventDefault();
        
        $(".right-button").addClass("disabled");
        const token = $("#country-select-form>input:first-of-type").val();
        const type = $("#type").val()
        $.ajax({
            url: "/admin/getPrice",
            type: "post",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: $(this).serialize(),
            dataType: "json",
            success: function (res) {
                if (res.status == "unauthorize") {
                    customAlert(
                        "We are so sorry",
                        "You do not have the access to this page.",
                        "error"
                    );
                    $(".edit-form").addClass("d-none");
                    return;
                }
                let title = "Center Fees";
                let description = "Please input here";
                let id = 0;
                let html = `
                    <form class="edit-form">
                        <input type="hidden" id="edit-id" name="edit-id" value="0">
                        <input type="hidden" name="type" value="${type}" />
                                <input type="hidden" class="form-token" name="_token" value="${token}" />
                        <div class="card-custom mt-30px">
                            <div class="card-header-custom editable" contenteditable="true">Center Fees</div>
                            <div class="card-body-custom collapse show editable" contenteditable="true"><div>Please input here</div></div>
                        </div>
                        <div class="price-button-section info-button mt-35px mb-35px">
                            <button>NEW PUBLISH</button>
                        </div>
                    </form>
                `;
                if (res && res.length) {
                    for (let index = 1; index <= res.length; index++) {
                        const result = res[index - 1]
                        let descriptionHtml = "";
                        for (const element of result.description.split("<br/>")) {
                            if (!element) continue;
                            if (element.includes("<div")) {
                                descriptionHtml += element;
                            } else {
                                descriptionHtml += "<div>" + element + "</div>";
                            }
                        }
                        html += `
                            <form class="edit-form">
                                <input type="hidden" id="edit-id" name="edit-id" value="${result.id}">
                                <input type="hidden" name="type" value="${type}" />
                                <input type="hidden" class="form-token" name="_token" value="${token}" />
                                <div class="card-custom mt-30px">
                                    <div class="card-header-custom editable" contenteditable="true">${result.title}</div>
                                    <div class="card-body-custom collapse show editable" contenteditable="true">${descriptionHtml}</div>
                                </div>
                                <div class="price-button-section info-button mt-35px mb-35px">
                                    <button>PUBLISH</button>
                                </div>
                            </form>
                        `;
                    }
                }
                $(".price-list").html(html);
                $(".card-body-custom > div").attr("tabindex", 0);
            },
        });
    });

    $(".card-custom div").on("focus", function () {
        $(this).addClass("outline");
    });
    $(".card-custom div").on("blur", function () {
        $(this).removeClass("outline");
    });

    $(document).on("submit", ".edit-form", function (e) {
        e.preventDefault();

        const $form = $(this);
        $form.find('.card-body-custom > div').removeAttr("tabindex").removeClass("focused");

        let formData = new FormData(this);
        formData.append("title", $form.find('.card-header-custom').text());
        formData.append(
            "description",
            $form.find(".card-body-custom").html()
        );
        formData.append("officeId", $("#country-select").val());
        $.ajax({
            url: "/admin/updatePrice",
            type: "POST",
            dataType: "json",
            data: formData,
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                $form.find(".card-body-custom > div").attr("tabindex", 0);
                if (res.status == "success") {
                    $(".right-button").addClass("disabled");
                    customAlert("Success", "Published successfully", "success");
                } else {
                    customAlert("We are so sorry", "500 Error", "error");
                }
            },
        });
    });

    $(".editable").on("focus", function () {
        $(".right-button").removeClass("disabled");
    });

    $(document).on("focus", ".card-body-custom > div", function () {
        $(".card-body-custom > div").removeClass("focused");
        $(this).addClass("focused");
    });

    $("#subtitle-button-right").click(function () {
        let focusedDiv = $(".card-body-custom > div.focused");
        console.log("aaa");
        if (focusedDiv.length) {
            focusedDiv.addClass("custom-sub-title");
            focusedDiv.removeClass("custom-content");
        }
    });

    $("#content-button-right").click(function () {
        let focusedDiv = $(".card-body-custom > div.focused");
        if (focusedDiv.length) {
            focusedDiv.addClass("custom-content");
            focusedDiv.removeClass("custom-sub-title");
        }
    });

    const selectDom = document.getElementById("country-select-form");
    drawSelectForm(selectDom);
});
