$(document).ready(function () {
    let modal = $("#addEmployeeModal");
    $(".select2-employee-religion").select2({
        placeholder: "Select a religion",
        allowClear: true,
        dropdownParent: modal,
    });
});
