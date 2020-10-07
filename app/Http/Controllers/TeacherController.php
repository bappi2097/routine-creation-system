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
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'initial' => ['required', 'string', 'max:255'],
            'off_days' => ['required', 'array'],
        ]);
        $data = [
            'name' => $request->name,
            'initial' => $request->initial,
            'off_days' => $request->off_days,
        ];
        if (Teacher::create($data)) {
            return redirect()->back()->with('success', 'Database Saved');
        } else {
            return redirect()->back()->with('error', 'Something error');
        }
    }
}
