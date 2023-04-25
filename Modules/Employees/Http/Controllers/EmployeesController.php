<?php

namespace Modules\Employees\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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
}
