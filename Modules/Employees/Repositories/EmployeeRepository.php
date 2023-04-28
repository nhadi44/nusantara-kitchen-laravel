<?php

namespace Modules\Employees\Repositories;

use Modules\Employees\Entities\Employees;
use Modules\Employees\Repositories\Interfaces\EmployeeRepositoryInterfaces;

class EmployeeRepository implements EmployeeRepositoryInterfaces
{
    public function index()
    {
    }

    public function store($request)
    {
        $employee = Employees::create($request);
    }
}
