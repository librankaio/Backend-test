<?php

namespace App\Http\Controllers;

use App\Repositories\Employee\EmployeeRepository;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function getByEmployeeId($id)
    {
        $result = $this->employeeRepository->getByEmployeeId($id);
        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $result,
        ]);
    }
    public function getAll()
    {
        $result = $this->employeeRepository->getAll();
        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $result,
        ]);
    }
    public function getEmployeeByJobtitle($id)
    {
        $result = $this->employeeRepository->getEmployeeByJobtitle($id);
        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $result,
        ]);
    }
    public function getEmployeeByDepartment($id)
    {
        $result = $this->employeeRepository->getEmployeeByDepartment($id);
        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $result,
        ]);
    }
    public function createEmployee(Request $request)
    {
        // dd($request['name']);
        $result = $this->employeeRepository->createEmployee($request);
        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $result,
        ]);
    }
    public function updateEmployee(Request $request, $id)
    {
        // dd($request['name']);
        $result = $this->employeeRepository->updateEmployee($id, $request);
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => "Successfully updated employee",
            'data' => $result,
        ]);
    }
}
