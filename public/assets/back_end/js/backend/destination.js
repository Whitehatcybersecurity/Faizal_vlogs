document.addEventListener("DOMContentLoaded", function () {
    $("#tblDestination").DataTable({ 
        processing: true,
        serverSide: true,
        order: [[0, "ASC"]],
        ajax: "getdestinationdata",
        fnRowCallback: serialNoCount,
        columns: [
            { data: "id", orderable: false },
            {
                data: "destination_image",
                render: function (data, type, row) {
                    return (
                        '<img src="' +
                        row.destination_image +
                        '" class="avatar" width="50" height="50"/>'
                    );
                },
            },
            { data: "destination_name" },
            { data: "destination_vlog" },
            { data: "action", }
            
        ],
    });
});

$(function () {
    $("form[name='destination']").validate({
        rules: {
            txtMainposterName: "required",
        },
        errorPlacement: function (error, element) {
            if (element.is(":radio")) {
                error.appendTo(element.parents(".form-group"));
            } else {
                // This is the default behavior
                // error.insertAfter(element);
                if (element.siblings(".error").html() == undefined) {
                    error.appendTo(element.parent().next(".error"));
                } else {
                    error.appendTo(element.siblings(".error"));
                }
            }
        },
    });
});


//Image Showing
const inputFiles = document.querySelectorAll('input[type="file"]');
const previewImages = document.querySelectorAll('img[id^="previewImage"]');

inputFiles.forEach(function (inputFile, index) {
    inputFile.addEventListener("change", function () {
        const file = this.files[0];
        const reader = new FileReader();

        reader.addEventListener("load", function () {
            previewImages[index].setAttribute("src", this.result);
        });

        if (file) {
            reader.readAsDataURL(file);
        }
    });
});