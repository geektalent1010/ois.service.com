$(document).ready(function() {

    $('#country-select-form').click(function() {
        $(this).submit();
    });

    $('#country-select-form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '/admin/getPrice',
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                let title = 'Center Fees';
                let description = 'Please input here';
                let id = 0;
                if(res) {
                    title = res.title;
                    description = res.description;
                    id = res.id;
                }
                $('.edit-id').val(id);
                $(".card-header-custom").html(title);
                $('.card-body-custom').html(description);
                $('.edit-form').removeClass('d-none');
            }
        });
    });

    $('.card-custom div').on('focus', function() {
        $(this).addClass('outline');
    });
    $('.card-custom div').on('blur', function() {
        $(this).removeClass('outline');
    })

    drawSelectForm();

})
