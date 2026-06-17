<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();

        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nim' => 'required|unique:students',
        'name' => 'required',
        'class' => 'required',
        'major' => 'required',
    ]);

    Student::create([
        'nim' => $request->nim,
        'name' => $request->name,
        'class' => $request->class,
        'major' => $request->major,
    ]);

    return redirect('/admin/students')
        ->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}