<?php

namespace App\Repositories\Employee;

Interface EmployeeRepository
{
    // @param $id
    // @return mixed
    public function getAll();
    public function getByEmployeeId($id);
    public function getEmployeeByJobtitle($id);
    public function getEmployeeByDepartment($id);
    public function createEmployee($request = []);
    public function updateEmployee($request = [], $id);

}