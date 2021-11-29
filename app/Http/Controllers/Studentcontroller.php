<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Studentcontroller extends Controller
{
    public function index()
    {
        return view ('index');
    }
    public function aura(Request $request)
    {
        $student= new Student();
        $student->name=$request->name;
        $student->save();
    }
}
