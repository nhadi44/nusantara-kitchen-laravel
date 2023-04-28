<?php

namespace Modules\Employees\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Employees\Repositories\Interfaces\EmployeeRepositoryInterfaces;
use Intervention\Image\ImageManagerStatic as Image;

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
            'email' => 'required|email|unique:employees',
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

        $fileName = $request->file('image_upload')->getClientOriginalName();

        try {
            //code...

            // compress image
            $image = Image::make($request->file('image_upload')->getRealPath());
            $image->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save(storage_path('app/public/employees/' . $fileName));


            $employee = $this->employeeRepository->store([
                'first_name' => request('first_name'),
                'last_name' => request('last_name'),
                'employee_id' => request('employee_id'),
                'email' => request('email'),
                'phone' => request('phone_number'),
                'address' => request('address'),
                'gender' => request('gender'),
                'date_of_birth' => request('date_of_birth'),
                'religion' => request('religion'),
                'start_date' => request('start_date'),
                'end_date' => request('end_date'),
                'position' => request('position'),
                'status' => request('status'),
                'photo' => $fileName,
                'position' => request('position'),
            ]);

            return response()->json([
                'message' => 'Successfully',
            ], 201);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
