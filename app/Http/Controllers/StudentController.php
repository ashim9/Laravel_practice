<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Read
    public function index(){
        $data['students'] = Student::all();
        return view('student.index', $data);
    }

    // Create form showing
    public function create(){
        return view('student.create');
    }

    // Create
    public function store(Request $request){
        Student::create($request->all());
        return redirect()->route('students');
    }

    // Update form showing
    public function edit($id){
        $data['student'] = Student::find($id);
        return view('student.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->route('students');
    }

    // Delete
    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students');
    }
}
