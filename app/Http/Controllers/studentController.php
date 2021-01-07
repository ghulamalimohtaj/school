<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class studentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student.index',['students' => $students]);
    }
    public function show($id){
        $student = Student::findOrFail($id);
        return view('student.show',['student' => $student]);
    }
    public function create(){
       return view('student.create'); 
    }
    public function store(){
        $student = new Student();
        $student->st_name=request('name');
        $student->st_lastname=request('lastname');
        $student->save();
        return redirect('/')->with('msg','A new student added');
    }
}
