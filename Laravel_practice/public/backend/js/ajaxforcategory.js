$(document).ready(function () {
    // Function to handle adding a new category
    $(document).on("click", ".add-category", function () {
        var name = $(".category_name").val();
        var des = $(".category_des").val();
        var status = $(".category_status").val();

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
                // Delay the removal of modal backdrop to ensure modal is fully hidden
                setTimeout(function () {
                    $(".modal-backdrop").remove();
                }, 500); // Adjust the delay as needed
                show(); // Reload the data after adding a new category
            },
        });
    });

    // Function to clear input fields when modal is closed
    $("#add").on("hidden.bs.modal", function () {
        clearModal();
    });

    // Function to clear input fields
    function clearModal() {
        $(".category_name").val("");
        $(".category_des").val("");
        $(".category_status").val("");
    }

    // Function to populate the table with categories
    function show() {
        $.ajax({
            url: "/showcategory",
            type: "GET",
            dataType: "json",
            success: function (res) {
                var sl = 1;
                var allData = "";
                $.each(res.allData, function (key, val) {
                    var status = "";
                    if (val.status == 1) {
                        status =
                            '<button value=" ' +
                            val.id +
                            ' " class="btn-cat-active btn btn-info btn-sm">Active</button>';
                    } else {
                        status =
                            '<button value=" ' +
                            val.id +
                            ' " class="btn-cat-inactive btn btn-warning btn-sm">Inactive</button>';
                    }
                    allData +=
                        "<tr>\
                    <td>" +
                        sl++ +
                        "</td>\
                    <td>" +
                        val.name +
                        "</td>\
                    <td>" +
                        val.des +
                        "</td>\
                    <td>" +
                        status +
                        "</td>\
                    <td>\
                    <button value=" +
                        val.id +
                        " class='btn-cat-edit btn btn-info btn-sm'> Edit</button>\
                    <button value=" +
                        val.id +
                        "  class='btn-cat-delete btn btn-danger btn-sm' > Delete</button>\
                    </td>\
                    </tr>";
                });
                $(".allData").html(allData);
            },
        });
    }

    // Call the show function initially to populate the table
    show();

    $(document).on("click", ".btn-cat-delete", function () {
        $("#delete").modal("show");
        var id = $(this).val();
        $("#m-cat-delete-btn").val(id);
    });

    $(document).on("click", "#m-cat-delete-btn", function () {
        var id = $(this).val();
        $.ajax({
            url: "/deletecategory/" + id,
            type: "get",
            success: function (res) {
                alert(res.msg);
                $("#delete").modal("hide");

                show();
            },
        });
    });

    $(document).on("click", ".btn-cat-active", function () {
        var id = $(this).val();

        $.ajax({
            url: "/activecategory/" + id,
            type: "get",
            success: function (res) {
                alert(res.msg);

                show();
            },
        });
    });
    $(document).on("click", ".btn-cat-inactive", function () {
        var id = $(this).val();

        $.ajax({
            url: "/inactivecategory/" + id,
            type: "get",
            success: function (res) {
                alert(res.msg);
                show();
            },
        });
    });
});
