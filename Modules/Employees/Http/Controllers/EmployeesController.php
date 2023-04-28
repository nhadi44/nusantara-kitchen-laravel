<?php

namespace Modules\Employees\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Employees\Repositories\Interfaces\EmployeeRepositoryInterfaces;

class EmployeesController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeRepositoryInterfaces $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function index()
    {
        $breadcrumb = ['Employees'];
        return view('employees::index', compact('breadcrumb'));
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'employee_id' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'address' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'position' => 'required',
            'status' => 'required',
            'image_upload' => 'required',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'message' => $validated->errors()->first(),
            ], 422);
        }

        return response()->json([
            'message' => 'Successfully',
            'request' => $request->all()
        ]);
    }
}
