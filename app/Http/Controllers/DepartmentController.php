<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        // Kirim data ke blade department
        return view('department', ['departments' => $departments]);
    }
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'NAME' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        $employee = Department::create($validatedData);

        return redirect()->route('department')->with('success','');
    }
}
