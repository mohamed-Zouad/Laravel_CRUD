<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{

    public function index(): View
    {
        $student = Student::all();
        return view ('student.index')->with('student', $student);
    }


    public function create(): View
    {
        return view('student.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }

    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('student.show')->with('student', $student);
    }

    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('student.edit')->with('student', $student);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
