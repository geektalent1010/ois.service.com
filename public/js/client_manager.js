$(document).ready(function () {
    let accessDetailDoms = document.querySelectorAll(".access-detail");
    accessDetailDoms.forEach(function (element) {
        element.addEventListener("click", function (event) {
            element.classList.toggle("active");
        });
    });

    $("#create-user-button").click(function() {
        $(".button-part").addClass('d-none');
        $("#create-user-form").removeClass('d-none');
        $("#create-user-form input").val('');
        // $("#create-user-form .select-items div:first-child()").click();
    });

    $("#create-user-form").submit(function(e) {
        e.preventDefault();
        // const userid = $("#userid").val();
        // let dataNum = 0;
        // if(userid) dataNum = 9;
        // else dataNum = 10;
        // for (let i = 1 ; i <= dataNum ; i ++) {
        //     if (!$("#data" + i).val() || $("#data" + i).val() == 0) {
        //         toastr['error']('Please input or select the ' + $("#data" + i).attr('text') + ' field.', 'Error');
        //         return;
        //     }
        // }
        // if (!validateEmail($('#data5').val())) {
        //     toastr['error']('Invalid Email address');
        //     return;
        // }
        // if(userid) {
        //     $.ajax({
        //         url: '/admin/updateClient',
        //         type: 'POST',
        //         dataType: 'json',
        //         data: $(this).serialize(),
        //         success: function (res) {
        //             console.log(res)
        //             if(res.status == 'success') {
        //                 toastr['success']('Updated successfully', 'Success');
        //             } else if(res.status == 'duplicatedEmail') {
        //                 toastr['info']('Already exist email', 'Info');
        //             } else if(res.status == 'duplicatedUsername') {
        //                 toastr['info']('Already exist username', 'Info');
        //             } else {
        //                 toastr['error']('500 Error!', 'Error');
        //             }
        //         }
        //     });
        // } else {
        //     $.ajax({
        //         url: '/admin/createClient',
        //         type: 'POST',
        //         dataType: 'json',
        //         data: $(this).serialize(),
        //         success: function (res) {
        //             if(res.status == 'success') {
        //                 toastr['success']('Updated successfully', 'Success');
        //             } else if(res.status == 'duplicatedEmail') {
        //                 toastr['info']('Already exist email', 'Info');
        //             } else if(res.status == 'duplicatedUsername') {
        //                 toastr['info']('Already exist username', 'Info');
        //             } else {
        //                 toastr['error']('500 Error!', 'Error');
        //             }
        //         }
        //     });
        // }
    });

    $("#search-manager i").click(function() {
        $("#search-manager").submit();
    })

    $("#search-manager").submit(function(e) {
        e.preventDefault();
        const search = $("#search").val();
        if(!search) return;
        $.ajax({
            url: '/admin/getClientInfo',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
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

    const countrySelDom = document.getElementById('country-select');
    drawSelectForm(countrySelDom);
    const phoneSelDom = document.getElementById('phone-code-select');
    drawSelectForm(phoneSelDom);
});

