$(document).ready(function() {
    function loadData(type, category_id) {
        $.ajax({
            url: "addproductcode.php",
            type: "POST",
            data: {
                type: type,
                id: category_id
            },
            success: function(data) {
                if (type == "categoryData") {
                    $("#product-category").html(data);
                } else {
                    $("#product-name").append(data);
                }
            }
        });
    }

    loadData();

    $("#product-name").on("change", function() {
        var productname = $("#product-name").val();

        if (productname != "") {
            loadData("categoryData", productname);
        } else {
            $("#product-category").html("");
        }
    })
});