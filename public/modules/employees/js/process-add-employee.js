$("#feedbackInvalidPhoto").hide();
$("#addEmployeeForm").submit(function (e) {
    e.preventDefault();
    const data = new FormData(this);

    let firstName = $("#first_name").val();
    let lastName = $("#last_name").val();
    let dateOfBirth = $("#date_of_birth").val();
    let gender = $("#gender").val();
    let religion = $("#religion").val();
    let employeeId = $("#employee_id").val();
    let email = $("#email").val();
    let phoneNumber = $("#phone_number").val();
    let address = $("#address").val();
    let startDate = $("#start_date").val();
    let endDate = $("#end_date").val();
    let position = $("#position").val();
    let status = $("#status").val();
    let imageUpload = $("#image-upload").val();

    $.ajax({
        url: "/employees",
        type: "POST",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            swal({
                type: "success",
                title: "Success",
                text: "Employee has been added",
            }).then(function () {
                // hide modal
                $("#addEmployeeModal").modal("hide");
                // reset form
                $("#addEmployeeForm")[0].reset();
                // reset select2
                $("#gender").val(null).trigger("change");
                $("#religion").val(null).trigger("change");
                $("#status").val(null).trigger("change");
                // reset image preview
                const previewImage = document.querySelector(".preview-image");
                const imageLabel = document.querySelector(".custom-file-label");
                previewContainer.removeChild(previewImage);
                imageLabel.textContent = "Choose file";
                uploadInput.value = "";
            });
        },
        error: function (response) {
            if (response.status === 422) {
                firstName == ""
                    ? $("#first_name").addClass("is-invalid")
                    : $("#first_name").removeClass("is-invalid").removeClass;

                lastName == ""
                    ? $("#last_name").addClass("is-invalid")
                    : $("#last_name").removeClass("is-invalid").removeClass;

                dateOfBirth == ""
                    ? $("#date_of_birth").addClass("is-invalid")
                    : $("#date_of_birth").removeClass("is-invalid").removeClass;

                gender == null
                    ? $("#gender").addClass("is-invalid")
                    : $("#gender").removeClass("is-invalid").removeClass;

                if (religion == null) {
                    $("#religion").addClass("is-invalid");
                    $(".select2-container").removeClass("mb-4").css({
                        border: "1px solid red",
                    });
                } else {
                    $("#religion").removeClass("is-invalid");
                    $(".select2-container").addClass("mb-4").css({
                        border: "none",
                    });
                }

                employeeId == ""
                    ? $("#employee_id").addClass("is-invalid")
                    : $("#employee_id").removeClass("is-invalid");

                email == ""
                    ? $("#email").addClass("is-invalid")
                    : $("#email").removeClass("is-invalid");

                phoneNumber == ""
                    ? $("#phone_number").addClass("is-invalid")
                    : $("#phone_number").removeClass("is-invalid");

                address == ""
                    ? $("#address").addClass("is-invalid")
                    : $("#address").removeClass("is-invalid");

                startDate == ""
                    ? $("#start_date").addClass("is-invalid")
                    : $("#start_date").removeClass("is-invalid");

                endDate == ""
                    ? $("#end_date").addClass("is-invalid")
                    : $("#end_date").removeClass("is-invalid");

                position == ""
                    ? $("#position").addClass("is-invalid")
                    : $("#position").removeClass("is-invalid");

                status == null
                    ? $("#status").addClass("is-invalid")
                    : $("#status").removeClass("is-invalid");

                if (imageUpload == "") {
                    $("#image-upload").addClass("is-invalid");
                    $("#feedbackInvalidPhoto").show();
                } else {
                    $("#image-upload").removeClass("is-invalid");
                    $("#feedbackInvalidPhoto").hide();
                }
                swal({
                    type: "error",
                    title: "Oops...",
                    text: "Field must be filled",
                });
            }

            swal({
                type: "error",
                title: "Oops...",
                text: "Something went wrong!",
            });
        },
    });
});
