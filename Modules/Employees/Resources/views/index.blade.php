@extends('layouts.master')
@section('title', 'Data Employees')
@section('content')
    <div class="col-xl-12 col-lg-12 col-sm-12 col-12 layout">
        <div class="widget-content widget-content-area br-6 mb-3">
            <h4 class="text-capitalize">Employee Data Table</h4>
        </div>
        <div class="widget-content widget-content-area br-6">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addEmployeeModal">
                <i class="fas fa-plus"></i>
                Add Employee
            </button>
            <div class="table-responsive mb-4 mt-4">
                <table class="table table-hover" id="employeeTable" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Employee ID</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Religion</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>status</th>
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hadi Nurhidayat</td>
                            <td>123</td>
                            <td>hadi@mail.com</td>
                            <td>12313123</td>
                            <td>Sumedang</td>
                            <td>L</td>
                            <td>24 Oktober 1996</td>
                            <td>Islam</td>
                            <td>2 Januari 2022</td>
                            <td>2 Januari 2023</td>
                            <td>Active</td>
                            <td>Staff</td>
                            <td>
                                <button class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dally</td>
                            <td>123</td>
                            <td>dally@mail.com</td>
                            <td>12313123</td>
                            <td>Sumedang</td>
                            <td>L</td>
                            <td>24 Oktober 1996</td>
                            <td>Islam</td>
                            <td>2 Januari 2022</td>
                            <td>2 Januari 2023</td>
                            <td>Active</td>
                            <td>Staff</td>
                            <td>
                                <button class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-modal-component :modalId="'addEmployeeModal'" :modalTitle="'Form Employee'" :modalSize="'modal-lg'" :modalBg="'bg-primary'" :formId="'addEmployeeForm'">
        <x-slot:modalBody>
            <x-form-employee-component />
        </x-slot:modalBody>
        <x-slot:modalFooter>
            <button type="button" class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </x-slot:modalFooter>
    </x-modal-component>
    <script src="/modules/employees/js/datatable.js"></script>
    <script src="/modules/employees/js/custom-select2.js"></script>
    <script src="/modules/employees/js/custom-flatpickr.js"></script>
    <script src="/modules/employees/js/process-add-employee.js"></script>
    <script src="/modules/employees/js/image-preview.js"></script>
@endsection
