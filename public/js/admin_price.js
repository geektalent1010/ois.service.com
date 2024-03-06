$(document).ready(function () {
    $("#country-select-form").click(function () {
        $(this).submit();
    });

    $("#country-select-form").submit(function (e) {
        e.preventDefault();
        $('.right-button').addClass('disabled');
        $.ajax({
            url: "/admin/getPrice",
            type: "post",
            data: $(this).serialize(),
            dataType: "json",
            success: function (res) {
                if(res.status == 'unauthorize') {
                    customAlert('We are so sorry', 'You do not have the access to this page.', 'error');
                    $(".edit-form").addClass("d-none");
                    return;
                }
                let title = "Center Fees";
                let description = "Please input here";
                let id = 0;
                if (res.status != 'nodata') {
                    title = res.title;
                    description = res.description;
                    id = res.id;
                }
                let descriptionHtml = "";
                for (const element of description.split("<br/>")) {
                    if (!element) continue;
                    if (element.includes("<div")) {
                        descriptionHtml += element;
                    } else {
                        descriptionHtml += "<div>" + element + "</div>";
                    }
                }
                $("#edit-id").val(id);
                $(".card-header-custom").html(title);
                $(".card-body-custom").html(descriptionHtml);
                $(".edit-form").removeClass("d-none");
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

    $(".edit-form").submit(function (e) {
        e.preventDefault();
        $(".card-body-custom > div").removeAttr("tabindex");
        $(".card-body-custom > div").removeClass("focused");
        let formData = new FormData(this);
        formData.append("title", $(".edit-form .card-header-custom").text());
        formData.append(
            "description",
            $(".edit-form .card-body-custom").html()
        );
        formData.append("officeId", $("#country-select").val());
        $.ajax({
            url: "/admin/updatePrice",
            type: "POST",
            dataType: "json",
            data: formData,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                $(".card-body-custom > div").attr("tabindex", 0);
                if ((res.status == "success")) {
                    $('.right-button').addClass('disabled');
                    customAlert('Success', 'Published successfully', 'success');
                } else {
                    customAlert('We are so sorry', '500 Error', 'error');
                }
            },
        });
    });

    $(".editable").on("focus", function () {
        $('.right-button').removeClass('disabled');
    });

    $(document).on("focus", ".card-body-custom > div", function () {
        $(".card-body-custom > div").removeClass("focused");
        $(this).addClass("focused");
    });

    $("#subtitle-button-right").click(function () {
        let focusedDiv = $(".card-body-custom > div.focused");
        console.log('aaa');
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

    const selectDom = document.getElementById('country-select-form');
    drawSelectForm(selectDom);
});
