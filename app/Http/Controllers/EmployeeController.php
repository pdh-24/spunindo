<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        // Kirim data ke blade employee
        return view('employee', ['employees' => $employees]);
    }
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'FIRSTNAME' => 'required|string|max:255',
            'LASTNAME' => 'required|string|max:255',
            'GENDER' => 'required|string|in:Male,Female',
            'ADDRESS' => 'required|string|max:500',
            'DOB' => 'required|date',
            'DEPT_ID' => 'required|integer',
            'STATUS' => 'required|string|in:Active,Inactive',
        ]);

        // Simpan data ke database
        $employee = Employee::create($validatedData);

        return redirect()->route('employee')->with('success','');
    }
    public function update(Request $request, Employee $employee)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'FIRSTNAME' => 'required|string|max:255',
            'LASTNAME' => 'required|string|max:255',
        ]);

        // Update data di database
        $employee->update($validatedData);

        return redirect()->route('employee')->with('success','');
    }
    public function delete(Request $request)
    {
        Employee::destroy($request->id);
        return redirect()->route('employee')->with('success','');
    }
}
