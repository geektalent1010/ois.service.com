$(document).ready(function () {
    let searchIndex = 0;
    let searchCount = 0;


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

        $('.admin-log-body').addClass('d-none');
        $("#create-user-form").removeClass('d-none');
        $(".info-details-part").addClass('d-none');

        $("#create-user-form input.form-input-custom").val('');
        $('#userid').val('');
        $("#data6")[0].selectedIndex = 0;
        drawSelectForm($('#center-select')[0]);
        $('#data3')[0].selectedIndex = 0;
        drawSelectForm($('#phone-code-select')[0]);
        $("#data7")[0].selectedIndex = 0;
        drawSelectForm($('#role-select')[0]);
        // $("#create-user-form .select-items div:first-child()").click();
    });

    $('#create-button-right').click(function(e) {
        $('#create-user-button').click();
    });

    $('#update-button-right').click(function (e) {
        $('#create-user-form').submit();
    });

    $('#log-button-right').click(function(e) {
        $('#log-button').click();
    })

    $('#delete-button-right').click(function(e) {
        deletePopup();
    });

    $('#delete-but').click(function(e) {
        deletePopup();
    })

    $('#log-button').click(function(e) {

        $('.admin-log-body').removeClass('d-none');
    });

    const updatePopUp = () => {
        let doms = document.createElement('div');
        doms.innerHTML += `
            <div class="custom-alert-popup">
                <div class="alert-body error">
                    <div class="alert-text-part">
                        <div class="alert-title-text">Delete User</div>
                        <div class="alert-message-text">ARE YOU SURE YOU WANT TO PROCEED TO CREATE OR UPDATE THIS CLIENT</div>
                        <div class="custom-alert-button">
                            <Button class="confirm-yes" id="update-confirm-but">YES</Button>
                            <Button class="confirm-no">NO</Button>
                        </div>
                    </div>
                    <div class="alert-icon-part">
                        <img src="/images/PopupSmile_error.svg" alt="icon"/>
                    </div>
                </div>
            </div>
        `;

        for(const element of doms.getElementsByClassName('alert-body')) {
            element.addEventListener('click', function() {
                gsap.to('.custom-alert-popup', { duration: 0.5, opacity: 0, scale: 1, ease: 'power4.out' });
                gsap.to(this, { duration: 0.5, opacity: 0, scale: 1.2, ease: 'power4.out' });
                setTimeout(() => {
                    this.parentNode.remove();
                }, 500);

            });
        }

        document.body.appendChild(doms);
        $('#update-confirm-but').on('click', function() {
            updateUser();
        });

        gsap.fromTo('.alert-body', {opacity: 0, scale: 0}, { duration: 0.3, opacity: 1, scale: 1, ease: 'power4.out' });
    }

    const updateUser = () => {
        let formData = new FormData($("#create-user-form")[0]);
        const userid = $("#userid").val();
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

        updatePopUp();
    });


    $("#search-manager i").click(function() {
        $("#search-manager").submit();
    });

    $(".info-detail-item").click(function(e) {
        const id = $(this).attr("value");
        const formData = new FormData();
        formData.append('_token', $("#create-user-form input:first-child").val());
        formData.append('id', id);
        getAdminInfo(formData);
    })

    $("#search-manager").submit(function(e) {
        e.preventDefault();
        const search = $("#search").val();
        if(!search) return;
        $('.admin-log-body').addClass('d-none');
        const formData = new FormData(this);
        formData.append('searchIndex', searchIndex);
        getAdminInfo(formData);
    });

    const getAdminInfo = (formData) => {
        $.ajax({
            url: '/admin/getManagerInfo',
            type: 'POST',
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                console.log(res);
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
                    $(".info-details-part").addClass('d-none');

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

                    if(res.num > 1) {
                        $('.arrow-body').removeClass('d-none');
                    } else {
                        $('.arrow-body').addClass('d-none');
                    }
                    searchCount = res.num;

                } else if(res.status == 'nodata') {
                    customAlert('We are so sorry', 'No search result', 'error');
                } else {
                    customAlert('We are so sorry', '500 Error!', 'error');
                }
            }
        })
    }

    $("#search").change(function() {
        $(".button-part").removeClass('d-none');

        $("#create-user-form").addClass('d-none');
        $(".info-details-part").addClass('d-none');

    });

    $("#search").on("input", function() {
        $(".button-part").removeClass('d-none');

        $("#create-user-form").addClass('d-none');
        $(".info-details-part").addClass('d-none');

    });

    const searchManagerDom = document.getElementById('search');
    searchManagerDom.addEventListener('focus', function(e) {
        document.getElementsByClassName('button-part')[0].classList.remove('d-none');

        document.getElementById('create-user-form').classList.add('d-none');
        $(".info-details-part").addClass('d-none');

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
    });

    $('#arrow-back-button').click(function() {
        console.log('b')
        searchIndex --;
        if(searchIndex < 0) {
            searchIndex = searchCount - 1;
        }
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $('#search-manager').submit();
    });

    $('#arrow-next-button').click(function() {
        console.log('a')
        searchIndex ++;
        if(searchIndex >= searchCount) {
            searchIndex = 0;
        }
        console.log('a')
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $('#search-manager').submit();
    });

    $('.custom-input').on('input', function() {
        searchIndex = 0;
        searchCount = 0;
    });

    $('.list-detail').click(function() {
        searchIndex = 0;
        searchCount = 0;
    });

    const deleteUser = () => {

        const userid = $('#userid').val();
        if(userid) {
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

    const deletePopup = () => {
        const userid = $('#userid').val();
        if(!userid) {
            customAlert('We are so sorry', 'User is not selected', 'error');
            return;
        }
        let doms = document.createElement('div');
        doms.innerHTML += `
            <div class="custom-alert-popup">
                <div class="alert-body error">
                    <div class="alert-text-part">
                        <div class="alert-title-text">Delete User</div>
                        <div class="alert-message-text">ARE YOU SURE YOU WANT TO PROCEED TO DELETE THIS CLIENT</div>
                        <div class="custom-alert-button">
                            <Button class="confirm-yes">YES</Button>
                            <Button class="confirm-no">NO</Button>
                        </div>
                    </div>
                    <div class="alert-icon-part">
                        <img src="/images/PopupSmile_error.svg" alt="icon"/>
                    </div>
                </div>
            </div>
        `;

        for(const element of doms.getElementsByClassName('alert-body')) {
            element.addEventListener('click', function() {
                gsap.to('.custom-alert-popup', { duration: 0.5, opacity: 0, scale: 1, ease: 'power4.out' });
                gsap.to(this, { duration: 0.5, opacity: 0, scale: 1.2, ease: 'power4.out' });
                setTimeout(() => {
                    this.parentNode.remove();
                }, 500);

            });
        }

        document.body.appendChild(doms);
        $('.confirm-yes').on('click', function() {
            deleteUser();
        });

        gsap.fromTo('.alert-body', {opacity: 0, scale: 0}, { duration: 0.3, opacity: 1, scale: 1, ease: 'power4.out' });
    }

    const phoneSelDom = document.getElementById('phone-code-select');
    drawSelectForm(phoneSelDom);
    const countrySelDom = document.getElementById('center-select');
    drawSelectForm(countrySelDom);
    const roleSelDom = document.getElementById('role-select');
    drawSelectForm(roleSelDom);
});

