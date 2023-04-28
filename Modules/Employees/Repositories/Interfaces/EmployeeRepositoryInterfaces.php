<?php

namespace Modules\Employees\Repositories\Interfaces;

interface EmployeeRepositoryInterfaces
{
    public function index();
    public function store($request);
}
