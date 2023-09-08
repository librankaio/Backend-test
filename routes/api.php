<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/users/{id}", [UserController::class, "findUserId"]);
Route::get("/employees/{id}", [EmployeeController::class, "getByEmployeeId"]);
Route::get("/createemployee", [EmployeeController::class, "createEmployee"]);
Route::put("/updateemployee", [EmployeeController::class, "updateEmployee"]);
Route::get("/getallemployees", [EmployeeController::class, "getAll"]);
Route::get("/employees/{id}", [EmployeeController::class, "getEmployeeByJobtitle"]);
Route::get("/employees/department/{id}", [EmployeeController::class, "getEmployeeByDepartment"]);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
