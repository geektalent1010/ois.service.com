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
        $('#create-button-right').addClass('disabled');

        $("#create-user-form").removeClass('d-none');
        $('#update-button-right').removeClass('disabled');
        $('#export-button-right').removeClass('disabled');
        $('#export-all-button-right').removeClass('disabled');

        $("#create-user-form input:not(:first-child)").val('');
    });

    $("#create-user-form").submit(function(e) {
        e.preventDefault();
    });

    $('#create-button-right').click(function(e) {
        if($(this).hasClass('disabled')) return;
        $('#create-user-button').click();
    });

    $('#update-button-right').click(function(e) {
        if($(this).hasClass('disabled')) return;
        $('#publish-but').click();
    })

    $('#publish-but').click(function() {
        const formData = new FormData(document.querySelector('.my-profile-part'));
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
                    $('#update-button-right').removeClass('disabled');
                    $('#delete-button-right').removeClass('disabled');
                    $('#export-button-right').removeClass('disabled');
                    $('#export-all-button-right').removeClass('disabled');

                    $(".button-part").addClass('d-none');
                    $('#create-button-right').addClass('disabled');

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
        $('#create-button-right').removeClass('disabled');

        $("#create-user-form").addClass('d-none');
        $('#update-button-right').addClass('disabled');
        $('#delete-button-right').addClass('disabled');
        $('#export-button-right').addClass('disabled');
        $('#export-all-button-right').addClass('disabled');
    });

    $("#search").on("input", function() {
        $(".button-part").removeClass('d-none');
        $('#create-button-right').removeClass('disabled');

        $("#create-user-form").addClass('d-none');
        $('#update-button-right').addClass('disabled');
        $('#delete-button-right').addClass('disabled');
        $('#export-button-right').addClass('disabled');
        $('#export-all-button-right').addClass('disabled');
    });

    const searchManagerDom = document.getElementById('search');
    searchManagerDom.addEventListener('focus', function(e) {
        if(document.getElementsByClassName('button-part')[0]) {
            document.getElementsByClassName('button-part')[0].classList.remove('d-none');
            $('#create-button-right').removeClass('disabled');

        }
        document.getElementById('create-user-form').classList.add('d-none');
        $('#update-button-right').addClass('disabled');
        $('#delete-button-right').addClass('disabled');
        $('#export-button-right').addClass('disabled');
        $('#export-all-button-right').addClass('disabled');
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

    const countrySelDom = document.getElementById('country-select');
    drawSelectForm(countrySelDom);
    const phoneSelDom = document.getElementById('phone-code-select');
    drawSelectForm(phoneSelDom);
});

