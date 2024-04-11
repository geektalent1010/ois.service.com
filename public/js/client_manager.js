$(document).ready(function () {
    $(".manager-table tbody tr td:not(:first-of-type)").click(function (e) {
        const id = $(this).parent().attr("value");
        location.href = "/admin/clientDetail?id=" + id;
    });

    $("#export-all-but").click(function () {
        $.ajax({
            url: "/admin/exportCSV",
            type: "get",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            contentType: "application/json",
            data: { userid: "-1" },
            success: function (data, status, xhr) {
                let blob = new Blob([data], {
                    type: xhr.getResponseHeader("Content-Type"),
                });

                let link = document.createElement("a");
                link.href = window.URL.createObjectURL(blob);
                link.download = "client-data.csv";
                link.click();

                window.URL.revokeObjectURL(link.href);
            },
        });
    });

    const reloadPageWithFilter = (page, searchKey) => {
        location.href=(`/admin/client?page=${page}&search=${searchKey}`);
    }

    $("#previous-page").click(function() {
        reloadPageWithFilter($("#page").val() - 1, $("#search-key").val());
    })

    $("#next-page").click(function() {
        reloadPageWithFilter( $("#page").val() + 1, $("#search-key").val());
    });

    $("#search-form").submit(function(e) {
        e.preventDefault();
        reloadPageWithFilter(1, $("#search-key").val());
    });

    $("#export-but").click(function(e) {
        const ids = [];
        $(".checked-client:checked").each(function() {
            ids.push($(this).val());
        });
        if(ids.length == 0) {
            customAlert('Error', 'Please select at least one client', 'error');
            return;
        }
        $.ajax({
            url: "/admin/exportCSV",
            type: "get",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            contentType: "application/json",
            data: { userid: ids },
            success: function (data, status, xhr) {
                let blob = new Blob([data], {
                    type: xhr.getResponseHeader("Content-Type"),
                });

                let link = document.createElement("a");
                link.href = window.URL.createObjectURL(blob);
                link.download = "client-data.csv";
                link.click();

                window.URL.revokeObjectURL(link.href);
            },
        });
    })

});
