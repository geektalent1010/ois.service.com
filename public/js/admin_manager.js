$(document).ready(function () {
    let accessDetailDoms = document.querySelectorAll(".access-detail");
    accessDetailDoms.forEach(function (element) {
        element.addEventListener("click", function (event) {
            if(!element.classList.contains('disabled')) {
                element.classList.toggle("active");
            } else {
                if(element.classList.contains('only-super')) {
                    toastr['info']('This role is applied only to Super Admin', 'Info');
                } else {
                    toastr['info']('This role cannot be changed.', 'info');
                }
            }
        });
    });

    $("#create-user-button").click(function() {
        $(".button-part").addClass('d-none');
        $("#create-user-form").removeClass('d-none');
        $("#create-user-form input.form-input-custom").val('');
        $("#data6")[0].selectedIndex = 0;
        drawSelectForm($('#center-select')[0]);
        $('#data3')[0].selectedIndex = 0;
        drawSelectForm($('#phone-code-select')[0]);
        $("#data7")[0].selectedIndex = 0;
        drawSelectForm($('#role-select')[0]);
        // $("#create-user-form .select-items div:first-child()").click();
    });

    $("#create-user-form").submit(function(e) {
        e.preventDefault();
        const userid = $("#userid").val();
        let dataNum = 0;
        if(userid) dataNum = 8;
        else dataNum = 9;
        for (let i = 1 ; i <= dataNum ; i ++) {
            if(i == 7) continue;
            if (!$("#data" + i).val() || $("#data" + i).val() == 0) {
                toastr['error']('Please input or select the ' + $("#data" + i).attr('text') + ' field.', 'Error');
                return;
            }
        }
        if (!validateEmail($('#data5').val())) {
            toastr['error']('Invalid Email address');
            return;
        }
        let formData = new FormData(this);
        formData.append('clientStatus', $('#client-man-button').hasClass('active'));
        formData.append('centerStatus', $('#center-edit-button').hasClass('active'));
        formData.append('priceStatus', $('#price-edit-button').hasClass('active'));
        formData.append('checklistStatus', $('#checklist-edit-button').hasClass('active'));
        const countrySelIndex = $('#data6')[0].selectedIndex + 1;
        console.log($('#data6 option:nth-child(' + countrySelIndex + ')').data('data1'))
        formData.append('country', $('#data6 option:nth-child(' + countrySelIndex + ')').data('data1'));
        formData.append('city', $('#data6 option:nth-child(' + countrySelIndex + ')').data('data2'));
        if(userid) {
            $.ajax({
                url: '/admin/updateAdmin',
                type: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false,
                success: function (res) {
                    if(res.status == 'success') {
                        toastr['success']('Updated successfully', 'Success');
                    } else if(res.status == 'duplicatedEmail') {
                        toastr['info']('Already exist email', 'Info');
                    } else if(res.status == 'duplicatedUsername') {
                        toastr['info']('Already exist username', 'Info');
                    } else {
                        toastr['error']('500 Error!', 'Error');
                    }
                }
            });
        } else {
            $.ajax({
                url: '/admin/createAdmin',
                type: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false,
                success: function (res) {
                    console.log(res)
                    if(res.status == 'success') {
                        toastr['success']('Updated successfully', 'Success');
                        setTimeout(() => {
                            location.href = ("");
                        }, 500);
                    } else if(res.status == 'duplicatedEmail') {
                        toastr['info']('Already exist email', 'Info');
                    } else if(res.status == 'duplicatedUsername') {
                        toastr['info']('Already exist username', 'Info');
                    } else {
                        toastr['error']('500 Error!', 'Error');
                    }
                }
            });
        }
    });

    $("#search-manager i").click(function() {
        $("#search-manager").submit();
    })

    $("#search-manager").submit(function(e) {
        e.preventDefault();
        const search = $("#search").val();
        if(!search) return;
        $.ajax({
            url: '/admin/getManagerInfo',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(res) {
                if(res.status == 'success') {
                    $("#userid").val(res.userId);
                    $("#data1").val(res.firstName);
                    $("#data2").val(res.lastName);
                    $("#data4").val(res.phoneNumber.split(' ')[1]);
                    $("#data5").val(res.email);
                    $("#data8").val(res.username);
                    const countryOptions = $("#data6 option");
                    let flag = false;
                    for(let i = 1; i < countryOptions.length ; i ++) {
                        if(countryOptions[i].dataset.data1 == res.country) {
                            flag = true;
                            $("#center-select .select-items div:nth-child(" + i + ")").click();
                            break;
                        }
                    }
                    if(!flag) {
                        document.getElementById('data6').selectedIndex = 0;
                        drawSelectForm($('#center-select')[0]);
                    }
                    const phoneCodeOptions = $("#data3 option");
                    for(let i = 1; i < phoneCodeOptions.length ; i ++) {
                        if(phoneCodeOptions[i].value == res.phoneNumber.split(' ')[0]) {
                            $(".phone-code-select .select-items div:nth-child(" + i + ")").click();
                            break;
                        }
                    }
                    const roleOptions = $('#data7 option');
                    for(let i = 1 ; i < roleOptions.length ; i ++) {
                        if(roleOptions[i].value == res.role) {
                            $('#role-select .select-items div:nth-child(' + i + ')').click();
                            break;
                        }
                    }
                    $("#create-user-form").removeClass('d-none');
                    $(".button-part").addClass('d-none');
                    $(".list-detail").addClass('d-none');
                    $('.access-detail:not(.disabled)').removeClass('active');
                    if(res.roles.clientManager) {
                        $('#client-man-button').addClass('active');
                    }
                    if(res.roles.priceEditor) {
                        $('#price-edit-button').addClass('active');
                    }
                    if(res.roles.centerEditor) {
                        $('#center-edit-button').addClass('active');
                    }
                    if(res.roles.checklistEditor) {
                        $('#checklist-edit-button').addClass('active');
                    }
                } else if(res.status == 'nodata') {
                    toastr['info']('No search result', 'Info');
                } else {
                    toastr['error']('500 Error!', 'Error');
                }
            }
        })
    });

    $("#search").change(function() {
        $(".button-part").removeClass('d-none');
        $("#create-user-form").addClass('d-none');
    });

    $("#search").on("input", function() {
        $(".button-part").removeClass('d-none');
        $("#create-user-form").addClass('d-none');
    });

    const searchManagerDom = document.getElementById('search');
    searchManagerDom.addEventListener('focus', function(e) {
        document.getElementsByClassName('button-part')[0].classList.remove('d-none');
        document.getElementById('create-user-form').classList.add('d-none');
    });

    const phoneSelDom = document.getElementById('phone-code-select');
    drawSelectForm(phoneSelDom);
    const countrySelDom = document.getElementById('center-select');
    drawSelectForm(countrySelDom);
    const roleSelDom = document.getElementById('role-select');
    drawSelectForm(roleSelDom);
});

