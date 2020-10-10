<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('_teacher', [
            'days' => Day::pluck('day')->all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'initial' => ['required', 'string', 'max:255'],
            'off_day' => ['required', 'string', 'max:32']
        ]);
        $data = [
            'name' => $request->name,
            'initial' => $request->initial,
            'off_day' => $request->off_day,
        ];
        if (Teacher::create($data)) {
            return redirect()->back()->with('success', 'Database Saved');
        } else {
            return redirect()->back()->with('error', 'Something error');
        }
    }
}
