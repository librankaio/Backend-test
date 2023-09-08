<?php

namespace App\Repositories\Employee;

use App\Models\Employee;

class EmployeeRepositoryImplement implements EmployeeRepository
{
    private $model;
    
    public function __construct(Employee $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getByEmployeeId($id)
    {
        return $this->model->where("id", $id)->first();
    }
    public function getEmployeeByJobtitle($id)
    {
        return $this->model->where("job_title", $id)->get();
    }
    public function getEmployeeByDepartment($id)
    {
        return $this->model->where("department", $id)->get(['name','salary']);
    }
    public function createEmployee($request = [])
    {
        // return $this->model->create($request);

        $employee = new Employee;
        $employee->name = $request['name'];
        $employee->job_title = $request['job_title'];
        $employee->salary = $request['salary'];
        $employee->department = $request['department'];
        $employee->joined_date = $request['joined_date'];
        $employee->save();

        return $employee;
    }
    public function updateEmployee($id = null, $request = [])
    {

        $employee = Employee::find($id);
        $employee->job_title = $request['job_title'];
        $employee->salary = $request['salary'];
        $employee->department = $request['department'];
        $employee->joined_date = $request['joined_date'];
        $employee->save();
        
        return $employee;
    }
}