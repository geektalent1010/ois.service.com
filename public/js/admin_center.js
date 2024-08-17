$(document).ready(function () {
    $("#country-select-form").submit(function (e) {
        e.preventDefault();
        if ($("#country-select").val() && $("#country-select").val() > 0) {
            $.ajax({
                url: "/admin/centerInfo",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function (res) {
                    if (res.status == "unauthorize") {
                        customAlert(
                            "We are so sorry",
                            "You do not have access to this page.",
                            "error"
                        );
                        $(".publish-button").addClass("d-none");
                        $(".office-detail").addClass("d-none");
                        return;
                    }
                    let html = "";
                    html +=
                        '<input type="hidden" id="office-id" name="officeId" value="' +
                        res.id +
                        '"/>';
                    html +=
                        '<input type="hidden" name="_token" class="csrftoken" value=""/>';
                    html += '<div class="flag-section">';
                    html += '<img style="width: 100%" src="/images/Flags/' + res.flag + '" />';
                    html += "</div>";
                    html += '<div class="">';
                    if (res.location == 1 || res.location == 2) {
                        html +=
                            '<input type="hidden" name="locationInput" id="locationInput" value="true">';
                    }
                    else {
                             html += '<input type="hidden" name="locationInput" id="locationInput" value="false">'
                        }
                    html +=
                        '<div class="mb-0 editable" id="office-country" contenteditable="true" title="country"><b>' +
                        res.country +
                        "</b></div>";
                    html +=
                        '<div class="editable" id="office-address" contenteditable="true" title="address">';
                    for (const address of res.address.split(" && ")) {
                        html += '<div class="mb-0">' + address + "</div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="mb-0 editable" id="office-city" contenteditable="true" title="city">' +
                        res.city +
                        "</div>";
                    html += '<div class="mt-4 mb-2"><b>Opening Hours</b></div>';

                    if (res.working_days == "N.A" || !res.working_days) {
                        html +=
                            '<div class="mb-0 editable" id="office-workingdays" contenteditable="true" title="working days">N.A</div>';
                    } else {
                        html +=
                            '<div class="mb-0 editable" id="office-workingdays" contenteditable="true" title="working days">' +
                            res.working_days +
                            "</div>";
                    }
                    html +=
                        '<div class="editable" id="office-workingtime" contenteditable="true" title="working time">';
                    if (res.working_time == "N.A" || !res.working_time) {
                        html += '<div class="mb-0">N.A</div>';
                    } else {
                        for (const element of res.working_time.split(" && ")) {
                            html += '<div class="mb-0">' + element + "</div>";
                        }
                    }

                    html += "</div>";
                    html += "<p></p>";
                    html += "</input>";
                    $(".office-detail").html(html);
                    $(".publish-button").removeClass("d-none");
                    $(".office-detail").removeClass("d-none");

                    $(".office-detail .editable").on("focus", function (e) {
                        $(this).addClass("outline");
                    });
                    $(".office-detail .editable").on("blur", function (e) {
                        $(this).removeClass("outline");
                    });
                },
            });
        }
    });

    $(".office-detail-form").submit(function (e) {
        e.preventDefault();
        let location;
        const locationCheckbox = document.getElementById("location");
        const locationInput = document.getElementById("locationInput");
        if (locationCheckbox) {
            location = locationCheckbox.checked;
        } else {
            location = locationInput.value;
        }
        $(".office-detail .csrftoken").val(
            $("#country-select-form input").val()
        );
        const country = $(".office-detail-form #office-country").text();
        const city = $(".office-detail-form #office-city").text();
        const addresses = $(".office-detail-form #office-address div");
        let address = "";
        for (let i = 0; i < addresses.length; i++) {
            if (i != 0) {
                address += " && ";
            }
            address += $(addresses[i]).text();
        }
        const workingDays = $(".office-detail-form #office-workingdays").text();
        const workingTimes = $(".office-detail-form #office-workingtime div");
        let workingTime = "";
        for (let i = 0; i < workingTimes.length; i++) {
            if (i != 0) {
                workingTime += " && ";
            }
            workingTime += $(workingTimes[i]).text();
        }
        const type = $("#type").val();

        let formData = new FormData(this);
        formData.append("country", country);
        formData.append("city", city);
        formData.append("address", address);
        formData.append("workingDay", workingDays);
        formData.append("workingTime", workingTime);
        formData.append("location", location);
        formData.append("type", type);
        $.ajax({
            url: "/admin/updateOffice",
            type: "POST",
            data: formData,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (res) {
                if (res.status == "success") {
                    customAlert("Success", "Updated successfully.", "success");
                } else if (res.status == "unauthorize") {
                    customAlert(
                        "We are so sorry",
                        "You do not have access to this function.",
                        "error"
                    );
                } else {
                    customAlert("We are so sorry", "500 Error!", "error");
                }
            },
        });
    });

    $(".add-new-button").click(function () {
        $.ajax({
            url: "/admin/getCountries",
            type: "get",
            success: function (countriesData) {
                const countries = JSON.parse(countriesData);
                let html = `
                    <input type="hidden" id="office-id" name="officeId" value="0"/>
                    <input type="hidden" name="_token" class="csrftoken" value=""/>
                    <input type ="file" name="file" class="flag-file d-none" />
                    <div class="flag-section" id="flag-section">
                        <img src="/images/ImageIcon.svg" class="image-icon" id="flag-image"/>
                    </div>
                    <div class="">
                        <div class="mb-0 id="africa-submit">
                            <label class="checkbox-container">
                                <input type="checkbox" class="location" id="location" name="location"/>
                                <span class="checkbox-circle"></span>
                                <span class="checkbox-name">Is this country in Africa?</span>
                            </label>
                        </div>
                        <div class="mb-0 editable" id="office-country" contenteditable="true" title="country"><b>Country</b></div>
                        <div class="editable" id="office-address" contenteditable="true" title="address">
                            <div class="mb-0">Street</div>
                            <div class="mb-0">Zip Code</div>
                        </div>
                        <div class="mb-0 editable" id="office-city" contenteditable="true" title="city">City</div>
                        <div class="mt-4 mb-2"><b>Opening Hours</b></div>
                        <div class="mb-0 editable" id="office-workingdays" contenteditable="true" title="working days">N.A</div>
                        <div class="editable" id="office-workingtime" contenteditable="true" title="working time">
                        <div class="mb-0">N.A</div>
                    </div>
                `;
                $(".office-detail").html(html);
                $(".office-detail").removeClass("d-none");
                $(".publish-button").removeClass("d-none");

                $(".office-detail .editable").on("focus", function (e) {
                    $(this).addClass("outline");
                });
                $(".office-detail .editable").on("blur", function (e) {
                    $(this).removeClass("outline");
                });

                $(".flag-section").click(function () {
                    $(".flag-file").click();
                });

                $(".flag-file").change(function (event) {
                    const file = event.target.files[0];
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const imgDom = $("#flag-section img")[0];
                        imgDom.src = e.target.result;
                        imgDom.style.width = "100%";
                        imgDom.style.height = "100%";
                    };
                    reader.readAsDataURL(file);
                });
            },
        });
    });

    $("#country-select-form").click(function () {
        $("#country-select-form").submit();
    });

    const selectDom = document.getElementById("country-select-form");
    drawSelectForm(selectDom);
});
