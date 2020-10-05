<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('_teacher');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if(Teacher::create($input))
        {
            return redirect()->back()->with('success', 'Database Saved');
        }else{
            return redirect()->back()->with('error', 'Something error');
        }
    }

}