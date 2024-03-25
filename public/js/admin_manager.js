$(document).ready(function () {
    let accessDetailDoms = document.querySelectorAll(".access-detail");
    accessDetailDoms.forEach(function (element) {
        element.addEventListener("click", function (event) {
            if(!element.classList.contains('disabled')) {
                element.classList.toggle("active");
            } else {
                if(element.classList.contains('only-super')) {
                    customAlert('We are so sorry', 'This role is applied only to Super Admin.', 'error');
                } else {
                    customAlert('We are so sorry', 'This role cannot be changed.', 'error');
                }
            }
        });
    });

    $("#create-user-button").click(function() {
        $(".button-part").addClass('d-none');
        $('#create-button-right').addClass('disabled');

        $('.admin-log-body').addClass('d-none');
        $("#create-user-form").removeClass('d-none');
        $('#update-button-right').removeClass('disabled');
        $('#log-button-right').removeClass('disabled');

        $("#create-user-form input.form-input-custom").val('');
        $("#data6")[0].selectedIndex = 0;
        drawSelectForm($('#center-select')[0]);
        $('#data3')[0].selectedIndex = 0;
        drawSelectForm($('#phone-code-select')[0]);
        $("#data7")[0].selectedIndex = 0;
        drawSelectForm($('#role-select')[0]);
        // $("#create-user-form .select-items div:first-child()").click();
    });

    $('#create-button-right').click(function(e) {
        if($(this).hasClass('disabled')) return;
        $('#create-user-button').click();
    });

    $('#update-button-right').click(function (e) {
        if($(this).hasClass('disabled')) return;
        $('#create-user-form').submit();
    });

    $('#log-button-right').click(function(e) {
        $('#log-button').click();
    })

    $('#delete-button-right').click(function(e) {
        if($(this).hasClass('disabled')) return;
        deleteUser();
    });

    $('#delete-button-right').click(function(e) {
        if($(this).hasClass('disabled')) return;
        logUser();
    });

    $('#delete-but').click(function(e) {
        deleteUser();
    })

    $('#log-button').click(function(e) {

        $('.admin-log-body').removeClass('d-none');
    })

    const deleteUser = () => {
        const userid = $('#userid').val();
        if(userid) {
            if(window.confirm('Delete this admin user?')) {
                const formData = new FormData();
                formData.append('userid', userid);
                formData.append('_token', $('#create-user-form input:first-child').val());
                $.ajax({
                    url: '/admin/deleteAdmin',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        if(res.status) {
                            customAlert('Success', 'Delete successfully.', 'success');
                            setTimeout(() => {
                                location.href = ("");
                            }, 800);
                        } else {
                            customAlert('We are so sorry', 'Error occurred', 'error');
                        }
                    }
                })
            }
        }

    }

    $("#create-user-form").submit(function(e) {
        e.preventDefault();
        const userid = $("#userid").val();
        let dataNum = 0;
        if(userid) dataNum = 8;
        else dataNum = 9;
        for (let i = 1 ; i <= dataNum ; i ++) {
            if(i == 7) continue;
            if (!$("#data" + i).val() || $("#data" + i).val() == 0) {
                customAlert('We are so sorry', 'Please input or select the ' + $("#data" + i).attr('text') + ' field.', 'error');
                return;
            }
        }
        if (!validateEmail($('#data5').val())) {
            customAlert('We are so sorry', 'Invalid Email address', 'error');
            return;
        }
        let formData = new FormData(this);
        formData.append('clientStatus', $('#client-man-button').hasClass('active'));
        formData.append('centerStatus', $('#center-edit-button').hasClass('active'));
        formData.append('priceStatus', $('#price-edit-button').hasClass('active'));
        formData.append('checklistStatus', $('#checklist-edit-button').hasClass('active'));
        const countrySelIndex = $('#data6')[0].selectedIndex + 1;

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
                        customAlert('Success', 'Updated successfully', 'success');
                    } else if(res.status == 'duplicatedEmail') {
                        customAlert('We are so sorry', 'Already exist email', 'error');
                    } else if(res.status == 'duplicatedUsername') {
                        customAlert('We are so sorry', 'Already exist username', 'error');
                    } else {
                        customAlert('We are so sorry', '500 Error!', 'error');
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
                    if(res.status == 'success') {
                        customAlert('Success', 'Updated successfully', 'success');
                        setTimeout(() => {
                            location.href = ("");
                        }, 500);
                    } else if(res.status == 'duplicatedEmail') {
                        customAlert('We are so sorry', 'Already exist email', 'error');
                    } else if(res.status == 'duplicatedUsername') {
                        customAlert('We are so sorry', 'Already exist username', 'error');
                    } else {
                        customAlert('We are so sorry', '500 Error!', 'error');
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
        $('.admin-log-body').addClass('d-none');
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
                        if(countryOptions[i].dataset.data1 == res.country && countryOptions[i].dataset.data2 == res.city) {
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
                            $('#role-select .select-items>div:nth-child(' + i + ')').click();
                            break;
                        }
                    }
                    $("#create-user-form").removeClass('d-none');
                    $('#update-button-right').removeClass('disabled');
                    $('#log-button-right').removeClass('disabled');
                    $('#delete-button-right').removeClass('disabled');

                    $(".button-part").addClass('d-none');
                    $('#create-button-right').addClass('disabled');

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
                    customAlert('We are so sorry', 'No search result', 'error');
                } else {
                    customAlert('We are so sorry', '500 Error!', 'error');
                }
            }
        })
    });

    $("#search").change(function() {
        $(".button-part").removeClass('d-none');
        $('#create-button-right').removeClass('disabled');

        $("#create-user-form").addClass('d-none');
        $('#update-button-right').addClass('disabled');
        $('#log-button-right').addClass('disabled');
        $('#delete-button-right').addClass('disabled');

    });

    $("#search").on("input", function() {
        $(".button-part").removeClass('d-none');
        $('#create-button-right').removeClass('disabled');

        $("#create-user-form").addClass('d-none');
        $('#update-button-right').addClass('disabled');
        $('#log-button-right').addClass('disabled');
        $('#delete-button-right').addClass('disabled');

    });

    const searchManagerDom = document.getElementById('search');
    searchManagerDom.addEventListener('focus', function(e) {
        document.getElementsByClassName('button-part')[0].classList.remove('d-none');
        $('#create-button-right').removeClass('disabled');

        document.getElementById('create-user-form').classList.add('d-none');
        $('#update-button-right').addClass('disabled');
        $('#log-button-right').addClass('disabled');
        $('#delete-button-right').addClass('disabled');

    });

    const setAllRolesDisabled = () => {
        $('.access-detail').removeClass('active');
        $('.access-detail').removeClass('only-super');
        $('.access-detail').addClass('disabled');

    }

    $('#role-select').click(function() {
        const role = $('#data7').val();
        setAllRolesDisabled();
        if(role == 2) {
            $('.access-detail').addClass('active');
        } else if(role == 1) {
            $('#profile-edit-button').addClass('active');

            $('#content-edit-button').addClass('only-super');
            $('#admin-man-button').addClass('only-super');
            $('#mail-man-button').addClass('only-super');

            $('#center-edit-button').removeClass('disabled');
            $('#client-man-button').removeClass('disabled');
            $('#price-edit-button').removeClass('disabled');
            $('#checklist-edit-button').removeClass('disabled');
        }
    });

    let page = 1;
    const loadLogs = () => {
        const formData = new FormData();
        formData.append('page', page);
        formData.append('_token', $('#create-user-form input:first-child').val());
        $.ajax({
            url: '/admin/loadLog',
            type: 'POST',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(res) {
                if(res.length == 0) {
                    return;
                }
                page ++;
                res.map((data) => {
                    const date = new Date(data.created_at);
                    const profileInfo = JSON.parse(data.profileInfo);
                    let html = `
                        <div class="log-detail">
                            <div class="log-user">${profileInfo.first_name} ${profileInfo.last_name}</div>
                            <div class="log-action">${data.action}</div>
                            <div class="log-time">${date.toISOString().replace('T', ' ').replace(/\.\d{3}Z$/, '')}</div>
                        </div>
                    `;
                    $('.admin-log-body').append(html);
                })
            }
        });
    }
    loadLogs();

    const logElement = document.getElementsByClassName('admin-log-body')[0];
    logElement.addEventListener('scroll', () => {

        if(logElement.scrollTop + logElement.clientHeight >= logElement.scrollHeight) {
            loadLogs();
        }
    })

    const phoneSelDom = document.getElementById('phone-code-select');
    drawSelectForm(phoneSelDom);
    const countrySelDom = document.getElementById('center-select');
    drawSelectForm(countrySelDom);
    const roleSelDom = document.getElementById('role-select');
    drawSelectForm(roleSelDom);
});

