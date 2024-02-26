$(document).ready(function () {
    $(document).on("click", ".add-category", function () {
        var name = $(".category_name").val();
        var des = $(".category_des").val();
        var status = $(".category_des").val();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            url: "/insertcategory",
            type: "POST",
            data: {
                name: name,
                des: des,
                status: status,
            },
            success: function (res) {
                alert(res.msg);
                $("#add").modal("hide");
                $(".modal-backdrop").remove();
                show();
            },
        });
    });
    show();

    function show() {
        $.ajax({
            url: "/showcategory",
            type: "GET",
            dataType: "json",
            success: function (res) {
                var allData = "";
                $.each(res.allData, function (key, val) {
                    allData +=
                        "<tr>\
                    <td>" +
                        key +
                        "</td>\
                    <td>" +
                        val.name +
                        "</td>\
                    <td>" +
                        val.des +
                        "</td>\
                    <td>" +
                        val.status +
                        "</td>\
                    </tr > ";
                });
                $(".allData").html(allData);
            },
        });
    }
});
