$("#addEmployeeForm").on("submit", function (e) {
    e.preventDefault();
    let data = $(this).serialize();

    let form = $("#addEmployeeForm");
    let firstName = form.find("#first_name").val();
    let lastName = form.find("#last_name").val();
    let dob = form.find("#date_of_birth").val();
    let gender = form.find("#gender").val();
    let religion = form.find("#religion").val();
    let employeeId = form.find("#employee_id").val();
    let email = form.find("#email").val();
    let startDate = form.find("#start_date").val();
    let endDate = form.find("#end_date").val();
    let position = form.find("#position").val();
    let status = form.find("#status").val();
    let photo = form.find("#image-upload").val();

    let object = {
        first_name: firstName,
        last_name: lastName,
        date_of_birth: dob,
        gender: gender,
        religion: religion,
        employee_id: employeeId,
        email: email,
        start_date: startDate,
        end_date: endDate,
        position: position,
        status: status,
        photo: photo,
    };

    // check jika ada inputan yang kosong dari object
    if (Object.values(object).includes("")) {
        swal({
            title: "Error",
            text: "Please fill in all fields",
            type: "error",
        });

        // check jika ada inputan yang kosong dari form
        if (firstName == "") {
            $("#first_name").addClass("is-invalid");
        } else {
            $("#first_name").removeClass("is-invalid");
        }

        if (lastName == "") {
            $("#last_name").addClass("is-invalid");
        } else {
            $("#last_name").removeClass("is-invalid");
        }

        if (dob == "") {
            $("#date_of_birth").addClass("is-invalid");
        } else {
            $("#date_of_birth").removeClass("is-invalid");
        }

        if (gender == null) {
            $("#gender").addClass("is-invalid");
        } else {
            $("#gender").removeClass("is-invalid");
        }

        if (religion == null) {
            $("#religion").addClass("is-invalid");
            $(".select2-container").removeClass("mb-4");
            $(".select2-container").css({
                border: "1px solid #dc3545",
            });
        } else {
            $("#religion").removeClass("is-invalid");
            $(".select2-container").addClass("mb-4");
            $(".select2-container").css({
                border: "none",
            });
        }

        if (employeeId == "") {
            $("#employee_id").addClass("is-invalid");
        } else {
            $("#employee_id").removeClass("is-invalid");
        }

        if (email == "") {
            $("#email").addClass("is-invalid");
        } else {
            $("#email").removeClass("is-invalid");
        }

        if (startDate == "") {
            $("#start_date").addClass("is-invalid");
        } else {
            $("#start_date").removeClass("is-invalid");
        }

        if (endDate == "") {
            $("#end_date").addClass("is-invalid");
        } else {
            $("#end_date").removeClass("is-invalid");
        }

        if (position == "") {
            $("#position").addClass("is-invalid");
        } else {
            $("#position").removeClass("is-invalid");
        }

        if (status == null) {
            $("#status").addClass("is-invalid");
        } else {
            $("#status").removeClass("is-invalid");
        }

        if (photo == "") {
            $("#image-upload").addClass("is-invalid");
            $(".custom-file").after(
                '<span class="text-danger mt-2" style="font-size: 13px;"> Please upload a photo</span>'
            );
        } else {
            $("#image-upload").removeClass("is-invalid");
            $(".custom-file").next().remove();
        }
    } else {
        swal({
            title: "Are you sure?",
            text: "Employee data will be added to the database",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#dc3545",
            confirmButtonText: "Yes, add it!",
        }).then((result) => {
            // close modal
            $("#addEmployeeModal").modal("hide");
            // reset form
            $("#addEmployeeForm").trigger("reset");
            // reset select2
            $("#religion").val(null).trigger("change");
            $("#gender").val(null).trigger("change");
            $("#status").val(null).trigger("change");
            // reset preview image
            $(".preview-container").empty();
            $(".custom-file-label").text("Choose file");
            $("#image-upload").val("");
            // reset validation
            $("#addEmployeeForm").find("input").removeClass("is-invalid");

            console.log(result);
        });
    }
});

$(document).ready(function () {
    $("#addEmployeeModal").on("hidden.bs.modal", function () {
        const uploadInput = $("#image-upload");
        const previewContainer = $(".preview-container");
        const imageLabel = $(".custom-file-label");
        $(this).find("form").trigger("reset");
        $(this).find("form").find("input").removeClass("is-invalid");
        // reset select2
        $("#religion").val(null).trigger("change");
        $("#gender").val(null).trigger("change");
        $("#status").val(null).trigger("change");
        previewContainer.empty();
        imageLabel.text("Choose file");
        uploadInput.val("");
    });
});
