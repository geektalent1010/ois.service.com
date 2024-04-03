$(document).ready(function () {

    let searchIndex = 0;
    let searchCount = 0;

    let accessDetailDoms = document.querySelectorAll(".access-detail");
    accessDetailDoms.forEach(function (element) {
        element.addEventListener("click", function (event) {
            element.classList.toggle("active");
        });
    });

    $("#create-user-button").click(function() {
        $(".button-part").addClass('d-none');

        $("#create-user-form").removeClass('d-none');

        $("#create-user-form input.form-input-custom").val('');
        $('#userid').val('');

    });

    $("#create-user-form").submit(function(e) {
        e.preventDefault();
    });

    $('#create-button-right').click(function(e) {
        $('#create-user-button').click();
    });

    $('#update-button-right').click(function(e) {
        $('#publish-but').click();
    });

    const publishUser = () => {
        const formData = new FormData(document.querySelector('.my-profile-part'));
        const userid = $("#userid").val();
        if(userid) {
            $.ajax({
                url: '/admin/updateClient',
                type: 'POST',
                dataType: 'json',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res)
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
                url: '/admin/createClient',
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
        }
    }

    const publishPopUp = () => {
        let doms = document.createElement('div');
        doms.innerHTML += `
            <div class="custom-alert-popup">
                <div class="alert-body error">
                    <div class="alert-text-part">
                        <div class="alert-title-text">Create Or Update User</div>
                        <div class="alert-message-text">ARE YOU SURE YOU WANT TO PROCEED TO CREATE OR UPDATE THIS CLIENT</div>
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
            publishUser();
        });

        gsap.fromTo('.alert-body', {opacity: 0, scale: 0}, { duration: 0.3, opacity: 1, scale: 1, ease: 'power4.out' });
    }

    $('#publish-but').click(function() {
        const userid = $("#userid").val();
        let dataNum = 13;
        for (let i = 1 ; i <= dataNum ; i ++) {
            if(userid && i == 11) continue;
            if (!$("#data" + i).val() || $("#data" + i).val() == 0) {
                customAlert('We are so sorry', 'Please input or select the ' + $("#data" + i).attr('text') + ' field.', 'error');
                return;
            }
        }
        if (!validateEmail($('#data9').val())) {
            customAlert('We are so sorry', 'Invalid Email address', 'error');
            return;
        }
        publishPopUp();

    })

    $("#search-manager i").click(function() {
        $("#search-manager").submit();
    })

    $("#search-manager").submit(function(e) {
        e.preventDefault();
        const search = $("#search").val();
        if(!search) return;
        const formData = new FormData(this);
        formData.append('searchIndex', searchIndex);
        $.ajax({
            url: '/admin/getClientInfo',
            type: 'POST',
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if(res.status == 'success') {
                    $("#userid").val(res.userId);
                    $("#data1").val(res.firstName);
                    $("#data2").val(res.lastName);
                    $("#data3").val(res.street);
                    $("#data4").val(res.houseNr);
                    $("#data5").val(res.city);
                    $("#data8").val(res.phoneNumber.split(' ')[1]);
                    $("#data9").val(res.email);
                    $("#data10").val(res.username);
                    $("#data12").val(res.userId);
                    $("#data13").val(res.registDate);
                    const countryOptions = $("#data6 option");
                    for(let i = 1; i < countryOptions.length ; i ++) {
                        if(countryOptions[i].value == res.country) {
                            $(".country-select .select-items div:nth-child(" + i + ")").click();
                            break;
                        }
                    }
                    const phoneCodeOptions = $("#data7 option");
                    for(let i = 1; i < phoneCodeOptions.length ; i ++) {
                        if(phoneCodeOptions[i].value == res.phoneNumber.split(' ')[0]) {
                            $(".phone-code-select .select-items div:nth-child(" + i + ")").click();
                            break;
                        }
                    }
                    $("#create-user-form").removeClass('d-none');

                    $(".button-part").addClass('d-none');

                    $(".list-detail").addClass('d-none');

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
        if(document.getElementsByClassName('button-part')[0]) {
            document.getElementsByClassName('button-part')[0].classList.remove('d-none');

        }
        document.getElementById('create-user-form').classList.add('d-none');
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

    $('#delete-button-right').click(function(e) {
        deletePopup();
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

    $('#remove-but').click(function() {
        deletePopup();
    });

    $('#export-button-right').click(function() {
        $('#export-but').click();
    });

    $('#export-but').click(function() {
        const userid = $('#userid').val();
        if(!userid) {
            customAlert('We are so sorry', 'User is not selected.', 'error');
            return;
        }
        $.ajax({
            url: '/admin/exportCSV',
            type: 'get',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            contentType: 'application/json',
            data: {'userid': userid},
            success: function(data, status, xhr) {
                let blob = new Blob([data], { type: xhr.getResponseHeader('Content-Type') });

                let link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'client-data.csv';
                link.click();

                window.URL.revokeObjectURL(link.href);
            }
        })
    });

    $('#export-all-button-right').click(function() {
        $('#export-all-but').click();
    });

    $('#export-all-but').click(function() {
        $.ajax({
            url: '/admin/exportCSV',
            type: 'get',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            contentType: 'application/json',
            data: {'userid': '-1'},
            success: function(data, status, xhr) {
                let blob = new Blob([data], { type: xhr.getResponseHeader('Content-Type') });

                let link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'client-data.csv';
                link.click();

                window.URL.revokeObjectURL(link.href);
            }
        })
    })

    const countrySelDom = document.getElementById('country-select');
    drawSelectForm(countrySelDom);
    const phoneSelDom = document.getElementById('phone-code-select');
    drawSelectForm(phoneSelDom);
});

