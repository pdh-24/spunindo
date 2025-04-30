<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* == Employee == */
Route::get('/employee', [EmployeeController::class, 'index']);
Route::post('/employee/simpan', [EmployeeController::class, 'store']);
Route::delete('/employee/hapus', [EmployeeController::class,'delete']);

/* == Department == */
Route::get('/department', [DepartmentController::class, 'index']);
Route::post('/department/simpan', [DepartmentController::class, 'store']);