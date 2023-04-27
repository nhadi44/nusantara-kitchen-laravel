<div class="row">
    <div class="col-md-6 form-group">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
        <div class="invalid-feedback">
            First Name is required
        </div>
    </div>
    <div class="col-md-6 form-group">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
        <div class="invalid-feedback">
            Last Name is required
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="date_of_birth" class="form-label">Date of Birth</label>
        <input id="date_of_birth" name="date_of_birth" class="form-control flatpickr flatpickr-input active"
            type="text" placeholder="Select Date..">
        <div class="invalid-feedback">
            Date of Birth is required
        </div>
    </div>
    <div class="col-md-4 form-group">
        <label for="gender" class="form-label">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="" disabled selected> Gender</option>
            <option value="0">Female</option>
            <option value="1">Male</option>
        </select>
        <div class="invalid-feedback">
            Gender is required
        </div>
    </div>
    <div class="col-md-4 form-group mb-0">
        <label for="religion" class="form-label">Religion</label>
        <select name="religion" id="religion" class="select2-employee-religion mb-0">
            <option value="" disabled selected> Religion</option>
            <option value="0">Islam</option>
            <option value="1">Kristen</option>
            <option value="2">Hindu</option>
            <option value="3">Budha</option>
            <option value="4">Konghucu</option>
        </select>
        <div class="invalid-feedback">
            Religion is required
        </div>
    </div>
</div>
<div class="form-group">
    <label for="employee_id" class="form-label">Employee Id</label>
    <input type="number" name="employee_id" id="employee_id" class="form-control" placeholder="Employee ID">
    <div class="invalid-feedback">
        Employee ID is required
    </div>
</div>
<div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
    <div class="invalid-feedback">
        Email is required
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        <label for="start_date" class="form-label">Start Date</label>
        <input id="start_date" name="start_date" class="form-control flatpickr flatpickr-input active" type="text"
            placeholder="Select Date..">
        <div class="invalid-feedback">
            Start Date is required
        </div>
    </div>
    <div class="col-md-6 form-group">
        <label for="end_date" class="form-label">End Date</label>
        <input id="end_date" name="end_date" class="form-control flatpickr flatpickr-input active" type="text"
            placeholder="Select Date..">
        <div class="invalid-feedback">
            End Date is required
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        <label for="position" class="form-label">Position</label>
        <input type="text" class="form-control" name="position" id="position" placeholder="Position">
        <div class="invalid-feedback">
            Position is required
        </div>
    </div>
    <div class="col-md-6 form-group">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="" selected disabled>Status Employee</option>
            <option value="1">Kontrak</option>
            <option value="2">Tetap</option>
            <option value="3">Part Time</option>
        </select>
        <div class="invalid-feedback">
            Status is required
        </div>
    </div>
</div>
<div class="form-group">
    {{-- <div class="custom-file-container" data-upload-id="myFirstImage">
        <label>Upload Photo<a href="javascript:void(0)"
                class="btn btn-danger ml-2 px-2 py-1 custom-file-container__image-clear"
                title="Clear Image">x</a></label>
        <label class="custom-file-container__custom-file">
            <input name="photo" id="photo" type="file"
                class="custom-file-container__custom-file__custom-file-input" accept="image/*">
            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
            <span class="custom-file-container__custom-file__custom-file-control"></span>
        </label>
        <div class="custom-file-container__image-preview"></div>
    </div> --}}
    <div class="upload-form mb-2">
        <label for="image-upload" class="upload-label">Photo</label>
        <div class="custom-file mb-3">
            <input id="image-upload" class="custom-file-input" type="file" accept="image/*" name="photo">
            <label class="custom-file-label" for="image-upload">Choose file</label>
        </div>
        <div id="preview-container" class="preview-container"></div>
        <button type="button" class="btn btn-danger mt-2" id="remove_image">Remove Image</button>
    </div>
</div>
